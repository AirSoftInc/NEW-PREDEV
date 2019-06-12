<?php
    include('../../config/connection.php');

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $userType = $_POST['userType'];
    $city = $_POST['city'];
    $zipCode = $_POST['zipCode'];
    $municipality = $_POST['municipality'];
        
    $queryCount = "SELECT * FROM users WHERE email = '$email';";
    $countResult = mysqli_query($connection, $queryCount);
    $ids = mysqli_num_rows($countResult);

    if ($ids > 0) {
        die('EXIST');
    }

    $queryUser = "INSERT INTO users (name, last_name, surname, email, user_type, status) VALUES ('$name', '$lastName', '$surname', '$email', '$userType', false);";
    $userResult = mysqli_query($connection, $queryUser);

    if (!$userResult) {
        die('MEMBER-USER' . mysqli_error($connection));
    }

    $userSearch = "SELECT * FROM users WHERE email = '$email';";
    $userSearchResult = mysqli_query($connection, $userSearch);

    while ($row = mysqli_fetch_array($userSearchResult)) {
        $id = $row['id'];
    }

    $queryUserInfo = "INSERT INTO user_aditional_info (user_id, city, zip_code, municipality) VALUES($id, '$city', '$zipCode', '$municipality');";
    $userResultInfo = mysqli_query($connection, $queryUserInfo);

    if (!$userResultInfo) {
        $queryDeleteUser = "DELETE FROM users WHERE  id = $id";
        $deleteResult = mysqli_query($connection, $queryDeleteUser);
        die('MEMBER-USER-INFO' . mysqli_error($connection));
    }

    echo "SUCCESS";
?>
<?php 
    include('../../config/connection.php');

    $type = $_POST['type'];

    if (isset($type)) {
        $query = "SELECT * FROM users WHERE user_type = '$type' && status = 1";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query failed' . mysqli_error($connection));
        }
    
        $json = array();
    
        while($row = mysqli_fetch_array($result)){
            $json[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'email' => $row['email'],
                'user_type' => $row['user_type'],
                'status' => $row['status']
            );
        }
    
        $jsonString = json_encode($json);
        echo $jsonString;
    }
?>
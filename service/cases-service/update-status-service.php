<?php
    include('../../config/connection.php');

    $id = $_POST['id'];
    $status = $_POST['status'];

    if (isset($id)) {

        $query = "UPDATE case_data SET status = '$status' WHERE id = $id;";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query failed' . mysqli_error($connection));
        }

        echo $result;
    }
?>
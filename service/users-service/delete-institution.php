<?php
    include('../../config/connection.php');
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query failed');
    }
    echo "Ok";
?>
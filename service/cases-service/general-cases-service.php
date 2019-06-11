<?php
    include('../../config/connection.php');

    $query = "SELECT DISTINCT title, link, status, date FROM case_data;";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error($connection));
    }

    $json = array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'title' => $row['title'],
            'link' => $row['link'],
            'status' => $row['status'],
            'date' => $row['date']
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
?>
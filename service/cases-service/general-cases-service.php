<?php
    include('../../config/connection.php');

    $query = "SELECT * FROM case_data WHERE isCase = TRUE AND isDeleted = FALSE GROUP BY title;";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query failed' . mysqli_error($connection));
    }

    $json = array();

    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'link' => $row['link'],
            'status' => $row['status'],
            'date' => $row['date'],
            'isAssigned' => $row['isAssigned']
        );
    }

    $jsonString = json_encode($json);
    echo $jsonString;
?>
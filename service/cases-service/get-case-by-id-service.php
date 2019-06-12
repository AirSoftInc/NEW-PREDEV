<?php 
    include('../../config/connection.php');

    $id = $_POST['id'];

    if (isset($id)) {
        $query = "SELECT * FROM case_data WHERE id = $id;";
        $result = mysqli_query($connection, $query);

        if (!$result) {
           die('Query failed' . mysqli_error($connection));
        }

        while($row = mysqli_fetch_array($result)){
            $case = new stdClass();
            $case->id = $row['id'];
            $case->title = $row['title'];
            $case->link = $row['link'];
            $case->status = $row['status'];
            $case->date = $row['date'];
            $case->isAssigned = $row['isAssigned'];
        }

        $jsonString = json_encode($case);
        echo $jsonString;
    }
?>
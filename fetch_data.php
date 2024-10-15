<?php
    require 'db_config.php';

    $sql = "SELECT * FROM employeefile ORDER BY recid DESC";
    $result = $conn->query($sql);

    $data = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($data);

    $conn->close();
?>
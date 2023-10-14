<?php
require('../configs/connect.php');

    $sql = "SELECT * FROM appointments";
    $res = $conn->query($sql);
    $emparray = array();
    while ($row = $res->fetch_assoc()) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
?>
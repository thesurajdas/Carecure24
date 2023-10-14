<?php
    require('connect.php');
    //Get Data from SQL
    $sql="SELECT * FROM appointments";
    $result=$conn->query($sql);
    $rows=$result->fetch_assoc();

    //Book API
    if(isset($_REQUEST['action']) && $_REQUEST['action']=="book"){
        $name = $_REQUEST['full-name'];
        $phone = $_REQUEST['phone'];
        if(isset($_REQUEST['phone_alt'])){
            $phone_alt = $_REQUEST['phone_alt'];
        }
        $age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];
        $pin_code = $_REQUEST['pin_code'];
        $address = $_REQUEST['address'];
        $service_id = $_REQUEST['service_id'];
        $book_datetime = date("Y-m-d H:i:s");
        $appoint_datetime = $_REQUEST['appoint_datetime'];
        if(isset($_REQUEST['description'])){
            $description = $_REQUEST['description'];
        }
        $sql="INSERT INTO appointments (name, phone, phone_alt, age, gender, pin_code, address, service_id, book_datetime, appoint_datetime, description) VALUES ('$name', '$phone', '$phone_alt', '$age', '$gender', '$pin_code', '$address', '$service_id', '$book_datetime', '$appoint_datetime', '$description');";
        if($conn->query($sql)){
            echo '<script>swal("Booked!", "Appoinment Booked Successfully", "success");</script>';
          require('../mail.php');
        }
        else{
            echo '<script>swal("Something Went Wrong!");</script>';
        }
    }

    //Services API
    if(isset($_REQUEST['action']) && $_REQUEST['action']=="service"){
        $sql="SELECT * FROM services";
        $res=$conn->query($sql);
        while($row=$res->fetch_assoc()){
            echo $row['service_name']."<br>";
        }

    }
?>
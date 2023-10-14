<?php
//create connection
require('../configs/connect.php');
 $login=0;
//Check only non-login users and redirect them to login page.
if(isset($_COOKIE['user_id'])){
    //Decode login cookie
    $user_id=$_COOKIE['user_id'];
    $user_id=convert_uudecode($user_id);
    //Get Data from SQL
    $sql="SELECT * FROM users WHERE id='".$user_id."';";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    //Check cookie id with database id with === operator
    if ($user_id===$row['id']) {
        $login=1;
        $id=$row['id'];
        $user_username=$row['username'];
    }
    else{
        header("Location:login.php");
        exit();
    }
}
else{
    header("Location:login.php");
    exit();
}

?>
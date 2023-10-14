<?php
        //Localhost Connection
        //$db_host="localhost";
       // $db_user="root";
       // $db_password="";
       // $db_name="aboutokc_carecure";
        //$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
       // $site_url="http://localhost/carecure";

        //Online Server
        $db_host="localhost";
        $db_user="aboutokc_carecure";
        $db_password="@Pw543210";
        $db_name="aboutokc_carecure";
        $conn=new mysqli($db_host,$db_user,$db_password,$db_name);
        $site_url="https://carecure24.com";

        //Check Database Connection
        if ($conn->connect_error) {
            die ("Failed to connect!");
        }
	echo "<script>console.log('Connected!')</script>";
?>
<?php
    function connection(){
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "user_db";

        $con = new mysqli($host, $username, $password, $database);

        if($con->connect_error){
            echo $con->connect_error;
        }
        else{
            return $conn;
        }
    }
?>
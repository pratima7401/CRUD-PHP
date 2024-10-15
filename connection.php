<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="phpform";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
        // echo "Connection Established.";
    }
    else{
        echo "Connection Failed";
    }
?>
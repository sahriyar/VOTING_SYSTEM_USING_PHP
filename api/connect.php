<?php 

    $connect = mysqli_connect("localhost", "root", "", "voting") or die("connection failed");

    if($connect){
        echo "Successfully Connected!";
    }else{
        echo "Connection Failed!!!";
    }
?>
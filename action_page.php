<?php
    $usname = $_POST["uname"];
    $password = $_POST["psw"];

    $con = new mysqli("localhost",'root',"test","OraGami")
    if($con->connect_error) {
        die("Failed to connect ".$con->connect_error);
    } else {
        $stmt = $con->prepare("")
    }
?>
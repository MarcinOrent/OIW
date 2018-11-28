<?php
    $servername = "localhost";
    $user="root";
    $pass ="";
    $dbname="db";
    $conn = new mysqli($servername,$user,$pass,$dbname);
    if($conn->connect_error){    die('<div class="alert alert-danger">Connection failed: ' . $conn->connect_error."</div>");
    }
    $conn->set_charset("utf8");
?>
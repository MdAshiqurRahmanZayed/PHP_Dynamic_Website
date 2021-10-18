<?php

$server = "localhost";
$user ="root";
$pass ="";
$database = "dynamicwebsite";

$connection = mysqli_connect($server,$user,$pass ,$database);

if (!$connection) {
    echo "<script>alert('Connection Failed')</script>";
    # code...
}



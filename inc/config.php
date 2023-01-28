<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hamon";
$port = 3306;

//create connection 
$conn = new mysqli($servername, $username, $password,$dbname,$port);
mysqli_set_charset($conn,"utf8");

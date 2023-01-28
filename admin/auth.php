<?php

require_once "../inc/config.php";

if (!$_POST) {

    header("location:index.php?$error = 1");
    exit();
}
$p_username = $_POST['username'];
$p_pass = $_POST['pass'];
$query = "SELECT * FROM users WHERE username = '$p_username' and `password` = '$p_pass'" ;
$db_data = mysqli_query($conn,$query);

if (mysqli_num_rows($db_data) == 1) {
    $_SESSION['username'] = $p_username;
    header("location:msg.php");
}else{
    $error = 1;
    header("location:index.php?error=".$error);
    
}






// $db_data->username == $p_username and $db_data->password == $p_pass
<?php

require_once "inc/config.php";

if (!$_POST) {

    $alert = "red";
    header("location:contact_us.php?alert=".$alert);
    exit();
}
$fullname = $_POST["name"];
$phone = $_POST["phone"];
$msg = $_POST["msg"];
$conn->query("INSERT INTO msg (`name`, `phone`, `msg`) VALUES ('$fullname', '$phone', '$msg')");
if (!$conn->affected_rows) {

    $alert = "yello";
    header("location:contact_us.php?alert=".$alert);
    exit();
}
if ($conn->affected_rows) {
    $alert = "green";
    header("location:contact_us.php?alert=".$alert);   
}




// <!-- // prepare and bind
// $stmt = $mysqli -> prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
// $stmt -> bind_param("sss", $firstname, $lastname, $email); -->
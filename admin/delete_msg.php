<?php

require_once "../inc/config.php";

if (!$_GET) {

    header("location:msg.php");
    exit();
}
$id = $_GET["id"];
$conn->query("DELETE FROM msg WHERE id = $id;");

header("location:msg.php");
<?php

require_once "../inc/config.php";

if (!$_GET) {

    header("location:article.php");
    exit();
}
$id = $_GET["id"];
$conn->query("DELETE FROM `article` WHERE id = $id;");

header("location:article.php");
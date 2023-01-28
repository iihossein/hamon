<?php require_once "inc/header.php"; ?>
<?php require_once "../inc/config.php"; ?>
<?php
if (!$_SESSION['username']) {
    header('location:index.php');
}
if ($_GET['id']) {

    $id = $_GET['id'];
}

if ($_POST) {
    if ($_FILES['image']['size'] > 0) {
        $target_dir = "Upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $body = mysqli_real_escape_string($conn, $_POST['editor']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $sql = "UPDATE article SET title= $title ,body = '$body' ,imagepath = '$target_file' WHERE id = $id";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location:article.php');
    } else {
        $body = mysqli_real_escape_string($conn, $_POST['editor']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $sql = "UPDATE article SET title= '$title' ,body = '$body' WHERE id = $id";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location:article.php');
    }
}
?>
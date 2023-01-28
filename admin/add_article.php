<?php require_once "inc/header.php"; ?>
<?php require_once "../inc/config.php"; ?>
<?php
if (!$_SESSION['username']) {
    header('location:index.php');
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<div class="d-flex justify-content-between mt-5">
    <h3>ایجاد مقاله</h3>
</div>

<hr>

<form action="add_article.php" method="post" class="mb-5" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category">عنوان : </label>
        <input type="text" class="form-control" name="title" id="title">
        <small class="form-text text-muted">نام مقاله را وارد کنید.</small>
    </div>
    <div class="form-group">
        <label for="category">متن مقاله : </label>
        <textarea class="form-control" name="editor" id="editor" rows="3"></textarea>
        <small class="form-text text-muted">متن مقاله را وارد کنید.</small>
    </div>

    <div class="form-group">
        <label for="author">تصویر : </label>
        <input type="file" class="form-control" name="image" id="image">
        <small class="form-text text-muted">تصویر مقاله را وارد کنید.</small>
    </div>

    <button type="submit" name="add_post" class="btn btn-outline-primary">ایجاد</button>
</form>

</main>

</div>

<?php
if ($_POST) {
    $target_dir = "Upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $body = mysqli_real_escape_string($conn, $_POST['editor']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $sql = "INSERT INTO `article` (`title`,`body`,`image_path`) VALUES ('$title','$body','$target_file')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
?>
<?php require_once "inc/footer.php"; ?>
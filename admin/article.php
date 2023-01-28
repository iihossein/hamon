<?php require_once "inc/header.php"; ?>
<?php require_once "../inc/config.php"; ?>
<?php
if (!$_SESSION['username']) {
    header('location:index.php');
}
?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="d-flex justify-content-between mt-5">
        <h3>مقالات</h3>
        <a href="add_article.php" class="btn btn-outline-primary">ایجاد مقاله</a>
    </div>

    <div class="table-responsive">
        <form action="post">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان</th>
                        <th>تاریخ انتشار</th>
                        <th>--</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `article`";
                    $articles = $conn->query($query);
                    foreach ($articles as $article) {
                    ?>
                        <tr>
                            <td><?php echo $article['id']; ?></td>
                            <td><?php echo $article['title']; ?></td>
                            <td><?php
                                $tmp = $article['created_at'];
                                $time = date('Y-M-d', strtotime($tmp));
                                echo $time; ?>
                            </td>
                            <td>

                                <a href="edit_article.php?id=<?php echo $article['id'] ?>" class=" btn btn-outline-info">ویرایش</a>
                                <a href="delete_article.php?id=<?php echo $article['id'] ?>" class=" btn btn-outline-danger">حذف</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </form>
    </div>

</main>

</div>

<?php require_once "inc/footer.php"; ?>
<?php require_once "inc/header.php"; ?>
<?php require_once "../inc/config.php"; ?>
<?php
if (!$_SESSION['username']) {
    header('location:login.php');
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <h3 class="mt-5">کامنت ها</h3>

    <div class="table-responsive">
        <form action="post">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>متن پیام</th>
                        <th>نام فرد</th>
                        <th>شماره تماس</th>
                        <th>--</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $query = "SELECT * FROM `msg`";
                        $msgs = $conn->query($query);
                        foreach ($msgs as $msg) {
                        ?>
                            <tr>
                                <td ><?php echo $msg['id'] ?></td>
                                <td ><?php echo $msg['msg'] ?></td>
                                <td ><?php echo $msg['name'] ?></td>
                                <td ><?php echo $msg['phone'] ?></td>
                                <td>
                                    <a href="delete_msg.php?id=<?php echo $msg['id'] ?>" class="btn btn-outline-danger">حذف</a>
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
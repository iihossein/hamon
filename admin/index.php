<?php require_once "../inc/config.php"; ?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/admin.css" />

    <title>دلتا سنتر</title>
</head>

<body>
    <div class="container">

        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="card bg-dark">
                <h3 class="text-white text-center pt-3">ورود</h2>
                    <div class="card-body" style="width: 400px">
                        <form action="auth.php" method="post">
                            <div class="form-group">
                                <label class="text-white" for="email">نام کاربری</label>
                                <input type="text" class="form-control" name="username" id="email" placeholder="ایمیل خود را وارد کنید.">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="password">رمز عبور</label>
                                <input type="password" class="form-control" name="pass" id="password" placeholder="پسورد خود را وارد کنید.">
                            </div>

                            <button type="submit" name="login" class="btn btn-outline-primary btn-block">ورود</button>
                        </form>
                        <?php
                        if (@$_GET['error']) {
                            include "error.php";
                        }
                        ?>
                    </div>

            </div>
        </div>
    </div>
</body>
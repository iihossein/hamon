<?php
require_once "inc/header.php"; ?>
<?php

if ($_GET) {
  if ($_GET['alert'] == "red") {
?>
    <div class="alert alert-danger" role="alert">
      هیچ اطلاعاتی به این صفحه ارسال نشده است
    </div>
  <?php
  }
  if ($_GET['alert'] == "yello") {
  ?>
    <div class="alert alert-warning" role="alert">
      عملیات با خطا مواجه شد لطفا دوباره تلاش کنید
    </div>
  <?php
  }
  if ($_GET['alert'] == "green") {
  ?>
    <div class="alert alert-success" role="alert">
      پیام شما با موفقیت ثبت شد
    </div>
<?php
  }
}

?>

<!-- Contact Start -->
<section class="contact overflow-hidden">
  <div class="container">
    <form action="add_order.php" method="post">
      <div class="row gy-3">
        <h4 class="fw-bold text-black wow fadeInDown-wow">ارتباط با ما
        </h4>
        <div class="col-md-6 wow bounceInRight-wow">
          <input type="text" class="form-control rounded-4" name="name" id="name" placeholder="نام و نام خانوادگی" />
        </div>

        <div class="col-md-6 wow bounceInLeft-wow">
          <input type="tel" class="form-control rounded-4" name="phone" id="phone" placeholder="موبایل" />
          <span class="form-text">
            برای تماس با شما در صورت نیاز
          </span>
        </div>
        <div class="col-md-12 wow bounceInUp-wow">
          <textarea class="form-control mt-2 rounded-4" name="msg" id="" cols="30" rows="10" placeholder="متن پیام"></textarea>

        </div>
        <div class="col-md-12">
          <button type="submit" name="" id="" class="btn btn-primary rounded-4 px-3 py-3 mt-3 float-end lh-0">
            ارسال
            <i class="bi bi-arrow-left ms-1"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- Contact End -->


<?php require_once "inc/footer.php"; ?>
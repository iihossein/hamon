<?php require_once "inc/config.php"; ?>
<?php
require_once "inc/header.php"; ?>

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog mt-5">
    <div class="container" data-aos="fade-up">

        <div class="row g-5">

            <div class="col-lg-12">

                <article class="blog-details">
                    <?php
                    if (!$_GET) {

                        header("location:blog.php");
                        exit();
                    }
                    $id = $_GET["id"];
                    $query = "SELECT * FROM `article` WHERE id = '$id';";
                    $article = $conn->query($query)->fetch_array();

                    ?>
                    <div class="post-img d-flex justify-content-center">
                        <img src="<?php echo "admin/".$article['image_path']; ?>" alt="" class="img-fluid">
                    </div>

                    <h2 class="title"><?php echo $article['title'] ?></h2>

                    <div class="meta-top">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">
                                        <?php
                                        $tmp = $article['created_at'];
                                        $time = date('Y-M-d', strtotime($tmp));
                                        echo $time; ?></time></a></li>
                        </ul>
                    </div><!-- End meta top -->

                    <div class="content">
                    <?php echo $article['body'] ?>   

                    </div><!-- End post content -->

                </article><!-- End blog post -->


            </div>

        </div>

    </div>
</section><!-- End Blog Section -->


    <?php require_once "inc/footer.php"; ?>
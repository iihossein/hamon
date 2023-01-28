<?php require_once "inc/config.php"; ?>
<?php
require_once "inc/header.php"; ?>

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog mt-5">
    <div class="container" data-aos="fade-up">

        <div class="row g-5">

            <div class="col-lg-12">

                <div class="row gy-4 posts-list">
                    <?php
                    $query = "SELECT * FROM `article`";
                    $articles = $conn->query($query);
                    foreach ($articles as $article) {
                    ?>
                        <div class="col-lg-4">
                            <article class="d-flex flex-column bg-light rounded-5">

                                <div class="post-img">
                                    <img src="<?php echo "admin/" . $article['image_path']; ?>" alt="" class="img-fluid" style="border-radius: 25px 25px 0 0;">
                                </div>

                                <h2 class="title">
                                    <a href="blog-details.html">
                                        <?php echo $article['title'] ?>
                                    </a>
                                </h2>

                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">
                                                    <?php
                                                    $tmp = $article['created_at'];
                                                    $time = date('Y-M-d', strtotime($tmp));
                                                    echo $time; ?>
                                                </time></a></li>
                                    </ul>
                                </div>

                                <div class="content">
                                    <p>
                                        <?php echo str_replace('h1', 'p', substr($article['body'], 0, 200))   ?>
                                    </p>
                                </div>

                                <div class="read-more mt-auto p-0 align-self-end btn btn-outline-primary rounded-4">
                                    <a href="blog-details.php?id=<?php echo $article['id']; ?>" class="">ادامه مطلب</a>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    <?php } ?>

                </div>
            </div>
</section><!-- End Blog Section -->

<?php require_once "inc/footer.php"; ?>
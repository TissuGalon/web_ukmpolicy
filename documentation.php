<?php include 'proses/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--<< Required meta tags >>-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<< Title >>-->
    <title>Documentation - UKM POLICY ~ KBMPNL</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/logo/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< Aos animation css >>-->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!--<< Preloader >>-->
    <div class="preloader__matias">
        <div class="box text-center">
            <div class="matias mb-10">
                <img src="assets/img/logo/policy2.png" class="p-2" alt="img">
            </div>
            <span class="fz-30 mati fw-600 text-uppercase">
                UKM Policy
            </span>
        </div>
    </div>
    <!--<< Preloader >>-->


    <!-- HEADER -->
    <?php include 'header.php'; ?>
    <!-- HEADER -->


    <!--<< blog >>-->
    <section class="blog__bsection pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog__bleft__wrapper">

                        <?php
                        $data = array();
                        $kueri = mysqli_query($conn, "SELECT articles.*, sources.*, users.*, categories.* FROM articles JOIN sources ON articles.thumbnail = sources.id JOIN users ON articles.creator_id = users.id JOIN categories ON articles.category_id = categories.id;");
                        $cek = mysqli_num_rows($kueri);
                        while ($row = mysqli_fetch_array($kueri)) {
                            $data[] = $row;
                        }


                        foreach ($data as $row) {
                            ?>
                            <!-- BLOG ITEM -->
                            <div class="blog__bitem mb__cus50" data-aos="fade-up" data-aos-duration="1000">
                                <a href="blog-details.php?blog=<?php echo $row['slug'] ?>" class="thumb">
                                    <img src="https://ukmpolicy.org/uploads/<?php echo $row['path'] ?>" alt="img">
                                </a>
                                <div class="content">
                                    <span class="bdate d-flex align-items-center gap-1 ptext fz-16">
                                        <span class="text-uppercase text-white">
                                            #
                                            <?php echo $row['name'] ?>
                                        </span>
                                        .
                                        <?php echo $row['created_at'] ?>
                                    </span>
                                    <h3>
                                        <a href="blog-details.html">
                                            <?php echo $row['title'] ?>
                                        </a>
                                    </h3>
                                    <p class="fz-16 ptext">
                                        <?php echo $row['slug'] ?>
                                    </p>
                                    <a href="blog-details.php?blog=<?php echo $row['slug'] ?>"
                                        class="d-flex justify-content-center fw-500 cmn--btn align-items-center gap-2">
                                        <span class="get__text">
                                            Selengkapnya
                                        </span>
                                        <span>
                                            <i class="bi bi-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- BLOG ITEM -->
                        <?php } ?>


                        <!-- PAGINATION -->
                        <div class="pagination__box cmn__bg">
                            <ul class="pagi">
                                <li>
                                    <a href="#0">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        2
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- PAGINATION -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__bright__bar">
                        <!-- SEARCH -->
                        <div class="scope__item mb__cus60">
                            <h4 class="scope__title">
                                Search
                            </h4>
                            <form action="#0" class="d-flex align-content-center justify-content-between">
                                <input type="text" placeholder="Search">
                                <button type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- SEARCH -->

                        <!-- RECENT -->
                        <div class="scope__item mb__cus60">
                            <h4 class="scope__title">
                                Recent Post
                            </h4>
                            <ul class="recent__post">

                                <?php foreach ($data as $row) { ?>
                                    <li>
                                        <a href="blog-details.php?blog=<?php echo $row['slug'] ?>" class="recent__innter">
                                            <img src="https://ukmpolicy.org/uploads/<?php echo $row['path'] ?>" alt="img"
                                                style="width:100px; height: 100px;  object-fit: cover;">
                                            <div class="cont__box">
                                                <span class="retitle">
                                                    <?php echo $row['title'] ?>
                                                </span>
                                                <span class="base fz-16 d-flex align-items-center gap-2">
                                                    <i class="bi bi-clock"></i>
                                                    <?php echo $row['created_at'] ?>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                        <!-- RECENT -->
                        <!-- KATEGORI -->
                        <div class="scope__item mb__cus60 position-relative">
                            <h4 class="scope__title">
                                Categories
                            </h4>
                            <ul class="category">
                                <?php $kategori = mysqli_query($conn, "SELECT * FROM categories");
                                while ($row = mysqli_fetch_array($kategori)) { ?>
                                    <li>
                                        <a href="#0" class="d-flex align-items-center justify-content-between">
                                            <span class="fz-18 ptext">
                                                <?php echo $row['name'] ?>
                                            </span>
                                            <span class="arrow">
                                                <i class="bi bi-chevron-right"></i>
                                            </span>
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                        <!-- KATEGORI -->
                        <!--    <div class="scope__item">
                     <h4 class="scope__title">
                        Tag
                     </h4>
                     <ul class="tags">
                        <li>
                           <a href="#0">
                              Business
                           </a>
                        </li>
                        <li>
                           <a href="#0">
                              Digital
                           </a>
                        </li>
                        <li>
                           <a href="#0">
                              Audio Post
                           </a>
                        </li>
                        <li>
                           <a href="#0">
                              Gallery Post
                           </a>
                        </li>
                        <li>
                           <a href="#0">
                              Marketing
                           </a>
                        </li>
                        <li>
                           <a href="#0">
                              Agency
                           </a>
                        </li>
                        <li>
                           <a href="#0">
                              Graphic
                           </a>
                        </li>
                        <li>
                           <a href="#0">
                              Web Development
                           </a>
                        </li>
                     </ul>
                  </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< blog >>-->



    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
    <!-- FOOTER -->



    <!--<< Scroll To Top >>-->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path fill="#c9f31d" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <i class="bi bi-arrow-90deg-up title topping"></i>
    </div>
    <!--<< Scroll To Top >>-->

    <!--<< Jquery Latest >>-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--<< Aos animation Js >>-->
    <script src="assets/js/aos.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!--<< Swiper Slide Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< Swiper Bundle Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< magnific popup Js >>-->
    <script src="assets/js/odometer.min.js"></script>
    <!--<< Odometer js Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< Wow Animation js >>-->
    <script src="assets/js/main.js"></script>
    <!--<< Main.js >>-->
</body>

</html>
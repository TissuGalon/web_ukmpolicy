<?php include 'proses/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!--<< Required meta tags >>-->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--<< Title >>-->
   <title>Blog - UKM POLICY ~ KBMPNL</title>
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





   <!--<< banner >>-->
   <section class="breadcrumnd__section">
      <!--<< Header v-1 >>-->
      <header class="header-section">
         <div class="container">
            <div class="header-wrapper">
               <div class="main__logo">
                  <a href="index.html" class="logo">
                     <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <ul class="main-menu">
                  <li>
                     <a href="index.html">
                        Home
                     </a>
                  </li>
                  <li>
                     <a href="blog.html" class="base">
                        Blog
                     </a>
                  </li>
                  <li>
                     <a href="documentation.html">
                        Documentation
                     </a>
                  </li>
                  <li>
                     <a href="open-recruitment.html">
                        OPEN RECRUITMENT
                     </a>
                  </li>

               </ul>
               <div class="menu__components d-flex align-items-center">
                  <a href="#" class="d-flex fw-500 cmn--btn align-items-center gap-2">
                     <span class="get__text">
                        Login
                     </span>
                     <span>
                        <i class="bi bi-arrow-right fz-20"></i>
                     </span>
                  </a>
                  <div class="header-bar d-lg-none">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
                  <div class="remove__click">
                     <i class="bi bi-list"></i>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--<< Header v-1 >>-->
      <div class="container pt-120 pb-120">
         <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
               <div class="breadcrumnd__wrap text-center">
                  <h1>
                     ARTICLES
                  </h1>
                  <ul class="breakcrumnd__cont justify-content-center">
                     <li>
                        <a href="index.html">
                           Home
                        </a>
                     </li>
                     <li class="white">
                        /
                     </li>
                     <li class="base">
                        Article
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--<< banner >>-->

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
                        Serach
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

   <!--<< Footer >>-->
   <footer class="footer__section">
      <div class="container">
         <div class="footer__top pt-120 pb-120">
            <!-- <div class="fl" data-aos="fade-up" data-aos-duration="1000">
               Stay Tuned
            </div> -->
            <div class="row g-4">
               <div class="col-lg-6">
                  <div class="get__content">
                     <p>
                        <!--    Hello, I’m David Matias, Website & User Interface
                        Designer based in London. -->
                     </p>
                     <a href="mailto:policy.lhokseumawe@gmail.com">policy.lhokseumawe@gmail.com</a>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="get__rightcontetn">
                     <div class="row g-4">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <a href="#0" class="social__footer">
                              Facebook
                              <i class="bi bi-arrow-right"></i>
                           </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <a href="#0" class="social__footer">
                              Instagram
                              <i class="bi bi-arrow-right"></i>
                           </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <a href="#0" class="social__footer">
                              TikTok
                              <i class="bi bi-arrow-right"></i>
                           </a>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer__bottom cmn__bg">
         <div class="container">
            <div class="copyright">
               <p class="white"> Copyright © 2023 <a href="#" class="base">Polytechnic Linux Community.</a>
                  All rights reserved.
               </p>
               <ul class="terms">
                  <li>
                     <a href="#0">
                        Terms & Condition
                     </a>
                  </li>
                  <li>
                     <a href="#0">
                        Privacy Policy
                     </a>
                  </li>
               </ul>
               <a href="#" class="toparrow">
                  <i class="bi bi-arrow-up-short"></i>
               </a>
            </div>
         </div>
      </div>
   </footer>
   <!--<< Footer >>-->

   <!--<<  sub side bar custom >>-->
   <div class="subside__barmenu sub__contact">
      <div class="remove__click d-flex justify-content-center align-items-center">
         <i class="bi bi-x-lg"></i>
      </div>
      <div class="sub__contact__wrapper d-grid">
         <a href="index-2.html" class="side-logo">
            <img src="assets/img/logo/logo.png" alt="img">
         </a>
         <p>
            Berpartisipasi dan berperan aktif dalam mengembangkan jaringan kerjasama dengan lembaga Politeknik Negeri
            Lhokseumawe ,
            komunitas Linux dan Open Source lainnya lainnya, Perguruan tinggi dan Pemerintah Daerah maupun Pusat.
         </p>
         <div class="sub__contact-left d-grid">
            <div class="sub__contac-item">
               <div class="content">
                  <span class="address d-block">
                     address
                  </span>
                  <span class="textp">
                     Lhokseumawe,
                  </span>
               </div>
            </div>
            <div class="sub__contac-item">
               <div class="content">
                  <span class="address d-block">
                     email
                  </span>
                  <a href="javascript:void(0)" class="textp">
                     policy.lhokseumawe@gmail.com
                  </a>
               </div>
            </div>
            <div class="sub__contac-item">
               <div class="content">
                  <span class="address d-block">
                     call now
                  </span>
                  <a href="jasacript:void(0)" class="textp">
                     +98 4758 2154 021
                  </a>
               </div>
            </div>
         </div>
         <div class="sub__contact-right mb-80 position-relative">
            <ul class="social d-flex gap-3">
               <li>
                  <a href="javascript:void(0)">
                     <i class="bi bi-facebook"></i>
                  </a>
               </li>
               <li>
                  <a href="javascript:void(0)">
                     <i class="bi bi-twitter"></i>
                  </a>
               </li>
               <li>
                  <a href="javascript:void(0)">
                     <i class="bi bi-linkedin"></i>
                  </a>
               </li>
               <li>
                  <a href="javascript:void(0)">
                     <i class="bi bi-youtube"></i>
                  </a>
               </li>
            </ul>
         </div>
         <a href="#0" class="d-flex justify-content-center fw-500 cmn--btn align-items-center gap-2">
            <span>
               <i class="bi bi-chevron-right"></i>
            </span>
            <span class="get__text">
               Login
            </span>
         </a>
      </div>
   </div>
   <!--<<  sub side bar custom >>-->

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
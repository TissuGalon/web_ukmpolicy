<?php include 'proses/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!--<< Required meta tags >>-->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--<< Title >>-->
   <title>UKM POLICY ~ KBMPNL</title>
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
      <?php include 'header.php'; ?>
      <!--<< Header v-1 >>-->

      <?php
      $slug = $_GET['blog'];
      $kueri = mysqli_query($conn, "SELECT  articles.*, categories.* FROM articles JOIN categories ON articles.category_id = categories.id WHERE articles.slug = '$slug'");
      $row = mysqli_fetch_array($kueri);
      ?>

      <div class="container pt-120 pb-120">
         <a href="blog.php" class="fw-500 cmn--btn align-items-center gap-2">
            <span>
               <i class="bi bi-arrow-left fz-20"></i>
            </span>
            <span class="get__text">
               Kembali
            </span>

         </a>
         <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
               <div class="breadcrumnd__wrap text-center">
                  <h1>
                     <?php echo ucwords($row['title']) ?>
                  </h1>
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
            <div class="col-lg-12">
               <div class="blog__bleft__wrapper">
                  <div class="blog__bitem" data-aos="fade-up" data-aos-duration="1000">
                     <a href="#0" class="thumb" style="border-radius: 16px;">
                        <img src="https://ukmpolicy.org/uploads/<?php echo $row['thumbnail'] ?>"
                           style="width:872; height: 450; " alt="img">
                     </a>
                     <!-- ISI -->
                     <div class="content__two">
                        <?php echo $row['content'] ?>

                     </div>
                     <!-- ISI -->
                     <div class="post__in cmn__bg mb__cus60">
                        <div class="post__left">
                           <span class="fz-20 fw-500 white">
                              Posted in :
                           </span>
                           <a href="#0">
                              Business
                           </a>
                           <a href="#0">
                              Digital
                           </a>
                        </div>
                        <div class="post__right">
                           <span class="fz-20 fw-500 white">
                              Share :
                           </span>
                           <ul class="social-cus d-flex align-items-center">
                              <li>
                                 <a href="#0">
                                    <i class="bi bi-facebook"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <i class="bi bi-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <i class="bi bi-instagram"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#0">
                                    <i class="bi bi-linkedin"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="replay__box cmn__bg">
                        <h3>
                           Leave a Reply
                        </h3>
                        <p>
                           Your email address will not be published. Required fields are marked *
                        </p>
                        <form action="#" class="row g-4">
                           <div class="col-lg-6">
                              <input type="text" placeholder="Name">
                           </div>
                           <div class="col-lg-6">
                              <input type="email" placeholder="Eamil">
                           </div>
                           <div class="col-lg-12">
                              <textarea name="comment" rows="5" placeholder="Write Comments"></textarea>
                           </div>
                           <a href="contact.html" class="d-flex fw-500 cmn--btn align-items-center gap-2">
                              <span class="get__text">
                                 Submit Comment
                              </span>
                              <span>
                                 <i class="bi bi-arrow-right fz-20"></i>
                              </span>
                           </a>
                        </form>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!--<< blog >>-->

   <!--<< Footer >>-->
   <footer class="footer__section" id="down">
      <!--  <div class="container">
         <div class="footer__top pt-120 pb-120">
            <div class="fl" data-aos="fade-up" data-aos-duration="1000">
               Get In Touch
            </div>
            <div class="row g-4">
               <div class="col-lg-6">
                  <div class="get__content">
                     <p>
                        Hello, I’m David Matias, Website & User Interface
                        Designer based in London.
                     </p>
                     <a href="#0">davidmatias333@gmail.com</a>
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
                              Dribble
                              <i class="bi bi-arrow-right"></i>
                           </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <a href="#0" class="social__footer">
                              Webflow
                              <i class="bi bi-arrow-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
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
            Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur, aliquam quaerats voluptatem. Ut enim
            ad minima veniam, exercitationem laboriosam, nisi ut aliquid ex ea autem velit esse quam nihil
         </p>
         <div class="sub__contact-left d-grid">
            <div class="sub__contac-item">
               <div class="content">
                  <span class="address d-block">
                     address
                  </span>
                  <span class="textp">
                     Victoria Street London,
                  </span>
               </div>
            </div>
            <div class="sub__contac-item">
               <div class="content">
                  <span class="address d-block">
                     email
                  </span>
                  <a href="javascript:void(0)" class="textp">
                     matias999@.com
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
               Let's Talk
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
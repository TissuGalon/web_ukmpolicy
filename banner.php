<?php if ((isset($_GET['x']) && $x == 'home')) { ?>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="banner__content">
                    <!--  <a href="#0" class="bn__currently">
                     <span class="d-block">
                        Currently available for freelance
                     </span>
                     <span class="d-flex gap-4 align-items-center">
                        worldwide
                        <i class="bi bi-arrow-up-right"></i>
                     </span>
                  </a> -->
                    <h1>
                        <!-- <span class="hone"> UKM</span> -->
                        <span class="d-block designers" data-text="POLYTECHNIC LINUX COMMUNITY">POLYTECHNIC
                            LINUX COMMUNITY</span>
                    </h1>
                    <div class="video__area">
                        <img src="assets/img/banner/bn-arrow.png" class="vid__arrow" alt="img">
                        <a href="#" class="video__80 video-btn">
                            <i class="bi bi-play-fill"></i>
                        </a>
                        <span class="proces">
                            About Us
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="banner__thumb" data-aos="fade-up-right" data-aos-duration="300">
                    <img src="assets/img/banner/banner-man.png" alt="man-img">
                </div>
            </div>
        </div>
    </div>
    <div class="banner__leftinfo">
        <div class="left__infomobile">
            <a href="#0">
                <img src="assets/img/banner/dial.png" alt="img">
            </a>
            <a href="#0">
                <!--  (+02)-574-328-301 -->
            </a>
        </div>
        <div class="right__infoscroll">
            <a href="#down" class="scroll">
                scroll down
            </a>
            <a href="#down" class="scroll__bar">
                <img src="assets/img/banner/scroll-down.png" alt="img">
            </a>
        </div>
    </div>
    <div class="banner__rightinfo">
        <div class="right__infoscroll">
            <a href="#0" class="scroll">
                Follow Us
            </a>
            <a href="#0" class="scroll__bar">
                <img src="assets/img/banner/scroll-down.png" alt="img">
            </a>
        </div>
        <div class="banner__xlsocial">
            <ul class="banner__soci d-grid justify-content-center">
                <!--  <li>
                    <a href="#0">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li> -->
                <li>
                    <a href="https://www.tiktok.com/@ukmpolicypnl" target="_blank">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </li>
                <!--  <li>
                    <a href="#0">
                        <i class="bi bi-twitter"></i>
                    </a>
                </li> -->
                <li>
                    <a href="https://www.instagram.com/ukmpolicy.kbmpnl/" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-globe"></i>
                    </a>
                </li>
                <!--  <li>
                    <a href="#0">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
<?php } elseif (isset($_GET['x']) && $x == 'blog') { ?>

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

<?php } elseif (isset($_GET['x']) && $x == 'documentation') { ?>

    <div class="container pt-120 pb-120">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumnd__wrap text-center">
                    <h1>
                        DOCUMENTATION
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
                            Documentation
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php } elseif (isset($_GET['x']) && $x == 'open-recruitment') { ?>

    <div class="container pt-60 pb-60">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumnd__wrap text-center">
                    <h1>
                        Formulir Pendaftaran
                    </h1>

                </div>
            </div>
        </div>
    </div>

<?php } ?>
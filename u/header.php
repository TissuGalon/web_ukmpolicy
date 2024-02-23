<style>
    /* Dropdown Container */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Avatar */
    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        transition: background-color 0.3s, color 0.3s;
        /* Menambahkan transition effect */
    }

    /* Username */
    .username {
        margin-left: 8px;
        font-size: 16px;
        transition: background-color 0.3s, color 0.3s;
        /* Menambahkan transition effect */
    }

    /* Konten Dropdown */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        opacity: 0;
        /* Mulai dengan opacity 0 (invisible) */
        transition: opacity 0.5s;
        /* Menambahkan transition effect */
    }

    /* Style untuk opsi dalam dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Warna latar saat cursor diarahkan ke opsi dropdown */
    .dropdown-content a:hover {
        background-color: #dc3545;
    }

    /* Tampilkan dropdown saat tombol dihover */
    .dropdown:hover .dropdown-content {
        display: block;
        opacity: 1;
        /* Set opacity ke 1 (visible) */
    }

    /* Warna latar saat cursor diarahkan ke elemen dropdown (username dan avatar) */
    .dropdown:hover .avatar,
    .dropdown:hover .username {
        background-color: #dc3545;
        color: white;
    }
</style>

<?php $halaman = basename($_SERVER['PHP_SELF']); ?>


<!--<< banner >>-->
<section class="banner__section">
    <!--<< Header v-1 >>-->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="main__logo">
                    <a href="../home" class="logo">
                        <img src="../assets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="main-menu">

                    <li>

                        <a href="../home" <?php if ($halaman == 'index.php' || $halaman == 'home.php') {
                            echo 'class="base"';
                        } ?>>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="../blog" <?php if ($halaman == 'blog.php') {
                            echo 'class="base"';
                        } ?>>
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="../documentation" <?php if ($halaman == 'documentation.php') {
                            echo 'class="base"';
                        } ?>>

                            Documentation
                        </a>
                    </li>

                    <?php if ($or_setting_status == '1' || $buka_sesuai_jadwal) { ?>
                        <li>
                            <a href="../open-recruitment" <?php if ($halaman == 'open-recruitment.php') {
                                echo 'class="base"';
                            } ?>>
                                OPEN RECRUITMENT
                            </a>
                        </li>
                    <?php } ?>


                </ul>


                <div class="menu__components d-flex align-items-center">

                    <!-- PROFIL -->
                    <?php if (isset($_SESSION['id_user'])) { ?>
                        <!-- USERNAME & AVATAR -->
                        <div class="dropdown ">
                            <div class="d-flex">
                                <img src="https://ukmpolicy.org/images/<?php echo $_SESSION['picture'] ?>"
                                    onerror="this.onerror=null; this.src='https://ukmpolicy.org/images/default_picture.webp'"
                                    alt="Avatar" class="avatar">


                                <span class="ellipsis m-2 d-none d-md-block">
                                    <?php echo $_SESSION['name'] ?>
                                </span>
                            </div>


                            <div class="dropdown-content" aria-labelledby="navbar-picture">
                                <a class="dropdown-item" href="profile">
                                    <i class="bi bi-person fa-fw"></i> Profile
                                </a>
                                <a class="dropdown-item" href="notifications">
                                    <i class="bi bi-bell fa-fw"></i> Notifications
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person-add fa-fw"></i> Open Recruitmen
                                </a>
                                <a class="dropdown-item" href="settings">
                                    <i class="bi bi-gear fa-fw"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../manager/">
                                    <i class="bi bi-person-badge fa-fw"></i> Manager
                                </a>
                                <a class="dropdown-item" href="../logout">
                                    <i class="bi bi-box-arrow-right fa-fw"></i> Logout
                                </a>
                            </div>
                        </div>
                        <!-- USERNAME & AVATAR -->
                    <?php } else { ?>
                        <!-- LOGIN BTN -->
                        <a href="../login/login.php" class="d-flex fw-500 cmn--btn align-items-center gap-2">
                            <span class="get__text">
                                Login
                            </span>
                            <span>
                                <i class="bi bi-arrow-right fz-20"></i>
                            </span>
                        </a>
                        <!-- LOGIN BTN -->
                    <?php } ?>
                    <!-- PROFIL -->

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

    <?php if ($halaman == 'index.php' || $halaman == 'home.php') { ?>
        <!-- BANNER -->
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
                            <img src="../assets/img/banner/bn-arrow.png" class="vid__arrow" alt="img">
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
                        <img src="../assets/img/banner/banner-man.png" alt="man-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__leftinfo">
            <div class="left__infomobile">
                <a href="#0">
                    <img src="../assets/img/banner/dial.png" alt="img">
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
                    <img src="../assets/img/banner/scroll-down.png" alt="img">
                </a>
            </div>
        </div>
        <div class="banner__rightinfo">
            <div class="right__infoscroll">
                <a href="#0" class="scroll">
                    Follow Us
                </a>
                <a href="#0" class="scroll__bar">
                    <img src="../assets/img/banner/scroll-down.png" alt="img">
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
        <!-- BANNER -->
    <?php } ?>

</section>
<!--<< banner >>-->



<!--<<  sub side bar custom >>-->
<div class="subside__barmenu sub__contact">
    <div class="remove__click d-flex justify-content-center align-items-center">
        <i class="bi bi-x-lg"></i>
    </div>
    <div class="sub__contact__wrapper d-grid">

        <?php if (isset($_SESSION['id_user'])) { ?>
            <div class="">
                <a href="#0" class="d-flex justify-content-center align-items-center py-3 rounded gap-2"
                    style="background-color: #141410;">
                    <img src="https://ukmpolicy.org/images/<?php echo $_SESSION['image'] ?>"
                        onerror="this.onerror=null; this.src='https://ukmpolicy.org/images/default_picture.webp'"
                        alt="Avatar" class="avatar">
                    <span class="get__text text-light">
                        <?php echo $_SESSION['name'] ?>
                    </span>
                </a>
                <a href="logout?page=<?php echo $halaman; ?>"
                    class="d-flex justify-content-center cmn--btn align-items-center gap-2 my-3">
                    <span>
                        <i class="bi bi-box-arrow-left"></i>
                    </span>
                    <span class="get__text">
                        Logout
                    </span>
                </a>
            </div>
        <?php } else { ?>

            <a href="../login/login" class="d-flex justify-content-center cmn--btn align-items-center gap-2 my-3">
                <span>
                    <i class="bi bi-chevron-right"></i>
                </span>
                <span class="get__text">
                    Login
                </span>
            </a>

        <?php } ?>


        <?php if (isset($_SESSION['id_user'])) { ?>
            <div class="card" style="background-color: #141410;">
                <div class="card-body p-2">
                    <a class="btn col-12 my-1 text-light py-2" style="background-color:#dc3545;" href="profile">
                        <i class="bi bi-person fa-fw"></i> Profile
                    </a>
                    <a class="btn col-12 my-1 text-light py-2" style="background-color:#dc3545;" href="notifications">
                        <i class="bi bi-bell fa-fw"></i> Notifications
                    </a>
                    <a class="btn col-12 my-1 text-light py-2" style="background-color:#dc3545;" href="../open-recruitment">
                        <i class="bi bi-person-add fa-fw"></i> Open Recruitmen
                    </a>
                    <a class="btn col-12 my-1 text-light py-2" style="background-color:#dc3545;" href="settings">
                        <i class="bi bi-gear fa-fw"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="btn col-12 my-1 text-light py-2" style="background-color:#dc3545;" href="../manager/">
                        <i class="bi bi-person-badge fa-fw"></i> Manager
                    </a>
                </div>
            </div>
        <?php } ?>




        <hr class="base my-4">


        <a href="../index-2.html" class="side-logo">
            <img src="../assets/img/logo/logo.png" alt="img">
        </a>
        <p>
            Berpartisipasi dan berperan aktif dalam mengembangkan jaringan kerjasama dengan lembaga Politeknik Negeri
            Lhokseumawe ,
            komunitas Linux dan Open Source lainnya, Perguruan tinggi dan Pemerintah Daerah maupun Pusat.
        </p>
        <div class="sub__contact-left d-grid">
            <div class="sub__contac-item">
                <div class="content">
                    <span class="address d-block">
                        address
                    </span>
                    <a href="https://maps.app.goo.gl/UxhXZkqJpBXVUMuH6" target="_blank" class="textp">
                        Lhokseumawe, Bukit Rata
                    </a>
                </div>
            </div>
            <div class="sub__contac-item">
                <div class="content">
                    <span class="address d-block">
                        email
                    </span>
                    <a href="mailto:policy.lhokseumawe@gmail.com" target="_blank" class="textp"
                        style=" text-transform: lowercase;">
                        policy.lhokseumawe@gmail.com
                    </a>
                </div>
            </div>
            <!--   <div class="sub__contac-item">
                <div class="content">
                    <span class="address d-block">
                        call now
                    </span>
                    <a href="jasacript:void(0)" class="textp">
                        +98 4758 2154 021
                    </a>
                </div>
            </div> -->
        </div>
        <div class="sub__contact-right mb-40 position-relative">
            <ul class="social d-flex gap-3">
                <li>
                    <a href="https://www.tiktok.com/@ukmpolicypnl" target="_blank">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/ukmpolicy.kbmpnl/" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>

            </ul>
        </div>


    </div>
</div>
<!--<<  sub side bar custom >>-->
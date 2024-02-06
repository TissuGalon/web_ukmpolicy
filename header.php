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

<!--<< banner >>-->
<section class="banner__section">
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
                        <a href="index.php?x=home" <?php if (!isset($_GET['x']) || (isset($_GET['x']) && $x == 'home')) {
                            echo 'class="base"';
                        } ?>>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="index.php?x=blog" <?php if (isset($_GET['x']) && $x == 'blog') {
                            echo 'class="base"';
                        } ?>>
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="index.php?x=documentation" <?php if (isset($_GET['x']) && $x == 'documentation') {
                            echo 'class="base"';
                        } ?>>
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="index.php?x=open-recruitment" <?php if (isset($_GET['x']) && $x == 'open-recruitment') {
                            echo 'class="base"';
                        } ?>>
                            OPEN RECRUITMENT
                        </a>
                    </li>

                </ul>




                <div class="menu__components d-flex align-items-center ">


                    <?php if (isset($_SESSION['id_user'])) { ?>
                        <!-- USERNAME & AVATAR -->
                        <div class="dropdown">
                            <img src="https://ukmpolicy.org/images/default_picture.webp" alt="Avatar" class="avatar">
                            <span class="username">John Doe</span>

                            <div class="dropdown-content" aria-labelledby="navbar-picture">
                                <a class="dropdown-item" href="https://ukmpolicy.org/u/hV6wf1-18554258/profile">
                                    <i class="bi bi-person fa-fw"></i> Profile
                                </a>
                                <a class="dropdown-item" href="https://ukmpolicy.org/u/notifications">
                                    <i class="bi bi-bell fa-fw"></i> Notifications
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person-add fa-fw"></i> Open Recruitmen
                                </a>
                                <a class="dropdown-item" href="https://ukmpolicy.org/u/settings">
                                    <i class="bi bi-gear fa-fw"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://ukmpolicy.org/manager">
                                    <i class="bi bi-person-badge fa-fw"></i> Manager
                                </a>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault();document.querySelector('#logout').submit()">
                                    <i class="bi bi-box-arrow-right fa-fw"></i> Logout
                                </a>
                                <form action="https://ukmpolicy.org/logout" method="post" id="logout"><input type="hidden"
                                        name="_token" value="NGm4D2dj3OhOxgG3ssKyMpo5WweiXqNMNeDEjVXX"></form>
                            </div>
                        </div>
                        <!-- USERNAME & AVATAR -->
                    <?php } else { ?>
                        <!-- LOGIN BTN -->
                        <a href="login/login.php" class="d-flex fw-500 cmn--btn align-items-center gap-2">
                            <span class="get__text">
                                Login
                            </span>
                            <span>
                                <i class="bi bi-arrow-right fz-20"></i>
                            </span>
                        </a>
                        <!-- LOGIN BTN -->
                    <?php } ?>

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

    <!-- BANNER -->
    <?php include 'banner.php'; ?>
    <!-- BANNER -->

</section>
<!--<< banner >>-->

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
        <div class="sub__contact-right mb-80 position-relative">
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
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



    <!-- HEADER -->
    <?php include 'header.php'; ?>
    <!-- HEADER -->


    <!--<< text slide v1 >>-->
    <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <!--  <img src="assets/img/banner/ts3.png" alt="text-slide"> <span class="stroke-text"><img
                     src="assets/img/banner/ts4.png" alt="text-slide"></span>
               <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                     src="assets/img/banner/ts2.png" alt="text-slide"></span>
               <img src="assets/img/banner/ts3.png" alt="text-slide"> <span class="stroke-text"><img
                     src="assets/img/banner/ts4.png" alt="text-slide"></span>
               <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                     src="assets/img/banner/ts2.png" alt="text-slide"></span>
               <img src="assets/img/banner/ts3.png" alt="text-slide"> <span class="stroke-text"><img
                     src="assets/img/banner/ts4.png" alt="text-slide"></span> -->
                </li>
            </ul>
        </div>
    </div>
    <!--<< text slide v1 >>-->
    <div class="my-5"></div>

    <?php
    $q_cek_or = mysqli_query($conn, "SELECT * FROM settings");
    $settings = array();

    while ($row = mysqli_fetch_assoc($q_cek_or)) {
        $settings[$row['key']] = array(
            'id' => $row['id'],
            'key' => $row['key'],
            'value' => $row['value'],
            'created_at' => $row['created_at'],
            'updated_at' => $row['updated_at']
        );
    }

    echo $settings['key']['value']; // Mengakses nilai 'value' dari kunci 'key'
    ?>


    <div class="container  pt-60 pb-30 " style="border-radius:16px; background-color: #EBE2DB;  background-image: url('images/or-pattern.png');
            background-repeat: repeat;
            background-size: cover;">
        <div class="personal__head text-center">
            <!-- <img src="assets/img/about/section-star.png" class="mb-30" alt="star"> -->
            <h3 class="base">SEDANG DIBUKA</h3>
            <p class="descrp text-dark">
                OPEN RECRUITMENT
            </p>
            <h6 class="text-dark">Daftarkan dirimu sekarang.</h6>
            <a href="index.php?x=open-recruitment" class=" border-0 fw-500 cmn--btn  gap-2 mt-30 ">
                <span class="get__text text-light">
                    DAFTAR SEKARANG
                </span>
                <span>
                    <i class="bi bi-arrow-right fz-20 text-light"></i>
                </span>
            </a>
        </div>
    </div>

    <!--<< about personal >>-->
    <section class="about__section pt-120 pb-120" id="about">
        <div class="container">
            <div class="personal__head text-center">
                <img src="assets/img/about/section-star.png" class="mb-30" alt="star">
                <h3 class="base">SELAMAT DATANG DI</h3>
                <p class="descrp">
                    UNIT KEGIATAN MAHASISWA
                    POLYTECHNIC LINUX COMMUNITY
                </p>
                <h6 class="">Explore Linux And Open Source With Us.</h6>
            </div>
            <div class="singletab">
                <ul class="tablinks">
                    <li class="nav-links active">
                        <button class="tablink">MENGENAL LEBIH JAUH</button>
                    </li>
                    <!--    <li class="nav-links">
                  <button class="tablink">Experience</button>
               </li>
               <li class="nav-links">
                  <button class="tablink">Education</button>
               </li>
               <li class="nav-links">
                  <button class="tablink">Skills</button>
               </li> -->
                </ul>
                <div class="tabcontents">
                    <div class="tabitem active">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb" data-aos="zoom-in" data-aos-duration="500">
                                        <img src="assets/img/about/personal-infothumb.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2 class="h2-head" data-aos="fade-up" data-aos-duration="500">
                                            VISI
                                        </h2>
                                        <p class="p-descrip" data-aos="fade-up" data-aos-duration="500">
                                        <ul>
                                            <li>Mewujudkan Politeknik Negeri Lhokseumawe sebagai Cyber Campus dan Cyber
                                                Community.
                                            </li>
                                            <li>Memerdekakan dan membudayakan penggunaan ICT dengan GNU/Linux dan Open
                                                Source.</li>
                                        </ul>
                                        </p>
                                        <br>
                                        <h2 class="h2-head" data-aos="fade-up" data-aos-duration="500">
                                            MISI
                                        </h2>
                                        <p class="p-descrip" data-aos="fade-up" data-aos-duration="500">
                                        <ul>
                                            <li>Memasyarakatkan GNU/Linux dan Open Source.
                                            </li>
                                            <li>Mensosialisasikan Linux dan Open Source melalui event rutin.</li>
                                            <li>Berpartisipasi dan berperan aktif dalam mengembangkan jaringan kerjasama
                                                dengan
                                                lembaga Politeknik Negeri Lhokseumawe ,
                                                komunitas Linux dan Open Source lainnya lainnya, Perguruan tinggi dan
                                                Pemerintah
                                                Daerah maupun Pusat.</li>
                                            <li>Mengembangkan dan Memanfaatkan aplikasi Open Source.</li>
                                        </ul>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="assets/img/about/personal-infothumb.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            My Experience
                                        </h2>
                                        <p>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur,
                                            aliquam
                                            quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam,
                                            nisi ut
                                            aliquid ex ea autem velit esse quam nihil
                                        </p>
                                        <div class="exprience__box mt-30">
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    In 2011
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Software Engineer
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        UI Head & Manager
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    In 2016
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Product Designer
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Head of Department
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    In 2023
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Senior UI Designer
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Fiverr.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="assets/img/about/personal-infothumb.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            My Education
                                        </h2>
                                        <p>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur,
                                            aliquam
                                            quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam,
                                            nisi ut
                                            aliquid ex ea autem velit esse quam nihil
                                        </p>
                                        <div class="exprience__box mt-30">
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    2011-2013
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Programming Course
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        New York University
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    2013-2016
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        University of Design
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        Kingston, United States
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="exri__item">
                                                <span class="fz-18 fw-500 base">
                                                    2016-2018
                                                </span>
                                                <div class="expri__cont">
                                                    <h4 class="mb-15 text-white">
                                                        Web Design Course
                                                    </h4>
                                                    <p class="fz-18 pra d-block">
                                                        New York University
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabitem">
                        <div class="about__v1wrap">
                            <div class="row g-4 align-items-lg-start align-items-center">
                                <div class="col-lg-5">
                                    <div class="about__onethumb">
                                        <img src="assets/img/about/personal-infothumb.png" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="about__onecontent">
                                        <h2>
                                            My Skills
                                        </h2>
                                        <p>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit consectetur,
                                            aliquam
                                            quaerats voluptatem. Ut enim ad minima veniam, exercitationem laboriosam,
                                            nisi ut
                                            aliquid ex ea autem velit esse quam nihil
                                        </p>
                                        <div class="about__contactwrap">
                                            <div class="row g-4">
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="assets/img/about/figma.png" alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                Figma
                                                            </span>
                                                            <h1 class="fw-600">
                                                                90%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="assets/img/about/word.png" alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                Wordpress
                                                            </span>
                                                            <h1 class="fw-600">
                                                                95%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="assets/img/about/html.png" alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                HTML
                                                            </span>
                                                            <h1 class="fw-600">
                                                                85%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-6">
                                                    <div class="abox myskill__item">
                                                        <div class="thumb">
                                                            <img src="assets/img/about/boot.png" alt="img">
                                                        </div>
                                                        <div class="mys">
                                                            <span class="ptext fz-18 mb-15 d-block">
                                                                Bootstrap
                                                            </span>
                                                            <h1 class="fw-600">
                                                                97%
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< about personal >>-->

    <!--<< text slide v1 >>-->
    <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                            src="assets/img/banner/ts1.png" alt="text-slide"></span>
                    <!--  <img src="assets/img/banner/ts3.png" alt="text-slide"> <span class="stroke-text"><img
                        src="assets/img/banner/ts4.png" alt="text-slide"></span>
                  <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                        src="assets/img/banner/ts2.png" alt="text-slide"></span>
                  <img src="assets/img/banner/ts3.png" alt="text-slide"> <span class="stroke-text"><img
                        src="assets/img/banner/ts4.png" alt="text-slide"></span>
                  <img src="assets/img/banner/ts1.png" alt="text-slide"> <span class="stroke-text"><img
                        src="assets/img/banner/ts2.png" alt="text-slide"></span>
                  <img src="assets/img/banner/ts3.png" alt="text-slide"> <span class="stroke-text"><img
                        src="assets/img/banner/ts4.png" alt="text-slide"></span> -->
                </li>
            </ul>
        </div>
    </div>
    <!--<< text slide v1 >>-->



    <!--<< service >>-->
    <section id="services" class="service__section overhid pt-120 pb-120">
        <div class="container">
            <div class="project__head text-center">
                <span class="common__sub text-white" data-aos="fade-down" data-aos-duration="1000">
                    Bidang
                </span>

            </div>
            <div class="service__uniquewrap">
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1000">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                01
                            </span>
                            <div class="cont">
                                <h5>
                                    Bidang
                                </h5>
                                <h2>
                                    <a href="#.html">
                                        Pemrograman
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="#.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1200">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                02
                            </span>
                            <div class="cont">
                                <h5>
                                    Bidang
                                </h5>
                                <h2>
                                    <a href="#.html">
                                        Jaringan
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="#.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1400">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                03
                            </span>
                            <div class="cont">
                                <h5>
                                    Bidang
                                </h5>
                                <h2>
                                    <a href="#.html">
                                        Multimedia
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="#.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1600">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                04
                            </span>
                            <div class="cont">
                                <h5>
                                    Bidang
                                </h5>
                                <h2>
                                    <a href="#.html">
                                        Pengembangan
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="#.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                <div class="service__unique__item pb-40 pt-40" data-aos="fade-up" data-aos-duration="1800">
                    <div class="left__service">
                        <div class="serial__adjust">
                            <span>
                                05
                            </span>
                            <div class="cont">
                                <h5>
                                    Bidang
                                </h5>
                                <h2>
                                    <a href="#.html">
                                        Kaderisasi
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <p class="pra">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. sunt in culpa qui officia deserunt mollit
                        </p>
                    </div>
                    <a href="#.html" class="common__icon">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--<< service >>-->

    <!--<< process >>-->
    <section class="process__section pt-120 pb-120">
        <div class="container">
            <div class="project__head text-center">
                <span class="common__sub text-white" data-aos="fade-down" data-aos-duration="1000">
                    Struktural
                </span>

            </div>
            <div class="row g-4 d-flex justify-content-center">
                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item text-center">
                        <a href="#0" class="thumb rounded">
                            <img src="https://ukmpolicy.org/uploads/17015057082346.jpg"
                                style="width:100%;  aspect-ratio: 1 / 1; object-fit: cover; border-radius: 16px;"
                                alt="img">
                        </a>
                        <h2 class="white mb-14 mt-24">
                            Muhammad Rinaldy
                        </h2>
                        <h6 class="mb-30 pra fz-18 base">
                            Ketua Umum
                        </h6>

                    </div>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item text-center">
                        <a href="#0" class="thumb rounded">
                            <img src="https://ukmpolicy.org/uploads/17015058007116.JPG"
                                style="width:100%;  aspect-ratio: 1 / 1; object-fit: cover; border-radius: 16px;"
                                alt="img">
                        </a>
                        <h2 class="white mb-14 mt-24">
                            Muhammad Riza Wahyuddin
                        </h2>
                        <h6 class="mb-30 pra fz-18 base">
                            Sekretaris Umum
                        </h6>

                    </div>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item text-center">
                        <a href="#0" class="thumb rounded">
                            <img src="https://ukmpolicy.org/uploads/17015060214012.jpeg"
                                style="width:100%;  aspect-ratio: 1 / 1; object-fit: cover;  border-radius: 16px;"
                                alt="img">
                        </a>
                        <h2 class="white mb-14 mt-24">
                            Mitha Zahra
                        </h2>
                        <h6 class="mb-30 pra fz-18 base">
                            Bendahara Umum
                        </h6>

                    </div>
                </div>
                <!-- ITEM -->

                <hr class="base mt-25">

                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item text-center">
                        <a href="#0" class="thumb rounded">
                            <img src="images/pengurus/muhammad-kholis.jpeg"
                                style="width:100%;  aspect-ratio: 1 / 1; object-fit: cover; border-radius: 16px;"
                                alt="img" onerror="this.onerror=null; this.src='images/img-null.jpg';">
                        </a>
                        <h2 class="white mb-14 mt-24">
                            Muhammad Kholis
                        </h2>
                        <h6 class="mb-30 pra fz-18 base">
                            Ketua Pemrograman
                        </h6>

                    </div>
                </div>
                <!-- ITEM -->

                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item text-center">
                        <a href="#0" class="thumb rounded">
                            <img src="images/pengurus/"
                                style="width:100%;  aspect-ratio: 1 / 1; object-fit: cover; border-radius: 16px;"
                                alt="img" onerror="this.onerror=null; this.src='images/img-null.jpg';">
                        </a>
                        <h2 class="white mb-14 mt-24">
                            Ahmad Maulidi
                        </h2>
                        <h6 class="mb-30 pra fz-18 base">
                            Ketua Jaringan
                        </h6>

                    </div>
                </div>
                <!-- ITEM -->


                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item text-center">
                        <a href="#0" class="thumb rounded">
                            <img src="https://ukmpolicy.org/uploads/17015070433784.png"
                                style="width:100%;  aspect-ratio: 1 / 1; object-fit: cover; border-radius: 16px;"
                                alt="img" onerror="this.onerror=null; this.src='images/img-null.jpg';">
                        </a>
                        <h2 class="white mb-14 mt-24">
                            Dhynanti Amanda
                        </h2>
                        <h6 class="mb-30 pra fz-18 base">
                            Ketua Multimedia
                        </h6>

                    </div>
                </div>
                <!-- ITEM -->


                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item text-center">
                        <a href="#0" class="thumb rounded">
                            <img src=""
                                style="width:100%;  aspect-ratio: 1 / 1; object-fit: cover; border-radius: 16px;"
                                alt="img" onerror="this.onerror=null; this.src='images/img-null.jpg';">
                        </a>
                        <h2 class="white mb-14 mt-24">
                            Muhammad Dhiauddin
                        </h2>
                        <h6 class="mb-30 pra fz-18 base">
                            Ketua Pengembangan
                        </h6>

                    </div>
                </div>
                <!-- ITEM -->


                <!-- ITEM -->
                <div class="col-lg-4 col-md-6 col-sm-6" data-aos="flip-up" data-aos-duration="500">
                    <div class="process__item text-center">
                        <a href="#0" class="thumb rounded">
                            <img src=""
                                style="width:100%;  aspect-ratio: 1 / 1; object-fit: cover; border-radius: 16px;"
                                alt="img" onerror="this.onerror=null; this.src='images/img-null.jpg';">
                        </a>
                        <h2 class="white mb-14 mt-24">
                            Mutawakil Billah
                        </h2>
                        <h6 class="mb-30 pra fz-18 base">
                            Ketua Kaderisasi
                        </h6>

                    </div>
                </div>
                <!-- ITEM -->

            </div>
        </div>
    </section>
    <!--<< process >>-->


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
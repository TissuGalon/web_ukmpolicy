<?php include 'proses/koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--<< Required meta tags >>-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<< Title >>-->
    <title>Open Recruitment - UKM POLICY ~ KBMPNL</title>
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


    <!-- BANNER -->
    <div class="container pt-60 pb-60">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumnd__wrap text-center">
                    <h1>
                        OPEN-RECRUITMENT
                    </h1>

                </div>
            </div>
        </div>
    </div>
    <!-- BANNER -->


    <?php if (!isset($_SESSION['id_user'])) { ?>
        <section class="about__section pt-120 pb-120" id="about">

            <div class="container d-flex justify-content-center">
                <div class="row">
                    <span class="col-12 text-center">Login untuk melihat halaman</span>
                    <br>
                    <div class="col-12">
                        <a href="login/login" class="d-flex justify-content-center cmn--btn align-items-center gap-2 my-3 ">
                            <span>
                                <i class="bi bi-box-arrow-left"></i>
                            </span>
                            <span class="get__text">
                                Login
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </section>

    <?php } else { ?>

        <!--<< FORMULIR OR >>-->
        <section class="contact__section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1000">
                        <div class="contact__box">
                            <div class="replay__box cmn__bg">
                                <h3>
                                    Data Diri
                                </h3>
                                <form action="#" name="enq" method="post" action="#" onsubmit="return validation();"
                                    class="row g-4">
                                    <label for="" class="he1">NIM</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="nim" placeholder="NIM">
                                    </div>
                                    <label for="" class="he1">Nama</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                    <label for="" class="he1">Alamat</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="alamat" placeholder="Alamat">
                                    </div>
                                    <label for="" class="he1">Tanggal Lahir</label>
                                    <div class="col-lg-12">
                                        <input type="date" name="tgl" placeholder="Alamat">
                                    </div>
                                    <label for="" class="he1">Tempat Lahir</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="tempat" placeholder="Tempat Lahir">
                                    </div>
                                    <label for="" class="he1">Softskills</label>
                                    <div class="col-lg-12">
                                        <textarea name="softskills"
                                            placeholder="Jelaskan Softskill yang anda miliki (Jika Ada)" id="" cols="30"
                                            rows="10"></textarea>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div class="contact__box mt-3">
                            <div class="replay__box cmn__bg">
                                <form action="#" name="enq" method="post" action="#" onsubmit="return validation();"
                                    class="row g-4">
                                    <label for="" class="he1">No Whatsapp</label>
                                    <div class="col-lg-12">
                                        <input type="number" name="no" placeholder="No Whatsapp">
                                    </div>
                                    <label for="" class="he1">Email</label>
                                    <div class="col-lg-12">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="contact__box mb-3">
                            <div class="replay__box cmn__bg">
                                <form action="#" name="enq" method="post" action="#" onsubmit="return validation();"
                                    class="row g-4">
                                    <label for="" class="he1">Jurusan</label>
                                    <div class="col-lg-12">
                                        <select class="" value="Teknologi Informasi dan Komputer" id="jurusan"
                                            name="jurusan">
                                            <option value="Teknik Sipil">Teknik Sipil</option>
                                            <option value="Teknik Mesin">Teknik Mesin</option>
                                            <option value="Teknik Kimia">Teknik Kimia</option>
                                            <option value="Teknik Elektro">Teknik Elektro</option>
                                            <option value="Tata Niaga">Tata Niaga</option>
                                            <option selected="" value="Teknologi Informasi dan Komputer">Teknologi
                                                Informasi
                                                dan Komputer</option>
                                        </select>
                                    </div>
                                    <label for="" class="he1">Program Studi</label>
                                    <div class="col-lg-12">
                                        <select class="form-control rounded-0" id="prodi" name="prodi">
                                            <option selected="" value="Teknik Informatika">Teknik Informatika
                                            </option>
                                            <option value="Teknologi Rekayasa Komputer Jaringan">Teknologi Rekayasa
                                                Komputer
                                                Jaringan</option>
                                            <option value="Teknologi Rekayasa Multimedia">Teknologi Rekayasa
                                                Multimedia
                                            </option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="contact__rightside cmn__bg">
                            <h4 class="mb-30">
                                Upload Berkas
                            </h4>
                            <div class="contact__item mb-20">
                                <span class="he1">
                                    Pas Foto 3x4
                                </span>
                                <input type="file">
                            </div>
                            <div class="contact__item mb-20">
                                <span class="he1">
                                    Bukti Kelulusan PKKMB
                                </span>
                                <input type="file">
                            </div>
                            <div class="contact__item mb-20">
                                <span class="he1">
                                    Bukti Follow Instagram
                                </span>
                                <input type="file">
                            </div>
                            <div class="contact__item mb-20">
                                <span class="he1">
                                    Bukti Follow TikTok
                                </span>
                                <input type="file">
                            </div>
                            <div class="contact__item mb-20">
                                <span class="he1">
                                    Bukti Subscribe Youtube
                                </span>
                                <input type="file">
                            </div>
                            <span class="he1">
                                Kuisioner
                            </span>
                            <a href="kuisioner.html"
                                class=" border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                <span class="get__text">
                                    Isi Kuisioner
                                </span>
                                <span>
                                    <i class="bi bi-book fz-20"></i>
                                </span>
                            </a>
                        </div>

                        <div class="contact__rightside cmn__bg d-flex mt-3">
                            <button type="submit" value="Send message" name="submit"
                                class=" border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                <span class="get__text">
                                    Simpan
                                </span>
                                <span>
                                    <i class="bi bi-save fz-20"></i>
                                </span>
                            </button>
                            <div class="mx-2"></div>
                            <button type="submit" value="Send message" name="submit"
                                class=" border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                <span class="get__text">
                                    Cetak
                                </span>
                                <span>
                                    <i class="bi bi-print fz-20"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--<< FORMULIR OR >>-->

    <?php } ?>


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
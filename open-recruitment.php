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

                        <?php
                        $user_id = $_SESSION['id_user'];
                        $kueri1 = mysqli_query($conn, "SELECT * FROM or_userdata_2024 WHERE user_id = $user_id");
                        $cek1 = mysqli_num_rows($kueri1);
                        $row1 = mysqli_fetch_array($kueri1);

                        if ($cek1 > 0) {
                            $nim = $row1['nim'];
                            $nama = $row1['nama'];
                            $jurusan = $row1['jurusan'];
                            $prodi = $row1['prodi'];
                            $alamat = $row1['alamat'];
                            $tgl_lahir = $row1['tgl_lahir'];
                            $tempat_lahir = $row1['tempat_lahir'];
                            $softskills = $row1['softskills'];
                            $no_wa = $row1['no_wa'];
                        } else {
                            $nim = '';
                            $nama = '';
                            $jurusan = '';
                            $prodi = '';
                            $alamat = '';
                            $tgl_lahir = '';
                            $tempat_lahir = '';
                            $softskills = '';
                            $no_wa = '';
                        }

                        ?>

                        <div class="contact__box">
                            <div class="replay__box cmn__bg">
                                <h3>
                                    Data Diri
                                </h3>
                                <form action="proses/or/isi_or_userdata" id="form_or_userdata" name="enq" method="GET"
                                    class="row g-4">
                                    <label for="" class="he1">NIM</label>
                                    <div class="col-lg-12">
                                        <input type="text" value="<?php echo $nim; ?>" name="nim" placeholder="NIM"
                                            maxlength="25">
                                    </div>
                                    <label for="" class="he1">Nama</label>
                                    <div class="col-lg-12">
                                        <input type="text" value="<?php echo $nama; ?>" name="nama" placeholder="Name"
                                            maxlength="50">
                                    </div>
                                    <!-- JURUSAN & PRODI -->
                                    <label for="" class="he1">Jurusan</label>
                                    <div class="col-lg-12">
                                        <select class="" value="<?php echo $jurusan; ?>" id="jurusan" name="jurusan">
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
                                        <select class="form-control rounded-0" value="<?php echo $prodi; ?>" id="prodi"
                                            name="prodi">
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
                                    <!-- JURUSAN & PRODI -->
                                    <label for="" class="he1">Alamat</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat"
                                            maxlength="60">
                                    </div>
                                    <label for="" class="he1">Tanggal Lahir</label>
                                    <div class="col-lg-12">
                                        <input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"
                                            placeholder="Alamat">
                                    </div>
                                    <label for="" class="he1">Tempat Lahir</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>"
                                            placeholder="Tempat Lahir" maxlength="40">
                                    </div>
                                    <label for="" class="he1">Softskills</label>
                                    <div class="col-lg-12">
                                        <textarea name="softskills"
                                            placeholder="Jelaskan Softskill yang anda miliki (Jika Ada)" id="" cols="30"
                                            rows="10"><?php echo $softskills; ?></textarea>
                                    </div>
                                    <label for="" class="he1">No Whatsapp</label>
                                    <div class="col-lg-12">
                                        <input type="number" name="no_wa" value="<?php echo $no_wa; ?>"
                                            placeholder="No Whatsapp" maxlength="20">
                                    </div>

                                    <button onclick="submitUserData()"
                                        class=" border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                        <span class="get__text">
                                            Simpan
                                        </span>
                                        <span>
                                            <i class="bi bi-save fz-20"></i>
                                        </span>
                                    </button>

                                    <script>
                                        function submitUserData() {
                                            document.getElementById("form_or_userdata").submit();
                                        }
                                    </script>

                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="contact__rightside cmn__bg">
                            <form action="">
                                <h3 class="mb-30">
                                    Upload Berkas
                                </h3>
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
                                <button type="submit"
                                    class=" border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                    <span class="get__text">
                                        Upload File
                                    </span>
                                    <span>
                                        <i class="bi bi-upload fz-20"></i>
                                    </span>
                                </button>
                            </form>
                        </div>


                        <div class="contact__rightside cmn__bg mt-3">
                            <a href="kuisioner"
                                class=" border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                <span class="get__text">
                                    Isi Kuisioner
                                </span>
                                <span>
                                    <i class="bi bi-book fz-20"></i>
                                </span>
                            </a>
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
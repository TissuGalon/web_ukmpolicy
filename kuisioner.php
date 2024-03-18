<?php include 'proses/koneksi.php'; ?>

<?php if (!isset($_SESSION['id_user'])) {
    header('location:home');
} ?>

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





    <!--<< banner >>-->
    <section class="breadcrumnd__section">
        <!--<< Header v-1 >>-->
        <!-- HEADER -->
        <?php include 'header.php'; ?>
        <!-- HEADER -->
        <!--<< Header v-1 >>-->
        <div class="container pt-60 pb-60">
            <!-- BUTTON -->
            <a href="open-recruitment" class=" cmn--btn align-items-center">
                <span>
                    <i class="bi bi-arrow-left fz-20"></i>
                </span>
                <span class="get__text">
                    Kembali
                </span>
            </a>
            <!-- BUTTON -->
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumnd__wrap text-center">
                        <h1>
                            Kuisioner
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<< banner >>-->

    <?php
    $kueri1 = mysqli_query($conn, "SELECT * FROM kuisioner_or WHERE active = 1");
    $row1 = mysqli_fetch_array($kueri1);
    $id_kuisioner = $row1['id'];
    $json_data_pertanyaan = $row1['kuisioner'];
    $data1 = json_decode($json_data_pertanyaan, true);

    $iduser = $_SESSION['id_user'];

    $kueri2 = mysqli_query($conn, "SELECT * FROM jawaban_kuisioner_or WHERE kuisioner_id = $id_kuisioner AND user_id = $iduser");
    $row2 = mysqli_fetch_array($kueri2);
    $cek_jawaban = mysqli_num_rows($kueri2);

    if ($cek_jawaban > 0) {
        $json_data_jawaban = $row2['jawaban'];

        // Remove control characters
        $json_data_jawaban = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json_data_jawaban);

        $data2 = json_decode($json_data_jawaban, true);
    }

    ?>

    <!--<< Contact >>-->
    <section class="contact__section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="contact__box">
                        <div class="replay__box cmn__bg">

                            <form action="proses/or/isi_kuisioner" id="form_kuisioner" name="enq" method="GET"
                                class="row g-4">

                                <input type="hidden" name="id_kuisioner" value="<?php echo $id_kuisioner; ?>">

                                <?php
                                $i = 0;
                                while ($i < count($data1['pertanyaan'])) {
                                    ?>
                                    <!-- LABEL PERTANYAAN -->
                                    <label for="" class="he1">
                                        <?php echo ($i + 1) . ". " . $data1['pertanyaan'][$i]; ?>
                                    </label>
                                    <!-- LABEL PERTANYAAN -->

                                    <!-- JAWABAN -->
                                    <div class="col-lg-12">
                                        <textarea name="soal<?php echo $i + 1; ?>" id="myTextarea" cols="30" rows="3"
                                            value=""><?php if ($cek_jawaban > 0) {
                                                echo $data2['jawaban'][$i];
                                            } ?></textarea>
                                    </div>
                                    <!-- JAWABAN -->

                                    <?php
                                    $i++;
                                }
                                ?>

                                <button onclick="submitForm()"
                                    class="d-flex border-0 d-flex fw-500 cmn--btn align-items-center gap-2">
                                    <span class="get__text">
                                        Simpan Jawaban
                                    </span>
                                    <span>
                                        <i class="bi bi-arrow-right fz-20"></i>
                                    </span>
                                </button>



                                <script>
                                    document.getElementById("myTextarea").addEventListener("input", function () {
                                        // Ambil nilai teks dari textarea
                                        let text = this.value;
                                        // Cari dan ganti karakter yang tidak diinginkan
                                        text = text.replace(/"/g, ''); // Hapus karakter "
                                        // Update nilai teks di textarea
                                        this.value = text;
                                    });
                                </script>


                                <script>
                                    function submitForm() {
                                        document.getElementById("form_kuisioner").submit();
                                    }
                                </script>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
    </section>
    <!--<< Contact >>-->

    <br>

    <!--<< Footer >>-->
    <footer class="footer__section">

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
                Berpartisipasi dan berperan aktif dalam mengembangkan jaringan kerjasama dengan lembaga Politeknik
                Negeri
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
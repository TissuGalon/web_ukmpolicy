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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--<< Preloader >>-->
    <!--   <div class="preloader__matias">
        <div class="box text-center">
            <div class="matias mb-10">
                <img src="assets/img/logo/policy2.png" class="p-2" alt="img">
            </div>
            <span class="fz-30 mati fw-600 text-uppercase">
                UKM Policy
            </span>
        </div>
    </div> -->
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

                        $data_diri_done = false;
                        $upload_berkas_done = false;
                        $kuisioner_done = true;





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

                            if ($nim == '' || $nama == '' || $jurusan == '' || $prodi == '' || $alamat == '' || $tgl_lahir == '' || $tempat_lahir == '' || $softskills == '' || $no_wa == '') {
                                $data_diri_done = false;
                            } else {
                                $data_diri_done = true;
                            }


                            /* CEK KUISIONER IS FILLED */
                            $kueri_kuisioner1 = mysqli_query($conn, "SELECT * FROM kuisioner_or WHERE active = 1");
                            $row_kuisioner1 = mysqli_fetch_array($kueri_kuisioner1);
                            $id_kuisioner_active = $row_kuisioner1['id'];
                            $kueri_kuisioner2 = mysqli_query($conn, "SELECT * FROM jawaban_kuisioner_or WHERE user_id = $user_id AND kuisioner_id = $id_kuisioner_active");
                            $row_kuisioner2 = mysqli_fetch_array($kueri_kuisioner2);
                            $jawaban_kuisioner = json_decode($row_kuisioner2['jawaban'], true);

                            $i = 0;
                            while ($i < count($jawaban_kuisioner['jawaban'])) {
                                if ($jawaban_kuisioner['jawaban'][$i] == '' || $jawaban_kuisioner['jawaban'][$i] == NULL) {
                                    $kuisioner_done = false;
                                }
                                $i++;
                            }
                            /* CEK KUISIONER IS FILLED */

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
                                    <?php if ($data_diri_done) { ?>
                                        <i class="bi bi-check-square-fill text-success ms-3 fz-20"></i>
                                    <?php } else { ?>
                                        <i class="bi bi-check-square ms-3 fz-20"></i>
                                    <?php } ?>
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
                                        <select class="base" value="<?php echo $jurusan; ?>" id="jurusan" name="jurusan">
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
                                        <!--  <select class="form-control rounded-0" value="<?php echo $prodi; ?>" id="prodi"
                                            name="prodi">
                                            <option selected="" value="Teknik Informatika">Teknik Informatika
                                            </option>
                                            <option value="Teknologi Rekayasa Komputer Jaringan">Teknologi Rekayasa
                                                Komputer
                                                Jaringan</option>
                                            <option value="Teknologi Rekayasa Multimedia">Teknologi Rekayasa
                                                Multimedia
                                            </option>
                                        </select> -->
                                        <input type="text" id="prodi" name="prodi" value="<?php echo $prodi; ?>"
                                            placeholder="Prodi" maxlength="80">
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

                    <?php
                    $kueri2 = mysqli_query($conn, "SELECT * FROM or_berkas WHERE user_id = $user_id");
                    $cek2 = mysqli_num_rows($kueri2);
                    $row2 = mysqli_fetch_array($kueri2);

                    if ($cek2 > 0) {
                        $pas_foto = $row2['pas_foto'];
                        $sertifikat_pkkmb = $row2['sertifikat_pkkmb'];
                        $follow_instagram = $row2['follow_instagram'];
                        $follow_tiktok = $row2['follow_tiktok'];
                        $subscribe_youtube = $row2['subscribe_youtube'];

                        if ($pas_foto == '' || $sertifikat_pkkmb == '' || $follow_instagram == '' || $follow_tiktok == '' || $subscribe_youtube == '') {
                            $upload_berkas_done = false;
                        } else {
                            $upload_berkas_done = true;
                        }

                    } else {
                        $pas_foto = '';
                        $sertifikat_pkkmb = '';
                        $follow_instagram = '';
                        $follow_tiktok = '';
                        $subscribe_youtube = '';
                    }
                    ?>

                    <script>

                        function view_berkas(filename) {
                            Swal.fire({
                                text: `${filename}`,
                                imageUrl: `uploads/berkas_or/${filename}`,
                                imageAlt: `${filename}`
                            });
                        }


                        function hapus_berkas(filename, title) {
                            Swal.fire({
                                title: "Hapus berkas?",
                                text: `File ${title} akan dihapus`,
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#d33",
                                cancelButtonColor: "#454545",
                                confirmButtonText: "Ya, Hapus data!",
                                cancelButtonText: "Batal"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = `proses/or/hapus_berkas?filename=${filename}&title=${title}`;
                                }
                            });
                        }

                    </script>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="contact__rightside cmn__bg">
                            <form action="proses/or/upload_berkas_or" method="POST" id="form_upload"
                                enctype="multipart/form-data">
                                <h3 class="mb-30">
                                    Upload Berkas
                                    <?php if ($upload_berkas_done) { ?>
                                        <i class="bi bi-check-square-fill text-success ms-3 fz-20"></i>
                                    <?php } else { ?>
                                        <i class="bi bi-check-square ms-3 fz-20"></i>
                                    <?php } ?>
                                </h3>
                                <div class="contact__item mb-20">
                                    <span class="he1">
                                        Pas Foto 3x4
                                    </span>
                                    <input type="file" name="pas_foto" accept="image/*">
                                    <?php if ($pas_foto == '' || $pas_foto == null) { ?>
                                        <div class="mt-2 bg-danger p-1 text-center"><i class="bi bi-x"></i> Tidak Ada berkas
                                        </div>
                                    <?php } else { ?>
                                        <div class="mt-2 bg-success p-1 text-center"><i class="bi bi-check"></i> Berkas
                                            Tersimpan</div>
                                        <div class="d-flex justify-content-center gap-2 mt-2">
                                            <a href="#" onclick="view_berkas('<?php echo $pas_foto ?>')"
                                                class="btn btn-sm btn-primary w-100 mx-2"><i class="bi bi-eye"></i> Lihat</a>
                                            <a href="#" onclick="hapus_berkas('<?php echo $pas_foto ?>', 'pas_foto')"
                                                class="btn btn-sm btn-danger w-100 mx-2"><i class="bi bi-trash"></i> Hapus</a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="contact__item mb-20">
                                    <span class="he1">
                                        Bukti Kelulusan PKKMB
                                    </span>
                                    <input type="file" name="sertifikat_pkkmb" accept="image/*">
                                    <?php if ($sertifikat_pkkmb == '' || $sertifikat_pkkmb == null) { ?>
                                        <div class="mt-2 bg-danger p-1 text-center"><i class="bi bi-x"></i> Tidak Ada berkas
                                        </div>
                                    <?php } else { ?>
                                        <div class="mt-2 bg-success p-1 text-center"><i class="bi bi-check"></i> Berkas
                                            Tersimpan</div>
                                        <div class="d-flex justify-content-center gap-2 mt-2">
                                            <a href="#" onclick="view_berkas('<?php echo $sertifikat_pkkmb ?>')"
                                                class="btn btn-sm btn-primary w-100 mx-2"><i class="bi bi-eye"></i> Lihat</a>
                                            <a href="#"
                                                onclick="hapus_berkas('<?php echo $sertifikat_pkkmb ?>', 'sertifikat_pkkmb')"
                                                class="btn btn-sm btn-danger w-100 mx-2"><i class="bi bi-trash"></i> Hapus</a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="contact__item mb-20">
                                    <span class="he1">
                                        Bukti Follow Instagram
                                    </span>
                                    <input type="file" name="follow_instagram" accept="image/*">
                                    <?php if ($follow_instagram == '' || $follow_instagram == null) { ?>
                                        <div class="mt-2 bg-danger p-1 text-center"><i class="bi bi-x"></i> Tidak Ada berkas
                                        </div>
                                    <?php } else { ?>
                                        <div class="mt-2 bg-success p-1 text-center"><i class="bi bi-check"></i> Berkas
                                            Tersimpan</div>
                                        <div class="d-flex justify-content-center gap-2 mt-2">
                                            <a href="#" onclick="view_berkas('<?php echo $follow_instagram ?>')"
                                                class="btn btn-sm btn-primary w-100 mx-2"><i class="bi bi-eye"></i> Lihat</a>
                                            <a href="#"
                                                onclick="hapus_berkas('<?php echo $follow_instagram ?>', 'follow_instagram')"
                                                class="btn btn-sm btn-danger w-100 mx-2"><i class="bi bi-trash"></i> Hapus</a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="contact__item mb-20">
                                    <span class="he1">
                                        Bukti Follow TikTok
                                    </span>
                                    <input type="file" name="follow_tiktok" accept="image/*">
                                    <?php if ($follow_tiktok == '' || $follow_tiktok == null) { ?>
                                        <div class="mt-2 bg-danger p-1 text-center"><i class="bi bi-x"></i> Tidak Ada berkas
                                        </div>
                                    <?php } else { ?>
                                        <div class="mt-2 bg-success p-1 text-center"><i class="bi bi-check"></i> Berkas
                                            Tersimpan</div>
                                        <div class="d-flex justify-content-center gap-2 mt-2">
                                            <a href="#" onclick="view_berkas('<?php echo $follow_tiktok ?>')"
                                                class="btn btn-sm btn-primary w-100 mx-2"><i class="bi bi-eye"></i> Lihat</a>
                                            <a href="#" onclick="hapus_berkas('<?php echo $follow_tiktok ?>', 'follow_tiktok')"
                                                class="btn btn-sm btn-danger w-100 mx-2"><i class="bi bi-trash"></i> Hapus</a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="contact__item mb-20">
                                    <span class="he1">
                                        Bukti Subscribe Youtube
                                    </span>
                                    <input type="file" name="subscribe_youtube" accept="image/*">
                                    <?php if ($subscribe_youtube == '' || $subscribe_youtube == null) { ?>
                                        <div class="mt-2 bg-danger p-1 text-center"><i class="bi bi-x"></i> Tidak Ada berkas
                                        </div>
                                    <?php } else { ?>
                                        <div class="mt-2 bg-success p-1 text-center"><i class="bi bi-check"></i> Berkas
                                            Tersimpan</div>
                                        <div class="d-flex justify-content-center gap-2 mt-2">
                                            <a href="#" onclick="view_berkas('<?php echo $subscribe_youtube ?>')"
                                                class="btn btn-sm btn-primary w-100 mx-2"><i class="bi bi-eye"></i> Lihat</a>
                                            <a href="#"
                                                onclick="hapus_berkas('<?php echo $subscribe_youtube ?>', 'subscribe_youtube')"
                                                class="btn btn-sm btn-danger w-100 mx-2"><i class="bi bi-trash"></i> Hapus</a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <button onclick="upload_berkas()"
                                    class=" border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                    <span class="get__text">
                                        Upload File
                                    </span>
                                    <span>
                                        <i class="bi bi-upload fz-20"></i>
                                    </span>
                                </button>
                            </form>

                            <script>
                                function upload_berkas() {
                                    document.getElementById("form_upload").submit();
                                }
                            </script>


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


                            <!--  <?php if ($data_diri_done && $upload_berkas_done && $kuisioner_done) { ?>
                                <button id="btn_cetak" onclick="cetakData('')"
                                    class="border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                    <span class="get__text">
                                        Cetak
                                    </span>
                                    <span>
                                        <i class="bi bi-printer fz-20"></i>
                                    </span>
                                </button>
                            <?php } else { ?>
                                <button id="btn_cetak" onclick="cetakError()"
                                    class="border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                                    <span class="get__text">
                                        Cetak
                                    </span>
                                    <span>
                                        <i class="bi bi-printer fz-20"></i>
                                    </span>
                                </button>
                            <?php } ?>
                            <br>
                            <i class="mt-3 he1 text-secondary">"Selesaikan pengisian data, Upload berkas dan isi kuisioner
                                sebelum mencetak
                                data"</i> -->



                            <script>

                                // Kombinasi Parameter Userdata: id + user_id + 24
                                function cetakData() {
                                    window.location.href = `or_view`;
                                }

                                function cetakError() {
                                    Swal.fire({
                                        icon: "warning",
                                        title: "Oops...",
                                        text: "Lengkapi Data, Berkas, dan Kuisioner !",
                                    });
                                }
                            </script>

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
<?php include '../proses/koneksi.php'; ?>
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
    <link rel="shortcut icon" href="../assets/img/logo/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--<< Aos animation css >>-->
    <link rel="stylesheet" href="../assets/css/aos.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>




    <!-- HEADER -->
    <?php include 'header.php'; ?>
    <!-- HEADER -->


    <!-- PROFILE -->
    <div class="container mt-5 pt-60 pb-30 " style="border-radius:16px; background-color: #202020;
            background-repeat: repeat;
            background-size: cover;">
        <div class=" ">

            <!-- NAV -->
            <?php
            $halaman = basename($_SERVER['PHP_SELF']);
            ?>
            <div class="row text-center">
                <div class="col-12">
                    <a href="profile"
                        class="btn btn-lg btn-secondary d-inline-block d-md-none <?php echo ($halaman == 'profile.php') ? 'active' : ''; ?>"
                        style="<?php echo ($halaman == 'profile.php') ? 'background-color:#DC3545;' : 'background-color:#373737;'; ?>"><i
                            class="bi bi-person fa-fw"></i></a>
                    <a href="notifications"
                        class="btn btn-lg btn-secondary d-inline-block d-md-none <?php echo ($halaman == 'notifications.php') ? 'active' : ''; ?>"
                        style="<?php echo ($halaman == 'notifications.php') ? 'background-color:#DC3545;' : 'background-color:#373737;'; ?>"><i
                            class="bi bi-bell fa-fw"></i></a>
                    <a href="open-recruitment"
                        class="btn btn-lg btn-secondary d-inline-block d-md-none <?php echo ($halaman == 'open-recruitment.php') ? 'active' : ''; ?>"
                        style="<?php echo ($halaman == 'open-recruitment.php') ? 'background-color:#DC3545;' : 'background-color:#373737;'; ?>"><i
                            class="bi bi-file-earmark-plus fa-fw"></i></a>
                    <a href="settings"
                        class="btn btn-lg btn-secondary d-inline-block d-md-none <?php echo ($halaman == 'settings.php') ? 'active' : ''; ?>"
                        style="<?php echo ($halaman == 'settings.php') ? 'background-color:#DC3545;' : 'background-color:#373737;'; ?>"><i
                            class="bi bi-gear fa-fw"></i></a>

                    <a href="profile"
                        class="btn btn-lg btn-secondary d-none d-md-inline-block <?php echo ($halaman == 'profile.php') ? 'active' : ''; ?>"
                        style="<?php echo ($halaman == 'profile.php') ? 'background-color:#DC3545;' : 'background-color:#373737;'; ?>"><i
                            class="bi bi-person fa-fw"></i> Profile</a>
                    <a href="notifications"
                        class="btn btn-lg btn-secondary d-none d-md-inline-block <?php echo ($halaman == 'notifications.php') ? 'active' : ''; ?>"
                        style="<?php echo ($halaman == 'notifications.php') ? 'background-color:#DC3545;' : 'background-color:#373737;'; ?>"><i
                            class="bi bi-bell fa-fw"></i> Notifications</a>
                    <a href="open-recruitment"
                        class="btn btn-lg btn-secondary d-none d-md-inline-block <?php echo ($halaman == 'open-recruitment.php') ? 'active' : ''; ?>"
                        style="<?php echo ($halaman == 'open-recruitment.php') ? 'background-color:#DC3545;' : 'background-color:#373737;'; ?>"><i
                            class="bi bi-file-earmark-plus fa-fw"></i> Open Recruitment</a>
                    <a href="settings"
                        class="btn btn-lg btn-secondary d-none d-md-inline-block <?php echo ($halaman == 'settings.php') ? 'active' : ''; ?>"
                        style="<?php echo ($halaman == 'settings.php') ? 'background-color:#DC3545;' : 'background-color:#373737;'; ?>"><i
                            class="bi bi-gear fa-fw"></i> Settings</a>
                </div>
            </div>

            <!-- NAV -->
            <hr class="mt-3 mx-5">
            <br>




            <!-- ISI -->
            <div class="replay__box cmn__bg mx-xl-5">
                <form id="form_setting" action="update_settings.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="profilePicture">Profile Picture</label>
                        <input type="file" class="form-control-file" name="picture" id="profilePicture">
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="<?php echo $users['name'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username"
                            value="<?php echo $users['username'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" name="bio" id="bio"><?php echo $users['bio'] ?></textarea>
                    </div>
                    <button onclick="submitForm()"
                        class="border-0 d-flex fw-500 cmn--btn align-items-center gap-2 mt-30 w-100">
                        <span class="get__text">Simpan</span>
                        <span><i class="bi bi-save fz-20"></i></span>
                    </button>
                </form>

                <script>
                    function submitForm() {
                        document.getElementById("form_setting").submit();
                    }
                </script>
            </div>

            <!-- ISI -->


        </div>
    </div>
    <!-- PROFILE -->

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
    <script src="../assets/js/jquery-3.7.0.min.js"></script>
    <!--<< Viewport Js >>-->
    <script src="../assets/js/viewport.jquery.js"></script>
    <!--<< Bootstrap Js >>-->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--<< Aos animation Js >>-->
    <script src="../assets/js/aos.js"></script>
    <!--<< Nice Select Js >>-->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <!--<< Swiper Slide Js >>-->
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <!--<< Swiper Bundle Js >>-->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< magnific popup Js >>-->
    <script src="../assets/js/odometer.min.js"></script>
    <!--<< Odometer js Js >>-->
    <script src="../assets/js/wow.min.js"></script>
    <!--<< Wow Animation js >>-->
    <script src="../assets/js/main.js"></script>
    <!--<< Main.js >>-->
</body>

</html>
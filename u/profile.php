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
    <div class="container mt-5 pt-60 pb-30 " style="border-radius:16px; background-color: #202020;  background-image: url('images/or-pattern.png');
            background-repeat: repeat;
            background-size: cover;">
        <div class=" text-center">

            <!-- NAV -->
            <?php
            $halaman = basename($_SERVER['PHP_SELF']);
            ?>
            <div class="row">
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
            <div class="container">
                <div class="row text-start">
                    <div class="col-12 col-xl-3 text-center">
                        <img src="../uploads/<?php echo $users['picture'] ?>"
                            onerror="this.onerror=null; this.src='https://ukmpolicy.org/images/default_picture.webp'"
                            alt=" Avatar" class="rounded mb-3"
                            style="aspect-ratio: 1 / 1; width:200px; height: 200px; object-fit:cover;">
                    </div>
                    <div class="col-12 col-xl-9">
                        <br>
                        <h3 class="">
                            <?php echo $users['name'] ?>
                        </h3>
                        <h6 class="">
                            <?php echo $users['username'] ?>
                        </h6>
                        <br>
                        <div class="card" style="background-color:#373737;">
                            <div class="card-body">
                                <h6 class="d-flex"><i class="bi bi-quote"></i>
                                    <div class="ms-3">
                                        <?php echo $users['bio'] ?>
                                    </div>
                                </h6>
                            </div>
                        </div>
                    </div>


                </div>
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
<?php include '../proses/koneksi.php'; ?>
<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Page</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>

    <style>
        /* Cool infinite background scrolling animation.
 * Twitter: @kootoopas
 */
        /* Exo thin font from Google. */
        @import url(https://fonts.googleapis.com/css?family=Exo:100);

        /* Background data (Original source: https://subtlepatterns.com/grid-me/) */
        /* Animations */
        @-webkit-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-moz-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-o-keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @keyframes bg-scrolling-reverse {
            100% {
                background-position: 50px 50px;
            }
        }

        @-webkit-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @-moz-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @-o-keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        @keyframes bg-scrolling {
            0% {
                background-position: 50px 50px;
            }
        }

        /* Main styles */
        body {
            color: #999;
            /* img size is 50x50 */
            background: url("bg.png") repeat 0 0;
            -webkit-animation: bg-scrolling-reverse 0.92s infinite;
            /* Safari 4+ */
            -moz-animation: bg-scrolling-reverse 0.92s infinite;
            /* Fx 5+ */
            -o-animation: bg-scrolling-reverse 0.92s infinite;
            /* Opera 12+ */
            animation: bg-scrolling-reverse 0.92s infinite;
            /* IE 10+ */
            -webkit-animation-timing-function: linear;
            -moz-animation-timing-function: linear;
            -o-animation-timing-function: linear;
            animation-timing-function: linear;
        }
    </style>

</head>

<body>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    if (isset($_GET['message']) && $_GET['message'] == "email_used") { ?>

        <script>
            Swal.fire({
                title: "Email sudah digunakan !",
                text: "Gunakan email lain untuk daftar",
                icon: "warning"
            }).then((result) => {
                window.location.href = 'register';
            });
        </script>

    <?php } ?>


    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card" style="background-color:#151515;">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-3">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                </span>

                                <span class="app-brand-text demo text-white fw-bolder"
                                    style="text-transform:capitalize;">Sign up
                                    to POLICY</span>
                            </a>
                        </div>
                        <p class="text-center">Welcome to POLICY, let's join with us.</p>
                        <!-- /Logo -->


                        <form id="formAuthentication" class="mb-3" action="proses_register.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label text-white">Name</label>
                                <input type="text" style="color:black" class="form-control" id="name" name="name"
                                    placeholder="Enter your Name" autofocus required />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email</label>
                                <input type="text" style="color:black" class="form-control" id="email" name="email"
                                    placeholder="Enter your Email" required />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label text-white" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" style="color:black" id="password" class="form-control"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label text-white" for="password">Confirm Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" style="color:black" id="password" class="form-control"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-dark d-grid w-100" style="background-color: #dc3545;"
                                    type="submit">Sign
                                    up</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="login">
                                <span style="color: #dc3545;">Sign in</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->



            </div>
        </div>
    </div>

    <!-- / Content -->



    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboards-analytics.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WebinarToday</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url("assets/img/favicon.png"); ?>" rel="icon">
    <link href="<?php echo base_url("assets/img/apple-touch-icon.png"); ?> rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url("assets/vendor/aos/aos.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/glightbox/css/glightbox.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/vendor/swiper/swiper-bundle.min.css"); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet">

    <!-- Template search-page -->
    <link href="<?php echo base_url("assets/css/list.css"); ?>" rel="stylesheet">

    <!-- Template Profile page -->
    <link href="<?php echo base_url("assets/css/profile.css"); ?>" rel="stylesheet">

    <!-- Template Webinar page -->
    <link href="<?php echo base_url("assets/css/webpage.css"); ?>" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url("assets/vendor/purecounter/purecounter_vanilla.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/aos/aos.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/glightbox/js/glightbox.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/swiper/swiper-bundle.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/php-email-form/validate.js"); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>

      <!-- =======================================================
        * Template Name: NewBiz
        * Updated: Sep 18 2023 with Bootstrap v5.3.2
        * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

        <div class="logo">
            <!-- Uncomment below if you prefer to use an text logo -->
            <!-- <h1><a href="index.html">WebinarToday</a></h1> -->
            <img src="<?php echo base_url("assets/img/logowebinartoday.png"); ?>" alt="" class="img-fluid ">
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto" href="<?php echo base_url('webinar_ctrl/s')?>">Webinar</a></li>
            <li><a class="nav-link scrollto" href="<?php echo base_url('webinar_ctrl/index')?>">Tentang Kami</a></li>
            <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">WebinarToday</a></li>
            <li><a class="nav-link scrollto" href="#team">Contact</a></li>
            <li><a class="nav-link scrollto" href="<?php echo base_url('webinar_ctrl/profile')?>">Profile</a></li>
            <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="<?php echo base_url('index.php/login_ctrl/loginUser')?>">Pengguna</a></li>
                <li><a href="<?php echo base_url('index.php/login_ctrl/loginPenyelenggara')?>">Penyelenggara</a></li>
                </ul>
            </li>
            </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- #header -->


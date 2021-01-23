<!DOCTYPE html>

<html lang="en">

<head>

    <!-- ==============================================
    Basic Page Needs
    =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <title>Lovlin</title>

    <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
    <meta name="author" content="Codings">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="/assets3/image/favicon-80px.png">
    <link rel="apple-touch-icon" href="/assets3/image/favicon-48px.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets3/image/favicon-72px.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets3/image/favicon-114px.png">

    <!-- ==============================================
    Vendor Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="/assets3/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/assets3/css/vendor/slider.min.css">
    <link rel="stylesheet" href="/assets3/css/main.css">
    <link rel="stylesheet" href="/assets3/css/vendor/icons.min.css">
    <link rel="stylesheet" href="/assets3/css/vendor/icons-fa.min.css">
    <link rel="stylesheet" href="/assets3/css/vendor/animation.min.css">
    <link rel="stylesheet" href="/assets3/css/vendor/gallery.min.css">
    <link rel="stylesheet" href="/assets3/css/vendor/cookie-notice.min.css">



    <link rel="stylesheet" type="text/css" href="/assets3/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="/assets3/js3/jquery-1.10.2.min.js"></script>


    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="/assets3/css/default.css">

    <!-- ==============================================
    Theme Color
    =============================================== -->
    <meta name="theme-color" content="#21333e">

    <!-- ==============================================
    Theme Settings
    =============================================== -->
    <style>
        :root {
            --hero-bg-color: #080d10;

            --section-1-bg-color: #ffffff;
            --section-2-bg-color: #111117;
            --section-3-bg-color: #111117;
            --section-4-bg-color: #ffffff;
            --section-5-bg-color: #eef4ed;
            --section-6-bg-color: #111117;
            --section-7-bg-color: #ffffff;

            --footer-bg-color: #080d10; --footer-bg-image: url('/assets3/images/bg-7.jpg');
        }
    </style>

    <style>
        @media screen and (min-width: 676px) {
            .modal-dialog {
                overflow-x: hidden;
                /* New width for default modal */
            }
        }


    </style>

    <style>
        @media screen and (max-width: 480px) {
            .modal-dialog {
                overflow-x: hidden; /* New width for default modal */
            }
        }
    </style>

</head>

<body class="home">

<!-- Preloader -->
<div id="preloader" data-timeout="2000" class="odd preloader counter">
    <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
        <div data-percent="100" class="radial">
            <span></span>
        </div>
    </div>
</div>

<!-- Header -->
<header id="header">


    <nav class="navbar navbar-expand navbar-fixed sub hidden-lg">
        <div class="container header">

            <!-- Navbar Brand-->
            <a class="navbar-brand" href="index.html">
                <!-- <span class="brand">
                        <span class="featured">
                            <span class="first">NEX</span>
                </span>
                <span class="last">GEN</span>
                </span> -->


                <!--Custom Logo-->
                <img src="/assets3/image/logo.png" alt="Lovlin">

            </a>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="tel:0387278287" class="nav-link" style="color: white;"><i class="fas fa-phone-alt mr-2"></i>+603-8727 8287</a>
                    </li>
                    <li class="nav-item">
                        <a href="mailto:agent@lovlinsquad.com" class="nav-link" style="color: white;"><i class="fas fa-envelope mr-2"></i>admin@lovlin.com</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link" style="color: white;">
                            <button class="btn primary-button">
                                Login
                            </button>
                        </a>
                    </li>
                </ul>
            </ul>

            <!-- Navbar Toggle -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>



        </div>
    </nav>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand top">
        <div class="container header">

            <!-- Navbar Items [left] -->
            <!-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Open Hours: Mon - Sat - 9:00 - 18:00</a>
                </li>
            </ul> -->

            <!-- Navbar Brand-->
            <a class="navbar-brand" href="index.html">
                <img src="/assets3/image/logo.png" alt="lovlin">

                <!--
                    Custom Logo
                -->
            </a>
            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items [right] -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="tel:0387278287" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>+603-8727 8287</a>
                </li>
                <li class="nav-item">
                    <a href="mailto:noir.healthbeauty@gmail.com" class="nav-link"><i class="fas fa-envelope mr-2"></i>admin@lovlin.com</a>
                </li>
            </ul>

            <!-- Navbar Icons -->
            <ul class="navbar-nav icons">
                <li class="nav-item social">
                    <a href="https://www.facebook.com/lovlinessential/" target="_blank"><img src="/assets3/image/soc-med-fb.png" alt="" width="21"></a>
                </li>
                <li class="nav-item social">
                    <a href="https://www.instagram.com/lovlinhq/?hl=en" target="_blank"><img src="/assets3/image/soc-med-ig.png" alt="" width="20" /></a>
                </li>
                <li class="nav-item" >
                    <a href="{{ route('login') }}" class="nav-link" style="color: white;">
                        <button class="primary-button">
                            Login
                        </button>
                    </a>
                </li>
            </ul>

        </div>
    </nav>



</header>

<!-- Hero -->
<section id="slider" class="hero p-0 odd hidden-xs">
    <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item 1 -->

            <div class="swiper-slide slide-center ">

                <!-- Media -->
                <img src="/assets3/image/banner.png" alt="Full Image" class="full-image" data-mask="0" >

                <div class="col-12 col-md-10 justify-content-left">
                    <div class="slide-content container">
                        <div class="col-12 d-flex justify-content-left inner">
                            <div class="col-10 left text-left content init">

                                <!-- Content -->
                                <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                    <!-- <span class="pre-title m-0">Jacob Hill Jr.</span> LIFE <span class="featured"><span>COACH</span></span> -->
                                    Siapa nak Lovlin bantu <br> untuk jana income<br> secara part time?
                                </h1>
                                <p data-aos="zoom-in" data-aos-delay="2400" class="description">Siapa nak Lovlin bantu dapatkan income sebanyak RM2000-RM8000 sebulan hanya dari rumah sahaja?</p>


                                <!-- Action -->
                                <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                    <div class="d-sm-inline-flex">
                                        <a href="#subcribe" class="mt-4 btn primary-button">DAFTAR SEKARANG</a>
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

<section id="slider" class="hero p-0 odd visible-xs">
    <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item 1 -->

            <div class="swiper-slide slide-center ">

                <!-- Media -->
                <img src="/assets3/image/banner.png" alt="Full Image" class="full-image" data-mask="0" >

                <div class="col-12 col-md-10 justify-content-left">
                    <div class="slide-content container">
                        <div class="col-12 d-flex justify-content-left inner">
                            <div class="col-10 left text-left content init">

                                <!-- Content -->
                                <h3 data-aos="zoom-in" data-aos-delay="2000" class=" effect-static-text">
                                    <!-- <span class="pre-title m-0">Jacob Hill Jr.</span> LIFE <span class="featured"><span>COACH</span></span> -->
                                    Siapa nak Lovlin bantu <br> untuk jana income<br> secara part time?
                                </h3>
                                <p data-aos="zoom-in" data-aos-delay="2400" class="description">Siapa nak Lovlin bantu dapatkan income sebanyak RM2000-RM8000 sebulan hanya dari rumah sahaja?</p>


                                <!-- Action -->
                                <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                    <div class="d-sm-inline-flex">
                                        <a href="#subcribe" class="mt-4 btn primary-button">DAFTAR SEKARANG</a>
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

<!-- Video -->
<section id="video" class="section-1-mv highlights image-center visible-xs visible-sm">
    <div class="container smaller">
        <div class="row text-center intro">
            <div class="col-10 center">
                <h4>Lovlin dah bantu lebih dari 1000 usahawan
                    untuk berjaya dan dapatkan apa yang
                    mereka inginkan.</h4>
                <p class="text-max-800 text-content"><br>Adakah Anda Orang Yang Seterusnya? Hanya dengan menjadi lovlinsquad, semua ini pasti dalam genggaman anda! Jom kami bantu dari A-Z. Semuanya disediakan!</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-10 center ">
                <a href="#myModal" class="col-10 col-md-5 item" data-toggle="modal">
                    <div class="square-image d-flex justify-content-center align-items-center">
                        <i class="icon medium fas fa-play"></i>
                        <img src="/assets3/image/thumbnail-vid.png" class="fit-image" alt="Video Description">
                    </div>
                </a>
            </div>

            <div id="myModal" class="modal fade">
                <div style="max-width: 68%;" class="modal-dialog center" >
                    <div class="modal-content">
                        <div class="embed-responsive embed-responsive-16by9" width="1404" height="509"  >
                            <iframe width="1404" height="509" src="https://www.youtube.com/embed/kDbTkNDsgWA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center intro">
            <div class="col-10 center">
                <h4><br>Jom rebut peluang menjadi sebahagian daripada keluarga LOVLIN untuk belajar rahsia nak berjaya!</h4>

                <p style="font-size: 15px;"><br>Jangan buang masa lagi!<br>Sekarang adalah masa untuk kita berubah!<br>Rebut peluang emas ini untuk sertai Lovlinsquad.<br><br>Psstt: Peluang macam ini bukannya<br> datang selalu tau!</p>
            </div>
            <div class=" input-group2 center align-self-center item">
                <a href="#subcribe" data-aos="zoom-in" class="btn-2 secondary-button-m">

                    <h7>JOM SERTAI LOVLINSQUAD <br><span class="p6">Ya, saya berminat untuk sertai Lovlinsquad!</span></h7><br>

                </a>
            </div>
        </div>
    </div>
</section>

<section id="video" class="section-1 highlights image-center hidden-xs hidden-sm" >
    <div class="container smaller">
        <div class="row text-center intro">
            <div class="col-12">
                <h2>Lovlin dah bantu lebih dari 1000 usahawan
                    untuk berjaya dan dapatkan apa yang
                    mereka inginkan.</h2>
                <p class="text-max-800 p1">Adakah Anda Orang Yang Seterusnya?<br><br>Hanya dengan menjadi lovlinsquad, semua ini<br>pasti dalam genggaman anda!<br><br>Jom kami bantu dari A-Z. Semuanya disediakan!</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 ">
                <a href="#myModal-m" class="col-12 col-md-5 item" data-toggle="modal">
                    <div class="square-image d-flex justify-content-center align-items-center">
                        <i class="icon bigger fas fa-play"></i>
                        <img src="/assets3/image/thumbnail-vid.png" class="fit-image" alt="Video Description">
                    </div>
                </a>
            </div>

            <div id="myModal-m" class="modal fade">
                <div style="max-width: 68%;" class="modal-dialog center" >
                    <div class="modal-content">
                        <div class="embed-responsive embed-responsive-16by9" width="1404" height="509"  >
                            <iframe width="1404" height="509" src="https://www.youtube.com/embed/kDbTkNDsgWA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center intro">
            <div class="col-12">
                <h4 class="top-space">Jom rebut peluang menjadi sebahagian daripada<br>keluarga LOVLIN untuk belajar rahsia nak berjaya!</h4>

                <p class="p2">Jangan buang masa lagi!<br>Sekarang adalah masa untuk kita berubah!<br>Rebut peluang emas ini untuk sertai Lovlinsquad.<br><br>Psstt: Peluang macam ini bukannya datang selalu tau!</p>
            </div>
            <div class=" input-group2 center align-self-center item">
                <a href="#subcribe" data-aos="zoom-in" class="btn-2 secondary-button">

                    <h6>JOM SERTAI LOVLINSQUAD <br><span class="p3">Ya, saya berminat untuk sertai Lovlinsquad!</span></h6><br>

                </a>
            </div>
        </div>
    </div>
</section>



<section class="section-2 odd showcase blog-grid projects hidden-xs hidden-sm">

    <div class="container full-grid">
        <div class="row text-center">
            <div class="col-12">
                <h5>Susah ke nak jadi usahawan?</h5>
            </div>

            <div class="col-12">
                <p data-aos="zoom-in" data-aos-delay="0.4s" class="description center">Tidak! Jika anda ingin berjaya, ini perkara penting yang anda kena ambik tahu.</p><br><br>

                <p data-aos="zoom-in" data-aos-delay="0.5s" class="description center">Nak berjaya anda perlu melalui proses. Kita sebagai manusia perlu berani<br> menghadapi proses tersebut. Bila berniaga kita perlu ada tujuan dan matlamat.<br> Usahawan perlu tahu apa yang mereka inginkan! Perlu ada positif mindset dan ada<br> BIG WHY! Niat LOVLIN adalah untuk membantu orang ramai mendapat manfaat<br> daripada rangkaian produk kami.</p>
            </div>
        </div>
        <br><br>



    </div>

</section>

<section class="section-2-mv odd showcase blog-grid projects visible-xs visible-sm">

    <div class="container full-grid">
        <div class="row text-center">
            <div class="col-12">
                <h5>Susah ke nak jadi usahawan?</h5>
            </div>

            <div class="col-10 center">
                <p data-aos="zoom-in" data-aos-delay="0.4s" class="description center">Tidak! Jika anda ingin berjaya, ini perkara penting yang anda kena ambik tahu.</p><br>

                <p data-aos="zoom-in" data-aos-delay="0.5s" class="description" style="text-align: justify;">Nak berjaya anda perlu melalui proses. Kita sebagai manusia perlu berani menghadapi proses tersebut. Bila berniaga kita perlu ada tujuan dan matlamat. Usahawan perlu tahu apa yang mereka inginkan! Perlu ada positif mindset dan ada BIG WHY! Niat LOVLIN adalah untuk membantu orang ramai mendapat manfaat daripada rangkaian produk kami.</p>
            </div>
        </div>
        <br><br>



    </div>

</section>

<section id="blog" class="section-5 carousel showcase hidden-xs hidden-sm">
    <div class="overflow-holder">
        <div class="container">

            <div class="row items filter-items">
                <div class="col-12 col-md-6 col-lg-4 item" >
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="/assets3/image/box-1.png" alt="Lovlin">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="#">
                                    <h4>Nak berniaga tapi tiada siapa untuk bimbing anda?</h4>
                                    <p class="p4">Berniaga ni bukanlah satu perkara yang<br>mudah. Banyak benda yang perlu di ambik<br>tahu sehingga boleh mengelirukan anda<br>untuk mula daripada mana.<br><br>Sumber-sumber ilmu dan bimbingan juga<br>memainkan peranan yang sangat penting<br>untuk membantu anda berjaya. Tapi mungkin<br>anda masih belum jumpa lagi.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 item" >
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="/assets3/image/box-2.png" alt="Lovlin">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body2">
                                <a href="#">
                                    <h4>Sentiasa dihantui oleh perasaan takut untuk GAGAL? </h4>
                                    <p class="p4">Satu sifat yang wajib anda ada untuk berniaga adalah berani mengambil risiko.Siapa sahaja yang tak takut kalau tak berjaya? Semua benda yang kita buat pasti ada risiko untuk gagal, lagi-lagi dalam perniagaan. Inilah punca pertama ramai yang tak berani untuk berniaga kerana takut nak amik risiko.<br><br>Anda tak perlu risau lagi, dengan menyertai Lovlinsquad, anda akan dibimbing step-by-step untuk berjaya dalam perniagaan </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item" >
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="/assets3/image/box-3.png" alt="Lovlin">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="#">
                                    <h4>Tak sedar peluang emas di depan mata? </h4>
                                    <p class="p4">Kalau memang rezeki, peluang ada di<br>mana-mana sahaja. Samaada kita pandai<br>lihat dan rebut peluang-peluang tersebut.<br>Ada juga masa bila kita menyesal tak rebut<br>peluang-peluang ini yang mungkin dapat<br>mengubah kehidupan.<br><br>Ambillah ini sebagai peluang untuk anda<br>berjaya dan mengubah hidup anda dan<br>keluarga. In shaa Allah. </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section-3-mv showcase blog-grid projects visible-xs visible-sm">

    <div class="container full-grid">

        <div class="row text-center">
            <div class="col-10 center">
                <br>
                <h4 style="text-align: center">Jangan terus kecewa kalau anda masih belum berjaya lagi. Satu perkara kena faham adalah anda bukanlah puncanya!</h4>
                <br>
            </div>

            <div class="col-10 center">
                <p data-aos="zoom-in" data-aos-delay="0.4s" class="description center p2 text-content" >Nak cari orang-orang yang mampu mendorong dan membantu anda membesar dari segi fizikal dan mental bukanlah perkara mudah. Tapi, bersama Lovlin, kami akan sentiasa bersama anda untuk membimbing anda sehingga berjaya!</p><br>

            </div>
        </div>
    </div>

</section>

<section id="blog" class="section-5-mv carousel showcase visible-xs visible-sm">
    <div class="overflow-holder">
        <div class="container">

            <div class="row items filter-items">
                <div class="col-12 col-md-6 col-lg-4 item center" style="padding-bottom:20px" >
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="/assets3/image/box-1.png" alt="Lovlin">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">

                                <h4>Nak berniaga tapi tiada siapa untuk bimbing anda?</h4>
                                <p class="p4">Berniaga ni bukanlah satu perkara yang mudah. Banyak benda yang perlu di ambik tahu sehingga boleh mengelirukan anda untuk mula daripada mana.<br><br>Sumber-sumber ilmu dan bimbingan juga memainkan peranan yang sangat penting untuk membantu anda berjaya. Tapi mungkin anda masih belum jumpa lagi.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row items filter-items">
                <div class="col-12 col-md-6 col-lg-4 item center" style="padding-bottom:20px">
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="/assets3/image/box-2.png" alt="Lovlin">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body2">

                                <h4>Sentiasa dihantui oleh perasaan takut untuk GAGAL? </h4>
                                <p class="p4">Satu sifat yang wajib anda ada untuk berniaga adalah berani mengambil risiko.Siapa sahaja yang tak takut kalau tak berjaya? Semua benda yang kita buat pasti ada risiko untuk gagal, lagi-lagi dalam perniagaan. Inilah punca pertama ramai yang tak berani untuk berniaga kerana takut nak amik risiko.<br><br>Anda tak perlu risau lagi, dengan menyertai Lovlinsquad, anda akan dibimbing step-by-step untuk berjaya dalam perniagaan </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row items filter-items">
                <div class="col-12 col-md-6 col-lg-4 item center" style="padding-bottom:20px">
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="/assets3/image/box-3.png" alt="Lovlin">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">

                                <h4>Tak sedar peluang emas di depan mata? </h4>
                                <p class="p4">Kalau memang rezeki, peluang ada di mana-mana sahaja. Samaada kita pandai lihat dan rebut peluang-peluang tersebut. Ada juga masa bila kita menyesal tak rebut peluang-peluang ini yang mungkin dapat mengubah kehidupan.<br><br>Ambillah ini sebagai peluang untuk anda berjaya dan mengubah hidup anda dan keluarga. In shaa Allah. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<section class="section-3 showcase blog-grid projects hidden-xs hidden-sm">

    <div class="container full-grid">

        <div class="row text-center intro">
            <div class="col-12">
                <br>
                <h4 class="p5">Jangan terus kecewa kalau anda masih belum<br> berjaya lagi. Satu perkara yang kena faham adalah<br> anda bukanlah puncanya!</h4>
                <br>
            </div>

            <div class="col-12">
                <p data-aos="zoom-in" data-aos-delay="0.4s" class="description center p2">Nak cari orang-orang yang mampu mendorong dan membantu anda membesar dari<br> segi fizikal dan mental bukanlah perkara mudah. Tapi, bersama Lovlin, kami akan<br> sentiasa bersama untuk membimbing anda sehingga berjaya!</p><br><br>

            </div>
        </div>
        <br><br>



    </div>

</section>


<section class="section-6 odd showcase blog-grid projects hidden-xs">
    <div class="row text-center intro">
        <div class="col-12">
            <h4><br><br>Lovlin mencari ejen dan stokis yang mempunyai impian<br> dan harapan untuk mengubah hidup mereka seratus<br> peratus! Lovlin akan merealisasikan impian anda!<br></h4>

            <p class="p4"><br>Lovlin sentiasa berusaha untuk mengeluarkan rangkaian produk yang berkualiti<br> tinggi dan pada harga yang berpatutan untuk semua. Yang paling penting, Lovlin<br> berusaha untuk berjaya dan menaikkan lagi brand dalam Malaysia dan di luar<br> negara!<br>Sesuai dengan motto LOVLIN :</p>
            <h4>“Mampu Sihat, Mampu Cantik, Mampu Milik”</h4>
            <br><br><br>


        </div>
        <div class="input-group2 center align-self-center item top-space">
            <a href="#subcribe" data-aos="zoom-in" class="btn-2 secondary-button">

                <h6>JOM SERTAI LOVLINSQUAD <br><span class="p3">Ya, saya berminat untuk sertai Lovlinsquad!</span></h6><br>

            </a>
        </div>
    </div>

</section>

<section class="section-13-mv odd showcase blog-grid projects visible-xs">
    <div class="row text-center intro col-12">
        <div class="col-10 p-0 center ">
            <h4 text align="center"><br><br>Lovlin mencari ejen dan stokis yang mempunyai impian dan harapan untuk mengubah hidup mereka seratus peratus! Lovlin akan merealisasikan impian anda!<br></h4>

            <p class="p4"><br>Lovlin sentiasa berusaha untuk mengeluarkan rangkaian produk yang berkualititinggi dan pada harga yang berpatutan untuk semua. Yang paling penting, Lovlin berusaha untuk berjaya dan menaikkan lagi brand dalam Malaysia dan di luar negara! Sesuai dengan motto LOVLIN :</p>
            <h4>“Mampu Sihat, Mampu Cantik, Mampu Milik”</h4>
            <br><br><br>

        </div>
        <div class=" input-group2 center align-self-center item">
            <a href="#subcribe" data-aos="zoom-in" class="btn-2 secondary-button-m">

                <h7>JOM SERTAI LOVLINSQUAD <br><span class="p6">Ya, saya berminat untuk sertai Lovlinsquad!</span></h7><br>

            </a>
        </div>
    </div>

</section>


<section class="section-2 odd showcase blog-grid projects hidden-xs hidden-sm">

    <div class="container full-grid">
        <div class="row text-center">
            <div class="col-12">
                <h2>Disebalik Lovlin</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left text">
                <div data-aos="fade-up" class="row intro aos-init aos-animate"></div>
                <div class="container smaller">
                    <a class="col-12 col-md-5 item">
                        <div class="d-flex justify-content-center align-items-center"><br>
                            <img src="/assets3/image/founder.png" class="fit-image w-65" alt="Lovlin">
                        </div>
                    </a>
                    <br><br><br>
                </div>
            </div>

            <div class="col-12 col-md-5 pr-md-5 align-self-center text-md-left text">
                <div data-aos="fade-up" class="row intro aos-init aos-animate">
                    <div class="col-12 p-0 ">
                        <p class="text-content p-top">Sewaktu Puan Marlyn (Founder Lovlin) hamil dengan puteri yang ke-3, Puan Marlyn suka kongsikan apa yang diamalkannya di Facebook. Sejak itu, ramai yang tertanya-tanya apa yang Puan Marlyn amalkan selama 9 bulan tersebut. Jadi, bermula daripada situlah Puan Marlyn yakin dan terus membuat keputusan untuk mengeluarkan minuman sarang burungnya sendiri!<br><br><br>
                        </p>
                        <h4 class="top-space">Puan Marlyn</h4>
                        <p>Founder Lovlin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-2-mv odd showcase blog-grid projects visible-xs">

    <div class="container full-grid">
        <div class="row text-center">
            <div class="col-12">
                <h2>Disebalik Lovlin<br></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 align-self-center text-center text">

                <div class="container smaller">
                    <a class="item">
                        <div class="col-10 justify-content-center center align-items-center"><br>
                            <img src="/assets3/image/founder.png" class="fit-image w-65" alt="Lovlin">
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 align-self-center text-md-left text">
                <div data-aos="fade-up" class="row intro aos-init aos-animate">
                    <div class="col-10 p-0 center text-content ">
                        <p class="p-top">Sewaktu Puan Marlyn (Founder Lovlin) hamil puteri yang ke-3, Puan Marlyn suka kongsikan apa yang diamalkannya di Facebook. Sejak itu, ramai yang tertanya-tanya apa yang Puan Marlyn amalkan selama 9 bulan tersebut. Jadi, bermula daripada situlah Puan Marlyn yakin dan terus membuat keputusan bagi mengeluarkan minuman sarang burungnya sendiri!<br><br><br>
                        </p>
                        <h4>Puan Marlyn</h4>
                        <p>Founder Lovlin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-2-mv odd showcase blog-grid projects visible-sm">

    <div class="container full-grid">
        <div class="row text-center">
            <div class="col-12">
                <h2>Disebalik Lovlin<br><br></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-10 center align-self-center text-center text-md-left text">

                <div class="container smaller">
                    <a class="item">
                        <div class="d-flex justify-content-center align-items-center"><br>
                            <img src="/assets3/image/founder.png" class="fit-image w-65" alt="Lovlin">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 center align-self-center text-md-left text">
                <div data-aos="fade-up" class="row intro aos-init aos-animate">
                    <div class="col-12 p-0 center text-content ">
                        <p class="p-top">Sewaktu Puan Marlyn (Founder Lovlin) hamil puteri yang ke-3, Puan Marlyn suka kongsikan apa yang diamalkannya di Facebook. Sejak itu, ramai yang tertanya-tanya apa yang Puan Marlyn amalkan selama 9 bulan tersebut. Jadi, bermula daripada situlah Puan Marlyn yakin dan terus membuat keputusan untuk mengeluarkan minuman sarang burungnya sendiri!<br><br><br>
                        </p>
                        <h4>Puan Marlyn</h4>
                        <p>Founder Lovlin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-7 odd showcase blog-grid projects hidden-xs hidden-sm">
    <div class="row">
        <div class="col-12 col-md-6 pl-md-5 align-self-center text-center text-md-left text">
            <div data-aos="fade-up" class="row intro aos-init aos-animate"></div>
            <div class="container smaller">
                <a class="col-12 col-md-5 item">

                </a>
                <br><br><br>
            </div>
        </div>

        <div class="col-12 col-md-6 pr-md-5 align-self-center text-md-left text">
            <div data-aos="fade-up" class="row intro aos-init aos-animate">
                <div class="col-12 p-0 ">
                    <h3>Lovlin juga bermula dari bawah</h3>
                    <p class="text-content">Pengalaman menaikkan Lovlin dari permulaan yang kecil bukanlah perkara yang senang. Seperti orang lain yang baru memulakan perniagaan, Puan Marlyn dan Encik Badri (Founder & COO Lovlin)juga terpaksa mengharungi pelbagai cabaran dan dugaan.<br><br> Atas berkat kesungguhan yang tinggi dan doa yang tidak pernah putus kepada yang Maha Esa, akhirnya Lovlin yang hanya bermula daripada cetusan idea Puan Marlyn kini berkembang maju.<br><br> Bisnes yang pada mulanya hanya bergantung kepada jualan di Facebook Puan Marlyn sendiri, kini bangkit dan menjadi bisnes minuman sarang burung yang diturut dibantu oleh agen-agen dan stokis-stokis yang berjaya.
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section-7-mv odd showcase blog-grid projects visible-xs visible-sm">
    <div class="row">

        <div class="col-12  align-self-center text">
            <div data-aos="fade-up" class="row intro aos-init aos-animate">
                <div class="col-10 center p-0 ">
                    <h3 style="text-align: center">Lovlin juga bermula dari bawah</h3>
                    <p class="text-content">Pengalaman menaikkan Lovlin dari permulaan yang kecil bukanlah perkara yang senang. Seperti orang lain yang baru memulakan perniagaan, Puan Marlyn dan Encik Badri (Founder & COO Lovlin)juga terpaksa mengharungi pelbagai cabaran dan dugaan.<br><br> Atas berkat kesungguhan yang tinggi dan doa yang tidak pernah putus kepada yang Maha Esa, akhirnya Lovlin yang hanya bermula daripada cetusan idea Puan Marlyn kini berkembang maju.<br><br> Bisnes yang pada mulanya hanya bergantung kepada jualan di Facebook Puan Marlyn sendiri, kini bangkit dan menjadi bisnes minuman sarang burung yang diturut dibantu oleh agen-agen dan stokis-stokis yang berjaya.
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section-8 showcase blog-grid projects hidden-xs hidden-sm" >
    <div class="row">

        <div class="col-12 col-md-5 pl-md-5 align-self-center text-md-left text">
            <div data-aos="fade-up" class="row intro aos-init aos-animate">
                <div class="col-12 p-0 ">
                    <h3>Ejen dan Stokis lah pelengkap Lovlin!</h3>
                    <p class="text-content">Selain minuman sarang burung yang berkhasiat, Lovlin juga terkenal kerana mempunyai ejen-ejen di seluruh Malaysia, Brunei dan Singapura yang sangat commited dan supportive! Tanpa mereka semua, Lovlin tidak akan berada pada kejayaan dan pada tahap ini sekarang. Dengan kejayaan ini lah, Lovlin akan terus bangkit dan maju sambil membantu ejen-ejen berjaya untuk menjana pendapatan yang lumayan.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-10 col-md-5 pr-md-4 align-self-center text-center text-md-left text position-r">
            <div data-aos="fade-up" class="row intro aos-init aos-animate"></div>
            <div class="container-box">
                <a class="col-12 col-md-5 item">
                    <img src="/assets3/image/2-col-2.png" class="fit-image" alt="Lovlin">
                </a>
                <br><br><br><br>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-10 col-md-5 pl-md-4 align-self-center text-md-left text">
            <div data-aos="fade-up" class="row intro aos-init aos-animate"></div>
            <div class="container-box">
                <a class="col-12 col-md-5 item">
                    <img src="/assets3/image/2-col-1.png" class="fit-image" alt="Lovlin">
                </a>
            </div>
        </div>

        <div class="col-12 col-md-5 pl-md-5 align-self-center text-md-left text">
            <div data-aos="fade-up" class="row intro aos-init aos-animate">
                <div class="col-12 p-0 ">
                    <h3>Lovlin hanya ingin melihat anda berjaya & bahagia</h3>
                    <p class="text-content">Kami percaya semua orang boleh menjadi usahawan yang berjaya. Lovlin ingin membantu anda semua mengubah hidup anda sekeluarga.
                    </p>
                </div>
            </div>
        </div>


    </div>

</section>

<section class="section-8-mv showcase blog-grid projects visible-xs visible-sm" >
    <div class="row">

        <div class="col-12 align-self-center text">
            <div data-aos="fade-up" class="row aos-init aos-animate">
                <div class="col-10 center p-0 ">
                    <h3 style="text-align: center">Ejen dan Stokis lah pelengkap Lovlin!</h3>
                    <p class="text-content">Selain minuman sarang burung yang berkhasiat, Lovlin juga terkenal kerana mempunyai ejen-ejen di seluruh Malaysia, Brunei dan Singapura yang sangat commited dan supportive! Tanpa mereka semua, Lovlin tidak akan berada pada kejayaan dan pada tahap ini sekarang. Dengan kejayaan ini lah, Lovlin akan terus bangkit dan maju sambil membantu ejen-ejen berjaya untuk menjana pendapatan yang lumayan.
                    </p>
                    <br>
                </div>
            </div>
        </div>

        <div class="col-10 align-self-center text-center center text">
            <div class="container-box">
                <a>
                    <img src="/assets3/image/2-col-2.png" class="fit-image" alt="Lovlin">
                </a>
                <br><br><br><br>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-12 align-self-center text">
            <div data-aos="fade-up" class="row intro aos-init aos-animate">
                <div class="col-10 center p-0 ">
                    <h3 style="text-align: center">Lovlin hanya ingin melihat anda berjaya & bahagia</h3>
                    <p class="text-content">Kami percaya semua orang boleh menjadi usahawan yang berjaya. Lovlin ingin membantu anda semua mengubah hidup anda sekeluarga.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-10 align-self-center text-center center text">
            <div class="container-box">
                <a>
                    <img src="/assets3/image/2-col-1.png" class="fit-image" alt="Lovlin">
                </a>
                <br><br>
            </div>
        </div>


    </div>

</section>



<section class="section-6 showcase blog-grid projects hidden-xs hidden-sm">
    <div class="row text-center intro odd ">
        <div class="col-12">
            <h3><br><br>4 Kelebihan mendaftar sebagai ejen Lovlin<br></h3>

            <p>Kami percaya semua orang boleh menjadi usahawan yang berjaya.<br>Lovlin ingin membantu anda semua mengubah hidup anda sekeluarga.</p>
            <br><br><br>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center items">
            <div class="col-12 col-md-6 col-lg-5 item">
                <div class="card">
                    <i class="icon icon-1"></i>
                    <h4>Free coaching bersama private coach Lovlin</h4>
                    <p class="p4" style="text-align: justify"><br>Sebelum bermulanya perjalanan hidup anda sebagai ejen Lovlin yang berjaya, anda akan terlebih dahulu dilatih oleh private coach Lovlin. Sesi free coaching ini sebanyak 1x seminggu dengan pelbagai modul. Lovlin akan bantu anda timba banyak lagi ilmu dan asah skills anda yang sedia ada!</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 item">
                <div class="card">
                    <i class="icon icon-2"></i>
                    <h4>Group support di WhatsApp, Telegram, Facebook dan Classroom!</h4>
                    <p class="p4" style="text-align: justify"><br>Melalui media sosial, SquadLovlin di WhatsApp, Telegram, Facebook, dan Classroom, anda dan ejen-ejen lain akan menjadi orang pertama untuk terima marketing kit dan segala update tentang product, consumers dan macam-macam lagi!</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 item">
                <div class="card">
                    <i class="icon icon-3"></i>
                    <h4>Media Marketing disediakan</h4>
                    <p class="p4" style="text-align: justify"><br>Anda bukan sahaja dapat mengasah kemahiran anda yang sedia ada, tapi anda juga akan dapat belajar tentang ilmu-ilmu marketing yang terbaik dan efektik! Segala jenis “marketing material” akan di beri termasuklah gambar, copywriting dan lain lain lagi.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 item">
                <div class="card">
                    <i class="icon icon-4"></i>
                    <h4>Reward menarik untuk yang mencapai target</h4>
                    <p class="p4" style="text-align: justify"><br>Untuk menunjukkan penghargaan terhadap ejen-ejen Lovlin yang mencapai target, kami menyediakan reward istimewa untuk anda semua. Ini juga akan membuatkan anda bersemangat untuk capai lagi target pada masa akan datang!</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section-6-mv showcase blog-grid projects visible-xs visible-sm">
    <div class="row text-center intro odd ">
        <div class="col-12">
            <h3><br>4 Kelebihan mendaftar sebagai ejen Lovlin<br></h3>

            <p>Kami percaya semua orang boleh menjadi usahawan yang berjaya.<br>Lovlin ingin membantu anda semua mengubah hidup anda sekeluarga.</p>

        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center items">
            <div class="col-12 col-md-6 col-lg-5 item">
                <div class="card">
                    <i class="icon icon-1"></i>
                    <h4>Free coaching bersama private coach Lovlin</h4>
                    <p class="p4" style="text-align: justify"><br>Sebelum bermulanya perjalanan hidup anda sebagai ejen Lovlin yang berjaya, anda akan terlebih dahulu dilatih oleh private coach Lovlin. Sesi free coaching ini sebanyak 1x seminggu dengan pelbagai modul. Lovlin akan bantu anda timba banyak lagi ilmu dan asah skills anda yang sedia ada!</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 item">
                <div class="card">
                    <i class="icon icon-2"></i>
                    <h4>Group support di WhatsApp, Telegram, Facebook dan Classroom!</h4>
                    <p class="p4" style="text-align: justify"><br>Melalui media sosial, SquadLovlin di WhatsApp, Telegram, Facebook, dan Classroom, anda dan ejen-ejen lain akan menjadi orang pertama untuk terima marketing kit dan segala update tentang product, consumers dan macam-macam lagi!</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 item">
                <div class="card">
                    <i class="icon icon-3"></i>
                    <h4>Media Marketing disediakan</h4>
                    <p class="p4" style="text-align: justify"><br>Anda bukan sahaja dapat mengasah kemahiran anda yang sedia ada, tapi anda juga akan dapat belajar tentang ilmu-ilmu marketing yang terbaik dan efektik! Segala jenis “marketing material” akan di beri termasuklah gambar, copywriting dan lain lain lagi.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 item">
                <div class="card">
                    <i class="icon icon-4"></i>
                    <h4>Reward menarik untuk yang mencapai target</h4>
                    <p class="p4" style="text-align: justify"><br>Untuk menunjukkan penghargaan terhadap ejen-ejen Lovlin yang mencapai target, kami menyediakan reward istimewa untuk anda semua. Ini juga akan membuatkan anda bersemangat untuk capai lagi target pada masa akan datang!</p>
                </div>
            </div>
        </div>
    </div>

</section>



<section class="section-8 showcase blog-grid projects hidden-xs hidden-sm" >
    <div class="row">

        <div class="col-12 col-md-7 pl-md-3 align-self-center text-md-left text">
            <div data-aos="fade-up" class="row intro aos-init aos-animate">
                <div class="col-12 p-0 ">
                    <h3>Anda adalah orang yang bakal berjaya dengan bimbingan kami yang dicari-cari selama ini</h3>
                    <p class="text-content p-space">Ramai yang ingin sertai Lovlinsquad. Jadi, tunggu apa lagi? Peluang macam ini bukan selalu datang bergolek, jom sertai kami sekarang!
                    </p>
                </div>
            </div>
        </div>

        <div class="col-10 col-md-4 pl-md-4 align-self-center text-center text position-r">
            <div data-aos="fade-up" class="row intro aos-init aos-animate"></div>
            <div data-aos="fade-up" data-aos-delay="1800" class="buttons">
                <div class="d-sm-inline-flex">
                    <a href="#subcribe" class="mt-4 btn primary-button">Saya Nak Join Lovlinsquad</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section-8-mv showcase blog-grid projects visible-xs visible-sm" >
    <div class="row">

        <div class="col-12 align-self-center text text-center">
            <div data-aos="fade-up" class="aos-init aos-animate">
                <div class="col-10 p-0 center ">
                    <h3>Anda adalah orang yang bakal berjaya dengan bimbingan kami yang dicari-cari selama ini</h3>
                    <p class="text-center p-space">Ramai yang ingin sertai Lovlinsquad. Jadi, tunggu apa lagi? Peluang macam ini bukan selalu datang bergolek, jom sertai kami sekarang!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10 center align-self-center text-center text ">
            <div data-aos="fade-up" class="row aos-init aos-animate"></div>
            <div data-aos="fade-up" data-aos-delay="1800" class="buttons">
                <div class="d-sm-inline-flex">
                    <a href="#subcribe" class="mt-4 btn primary-button center">Saya Nak Join Lovlinsquad</a>
                </div><br><br>
            </div>
        </div>
    </div>

</section>

<section class="section-9 showcase blog-grid projects hidden-xs">
    <div class="row text-center intro  ">
        <div class="col-12">
            <h3><br><br>Daftar sebagai Ejen Lovlin dan sertai Lovlinsquad!<br></h3>

            <p>Setiap ejen Lovlin yang baru mendaftar perlu membuat pembelian pertama<br> yang merangkumi produk-produk berikut:</p>
            <br>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-12">
            <a class="square-image1 d-flex justify-content-center align-items-center">
                <img src="/assets3/image/table.png" class="fit-image" alt="table"><br><br>
            </a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <div data-aos="fade-up" data-aos-delay="1800" class="buttons">
                <div class="d-sm-inline-flex">
                    <a href="#subcribe" class="mt-4 btn primary-button center">Saya Nak Join Lovlinsquad</a>
                </div><br><br>
            </div>
        </div>
    </div>
</section>

<section class="section-9-mv showcase blog-grid projects visible-xs">
    <div class="row text-center intro  ">
        <div class="col-12">
            <h3>Daftar sebagai Ejen Lovlin dan sertai Lovlinsquad!<br></h3>

            <p>Setiap ejen Lovlin yang baru mendaftar perlu membuat pembelian pertama<br> yang merangkumi produk-produk berikut:</p>

        </div>
    </div>

    <div class="row text-center">
        <div class="col-12">
            <a class="square-image1 d-flex justify-content-center align-items-center">
                <img src="/assets3/image/table.png" class="fit-image" alt="table"><br><br>
            </a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <div data-aos="fade-up" data-aos-delay="1800" class="buttons">
                <div class="d-sm-inline-flex">
                    <a href="#subcribe" class="mt-4 btn primary-button center">Saya Nak Join Lovlinsquad</a>
                </div><br><br>
            </div>
        </div>
    </div>
</section>

<section class="section-10 offers hidden-xs hidden-sm">
    <div class="container full-grid" >
        <div class="row text-center intro">
            <div class="col-10 center">
                <h3><br><br>Kisah perjalanan Leader Lovlin yang berjaya meraih pendapatan sampingan yang lumayan!<br></h3>

            </div>
        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-1.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                Lovlin telah bantu saya mencapai impian untuk memiliki kereta idaman dan selesaikan pelbagai jenis hutang!
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">ROZYANI RAPPA</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Johor</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup1" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-1.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya ogy,  umur 42 tahun. Saya sertai Lovlin sebagai agent pada November 2018.  Bermula dari rakan kerja yang bercerita tentang kelebihan minuman sarang burung menyebabkan perkenalan saya dengan founder Lovlin dan  perjalanan saya sebagai agent bermula.  Saya tertarik untuk sertai LOVLIN kerana Lovlin menyediakan produk minuman sarang burung yang  halal,  produk yang unik  dan paling penting Lovlin adalah minuman mampu milik pertama di Malaysia.<br><br>
                                Disebabkan saya yakin produk Lovlin mempunyai potensi yang tinggi saya telah termotivasi untuk upgrade level sebagai stokis pada hari yang sama saya mendaftar sebagai agent.<br><br>
                                Alhamdulillah baru beberapa bulan bersama Lovlin saya telah berjaya membeli kereta Honda City dan dapat selesaikan pelbagai jenis hutang. Malah sepanjang bersama Lovlin saya telah berjaya membawa team saya menjadi Top 1 beberapa kali malah saya juga dapat pelbagai rewards berupa emas 916 dan juga trip percutian.<br><br>
                                Misi dan Visi saya untuk bantu team saya jana income 6 angka sebulan dan bebas dari masalah kewangan.<br><br>
                                Terima kasih pada founder Lovlin dan HQ Lovlin yang sentiasa memberi sokongan pada kami team Lovlin untuk terus berjaya dengan LOVLIN<br><br>
                                Total Sales: <br>2019 – 2020: RM 1,377,005.15

                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">ROZYANI RAPPA</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Johor</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>

        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-2.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Siapa sangka, saya dapat memiliki barang kemas dan percutian bersama Lovlin sebagai reward pencapaian!"
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">JUNITA INDRAYANTI </p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Kuala Lumpur</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup2" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-2.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Assalamu'alaikum<br><br>

                                Saya Junita, umur 40 tahun. Permulaan saya dengan Lovlin pada akhir Oktober 2018. Masa tu saya ternampak post founder Puan Amalin yang bercerita tentang kebaikan sarang burung dengan harga mampu milik.<br><br>

                                So tanpa berfikir panjang saya langsung beli 5 set RM100. Lepas 3 set minum Lovlin, Alhamdulillah period yang bermasalah dah lancar.  Terkesan dengan kebaikan Lovlin, saya langsung berminat untuk menjadi squad Lovlin dan saya langsung menjadi stokis Lovlin.<br><br>

                                Perjalanan bersama Lovlin selama 2 tahun banyak hasil dari berniaga dan pengalaman manis.  Alhamdulillah saya dah menjadi leader Lovlin area KL & Ampang.<br><br>

                                Menjadi Top Achievers, saya dah memiliki barang kemas untuk rewards pencapaian team dan percutian bersama Lovlin HQ. Syukur Alhamdulillah.<br><br>

                                Misi dan visi saya untuk menaikan nama Lovlin agar lebih dikenali di dalam Malaysia dan Antarabangsa.<br><br>

                                Terima kasih Puan Founder dan Lovlin HQ yang sentiasa memberi support untuk saya, Leader KL Squad.<br><br>

                                Mampu cantik, mampu sihat dengan mampu milik ❣️<br><br>

                                Total Sales:<br>
                                2019 – 2020: RM 1,089,337.75


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">JUNITA INDRAYANTI</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Kuala Lumpur</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>

        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-3.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Sepanjang bersama-sama Lovlin saya telah mendapat reward emas, handbag berjenama dan sebagainya."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">ROS JIHANI RAPPA</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Melaka</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup3" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-3.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Saya mula mengenali Lovlin pada penghujung November 2018 sebagai customer dan terus sign up sebagai Agent dengan pembelian 16set Lovlin 7% .Selama beberapa minggu pengambilan Lovlin 7% saya mengalami batuk yang teruk memandangkan saya penghidap penyakit Asthma yang kronik .Saya kurangkan pengambilan sehari 2 botol Lovlin kepada seminggu 3 botol .Selepas itu saya dapati batuk teruk telah beransur hilang dan saya terus mengambil Lovlin 7% seperti biasa sehari 2 botol pagi sebelum breakfast dan malam sebelum tidur. Alhamdulillah berkat konsisten hingga kini serangan asthma semakin berkurangan dan boleh saya katakan hingga kini saya tidak mengalami serangan asthma yang teruk hanya batuk biasa.Selain mengamalkan Lovlin sebagai supplement harian saya, saya juga menjual produk Lovlin sebagai sumber pendapatan sampingan . Alhamdulillah hasil jualan Lovlin selama 3 bulan saya dapat membeli motosikal untuk husband saya secara tunai bernilai RM6K. Seterusnya hasil jualan Lovlin saya dapat mengerjakan Umrah bersama-sama suami, Ibu, dua orang anak dan adik lelaki dan kos sebelum, semasa dan selepas lebih kurang RM60K.<br><br>

                                Alhamdulillah kini saya telah upgrade diri sebagai Leader Melaka dan seterusnya dapat menghadiahkan sebuah kereta 4x4 Navara buat suami saya untuk kegunaan sendiri dan kegunaan mengambil stok produk Lovlin.Sepanjang bersama-sama Lovlin saya juga telah mendapat reward Emas, Handbeg berjenama dan sebagainya.Saya sangat bersyukur mengenali produk Lovlin .Terima kasih tidak terhingga saya ucapkan buat pengasas produk Lovlin Puan Marlyn Azhan, Abam Pengawas En.Badri, Coach Dina, semua staff Lovlin kerana sudi berkongsi rezeki dengan saya dan sentiasa memudahkan urusan saya bersama- sama  Lovlin.
                                Akhir kata saya berdoa agar terus berjaya bersama-sama dengan Lovlin .. Insyaallah<br><br>

                                Total Sales:<br>

                                2019 – 2020: RM 601, 004.85


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">ROS JIHANI RAPPA</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Melaka</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-4.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Setelah menyertai Lovlinsquad, banyak yang saya telah capai.Kerana Lovlin saya <br>dapat berbakti kepada keluarga."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">NORSURIATY AHMAD SARKAWI</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Perak</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup4" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-4.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Assalamualaikum....<br><br>

                                Saya bermula dengan Lovlin sebagai pengguna di mana saya tertarik dengan posting BFF saya yang consume Lovlin.<br><br>
                                Jadi saya mencuba dengan 3 set Lovlin Bird Nest 7%..Apabila minum botol ketiga saya telah mendapat kesan di mana tumit kaki tidak sakit lagi apabila bangun dari tidur dan kulit terasa lembab dan fresh...
                                <br><br>
                                Selepas itu, dengan kata-kata semangat dari suami, saya terus menghubungi Puan Malin dan bertanya tentang pakej Agen..Pada 10 Feb 2019 saya sah menjadi agen tetapi dalam masa 2 minggu sahaja kerana 'terpaksa' upgrade ke Stokis kerana permintaan yang sangat tinggi..
                                <br><br>
                                Alhamdulillah..hari demi hari ramai orang yang dapat dibantu dari segi kesihatan dan kecantikan..Selain itu, semangat makin berkobar-kobar apabila dapat sebarkan manfaat kepada lebih ramai orang dan berkongsi rezeki khususnya bersama keluarga dan anak-anak team #FADISUEFIGHTERS
                                <br><br>
                                Sepanjang bersama Lovlin telah banyak yang saya telah capai antaranya diberi reward barang kemas, beg berjenama, dapat buat simpanan bulanan tanpa mengusik duit gaji, berbakti kepada keluarga dan paling 'Big Win' dapat menampung sepenuhnya kos rawatan Lasik hasil berniaga Lovlin..
                                Alhamdulillah..di dalam Lovlin juga kami disediakan kelas coaching percuma untuk terus boost semangat kami agar terus berada dalam circle yang positif..
                                <br><br>
                                Alhamdulillah..setapak demi setapak saya upgrade dan sekarang saya memegang tier Leader Lovlin Perak..
                                <br><br>
                                Terima kasih Puan Malin, En.Badri dan Team HQ LOVLIN atas peluang yang diberikan..
                                <br><br>
                                #ILOVLINU

                                Total Sales<br>

                                2019 – 2020: RM 505, 059.05


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">NORSURIATY AHMAD SARKAWI</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Perak</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>

        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-5.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Menjadi keluarga Lovlinsquad, hidup saya telah berubah! Sekarang saya boleh bantu suami dari segi kewangan keluarga kami."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">NURUL EZZATI<br> MAZLAN</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Pandan KL</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup5" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-5.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya Ezzati. Umur 26 tahun.<br><br>

                                Saya bermula dengan Lovlin pada 6/3/2019 sebagai Dropship. Niat saya  nak cari income lebih memandangkan gaji saya sbg Pembantu Penguatkuasa tidak mencukupi. Jodoh saya dengan level Dropship hanya 2 hari memandangkan saya nampak bisnes ni boleh pergi jauh bila saya dapat closed sale dengan ramai orang.<br><br>

                                Jadi saya beranikan diri upgrade ke satu level lagi  iaitu Agent pada 8/3/2019 bermodalkan Rm240. Saya makin suka dengan Produk Lovlin bilamana saya sendiri consume LOVLIN Bird's Nest 7% dan ia berkesan pada saya. Sebelum ni saya ada masalah senggugut yang sangat teruk. Alhamdulillah sejak amal LBN 7% masalah tu dah berkurang.<br><br>

                                Tak sampai sebulan, saya naik lagi ke level seterusnya iaitu Stokis pada 4/4/2019. Alhamdulillah rezeki saya semakin luas bersama LOVLIN dan dapat lahirkan ramai anak team. Dari situ lah saya mula saving duit untuk berkahwin.<br><br>

                                Dengan pengalaman sebagai Stokis selama hampir 8 bulan, saya berjaya naik ke satu level lagi iaitu Monster Stokis pada 26/11/2019 berbekalkan hampir 50 orang anak team yang banyak support & jadi tulang belakang team saya.<br><br>

                                Pada 13/5/2020 sekali lagi saya naik ke satu level yg lebih tinggi iaitu sebagai Leader dan hingga sekarang. Walaupun kita semua diuji dengan ujian Covid-19 dan ramai peniaga tak mampu buat sales, tapi Alhamdulillah produk Lovlin masih menjadi permintaan ramai.<br><br>

                                Pencapaian saya selama berada dalam keluarga LOVLIN ni banyak. Antaranya saya tersenarai dalam carta Hq dari saya bergelar Stokis hingga ke Leader. Saya pernah dapat perfume mahal, emas 916 secara percuma dari HQ. Saya jugak mampu kumpul duit kahwin dari hasil jual produk Lovlin tanpa bantuan ibubapa saya. Selepas berkahwin, saya dan suami berbulan madu ke Bali dengan menggunaan 100% dari duit bisnes Lovlin.
                                Saya juga mampu kumpul emas 916 dengan hasil bisnes Lovlin. Sekarang saya boleh bantu suami dari segi kewangan keluarga kami. Terima kasih Lovlin.<br><br>

                                Total Sales:<br>
                                2019 – 2020: RM 491, 483.15


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">NURUL EZZATI MAZLAN</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Pandan KL</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>

        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-6.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Saya gembira kerana Lovlinsquad mampu membantu wanita-wanita terutamanya suri rumah untuk jana income untuk baiki kewangan."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">SYARUNNIZA YASIUDIN</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Bandar Melaka</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup6" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-6.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya ogy,  umur 42 tahun. Saya sertai Lovlin sebagai agent pada November 2018.  Bermula dari rakan kerja yang bercerita tentang kelebihan minuman sarang burung menyebabkan perkenalan saya dengan founder Lovlin dan  perjalanan saya sebagai agent bermula.  Saya tertarik untuk sertai LOVLIN kerana Lovlin menyediakan produk minuman sarang burung yang  halal,  produk yang unik  dan paling penting Lovlin adalah minuman mampu milik pertama di Malaysia.<br><br>
                                Disebabkan saya yakin produk Lovlin mempunyai potensi yang tinggi saya telah termotivasi untuk upgrade level sebagai stokis pada hari yang sama saya mendaftar sebagai agent.<br><br>
                                Alhamdulillah baru beberapa bulan bersama Lovlin saya telah berjaya membeli kereta Honda City dan dapat selesaikan pelbagai jenis hutang. Malah sepanjang bersama Lovlin saya telah berjaya membawa team saya menjadi Top 1 beberapa kali malah saya juga dapat pelbagai rewards berupa emas 916 dan juga trip percutian.<br><br>
                                Misi dan Visi saya untuk bantu team saya jana income 6 angka sebulan dan bebas dari masalah kewangan.<br><br>
                                Terima kasih pada founder Lovlin dan HQ Lovlin yang sentiasa memberi sokongan pada kami team Lovlin untuk terus berjaya dengan LOVLIN<br><br>
                                Total Sales: <br>2019 – 2020: RM 1,377,005.15

                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">SYARUNNIZA YASIUDIN</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Bandar Melaka</p>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>


</section>

<section class="section-10-mv offers visible-xs">
    <div class="container full-grid" >
        <div class="row text-center intro">
            <div class="col-10 center">
                <h3><br><br>Kisah perjalanan Leader Lovlin yang berjaya meraih pendapatan sampingan yang lumayan!<br></h3>

            </div>
        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-1.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                Lovlin telah bantu saya mencapai impian untuk memiliki kereta idaman dan selesaikan pelbagai jenis hutang!
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">ROZYANI RAPPA</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Johor</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup7" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-1.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya ogy,  umur 42 tahun. Saya sertai Lovlin sebagai agent pada November 2018.  Bermula dari rakan kerja yang bercerita tentang kelebihan minuman sarang burung menyebabkan perkenalan saya dengan founder Lovlin dan  perjalanan saya sebagai agent bermula.  Saya tertarik untuk sertai LOVLIN kerana Lovlin menyediakan produk minuman sarang burung yang  halal,  produk yang unik  dan paling penting Lovlin adalah minuman mampu milik pertama di Malaysia.<br><br>
                                Disebabkan saya yakin produk Lovlin mempunyai potensi yang tinggi saya telah termotivasi untuk upgrade level sebagai stokis pada hari yang sama saya mendaftar sebagai agent.<br><br>
                                Alhamdulillah baru beberapa bulan bersama Lovlin saya telah berjaya membeli kereta Honda City dan dapat selesaikan pelbagai jenis hutang. Malah sepanjang bersama Lovlin saya telah berjaya membawa team saya menjadi Top 1 beberapa kali malah saya juga dapat pelbagai rewards berupa emas 916 dan juga trip percutian.<br><br>
                                Misi dan Visi saya untuk bantu team saya jana income 6 angka sebulan dan bebas dari masalah kewangan.<br><br>
                                Terima kasih pada founder Lovlin dan HQ Lovlin yang sentiasa memberi sokongan pada kami team Lovlin untuk terus berjaya dengan LOVLIN<br><br>
                                Total Sales: <br>2019 – 2020: RM 1,377,005.15

                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">ROZYANI RAPPA</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Johor</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-2.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Siapa sangka, saya dapat memiliki barang kemas dan percutian bersama Lovlin sebagai reward pencapaian!"
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">JUNITA INDRAYANTI </p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Kuala Lumpur</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup8910" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup8910" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-2.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Assalamu'alaikum<br><br>

                                Saya Junita, umur 40 tahun. Permulaan saya dengan Lovlin pada akhir Oktober 2018. Masa tu saya ternampak post founder Puan Amalin yang bercerita tentang kebaikan sarang burung dengan harga mampu milik.<br><br>

                                So tanpa berfikir panjang saya langsung beli 5 set RM100. Lepas 3 set minum Lovlin, Alhamdulillah period yang bermasalah dah lancar.  Terkesan dengan kebaikan Lovlin, saya langsung berminat untuk menjadi squad Lovlin dan saya langsung menjadi stokis Lovlin.<br><br>

                                Perjalanan bersama Lovlin selama 2 tahun banyak hasil dari berniaga dan pengalaman manis.  Alhamdulillah saya dah menjadi leader Lovlin area KL & Ampang.<br><br>

                                Menjadi Top Achievers, saya dah memiliki barang kemas untuk rewards pencapaian team dan percutian bersama Lovlin HQ. Syukur Alhamdulillah.<br><br>

                                Misi dan visi saya untuk menaikan nama Lovlin agar lebih dikenali di dalam Malaysia dan Antarabangsa.<br><br>

                                Terima kasih Puan Founder dan Lovlin HQ yang sentiasa memberi support untuk saya, Leader KL Squad.<br><br>

                                Mampu cantik, mampu sihat dengan mampu milik ❣️<br><br>

                                Total Sales:<br>
                                2019 – 2020: RM 1,089,337.75


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">JUNITA INDRAYANTI</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Kuala Lumpur</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-3.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Sepanjang bersama-sama Lovlin saya telah mendapat reward emas, handbag berjenama dan sebagainya."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">ROS JIHANI RAPPA</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Melaka</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup910" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup910" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-3.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Saya mula mengenali Lovlin pada penghujung November 2018 sebagai customer dan terus sign up sebagai Agent dengan pembelian 16set Lovlin 7% .Selama beberapa minggu pengambilan Lovlin 7% saya mengalami batuk yang teruk memandangkan saya penghidap penyakit Asthma yang kronik .Saya kurangkan pengambilan sehari 2 botol Lovlin kepada seminggu 3 botol .Selepas itu saya dapati batuk teruk telah beransur hilang dan saya terus mengambil Lovlin 7% seperti biasa sehari 2 botol pagi sebelum breakfast dan malam sebelum tidur. Alhamdulillah berkat konsisten hingga kini serangan asthma semakin berkurangan dan boleh saya katakan hingga kini saya tidak mengalami serangan asthma yang teruk hanya batuk biasa.Selain mengamalkan Lovlin sebagai supplement harian saya, saya juga menjual produk Lovlin sebagai sumber pendapatan sampingan . Alhamdulillah hasil jualan Lovlin selama 3 bulan saya dapat membeli motosikal untuk husband saya secara tunai bernilai RM6K. Seterusnya hasil jualan Lovlin saya dapat mengerjakan Umrah bersama-sama suami, Ibu, dua orang anak dan adik lelaki dan kos sebelum, semasa dan selepas lebih kurang RM60K.<br><br>

                                Alhamdulillah kini saya telah upgrade diri sebagai Leader Melaka dan seterusnya dapat menghadiahkan sebuah kereta 4x4 Navara buat suami saya untuk kegunaan sendiri dan kegunaan mengambil stok produk Lovlin.Sepanjang bersama-sama Lovlin saya juga telah mendapat reward Emas, Handbeg berjenama dan sebagainya.Saya sangat bersyukur mengenali produk Lovlin .Terima kasih tidak terhingga saya ucapkan buat pengasas produk Lovlin Puan Marlyn Azhan, Abam Pengawas En.Badri, Coach Dina, semua staff Lovlin kerana sudi berkongsi rezeki dengan saya dan sentiasa memudahkan urusan saya bersama- sama  Lovlin.
                                Akhir kata saya berdoa agar terus berjaya bersama-sama dengan Lovlin .. Insyaallah<br><br>

                                Total Sales:<br>

                                2019 – 2020: RM 601, 004.85


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">ROS JIHANI RAPPA</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Melaka</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-4.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Setelah menyertai Lovlinsquad, banyak yang saya telah capai.Kerana Lovlin saya <br>dapat berbakti kepada keluarga."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">NORSURIATY AHMAD SARKAWI</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Perak</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup10" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-4.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Assalamualaikum....<br><br>

                                Saya bermula dengan Lovlin sebagai pengguna di mana saya tertarik dengan posting BFF saya yang consume Lovlin.<br><br>
                                Jadi saya mencuba dengan 3 set Lovlin Bird Nest 7%..Apabila minum botol ketiga saya telah mendapat kesan di mana tumit kaki tidak sakit lagi apabila bangun dari tidur dan kulit terasa lembab dan fresh...
                                <br><br>
                                Selepas itu, dengan kata-kata semangat dari suami, saya terus menghubungi Puan Malin dan bertanya tentang pakej Agen..Pada 10 Feb 2019 saya sah menjadi agen tetapi dalam masa 2 minggu sahaja kerana 'terpaksa' upgrade ke Stokis kerana permintaan yang sangat tinggi..
                                <br><br>
                                Alhamdulillah..hari demi hari ramai orang yang dapat dibantu dari segi kesihatan dan kecantikan..Selain itu, semangat makin berkobar-kobar apabila dapat sebarkan manfaat kepada lebih ramai orang dan berkongsi rezeki khususnya bersama keluarga dan anak-anak team #FADISUEFIGHTERS
                                <br><br>
                                Sepanjang bersama Lovlin telah banyak yang saya telah capai antaranya diberi reward barang kemas, beg berjenama, dapat buat simpanan bulanan tanpa mengusik duit gaji, berbakti kepada keluarga dan paling 'Big Win' dapat menampung sepenuhnya kos rawatan Lasik hasil berniaga Lovlin..
                                Alhamdulillah..di dalam Lovlin juga kami disediakan kelas coaching percuma untuk terus boost semangat kami agar terus berada dalam circle yang positif..
                                <br><br>
                                Alhamdulillah..setapak demi setapak saya upgrade dan sekarang saya memegang tier Leader Lovlin Perak..
                                <br><br>
                                Terima kasih Puan Malin, En.Badri dan Team HQ LOVLIN atas peluang yang diberikan..
                                <br><br>
                                #ILOVLINU

                                Total Sales<br>

                                2019 – 2020: RM 505, 059.05


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">NORSURIATY AHMAD SARKAWI</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Perak</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-5.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Menjadi keluarga Lovlinsquad, hidup saya telah berubah! Sekarang saya boleh bantu suami dari segi kewangan keluarga kami."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">NURUL EZZATI<br> MAZLAN</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Pandan KL</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup1112" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup1112" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-5.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya Ezzati. Umur 26 tahun.<br><br>

                                Saya bermula dengan Lovlin pada 6/3/2019 sebagai Dropship. Niat saya  nak cari income lebih memandangkan gaji saya sbg Pembantu Penguatkuasa tidak mencukupi. Jodoh saya dengan level Dropship hanya 2 hari memandangkan saya nampak bisnes ni boleh pergi jauh bila saya dapat closed sale dengan ramai orang.<br><br>

                                Jadi saya beranikan diri upgrade ke satu level lagi  iaitu Agent pada 8/3/2019 bermodalkan Rm240. Saya makin suka dengan Produk Lovlin bilamana saya sendiri consume LOVLIN Bird's Nest 7% dan ia berkesan pada saya. Sebelum ni saya ada masalah senggugut yang sangat teruk. Alhamdulillah sejak amal LBN 7% masalah tu dah berkurang.<br><br>

                                Tak sampai sebulan, saya naik lagi ke level seterusnya iaitu Stokis pada 4/4/2019. Alhamdulillah rezeki saya semakin luas bersama LOVLIN dan dapat lahirkan ramai anak team. Dari situ lah saya mula saving duit untuk berkahwin.<br><br>

                                Dengan pengalaman sebagai Stokis selama hampir 8 bulan, saya berjaya naik ke satu level lagi iaitu Monster Stokis pada 26/11/2019 berbekalkan hampir 50 orang anak team yang banyak support & jadi tulang belakang team saya.<br><br>

                                Pada 13/5/2020 sekali lagi saya naik ke satu level yg lebih tinggi iaitu sebagai Leader dan hingga sekarang. Walaupun kita semua diuji dengan ujian Covid-19 dan ramai peniaga tak mampu buat sales, tapi Alhamdulillah produk Lovlin masih menjadi permintaan ramai.<br><br>

                                Pencapaian saya selama berada dalam keluarga LOVLIN ni banyak. Antaranya saya tersenarai dalam carta Hq dari saya bergelar Stokis hingga ke Leader. Saya pernah dapat perfume mahal, emas 916 secara percuma dari HQ. Saya jugak mampu kumpul duit kahwin dari hasil jual produk Lovlin tanpa bantuan ibubapa saya. Selepas berkahwin, saya dan suami berbulan madu ke Bali dengan menggunaan 100% dari duit bisnes Lovlin.
                                Saya juga mampu kumpul emas 916 dengan hasil bisnes Lovlin. Sekarang saya boleh bantu suami dari segi kewangan keluarga kami. Terima kasih Lovlin.<br><br>

                                Total Sales:<br>
                                2019 – 2020: RM 491, 483.15


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">NURUL EZZATI MAZLAN</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Pandan KL</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 320px;">

            <img src="/assets3/image/agent-6.png" style="width: 180px; margin-left:25px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Saya gembira kerana Lovlinsquad mampu membantu wanita-wanita terutamanya suri rumah untuk jana income untuk baiki kewangan."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">SYARUNNIZA YASIUDIN</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Bandar Melaka</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup12" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-6.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya ogy,  umur 42 tahun. Saya sertai Lovlin sebagai agent pada November 2018.  Bermula dari rakan kerja yang bercerita tentang kelebihan minuman sarang burung menyebabkan perkenalan saya dengan founder Lovlin dan  perjalanan saya sebagai agent bermula.  Saya tertarik untuk sertai LOVLIN kerana Lovlin menyediakan produk minuman sarang burung yang  halal,  produk yang unik  dan paling penting Lovlin adalah minuman mampu milik pertama di Malaysia.<br><br>
                                Disebabkan saya yakin produk Lovlin mempunyai potensi yang tinggi saya telah termotivasi untuk upgrade level sebagai stokis pada hari yang sama saya mendaftar sebagai agent.<br><br>
                                Alhamdulillah baru beberapa bulan bersama Lovlin saya telah berjaya membeli kereta Honda City dan dapat selesaikan pelbagai jenis hutang. Malah sepanjang bersama Lovlin saya telah berjaya membawa team saya menjadi Top 1 beberapa kali malah saya juga dapat pelbagai rewards berupa emas 916 dan juga trip percutian.<br><br>
                                Misi dan Visi saya untuk bantu team saya jana income 6 angka sebulan dan bebas dari masalah kewangan.<br><br>
                                Terima kasih pada founder Lovlin dan HQ Lovlin yang sentiasa memberi sokongan pada kami team Lovlin untuk terus berjaya dengan LOVLIN<br><br>
                                Total Sales: <br>2019 – 2020: RM 1,377,005.15

                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">SYARUNNIZA YASIUDIN</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Bandar Melaka</p>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>


</section>

<section class="section-10-mv offers  visible-sm">
    <div class="container full-grid" >
        <div class="row text-center intro">
            <div class="col-10 center">
                <h3><br><br>Kisah perjalanan Leader Lovlin yang berjaya meraih pendapatan sampingan yang lumayan!<br></h3>

            </div>
        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 400px;">

            <img src="/assets3/image/agent-1.png" style="width: 180px; margin-left:60px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                Lovlin telah bantu saya mencapai impian untuk memiliki kereta idaman dan selesaikan pelbagai jenis hutang!
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">ROZYANI RAPPA</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Johor</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup13" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-1.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya ogy,  umur 42 tahun. Saya sertai Lovlin sebagai agent pada November 2018.  Bermula dari rakan kerja yang bercerita tentang kelebihan minuman sarang burung menyebabkan perkenalan saya dengan founder Lovlin dan  perjalanan saya sebagai agent bermula.  Saya tertarik untuk sertai LOVLIN kerana Lovlin menyediakan produk minuman sarang burung yang  halal,  produk yang unik  dan paling penting Lovlin adalah minuman mampu milik pertama di Malaysia.<br><br>
                                Disebabkan saya yakin produk Lovlin mempunyai potensi yang tinggi saya telah termotivasi untuk upgrade level sebagai stokis pada hari yang sama saya mendaftar sebagai agent.<br><br>
                                Alhamdulillah baru beberapa bulan bersama Lovlin saya telah berjaya membeli kereta Honda City dan dapat selesaikan pelbagai jenis hutang. Malah sepanjang bersama Lovlin saya telah berjaya membawa team saya menjadi Top 1 beberapa kali malah saya juga dapat pelbagai rewards berupa emas 916 dan juga trip percutian.<br><br>
                                Misi dan Visi saya untuk bantu team saya jana income 6 angka sebulan dan bebas dari masalah kewangan.<br><br>
                                Terima kasih pada founder Lovlin dan HQ Lovlin yang sentiasa memberi sokongan pada kami team Lovlin untuk terus berjaya dengan LOVLIN<br><br>
                                Total Sales: <br>2019 – 2020: RM 1,377,005.15

                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">ROZYANI RAPPA</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Johor</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 400px;">

            <img src="/assets3/image/agent-2.png" style="width: 180px; margin-left:60px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Siapa sangka, saya dapat memiliki barang kemas dan percutian bersama Lovlin sebagai reward pencapaian!"
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">JUNITA INDRAYANTI </p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Kuala Lumpur</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup14" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-2.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Assalamu'alaikum<br><br>

                                Saya Junita, umur 40 tahun. Permulaan saya dengan Lovlin pada akhir Oktober 2018. Masa tu saya ternampak post founder Puan Amalin yang bercerita tentang kebaikan sarang burung dengan harga mampu milik.<br><br>

                                So tanpa berfikir panjang saya langsung beli 5 set RM100. Lepas 3 set minum Lovlin, Alhamdulillah period yang bermasalah dah lancar.  Terkesan dengan kebaikan Lovlin, saya langsung berminat untuk menjadi squad Lovlin dan saya langsung menjadi stokis Lovlin.<br><br>

                                Perjalanan bersama Lovlin selama 2 tahun banyak hasil dari berniaga dan pengalaman manis.  Alhamdulillah saya dah menjadi leader Lovlin area KL & Ampang.<br><br>

                                Menjadi Top Achievers, saya dah memiliki barang kemas untuk rewards pencapaian team dan percutian bersama Lovlin HQ. Syukur Alhamdulillah.<br><br>

                                Misi dan visi saya untuk menaikan nama Lovlin agar lebih dikenali di dalam Malaysia dan Antarabangsa.<br><br>

                                Terima kasih Puan Founder dan Lovlin HQ yang sentiasa memberi support untuk saya, Leader KL Squad.<br><br>

                                Mampu cantik, mampu sihat dengan mampu milik ❣️<br><br>

                                Total Sales:<br>
                                2019 – 2020: RM 1,089,337.75


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">JUNITA INDRAYANTI</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Kuala Lumpur</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 400px;">

            <img src="/assets3/image/agent-3.png" style="width: 180px; margin-left:60px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Sepanjang bersama-sama Lovlin saya telah mendapat reward emas, handbag berjenama dan sebagainya."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">ROS JIHANI RAPPA</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Melaka</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup15" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup15" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-3.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Saya mula mengenali Lovlin pada penghujung November 2018 sebagai customer dan terus sign up sebagai Agent dengan pembelian 16set Lovlin 7% .Selama beberapa minggu pengambilan Lovlin 7% saya mengalami batuk yang teruk memandangkan saya penghidap penyakit Asthma yang kronik .Saya kurangkan pengambilan sehari 2 botol Lovlin kepada seminggu 3 botol .Selepas itu saya dapati batuk teruk telah beransur hilang dan saya terus mengambil Lovlin 7% seperti biasa sehari 2 botol pagi sebelum breakfast dan malam sebelum tidur. Alhamdulillah berkat konsisten hingga kini serangan asthma semakin berkurangan dan boleh saya katakan hingga kini saya tidak mengalami serangan asthma yang teruk hanya batuk biasa.Selain mengamalkan Lovlin sebagai supplement harian saya, saya juga menjual produk Lovlin sebagai sumber pendapatan sampingan . Alhamdulillah hasil jualan Lovlin selama 3 bulan saya dapat membeli motosikal untuk husband saya secara tunai bernilai RM6K. Seterusnya hasil jualan Lovlin saya dapat mengerjakan Umrah bersama-sama suami, Ibu, dua orang anak dan adik lelaki dan kos sebelum, semasa dan selepas lebih kurang RM60K.<br><br>

                                Alhamdulillah kini saya telah upgrade diri sebagai Leader Melaka dan seterusnya dapat menghadiahkan sebuah kereta 4x4 Navara buat suami saya untuk kegunaan sendiri dan kegunaan mengambil stok produk Lovlin.Sepanjang bersama-sama Lovlin saya juga telah mendapat reward Emas, Handbeg berjenama dan sebagainya.Saya sangat bersyukur mengenali produk Lovlin .Terima kasih tidak terhingga saya ucapkan buat pengasas produk Lovlin Puan Marlyn Azhan, Abam Pengawas En.Badri, Coach Dina, semua staff Lovlin kerana sudi berkongsi rezeki dengan saya dan sentiasa memudahkan urusan saya bersama- sama  Lovlin.
                                Akhir kata saya berdoa agar terus berjaya bersama-sama dengan Lovlin .. Insyaallah<br><br>

                                Total Sales:<br>

                                2019 – 2020: RM 601, 004.85


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">ROS JIHANI RAPPA</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Melaka</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 400px;">

            <img src="/assets3/image/agent-4.png" style="width: 180px; margin-left:60px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Setelah menyertai Lovlinsquad, banyak yang saya telah capai.Kerana Lovlin saya <br>dapat berbakti kepada keluarga."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">NORSURIATY AHMAD SARKAWI</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Perak</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup1617" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup1617" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-4.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Assalamualaikum....<br><br>

                                Saya bermula dengan Lovlin sebagai pengguna di mana saya tertarik dengan posting BFF saya yang consume Lovlin.<br><br>
                                Jadi saya mencuba dengan 3 set Lovlin Bird Nest 7%..Apabila minum botol ketiga saya telah mendapat kesan di mana tumit kaki tidak sakit lagi apabila bangun dari tidur dan kulit terasa lembab dan fresh...
                                <br><br>
                                Selepas itu, dengan kata-kata semangat dari suami, saya terus menghubungi Puan Malin dan bertanya tentang pakej Agen..Pada 10 Feb 2019 saya sah menjadi agen tetapi dalam masa 2 minggu sahaja kerana 'terpaksa' upgrade ke Stokis kerana permintaan yang sangat tinggi..
                                <br><br>
                                Alhamdulillah..hari demi hari ramai orang yang dapat dibantu dari segi kesihatan dan kecantikan..Selain itu, semangat makin berkobar-kobar apabila dapat sebarkan manfaat kepada lebih ramai orang dan berkongsi rezeki khususnya bersama keluarga dan anak-anak team #FADISUEFIGHTERS
                                <br><br>
                                Sepanjang bersama Lovlin telah banyak yang saya telah capai antaranya diberi reward barang kemas, beg berjenama, dapat buat simpanan bulanan tanpa mengusik duit gaji, berbakti kepada keluarga dan paling 'Big Win' dapat menampung sepenuhnya kos rawatan Lasik hasil berniaga Lovlin..
                                Alhamdulillah..di dalam Lovlin juga kami disediakan kelas coaching percuma untuk terus boost semangat kami agar terus berada dalam circle yang positif..
                                <br><br>
                                Alhamdulillah..setapak demi setapak saya upgrade dan sekarang saya memegang tier Leader Lovlin Perak..
                                <br><br>
                                Terima kasih Puan Malin, En.Badri dan Team HQ LOVLIN atas peluang yang diberikan..
                                <br><br>
                                #ILOVLINU

                                Total Sales<br>

                                2019 – 2020: RM 505, 059.05


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">NORSURIATY AHMAD SARKAWI</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Perak</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 400px;">

            <img src="/assets3/image/agent-5.png" style="width: 180px; margin-left:60px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Menjadi keluarga Lovlinsquad, hidup saya telah berubah! Sekarang saya boleh bantu suami dari segi kewangan keluarga kami."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">NURUL EZZATI<br> MAZLAN</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Pandan KL</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup17" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup17" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-5.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya Ezzati. Umur 26 tahun.<br><br>

                                Saya bermula dengan Lovlin pada 6/3/2019 sebagai Dropship. Niat saya  nak cari income lebih memandangkan gaji saya sbg Pembantu Penguatkuasa tidak mencukupi. Jodoh saya dengan level Dropship hanya 2 hari memandangkan saya nampak bisnes ni boleh pergi jauh bila saya dapat closed sale dengan ramai orang.<br><br>

                                Jadi saya beranikan diri upgrade ke satu level lagi  iaitu Agent pada 8/3/2019 bermodalkan Rm240. Saya makin suka dengan Produk Lovlin bilamana saya sendiri consume LOVLIN Bird's Nest 7% dan ia berkesan pada saya. Sebelum ni saya ada masalah senggugut yang sangat teruk. Alhamdulillah sejak amal LBN 7% masalah tu dah berkurang.<br><br>

                                Tak sampai sebulan, saya naik lagi ke level seterusnya iaitu Stokis pada 4/4/2019. Alhamdulillah rezeki saya semakin luas bersama LOVLIN dan dapat lahirkan ramai anak team. Dari situ lah saya mula saving duit untuk berkahwin.<br><br>

                                Dengan pengalaman sebagai Stokis selama hampir 8 bulan, saya berjaya naik ke satu level lagi iaitu Monster Stokis pada 26/11/2019 berbekalkan hampir 50 orang anak team yang banyak support & jadi tulang belakang team saya.<br><br>

                                Pada 13/5/2020 sekali lagi saya naik ke satu level yg lebih tinggi iaitu sebagai Leader dan hingga sekarang. Walaupun kita semua diuji dengan ujian Covid-19 dan ramai peniaga tak mampu buat sales, tapi Alhamdulillah produk Lovlin masih menjadi permintaan ramai.<br><br>

                                Pencapaian saya selama berada dalam keluarga LOVLIN ni banyak. Antaranya saya tersenarai dalam carta Hq dari saya bergelar Stokis hingga ke Leader. Saya pernah dapat perfume mahal, emas 916 secara percuma dari HQ. Saya jugak mampu kumpul duit kahwin dari hasil jual produk Lovlin tanpa bantuan ibubapa saya. Selepas berkahwin, saya dan suami berbulan madu ke Bali dengan menggunaan 100% dari duit bisnes Lovlin.
                                Saya juga mampu kumpul emas 916 dengan hasil bisnes Lovlin. Sekarang saya boleh bantu suami dari segi kewangan keluarga kami. Terima kasih Lovlin.<br><br>

                                Total Sales:<br>
                                2019 – 2020: RM 491, 483.15


                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">NURUL EZZATI MAZLAN</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Pandan KL</p>

                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="row justify-content-center items">
        <div class="h-100 d-inline-block bg-card" style="width: 400px;">

            <img src="/assets3/image/agent-6.png" style="width: 180px; margin-left:60px;" alt="Logo" class="logo">

            <i class="quote-right fas fa-quote-center"></i>
            <p class="center" style="color: white; text-align: center; font-family: Helvetica;"><br><br>
                "Saya gembira kerana Lovlinsquad mampu membantu wanita-wanita terutamanya suri rumah untuk jana income untuk baiki kewangan."
            </p><br>

            <p style="text-align: center; font-family: Poppins; " class="p8 center">SYARUNNIZA YASIUDIN</p>
            <p style="color: white; text-align: center; font-family: Helvetica;">Leader Bandar Melaka</p><br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary center" data-toggle="modal" data-target="#popup18" >
                BACA LAGI
            </button>

            <!-- Modal -->
            <div class="modal fade" id="popup18" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-popup">
                        <div class="dismiss-btn">
                            <button type="button" class="btn btn-default dismiss-btn" data-dismiss="modal"><p class="p3">X</p></button>
                        </div>

                        <div class="col-12 align-content-center bg-card" >
                            <img class="center" src="/assets3/image/agent-6.png" alt="Logo" >
                            <br><br><br>

                            <p class="content-card" style="color: white; text-align: left; font-family: Helvetica;">Hai saya ogy,  umur 42 tahun. Saya sertai Lovlin sebagai agent pada November 2018.  Bermula dari rakan kerja yang bercerita tentang kelebihan minuman sarang burung menyebabkan perkenalan saya dengan founder Lovlin dan  perjalanan saya sebagai agent bermula.  Saya tertarik untuk sertai LOVLIN kerana Lovlin menyediakan produk minuman sarang burung yang  halal,  produk yang unik  dan paling penting Lovlin adalah minuman mampu milik pertama di Malaysia.<br><br>
                                Disebabkan saya yakin produk Lovlin mempunyai potensi yang tinggi saya telah termotivasi untuk upgrade level sebagai stokis pada hari yang sama saya mendaftar sebagai agent.<br><br>
                                Alhamdulillah baru beberapa bulan bersama Lovlin saya telah berjaya membeli kereta Honda City dan dapat selesaikan pelbagai jenis hutang. Malah sepanjang bersama Lovlin saya telah berjaya membawa team saya menjadi Top 1 beberapa kali malah saya juga dapat pelbagai rewards berupa emas 916 dan juga trip percutian.<br><br>
                                Misi dan Visi saya untuk bantu team saya jana income 6 angka sebulan dan bebas dari masalah kewangan.<br><br>
                                Terima kasih pada founder Lovlin dan HQ Lovlin yang sentiasa memberi sokongan pada kami team Lovlin untuk terus berjaya dengan LOVLIN<br><br>
                                Total Sales: <br>2019 – 2020: RM 1,377,005.15

                            </p>
                            <br><br>

                            <p style="text-align: left; font-family: Poppins; " class="p8 center">SYARUNNIZA YASIUDIN</p>
                            <p class="content-card" style="color: white; text-align:left; font-family: Helvetica;">Leader Bandar Melaka</p>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div><br><br>


</section>


<section class="section-11 showcase blog-grid projects hidden-xs">
    <div class="row text-center intro  ">
        <div class="col-12">
            <h2><br>Soalan Lazim</h2>

        </div>
    </div>

    <div class="container">

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Berapakah yuran yang dikenakan untuk pendaftaran?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Lovlin HQ tidak mengenakan yuran untuk pendaftaran. Skuad hanya perlu membayar jumlah nilai stok sahaja.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Apakah syarat restok?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Skuad Lovlin perlu mengikut MOQ (minimum of quantity) yang telah ditetapkan oleh Lovlin HQ. Skuad Lovlin perlu restok sekurang-kurangnya sekali setiap bulan.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Apakah dokumen yang diperlukan untuk mendaftar?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Tiada dokumen yang diperlukan untuk mendaftar. Anda hanya perlu mengisi borang yang disediakan oleh Lovlin HQ sahaja. Anda perlu mengisi borang dengan lengkap dan betul.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Susah tak untuk menjual produk Lovlin?</a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Alhamdulillah, produk Lovlin kini telah dikenali seluruh Malaysia. Lovlin juga telah berjaya masuk ke dalam pasaran Singapura dan Brunei.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Bagaimana untuk saya tahu status pendaftaran saya sebagai skuad Lovlin?</a>
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Lovlin HQ akan menghantar satu e-mel pengesahan menerima permohonan kepada anda. <br><br>Selepas kami meneliti semua maklumat anda dalam borang permohonan tersebut, kami akan menghantar e-mel kepada anda bagi akses ke lovlinsquad.com dengan butiran seperti ID skuad Lovlin, username dan kata laluan sementara.

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Bagaimana untuk menghubungi Lovlin sekiranya ada pertanyaan lanjut?</a>
                    </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Anda boleh menghubungi kami pada email berikut:support@lovlinsquad.com

                    </div>
                </div>
            </div><br><br>

        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <div data-aos="fade-up" data-aos-delay="1800" class="buttons">
                <div class="d-sm-inline-flex">
                    <a href="#subcribe" class="mt-4 btn primary-button center">Saya Nak Join Lovlinsquad</a>
                </div><br><br>
            </div>
        </div>
    </div>
</section>

<section class="section-11-mv showcase blog-grid projects visible-xs">
    <div class="row text-center intro  ">
        <div class="col-12">
            <h2><br>Soalan Lazim</h2>

        </div>
    </div>

    <div class="container">

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Berapakah yuran yang dikenakan untuk pendaftaran?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Lovlin HQ tidak mengenakan yuran untuk pendaftaran. Skuad hanya perlu membayar jumlah nilai stok sahaja.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Apakah syarat restok?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Skuad Lovlin perlu mengikut MOQ (minimum of quantity) yang telah ditetapkan oleh Lovlin HQ. Skuad Lovlin perlu restok sekurang-kurangnya sekali setiap bulan.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Apakah dokumen yang diperlukan untuk mendaftar?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Tiada dokumen yang diperlukan untuk mendaftar. Anda hanya perlu mengisi borang yang disediakan oleh Lovlin HQ sahaja. Anda perlu mengisi borang dengan lengkap dan betul.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Susah tak untuk menjual produk Lovlin?</a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Alhamdulillah, produk Lovlin kini telah dikenali seluruh Malaysia. Lovlin juga telah berjaya masuk ke dalam pasaran Singapura dan Brunei.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Bagaimana untuk saya tahu status pendaftaran saya sebagai skuad Lovlin?</a>
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Lovlin HQ akan menghantar satu e-mel pengesahan menerima permohonan kepada anda. <br><br>Selepas kami meneliti semua maklumat anda dalam borang permohonan tersebut, kami akan menghantar e-mel kepada anda bagi akses ke lovlinsquad.com dengan butiran seperti ID skuad Lovlin, username dan kata laluan sementara.

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Bagaimana untuk menghubungi Lovlin sekiranya ada pertanyaan lanjut?</a>
                    </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse">
                    <div class="panel-body faq">
                        Anda boleh menghubungi kami pada email berikut:support@lovlinsquad.com

                    </div>
                </div>
            </div><br><br>

        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <div data-aos="fade-up" data-aos-delay="1800" class="buttons">
                <div class="d-sm-inline-flex">
                    <a href="#subcribe" class="mt-4 btn primary-button center">Saya Nak Join Lovlinsquad</a>
                </div><br><br>
            </div>
        </div>
    </div>
</section>

<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #b90009;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>

<!-- Bootstrap FAQ - END -->



<!-- Subscribe -->
<section id="subcribe" class="section-12 section-12-mv subscribe">
    <!-- main -->
    <div id="daftar" class="main-w3layouts wrapper">
        <div class="row text-center intro  ">
            <div class="col-12">
                <h2>Daftar Sekarang</h2>
            </div>
        </div>
        <div class="main-agileinfo">
            <div class="agileits-top">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="login-signup-form " method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row justify-content-center">
                        @if($user->avatar)
                            <img src="{{asset('storage/ProfilePicture/'.$user->avatar)}}" width="150" height="130" class="img-fluid shadow-sm mr-3 " />
                        @endif
                        @if(!$user->avatar)
                            <i style="font-size: 100px" class="far fa-user-circle"></i>
                        @endif
                    </div>
                    <div class="row justify-content-center">
                        <div class="">
                            <table class="" style="padding:0px" width="100%">
                                <tr>
                                    <td style="padding:0" width="30%"></td>
                                    <td style="padding:0" width="1%"></td>
                                    <td style="padding:0" width="69%"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left">Leader</td>
                                    <td>:</td>
                                    <td><span class="text-primary">{{$user->name}} </span></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left">Level</td>
                                    <td>:</td>
                                    <td><span class="text-primary">{{$agent_levels->name}}</span></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left">Membership</td>
                                    <td>:</td>
                                    <td><span class="text-primary">LN{{str_pad($leader->member_no, 5, '0', STR_PAD_LEFT)}}</span></td>
                                </tr>
                                <tr>
                                    <td style="text-align: left">Phone</td>
                                    <td>:</td>
                                    <td><span class="text-primary">{{$user->phone_no}} </span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-2 text-muted">Level</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <select class="form-control   @error('name') is-invalid @enderror" name="level" required>
                                @foreach($list_levels as $list_level)
                                    <option value="{{$list_level->id}}">{{$list_level->name}}</option>
                                @endforeach
                            </select>
                            @error('level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Full Name</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input class="form-control  @error('name') is-invalid @enderror" type="text" placeholder="Fullname" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">NRIC</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="nric" type="text" class="form-control @error('nric') is-invalid @enderror"
                                   name="nric" value="{{ old('nric') }}" required autocomplete="nric" autofocus placeholder="NRIC">
                            @error('nric')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Phone No</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="phone_no" type="text"
                                   class="form-control @error('phone_no') is-invalid @enderror" name="phone_no"
                                   value="{{ old('phone_no') }}" required autocomplete="phone" placeholder="Phone No">

                            @error('phone_no')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Email</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input class="form-control  @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Facebook (Optional)</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror"
                                   name="facebook" value="{{ old('facebook') }}" autocomplete="facebook" placeholder="Facebook URL(Optional)">

                            @error('facebook')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Instagram (Optional)</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror"
                                   name="instagram" value="{{ old('instagram') }}" autocomplete="instagram"  placeholder="Instagram URL(Optional)">

                            @error('instagram')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Shopee (Optional)</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="shopee" type="text" class="form-control @error('shopee') is-invalid @enderror"
                                   name="shopee" value="{{ old('shopee') }}" autocomplete="shopee"  placeholder="Shopee URL(Optional)">

                            @error('shopee')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Lazada (Optional)</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="lazada" type="text" class="form-control @error('lazada') is-invalid @enderror"
                                   name="lazada" value="{{ old('lazada') }}" autocomplete="lazada"  placeholder="Lazada URL(Optional)">

                            @error('lazada')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Company Name (Optional)</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="company_name" type="text"
                                   class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                                   value="{{ old('company_name') }}" autocomplete="company_name" placeholder="Company Name(Optional)">

                            @error('company_name')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">SSM (Optional)</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="ssm" type="text" class="form-control @error('ssm') is-invalid @enderror" name="ssm"
                                   value="{{ old('ssm') }}" autocomplete="ssm"  placeholder="SSM(Optional)">

                            @error('ssm')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Address</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="address_1" type="text" class="form-control @error('address_1') is-invalid @enderror"
                                   name="address_1" value="{{ old('address_1') }}" required autocomplete="address" autofocus  placeholder="Address">

                            @error('address_1')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">City</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                   name="city" value="{{ old('city') }}" required autocomplete="city" autofocus  placeholder="City">

                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="app">
                            <state-territory-component></state-territory-component>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Postcode</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror"
                                   name="postcode" value="{{ old('postcode') }}" required autocomplete="postcode" autofocus  placeholder="Postcode">

                            @error('postcode')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Password</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input class="form-control  @error('password') is-invalid @enderror" type="password" placeholder="Password"  name="password" required autocomplete="new-password" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="mb-2 text-muted">Confirm Password</label>
                        <div class="input-group input-group-merge ">
                            <div class="input-icon ">
                                <span class="color-primary "></span>
                            </div>
                            <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" />
                            <input type="hidden" name="leader" value="{{$user->id}}">
                            <input type="hidden" name="leader_level" value="{{$agent_levels->id}}">
                            {{--<input type="hidden" name="territory" value="{{$leader->territory_id}}">--}}
                            {{--<input type="hidden" name="state" value="{{$leader->state_id}}">--}}

                        </div>
                    </div>


                    <div class="wthree-text">

                        <div class="clear"> </div>
                    </div>
                    <div class="col-11" style="background-color:#b90009; margin-left: 15px; ">
                        <input type="submit" class="center" value="DAFTAR">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //main -->
</section>

{{--<section id="subscribe" class="section-12-mv subscribe visible-xs">--}}
    {{--<!-- main -->--}}
    {{--<div id="daftar-m" class="main-w3layouts wrapper">--}}
        {{--<div class="row text-center intro  ">--}}
            {{--<div class="col-12">--}}
                {{--<h2>Daftar Sekarang</h2>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="main-agileinfo">--}}
            {{--<div class="agileits-top">--}}
                {{--@if ($errors->any())--}}
                    {{--<div class="alert alert-danger">--}}
                        {{--<ul>--}}
                            {{--@foreach ($errors->all() as $error)--}}
                                {{--<li>{{ $error }}</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--@endif--}}
                {{--<form class="login-signup-form " method="POST" action="{{ route('register') }}">--}}
                    {{--@csrf--}}
                    {{--<div class="row justify-content-center">--}}
                        {{--@if($user->avatar)--}}
                            {{--<img src="{{asset('storage/ProfilePicture/'.$user->avatar)}}" width="150" height="130" class="img-fluid shadow-sm mr-3 " />--}}
                        {{--@endif--}}
                        {{--@if(!$user->avatar)--}}
                            {{--<i style="font-size: 100px" class="far fa-user-circle"></i>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                    {{--<div class="row justify-content-center">--}}
                        {{--<div class="">--}}
                            {{--<table class="" style="padding:0px" width="100%">--}}
                                {{--<tr>--}}
                                    {{--<td style="padding:0" width="30%"></td>--}}
                                    {{--<td style="padding:0" width="1%"></td>--}}
                                    {{--<td style="padding:0" width="69%"></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="text-align: left">Leader</td>--}}
                                    {{--<td>:</td>--}}
                                    {{--<td><span class="text-primary">{{$user->name}} </span></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="text-align: left">Level</td>--}}
                                    {{--<td>:</td>--}}
                                    {{--<td><span class="text-primary">{{$agent_levels->name}}</span></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="text-align: left">Membership</td>--}}
                                    {{--<td>:</td>--}}
                                    {{--<td><span class="text-primary">LN{{str_pad($leader->member_no, 5, '0', STR_PAD_LEFT)}}</span></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td style="text-align: left">Phone</td>--}}
                                    {{--<td>:</td>--}}
                                    {{--<td><span class="text-primary">{{$user->phone_no}} </span></td>--}}
                                {{--</tr>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group mt-3">--}}
                        {{--<label class="mb-2 text-muted">Level</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<select class="form-control   @error('name') is-invalid @enderror" name="level" required>--}}
                                {{--@foreach($list_levels as $list_level)--}}
                                    {{--<option value="{{$list_level->id}}">{{$list_level->name}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                            {{--@error('level')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                {{--<strong>{{ $message }}</strong>--}}
                            {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Full Name</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input class="form-control  @error('name') is-invalid @enderror" type="text" placeholder="Fullname" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>--}}
                            {{--@error('name')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                            {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">NRIC</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('nric') is-invalid @enderror"--}}
                                   {{--name="nric" value="{{ old('nric') }}" required autocomplete="nric" autofocus placeholder="NRIC">--}}
                            {{--@error('nric')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Phone No</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text"--}}
                                   {{--class="form-control @error('phone_no') is-invalid @enderror" name="phone_no"--}}
                                   {{--value="{{ old('phone_no') }}" required autocomplete="phone" placeholder="Phone No">--}}

                            {{--@error('phone_no')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Email</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input class="form-control  @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />--}}
                            {{--@error('email')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Facebook (Optional)</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('facebook') is-invalid @enderror"--}}
                                   {{--name="facebook" value="{{ old('facebook') }}" autocomplete="facebook" placeholder="Facebook URL(Optional)">--}}

                            {{--@error('facebook')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Instagram (Optional)</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('instagram') is-invalid @enderror"--}}
                                   {{--name="instagram" value="{{ old('instagram') }}" autocomplete="instagram"  placeholder="Instagram URL(Optional)">--}}

                            {{--@error('instagram')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Shopee (Optional)</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('shopee') is-invalid @enderror"--}}
                                   {{--name="shopee" value="{{ old('shopee') }}" autocomplete="shopee"  placeholder="Shopee URL(Optional)">--}}

                            {{--@error('shopee')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Lazada (Optional)</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('lazada') is-invalid @enderror"--}}
                                   {{--name="lazada" value="{{ old('lazada') }}" autocomplete="lazada"  placeholder="Lazada URL(Optional)">--}}

                            {{--@error('lazada')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Company Name (Optional)</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text"--}}
                                   {{--class="form-control @error('company_name') is-invalid @enderror" name="company_name"--}}
                                   {{--value="{{ old('company_name') }}" autocomplete="company_name" placeholder="Company Name(Optional)">--}}

                            {{--@error('company_name')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">SSM (Optional)</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('ssm') is-invalid @enderror" name="ssm"--}}
                                   {{--value="{{ old('ssm') }}" autocomplete="ssm"  placeholder="SSM(Optional)">--}}

                            {{--@error('ssm')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Address</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('address_1') is-invalid @enderror"--}}
                                   {{--name="address_1" value="{{ old('address_1') }}" required autocomplete="address" autofocus  placeholder="Address">--}}

                            {{--@error('address_1')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">City</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('city') is-invalid @enderror"--}}
                                   {{--name="city" value="{{ old('city') }}" required autocomplete="city" autofocus  placeholder="City">--}}

                            {{--@error('city')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<div id="app">--}}
                            {{--<state-territory-mobile-component></state-territory-mobile-component>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Postcode</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input type="text" class="form-control @error('postcode') is-invalid @enderror"--}}
                                   {{--name="postcode" value="{{ old('postcode') }}" required autocomplete="postcode" autofocus  placeholder="Postcode">--}}

                            {{--@error('postcode')--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                        {{--</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Password</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input class="form-control  @error('password') is-invalid @enderror" type="password" placeholder="Password"  name="password" required autocomplete="new-password" />--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group ">--}}
                        {{--<label class="mb-2 text-muted">Confirm Password</label>--}}
                        {{--<div class="input-group input-group-merge ">--}}
                            {{--<div class="input-icon ">--}}
                                {{--<span class="color-primary "></span>--}}
                            {{--</div>--}}
                            {{--<input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" />--}}
                            {{--<input type="hidden" name="leader" value="{{$user->id}}">--}}
                            {{--<input type="hidden" name="leader_level" value="{{$agent_levels->id}}">--}}
                            {{--<input type="hidden" name="territory" value="{{$leader->territory_id}}">--}}
                            {{--<input type="hidden" name="state" value="{{$leader->state_id}}">--}}

                        {{--</div>--}}
                    {{--</div>--}}


                    {{--<div class="wthree-text">--}}

                        {{--<div class="clear"> </div>--}}
                    {{--</div>--}}
                    {{--<div class="col-11" style="background-color:#b90009; margin-left: 5px; ">--}}
                        {{--<input type="submit" class="center" value="DAFTAR">--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}
    {{--<!-- //main -->--}}
{{--</section>--}}



<!-- Footer -->
<footer>


    <!-- Copyright Desktop -->
    <section id="copyright" class="p-3 odd copyright">
        <div class="container hidden-xs hidden-sm">
            <div class="row">
                <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                    <ul class="navbar-nav icons">
                        <li class="nav-item social">
                            <!-- <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a> -->
                            <a href="https://www.facebook.com/lovlinessential/" target="_blank"><img src="/assets3/image/soc-med-fb.png" alt="" width="21"></a>
                            <a href="https://www.instagram.com/lovlinhq/?hl=en" target="_blank"><img src="/assets3/image/soc-med-ig.png" alt="" width="20" /></a>

                        </li>
                    </ul>
                    <!--
                            Suggestion: Replace the text above with a description of your website.
                         -->
                </div>
                <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                    <p>Copyright 2020 © Lovlin Sdn Bhd</p>
                </div>
            </div>
        </div>
        <!-- Copyright Mobile -->
        <div class="container visible-xs hidden-sm">

            <div class="row">
                <div class="h-50 d-inline-block center" >
                    <ul class="navbar-nav icons ">
                        <li class="nav-item social">
                            <!-- <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a> -->
                            <a href="https://www.facebook.com/lovlinessential/" target="_blank"><img src="/assets3/image/soc-med-fb.png" alt="" width="21"></a>
                            <a href="https://www.instagram.com/lovlinhq/?hl=en" target="_blank"><img src="/assets3/image/soc-med-ig.png" alt="" width="20" /></a>

                        </li>
                    </ul>
                    <!--
                            Suggestion: Replace the text above with a description of your website.
                         -->
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 p-3 text-center">
                    <p>Copyright 2020 © Lovlin Sdn Bhd</p>
                </div>
            </div>


        </div>

        <!-- Copyright iPad -->
        <div class="container visible-sm">

            <div class="row">
                <div class="h-50 d-inline-block center" >
                    <ul class="navbar-nav icons ">
                        <li class="nav-item social">
                            <!-- <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a> -->
                            <a href="https://www.facebook.com/lovlinessential/" target="_blank"><img src="/assets3/image/soc-med-fb.png" alt="" width="21"></a>
                            <a href="https://www.instagram.com/lovlinhq/?hl=en" target="_blank"><img src="/assets3/image/soc-med-ig.png" alt="" width="20" /></a>

                        </li>
                    </ul>
                    <!--
                            Suggestion: Replace the text above with a description of your website.
                         -->
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <p>Copyright 2020 © Lovlin Sdn Bhd</p>
                </div>
            </div>


        </div>
    </section>

</footer>

<!-- Modal [search] -->
<div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="modal-body">
                <form class="row">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0">
                                <h2>What are you looking for?</h2>
                                <div class="badges">
                                    <span class="badge"><a href="#">Consulting</a></span>
                                    <span class="badge"><a href="#">Audit</a></span>
                                    <span class="badge"><a href="#">Assurance</a></span>
                                    <span class="badge"><a href="#">Advisory</a></span>
                                    <span class="badge"><a href="#">Financial</a></span>
                                    <span class="badge"><a href="#">Capital Markets</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="text" class="form-control" placeholder="Enter Keywords">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button">SEARCH</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [sign] -->
<div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="modal-body">
                <form action="/" class="row">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>Sign In</h2>
                                <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button">SIGN IN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [register] -->
<div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="modal-body">
                <form action="/" class="row">
                    <div class="col-12 p-0 align-self-center">
                        <div class="row">
                            <div class="col-12 p-0 pb-3">
                                <h2>Register</h2>
                                <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group">
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="col-12 p-0 input-group">
                                <input type="password" class="form-control" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0 input-group align-self-center">
                                <button class="btn primary-button">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal [map] -->
<div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header absolute" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="modal-body p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.123073808986!2d12.490042215441486!3d41.89021017922119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColiseu!5e0!3m2!1spt-BR!2sbr!4v1594148229878!5m2!1spt-BR!2sbr" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal [responsive menu] -->
<div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="menu modal-body">
                <div class="row w-100">
                    <div class="items p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                    <div class="contacts p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll [to top] -->
<div id="scroll-to-top" class="scroll-to-top">
    <a href="#header" class="smooth-anchor">
        <i class="fas fa-arrow-up"></i>
    </a>
</div>

<!-- ==============================================
Google reCAPTCHA // Put your site key here
=============================================== -->
<script src="https://www.google.com/recaptcha/api.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

<!-- ==============================================
Vendor Scripts
=============================================== -->
<script src="/assets3/js/vendor/jquery.min.js"></script>
<script src="/assets3/js/vendor/jquery.easing.min.js"></script>
<script src="/assets3/js/vendor/jquery.inview.min.js"></script>
<script src="/assets3/js/vendor/popper.min.js"></script>
<script src="/assets3/js/vendor/bootstrap.min.js"></script>
<script src="/assets3/js/vendor/ponyfill.min.js"></script>
<script src="/assets3/js/vendor/slider.min.js"></script>
<script src="/assets3/js/vendor/animation.min.js"></script>
<script src="/assets3/js/vendor/progress-radial.min.js"></script>
<script src="/assets3/js/vendor/bricklayer.min.js"></script>
<script src="/assets3/js/vendor/gallery.min.js"></script>
<script src="/assets3/js/vendor/shuffle.min.js"></script>
<script src="/assets3/js/vendor/cookie-notice.min.js"></script>
<script src="/assets3/js/vendor/particles.min.js"></script>
<script src="/assets3/js/main.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<?php

session_start();
require("config.php");
// Check if the user is
if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = array();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Plataforma de Turismo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo1.png" rel="icon">
    <link href="assets/img/logo1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Valera - v4.1.0
    * Template URL: https://bootstrapmade.com/valera-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Hero Section  ======= -->
<!-- End Hero -->

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">


        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo1.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">In??cio</a></li>
                <li><a class="nav-link scrollto" href="#about">Sobre N??s</a></li>
                <li><a class="nav-link scrollto" href="#services">Projetos</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Galeria</a></li>
                <li><a class="nav-link scrollto" href="#team">Equipa</a></li>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
                <div>

                </div>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex align-items-center">




            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>GUARDI??ES D'OB??</h2>
            </div>

            <h5>
                OS 12 GUARDI??ES D???OB?? ??? equipa criada para fiscalizar, monitorar, sensibilizar e zelar pelo conserv????o e preserva????o do PNOST e suas Zonas Tamp??o.

            </h5>

            <p>  Esta iniciativa surge no ??mbito do cumprimento do Memorando de Entendimento assinado entre a PTRS e o Governo, atrav??s do Minist??rio  de Agricultura, Pescas e Desenvolvimento Rural e do Minist??rio de Turismo, Cultura, Com??rcio e Ind??stria, cujo objetivo ?? apoiar e refor??ar a interven????o das autoridades p??blicas, ao n??vel da  conserva????o e preserva????o de ??reas protegidas em S. Tom?? e Pr??ncipe.
            </p>


            <div class="row content">
                <div class="col-lg-6">
                   <h3>Atividades desenvolvidas pelos Guardi??es:
                   </h3>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Patrulhas de fiscaliza????o das atividades humanas dentro do Parque;
                        </li>
                        <li><i class="ri-check-double-line"></i> Sensibiliza????o Comunitaria;
                        </li>
                        <li><i class="ri-check-double-line"></i>Monitoriza????o da Biodiversidade;
                        </li>
                        <li><i class="ri-check-double-line"></i>Apoio log??stico ?? estudos e atividades cient??ficas nas ??reas protegidas do Parque Natural Ob?? de S. Tom?? (PNOST);
                        </li>
                        <li><i class="ri-check-double-line"></i>Manuten????o de trilhos e de infraestruturas dentro do PNOST e suas Zonas Tamp??o.
                        </li>

                    </ul>
                </div>

                <p></p>



            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->

    <!-- ======= Our Values Section ======= -->


    <!-- End Our Values Section -->
    <!-- End Clients Section -->
    <!-- ======= Clients Section ======= -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Guardi??es em patrulhas de fiscaliza????o do Ob?? de atividades humanas no Parque Ob??</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="images/img_3.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_4.png" class="img-fluid" alt=""></div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_5.png" class="img-fluid" alt=""></div>

                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Guardi??es em patrulhas de fiscaliza????o de atovidades humanas no Parque Ob??</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="images/img_6.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_9.png" class="img-fluid" alt=""></div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_7.png" class="img-fluid" alt=""></div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_8.png" class="img-fluid" alt=""></div>

                    </div>
                </div>



            </div>

        </div>
    </section>

    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2> Guardi??es na Monitoriza????o da Biodiversidade</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="images/img_11.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_10.png" class="img-fluid" alt=""></div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_13.png" class="img-fluid" alt=""></div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_12.png" class="img-fluid" alt=""></div>

                    </div>
                </div>



            </div>

        </div>
    </section>




    <!-- ======= Cta Section ======= -->


    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->


    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->


    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

        <div class="container">

            <div class="row  justify-content-center">
                <div class="col-lg-6">
                    <h3>Plataforma de Turismo</h3>

                </div>
            </div>

            <div class="row footer-newsletter justify-content-center">
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Enviar email"><input type="submit" value="Subscrever">
                    </form>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Desenvolvido por <strong><span>aStar Technology</span></strong>.
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/valera-free-bootstrap-theme/ -->

        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

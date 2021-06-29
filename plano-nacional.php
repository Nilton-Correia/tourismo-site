

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
                <li><a class="nav-link scrollto active" href="index.php">Início</a></li>
                <li><a class="nav-link scrollto" href="#about">Sobre Nós</a></li>
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
                <h2>Plano Nacional de Ação Ecoturístico (PNAE)
                </h2>
            </div>




            <div class="row content">
                <div class="col-lg-6">

                    <ul>
                        <li><i class="ri-check-double-line"></i> Está em curso a elaboração do Plano Nacional de Ação Ecoturístico (PNAE). Uma ferramenta que vai facilitar a PTRS, gerir as atividades turísticas dentro do PNOST, definindo critérios de acesso, utilização dos recursos naturais existentes, bem como os procedimentos de afetação de recursos financeiros para conservação e presenvação do parque, suas zonas tampão e da biodiversidade nela existente.
                        </li>

                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <ul>

                        <li><i class="ri-check-double-line"></i>
                            O plano deverá conter ainda as medidas de minimização dos impactos negativos da atividade turística e apontar formas e mecanismos de maximização dos benefícios provenientes do turismo para proteção das áreas protegidas  e das comunidades nos seus múltiplos aspectos.
                        </li>




                    </ul>

                </div>


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
            </div>

            <div class="row">

                <div>
                    <div>
                        <div class="pic"><img src="images/img_14.png" class="img-fluid" alt=""></div>

                    </div>
                </div>





            </div>

        </div>
    </section><!-- End Testimonials Section -->


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

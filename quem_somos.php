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
            <li>
                <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){

                ?>
                <a href="./logout.php" class="bi bi-person-fill">  <?php
                    echo "Sair";
                    }?>
                </a>
                <?php  if(!(isset($_SESSION["loggedin"]))){

                ?>

                <a href="./register.php" class="bi bi-person-fill">

                    <?php  if(!(isset($_SESSION["loggedin"]))){ echo "Registar";
                    }
                    }
                    ?>
                </a>
            </li>


        </div>

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Quem Somos</h2>
            </div>

            <h5>
                Plataforma de Turismo Sustentável e Responsável - é uma rede, composta por diversas entidades privadas nacionais, criada sem fins lucrativos, cujo o propósito é promover  o turismo sustentável em S. Tomé e Príncipe, por meio dos eixos estratégicos seguintes:
            </h5>


            <div class="row content">
                <div class="col-lg-6">

                    <ul>
                        <li><i class="ri-check-double-line"></i> Prover recursos financeiros para apoio às despesas do funcionamento do PNOST</li>
                        <li><i class="ri-check-double-line"></i>Elaboração do Plano Nacionl de Ação Ecoturístico - que regulamente e faça a gestão de toda a atividade turística dentro do PNOST</li>
                        <li><i class="ri-check-double-line"></i>Envolvimento na fiscalização e monitorização de obras de benfeitorias que incidam sobre o PNOST</li>
                        <li><i class="ri-check-double-line"></i>Criação e gestão de um fundo especial para o PNOST em estrita colaboração com as entidades públicas de tutela do PNOST</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <ul>

                        <li><i class="ri-check-double-line"></i>Promoção e supervisão de atividades que permitam o PNOST angariar receitas provindas de atividades turísticas;</li>
                        <li><i class="ri-check-double-line"></i>Alocação de técnicos especializados para proteção e preservação de biodiversidade e dos ecossistemas;</li>


                        <li><i class="ri-check-double-line"></i>Colaborar com as autorisdades competentes na angariação de fundos de investimentos;</li>
                        <li><i class="ri-check-double-line"></i>Criar novas oportunidades económicas para comunidades rurais, assim como às pequenas e médias empresas nacionais, no ramo do turismo.</li>

                    </ul>

                </div>
                <p>Foi criada em março de 2014, possui cerca de 35 membros de natureza jurídica diversa, tais como: empresas turísticas; cooperativas agrícolas; pessoas singulares e associações comunitárias rurais;</p>

                <p>O atual presidente é Dr. Eugénio Neves, Mestre em Educação e Gestão Ambiental, Licenciado Turismo e Gestão Hoteleira</p>

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
                <h2>Corpos Sociais</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="images/img.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Dr. Eugénio Neves</h4>
                            <span>Presidente</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="150">
                        <div class="pic"><img src="images/img_1.png" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Membros</h4>
                            <span>Colaboradores</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <section id="clients" class="clients section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Parceiros</h2>
            </div>

            <div class="row">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/img_1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/img_2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="assets/img/img_4.png" class="img-fluid" alt="">
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
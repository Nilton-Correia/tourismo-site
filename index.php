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
  <section id="hero">
    <div class="hero-container">
      <h1>BEM-VINDO Á PLATAFORMA DE TURISMO</h1>
      <h2>TURISMO RESPONSÁVEL E SUSTENTÁVEL SÃO TOMÉ & PRINCÍPE</h2>
        <a href="./login.php" class="btn-get-started scrollto">
            <i class="bi bi-person-fill"></i>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){echo "Bem-Vindo ";echo htmlspecialchars($_SESSION["username"]);
            }
            else{ echo "Conta";}?>



        </a>
    </div>
  </section><!-- End Hero -->

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
          <h2>Sobre Nós</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->

    <!-- ======= Our Values Section ======= -->
    <section id="our-values" class="our-values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/img_7.png");'>
              <div class="card-body">
                <h5 class="card-title"><a href="objetivo.html">Objetivos</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/img_10.png");'>
              <div class="card-body">
                <h5 class="card-title"><a href="missao.html">Missão</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/img_12.png");'>
              <div class="card-body">
                <h5 class="card-title"><a href="valores.html">Valores</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/img_13.png");'>
              <div class="card-body">
                <h5 class="card-title"><a href="corpo.html">Corpos Sociais</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/img_11.png");'>
              <div class="card-body">
                <h5 class="card-title"><a href="estatutos.html">Estatutos</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/img_9.png");'>
              <div class="card-body">
                <h5 class="card-title"><a href="carta.html">Carta de Sustentabilidade</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>


          </div>
        </div>

      </div>
    </section><!-- End Our Values Section -->
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
    </section><!-- End Clients Section -->
    <!-- ======= Clients Section ======= -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Projetos</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="percurso.html">Percursos Sustentáveis</a></h4>
              <p class="description">Os Percursos de Turismo Sustentável foram criados para que conheçamos um turismo de
                .....</p>
              <div class="read-more"><a href="percurso.html"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Plano Nacional de Ecoturismo</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              <div class="read-more"><a href="percurso.html"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Formação Clean & Safe</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              <div class="read-more"><a href="percurso.html"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Guardiões d’Obô</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              <div class="read-more"><a href="percurso.html"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Formação de Guias Locais</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              <div class="read-more"><a href="percurso.html"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Avaliação</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Galeria</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">Todos</li>
          <li data-filter=".filter-app">Hotéis</li>
          <li data-filter=".filter-card">Praias Paradisiacas</li>
          <li data-filter=".filter-web">Biodiversidade</li>
        </ul>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_6.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Praia Banana</h4>
              <p>Príncipe</p>
              <a href="assets/img/portfolio/img_6.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Praia Banana"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_5.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Hotel Miramar</h4>
              <p>São Tomé e Príncipe</p>
              <a href="assets/img/portfolio/img_5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Hotel Miramar"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_8.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Centro do Mundo</h4>
              <p>São Tomé- Ilhéu da Rolas</p>
              <a href="assets/img/portfolio/img_8.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Centro do Mundo"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_10.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Pico Cão Grande</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img_10.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Pico Cão Grande"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_11.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Túnel de Santa Catarina</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img_11.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Túnel de Santa Catarina"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_12.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Cascata de São Nicolau</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img_12.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Cascata de São Nicolau"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_1.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ilheu das Rolas</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img_1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ilheu das Rolas"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/img.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Resort Súndy</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Resort Súndy"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_2.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Mucumbi</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img_2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Mucumbi"><i class="bx bx-plus"></i></a>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Alojamentos</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box featured">
              <h3>Resort Súndy</h3>
              <h4><sup>€</sup>100<span> /mês</span></h4>
              <ul>
                <li>Quarto Individual</li>
                <li>Wi-fi</li>
                <li>Pequeno Almoço</li>
                <li class="na">TV</li>
                <li class="na">Visitas</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Ver Oferta</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Mucumbi</h3>
              <h4><sup>€</sup>85<span> / mês</span></h4>
              <ul>
                <li>Quarto Casal</li>
                <li>Wi-fi</li>
                <li>Pequeno Almoço</li>
                <li>TV</li>
                <li class="na">Visitas</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Ver Oferta</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Hotel Pestana</h3>
              <h4><sup>€</sup>45<span> / dia</span></h4>
              <ul>
                <li>Quarto casal</li>
                <li>Wi-fi</li>
                <li>Pequeno Almoço</li>
                <li>Tv</li>
                <li>Visitas</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Ver oferta</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Ilheu das Rolas</h3>
              <h4><sup>€</sup>49<span> / dia</span></h4>
              <ul>
                <li>Quarto Individual</li>
                <li>Visitas</li>
                <li>Restaurante</li>
                <li>Spa</li>
                <li>Piscina</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Ver oferta</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contactos</h2>
        </div>

        <div class="col-lg-6 ">
          <a href="https://www.google.com/maps/place/Mucumbli/@0.3500046,6.538614,17z/data=!4m18!1m9!3m8!1s0x1076724be106333b:0xf9a785be53f37f39!2sMucumbli!5m2!4m1!1i2!8m2!3d0.3500046!4d6.5408027!3m7!1s0x1076724be106333b:0xf9a785be53f37f39!5m2!4m1!1i2!8m2!3d0.3500046!4d6.5408027?hl=pt-PT"><img src="assets/img/portfolio/mapa.png" alt="" class="img-fluid"></a>
        </div>
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Endereço:</h4>
                <p>C.P. 486- Ponta Figo
                  Neves São Tomé</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ptrsgeral@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Ligue para Nós:</h4>
                <p>+239 2225398</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
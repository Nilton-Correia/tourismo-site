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
        <a href="" class="btn-get-started scrollto">
            <i class="bi bi-search"></i>
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

          <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>




            <a href="login.php" class="btn-get-started scrollto">
                <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){echo "Bem-Vindo ";echo htmlspecialchars($_SESSION["username"]);
                }
                else{ echo "Iniciar Sessão";}?>
            </a>

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

        <div class="row content">
          <div class="col-lg-6">
            <p>
                Plataforma de Turismo Sustentável e Responsável - é uma rede, composta por diversas entidades privadas nacionais, criada sem fins lucrativos, cujo o propósito é promover  o turismo sustentável em S. Tomé e Príncipe, por meio dos eixos estratégicos seguintes:

            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Prover recursos financeiros para apoio às despesas do funcionamento do PNOST;</li>
              <li><i class="ri-check-double-line"></i>Elaboração do Plano Nacionl de Ação Ecoturístico - que regulamente e faça a gestão de toda a atividade turística dentro do PNOST;</li>
              <li><i class="ri-check-double-line"></i>Envolvimento na fiscalização e monitorização de obras de benfeitorias que incidam sobre o PNOST;</li>

            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
              <ul>
              <li><i class="ri-check-double-line"></i>Criação e gestão de um fundo especial para o PNOST em estrita colaboração com as entidades públicas de tutela do PNOST;</li>
              <li><i class="ri-check-double-line"></i>Promoção e supervisão de atividades que permitam o PNOST angariar receitas provindas de atividades turísticas;</li>
              <li><i class="ri-check-double-line"></i>Alocação de técnicos especializados para proteção e preservação de biodiversidade e dos ecossistemas;</li>
              </ul>
              <div class="read-more"><a href="quem_somos.php"><i class="bi bi-arrow-right"></i> Ler mais ...</a></div>
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
                <h5 class="card-title"><a>Visão</a></h5>
                <p class="card-text">Atingir níveis cada vez mais elevados de sustentabilidade da atividade turística  em território nacional.
                </p>

              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/img_10.png");'>
              <div class="card-body">
                <h5 class="card-title"><a>Missão</a></h5>
                <p class="card-text">Promoção de boas práticas em Turismo  em todo o território de S. Tomé e Príncipe.
                </p>

              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/img_11.png");'>
              <div class="card-body">
                <h5 class="card-title"><a>Valores</a></h5>
                <p class="card-text">Conservação e  preservação dos recursos naturais e culturais endógenos;
                    Desenvolvimento harmonioso e equilibrado do território nacional;
                    Integração e socioeconómica das comunidades rurais.
                </p>

              </div>
            </div>
          </div>


          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/img_9.png");'>
              <div class="card-body">
                <h5 class="card-title"><a>Carta de Sustentabilidade</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>

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

              <h4 class="title"><a>Percursos Sustentáveis</a></h4>
              <p class="description">Os Percursos de Turismo Sustentável foram criados para que conheçamos um turismo de
                .....</p>
              <div class="read-more"><a href="percursos.php"><i class="bi bi-arrow-right"></i> Ler mais...</a></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">

              <h4 class="title"><a>Plano Nacional de Ecoturismo</a></h4>
              <p class="description"> Está em curso a elaboração do Plano Nacional de Ação Ecoturístico (PNAE)...</p>
              <div class="read-more"><a href="plano-nacional.php"><i class="bi bi-arrow-right"></i> Ler mais...</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <h4 class="title"><a>Formação Clean & Safe</a></h4>
              <p class="description">Projecto - Medidas Urgentes de Mitigação do Impacto da COVID-19 ...</p>
              <div class="read-more"><a href="formacao_clean.php"><i class="bi bi-arrow-right"></i> Ler mais...</a></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">

              <h4 class="title"><a>Guardiões d’Obô</a></h4>
              <p class="description">OS 12 GUARDIÕES D’OBÔ – equipa criada para fiscalizar, monitorar, sensibilizar e zelar...</p>
              <div class="read-more"><a href="guardioes_obo.php"><i class="bi bi-arrow-right"></i> Ler mais...</a></div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4">
            <div class="icon-box">

              <h4 class="title"><a >Formação de Guias Locais</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              <div class="read-more"><a href="percurso.html"><i class="bi bi-arrow-right"></i> Ler mais...</a></div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
<!-- End Testimonials Section -->

    <!-- ======= Cta Section ======= -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>São Tomé e Príncipe</h2>
         </p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">Todos</li>
          <li data-filter=".filter-app">Hotéis</li>
          <li data-filter=".filter-card">Praias Paradisiacas</li>
          <li data-filter=".filter-web">Biodiversidade</li>
        </ul>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_6.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Praia Banana</h4>
              <p>Príncipe</p>
              <a href="assets/img/portfolio/img_6.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Praia Banana"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_5.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Hotel Miramar</h4>
              <p>São Tomé e Príncipe</p>
              <a href="assets/img/portfolio/img_5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Hotel Miramar"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_8.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Centro do Mundo</h4>
              <p>São Tomé- Ilhéu da Rolas</p>
              <a href="assets/img/portfolio/img_8.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Centro do Mundo"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_10.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Pico Cão Grande</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img_10.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Pico Cão Grande"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-img"><img src="images/img_21.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>São Tomé</p>
              <a href="images/img_21.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>

            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/img_1.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Ilheu das Rolas</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img_1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ilheu das Rolas"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item  filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/img.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Resort Súndy</h4>
              <p>São Tomé</p>
              <a href="assets/img/portfolio/img.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Resort Súndy"><i class="bx bx-plus"></i></a>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="images/img_20.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>São Tomé</p>
              <a href="images/img_20.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>

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
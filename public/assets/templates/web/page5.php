<?php
  require_once('config/connection.php');
<<<<<<< HEAD
  $result = pg_query($cn,"select * from compartilhamentos");
=======
  $result = pg_query($cn,"select * from atores");
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<<<<<<< HEAD
  <title>Compartilhamento de Informações</title>
=======
  <title>Atores</title>
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
<<<<<<< HEAD
        <h1>Compartilhamento de Dados<span>.</span></h1>
=======
        <h1><span></span></h1>
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Início</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

<<<<<<< HEAD
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="assets/img/pag1.png" class="img-fluid rounded-4 mb-4" alt="">
=======
        <div class="section-header">
          <h2>Atores</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="assets/img/pag2.png" class="img-fluid rounded-4 mb-4" alt="">
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
<<<<<<< HEAD
                Compartilhamento em favor da Administração Pública. Seus dados serão compartilhados com os seguintes destinatários:
              </p>
                <?php
                  $result = pg_query($cn,"select * from compartilhamentos");
                  while($row = pg_fetch_object($result)){
                ?>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i><?php echo $row->acoes; ?></li>
=======
                Saiba como seus dados pessoais são armazenados e quem é o operador dessa aplicação.
              </p>
                <?php
                  while($row = pg_fetch_object($result)){
                ?>
              <p class="fst-italic">
                Ator:
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i><?php echo $row->nome; ?></li>
                <b>E-mail: </b><?php echo $row->email;?>
                <br>
                <b>Telefone: </b><?php echo $row->telefone; ?>
                <br>
                <b>Agência: </b><?php echo $row->agencia; ?>
                <br>
                <br>
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
                <?php
                }
                ?>
              </ul>
<<<<<<< HEAD
              <p class="fst-italic">
                Acesse a seção de empresas e pessoas para ter acesso aos dados cadastrais dos destinatários.
              </p>
              <p class="fst-italic">
                Motivo do compartilhamento de seus dados.
              </p>
                <?php
                  $result = pg_query($cn,"select * from compartilhamentos");
                  while($row = pg_fetch_object($result)){
                ?>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i><?php echo $row->justificativa; ?></li>
              </ul>
                <?php
                }
                ?>
=======
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
            </div>
          </div>
        </div>

<<<<<<< HEAD
        <div class="row gy-4">
          <div class="col-lg-12">
            <p><b>Base legal para o compartilhamento: </b></p>
            <?php
            $result = pg_query($cn,"select * from compartilhamentos");
            while($row = pg_fetch_object($result)){
            ?>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> <?php echo $row->baseLegal; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>

=======
>>>>>>> 3c0ad53bc7a01a679210f88369d7294750ff38e8
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

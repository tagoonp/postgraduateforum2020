<?php
include "config.inc.php";
include "domain.inc.php";
include "connect.inc.php";
include "function.inc.php";

$language = 1;
if((isset($_GET['lang'])) && ($_GET['lang'] != '')){
  $language = mysqli_real_escape_string($conn, $_GET['lang']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo get_configuration($conn, 'title', $language, $domain); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php echo get_configuration($conn, 'keywords', $language, $domain); ?>" name="keywords">
  <meta content="<?php echo get_configuration($conn, 'description', $language, $domain); ?>" name="description">

  <!-- Favicons -->
  <link href="./template/img/favicon.png" rel="icon">
  <link href="./template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">

  <!-- Bootstrap css -->
  <link href="./template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="./template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./template/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="./template/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="./template/lib/animate/animate.min.css" rel="stylesheet">
  <link href="./template/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="./template/css/style.css" rel="stylesheet">
  <link href="./template/custom/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="header header-hide pt-2 pb-2" style="height: 65px;">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <h1><a href="#body" class="scrollto"><span>e</span>Startup</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#body"><img src="./template/img/iw-logo.png" alt="" title="" style="width: 150px;" /></a>
      </div>

      <nav id="nav-menu-container" class="menu_position_1">
        <?php include "./template/componants/menu-1.php"; ?>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Team Section
  ============================-->
  <section id="team" class="padd-section text-center wow fadeInUp mt-5">

    <div class="container">
      <div class="section-title text-center">

        <h2 class="th">ทีมผู้ดำเนินการโครงการ</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="./template/img/team/1.jpg" class="./template/img-responsive" alt="./template/img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

       <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="./template/img/team/2.jpg" class="./template/img-responsive" alt="./template/img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="./template/img/team/3.jpg" class="./template/img-responsive" alt="./template/img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-md-4 col-lg-3">
          <div class="team-block bottom">
            <img src="./template/img/team/4.jpg" class="./template/img-responsive" alt="./template/img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <span>manager</span>
              <h4>Kimberly Tran</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!--==========================
    Footer
  ============================-->
  <?php include "./template/componants/footer.php"; ?>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="./template/lib/jquery/jquery.min.js"></script>
  <script src="./template/lib/jquery/jquery-migrate.min.js"></script>
  <script src="./template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./template/lib/superfish/hoverIntent.js"></script>
  <script src="./template/lib/superfish/superfish.min.js"></script>
  <script src="./template/lib/easing/easing.min.js"></script>
  <script src="./template/lib/modal-video/js/modal-video.js"></script>
  <script src="./template/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="./template/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="./template/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="./template/js/main.js"></script>

</body>
</html>

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
  <title>ติดต่อเรา</title>
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
    Contact Section
  ============================-->
  <section id="contact" class="padd-section wow fadeInUp mt-5">

    <div class="container">
      <div class="section-title text-center">
        <h2 class="th">ติดต่อเรา</h2>
        <p class="separator th">ท่านสามารถติดต่อเราผ่านผู้ประสานงานได้โดยช่องทางด้านล่างนี้</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info th">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="./template/contactform">
              <div class="form-group">
                <input type="text" name="name" class="form-control th" id="name" placeholder="ชื่ือ - นามสกุล" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control th" name="email" id="email" placeholder="อีเมล์แอดเดรสของท่าน" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control th" name="subject" id="subject" placeholder="หัวข้อ" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control th" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="ข้อความ"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit" class="th">ส่งข้อความ</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->

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

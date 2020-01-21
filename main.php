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
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1 class="th th-b-">ยินดีต้อนรับสู่ฐานข้อมูลแรงงานนอกระบบ</h1>
      <h2 class="th">เชื่อมโยงข้อมูลแรงงานนอกระบบ อาชีวอนามัย และสิทธิประโยชน์</h2>
      <img src="./template/img/hero-img.png" alt="Hero Imgs">
      <!-- <a href="#get-started" class="btn-get-started scrollto">Get Started</a> -->
      <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="https://iw.in.th/eldbplus/"><i class="fa fa-windows fa-3x"></i> On web-based</a>
      </div>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2 class="th">ระบบฐานข้อมูลที่เกี่ยวข้อง</h2>
        <p class="separator th">ระบบเก็บข้อมูลที่เกี่ยวข้องกับฐานข้อมูลแรงงานนอกระบบ</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-6">
          <div class="feature-block">

            <img src="./template/img/svg/cloud.svg" alt="./template/img" class="./template/img-fluid" style="max-width: 240px;">
            <h3 class="pt-5 th" style="font-size: 1.5em;">แอพพลิเคชัน<br>ฐานข้อมูลแรงงานนอกระบบ</h3 >
            <a href="#" class="btn btn-primary btn-sm mt-3 text-white th">อ่านต่อ</a>

          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="feature-block">

            <img src="./template/img/svg/planet.svg" alt="./template/img" class="./template/img-fluid" style="max-width: 240px;">
            <h3 class="pt-5 th" style="font-size: 1.5em;">แบบสำรวจภาวะสุขภาพตามความเสี่ยงจากการทำงานและความรอบรู้ของแรงงานนอกระบบ</h3>
            <a href="#" class="btn btn-primary btn-sm mt-3 text-white th">อ่านต่อ</a>

          </div>
        </div>

      </div>
    </div>

  </section>

  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2 class="th">ฟีเจอร์ต่างๆของแอพพลิเคชัน</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="./template/img/svg/paint-palette.svg" alt="./template/img" class="./template/img-fluid">
            <h4>creative design</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="./template/img/svg/vector.svg" alt="./template/img" class="./template/img-fluid">
            <h4>Retina Ready</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="./template/img/svg/design-tool.svg" alt="./template/img" class="./template/img-fluid">
            <h4>easy to use</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="./template/img/svg/asteroid.svg" alt="./template/img" class="./template/img-fluid">
            <h4>Free Updates</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="./template/img/svg/asteroid.svg" alt="./template/img" class="./template/img-fluid">
            <h4>Free Updates</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="./template/img/svg/cloud-computing.svg" alt="./template/img" class="./template/img-fluid">
            <h4>App store support</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="./template/img/svg/pixel.svg" alt="./template/img" class="./template/img-fluid">
            <h4>Perfect Pixel</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="./template/img/svg/code.svg" alt="./template/img" class="./template/img-fluid">
            <h4>clean codes</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2 class="th">ตังอย่างแอพพลิเคชัน</h2>
        <!-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> -->
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="./template/img/screen/1.jpg" alt="./template/img"></div>
        <div><img src="./template/img/screen/2.jpg" alt="./template/img"></div>
        <div><img src="./template/img/screen/3.jpg" alt="./template/img"></div>
        <div><img src="./template/img/screen/4.jpg" alt="./template/img"></div>
        <div><img src="./template/img/screen/5.jpg" alt="./template/img"></div>
        <div><img src="./template/img/screen/6.jpg" alt="./template/img"></div>
        <div><img src="./template/img/screen/7.jpg" alt="./template/img"></div>
        <div><img src="./template/img/screen/8.jpg" alt="./template/img"></div>
        <div><img src="./template/img/screen/9.jpg" alt="./template/img"></div>

      </div>
    </div>

  </section>

  <!--==========================
    Blog Section
  ============================-->
  <section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2 class="th">บทความล่าสุด</h2>
        <p class="separator th">บทความที่เกี่ยวข้องกับข้อมูลแรงงานนอกระบบ อาชีวอนามมัย และสิทธิประโยชน์</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="./template/img/blog/blog-image-1.jpg" alt="./template/img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="./template/img/blog/blog-image-2.jpg" class="./template/img-responsive" alt="./template/img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-blog text-left">
            <a href="#"><img src="./template/img/blog/blog-image-3.jpg" class="./template/img-responsive" alt="./template/img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
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

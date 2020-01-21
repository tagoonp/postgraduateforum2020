<?php
include "config.inc.php";
include "domain.inc.php";
include "connect.inc.php";
include "function.inc.php";

$language = 1;
if((isset($_GET['lang'])) && ($_GET['lang'] != '')){
  $language = mysqli_real_escape_string($conn, $_GET['lang']);
}

if(isset($_GET['status'])){
  $status = $_GET['status'];
  if(($status != 'success') && ($status != 'fail')){
    echo "Invalid parameters 2";
    die();
  }
}else{
  echo "Invalid parameters 1";
  die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Postgraduateforum 2020 Registraion result</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php //echo get_configuration($conn, 'keywords', $language, $domain); ?>" name="keywords">
  <meta content="<?php //echo get_configuration($conn, 'description', $language, $domain); ?>" name="description">

  <!-- Favicons -->
  <link href="./template/img/favicon.png" rel="icon">
  <link href="./template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

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

  <style media="screen">
    strong{
      font-weight: 600;
    }
    .dn{ display: none; }
  </style>

</head>

<body>

  <header id="header" class="header header-hide pt-2 pb-2" style="height: 65px; ">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index" class="scrollto"><span>Postgraduateforum</span>2020</a></h1>
      </div>
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="Home" class="wow fadeIn" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="hero-container">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?php
                if($status == 'success'){
                  ?>
                  <div class="row">
                    <div class="col-12">
                      <div class="text-center pt-3">
                        <i class="fa fa-check text-success" style="font-size: 4em;  "></i>
                      </div>
                      <h3 class="mb-3 mt-4 text-center text-success">Success</h3>
                      <div class="row">
                        <div class="col-12 col-sm-6 offset-sm-3">
                          <p class="text-center">
                            Please check your e-mail address and verify your account by click activation link attached via e-mail content. If you can not get an e-mail please contact staff at bags.anyawadee@gmail.com
                          </p>
                        </div>
                      </div>
                      <form onsubmit="return false;">
                        <div class="form-group text-center pt-4">
                          <button type="button" class="btn btn-success" onclick="window.location = './login'">Back to Log in</button>
                        </div>
                      </form>
                    </div>
                  </div>

                  <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #hero -->

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
  <script src="./assets/js/config.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      // $('#mainVideo').play();
    })
    $(function(){

      $('#txtPosition').change(function(){
          if($('#txtPosition').val() == 'Other'){
            $('.position_o').removeClass('dn')
          }else{
            $('.position_o').addClass('dn')
            $('#txtPosition_o').val('')
          }
      })

      $('.registerForm').submit(function(){
        let check = 0
        $('.form-control').removeClass('is-invalid')
        if($('#txtPosition').val() == ''){ check++; $('#txtPosition').addClass('is-invalid')}
        if($('#txtPrefix').val() == ''){ check++; $('#txtPrefix').addClass('is-invalid')}
        if($('#txtFname').val() == ''){ check++; $('#txtFname').addClass('is-invalid')}
        if($('#txtInstitution').val() == ''){ check++; $('#txtInstitution').addClass('is-invalid')}
        if($('#txtPhone').val() == ''){ check++; $('#txtPhone').addClass('is-invalid')}
        if($('#txtEmail').val() == ''){ check++; $('#txtEmail').addClass('is-invalid')}
        if($('#txtPassword1').val() == ''){ check++; $('#txtPassword1').addClass('is-invalid')}
        if($('#txtRegtype').val() == ''){ check++; $('#txtRegtype').addClass('is-invalid')}
        if($('#txtPosition').val() == 'Other'){
          if($('#txtPosition_o').val() == ''){ check++; $('#txtPosition_o').addClass('is-invalid')}
        }
        if(check != 0){ return ;}

        preload.show()

        var param = {
          position: $('#txtPosition').val(),
          position_o: $('#txtPosition_o').val(),
          prefix: $('#txtPrefix').val(),
          fullname: $('#txtFullname').val(),
          institution: $('#txtInstitution').val(),
          phone: $('#txtPhone').val(),
          email: $('#txtEmail').val(),
          password: $('#txtPassword1').val(),
          regtype: $('#txtRegtype').val()
        }

        console.log(param);
        return ;

        var jxr = $.post( config.api + 'authenication?stage=create', param, function(){})
                   .always(function(resp){
                     if(resp == 'Y'){
                       preload.hide()
                       window.location = 'register_result?status=success'
                     }else{
                       preload.hide()
                       window.location = 'register_result?status=fail'
                     }
                   })
      })
    })
  </script>

</body>
</html>

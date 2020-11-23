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
  <title>Postgraduateforum 2020</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
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

  <link rel="stylesheet" href="./node_modules/sweetalert/dist/sweetalert.css">
  <link rel="stylesheet" href="./node_modules/preload.js/dist/css/preload.css">

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
                <div class="row">
                  <div class="col-12 col-sm-4 offset-sm-4">
                    <h3 class="mb-3">Forget password</h3>
                    <div class="p-2 mb-2" style="background: rgb(244, 244, 244); font-size: 0.8em;">
                      Enter e-mail registed with postgraduateform2020.
                    </div>
                    <form onsubmit="return false;" class="passwordForm">
                      <div class="form-group">
                        <label for="" class="text-muted" style="font-size: 0.8em;">E-mail address : <span class="text-danger">*</span> </label>
                        <input type="email"  name="txtUsername" id="txtUsername" value="" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Send your password</button>
                        <a href="login" style="font-size: 0.8em; margin-top: 13px;" class="float-right">Back to login</a>
                      </div>

                    </form>
                  </div>

                </div>

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

  <script type="text/javascript" src="./node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="./node_modules/preload.js/dist/js/preload.js"></script>

  <!-- Template Main Javascript File -->
  <script src="./template/js/main.js?token=<?php echo $sysdateu; ?>"></script>
  <script src="./assets/js/config.js?token=<?php echo $sysdateu; ?>"></script>
  <script src="./assets/js/core.js?token=<?php echo $sysdateu; ?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      window.localStorage.removeItem(wc_config.prefix + 'uid')
      window.localStorage.removeItem(wc_config.prefix + 'role')
      window.localStorage.removeItem(wc_config.prefix + 'pid')
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

      $('.passwordForm').submit(function(){
        let check = 0
        $('.form-control').removeClass('is-invalid')
        if($('#txtUsername').val() == ''){ check++; $('#txtUsername').addClass('is-invalid')}
        if(check != 0){ return ;}
        var param = {
          username: $('#txtUsername').val()
        }
        preload.show()
        var jxr = $.post(wc_config.api + 'authenication?stage=check_password', param, function(){}, 'json')
                   .always(function(snap){
                     if(fnc.json_exist(snap)){
                       snap.forEach(i=>{
                         if(i.status == 'Y'){
                           var content = '<p><h4>Postgraduate Forum 2020 Account Information</h4>Dear ' + i.fullname + '</p>' +
                                         '<p>You created postgraduate forum 2020 account via this information as below<br>' +
                                         '<strong>Username :</strong> ' + i.username + '<br><strong>Password:</strong> ' + i.pwd + '. <br>You can login and check your attend status at https://postgraduateforum2020.com/login</p>' +
                                         '<p>Regards,<br>Postgraduate Forum 2020 Auto mailer system</p>'


                           var param = {
                               title: 'Postgraduate Forum 2020 Account Information',
                               content: content,
                               user: 'epiunit.psu@gmail.com',
                               key: 'ZXBpdW5pdC5wc3VAZ21haWwuY29tMjAyMC0wMS0yMyAxMTo0NzowMTIwMi4xMi43My4yNg==',
                               toemail: $('#txtUsername').val(),
                               toname: i.fullname
                           }

                           fnc.send_email(param, 'reload', 'Sending password success', 'Password sended.', true, '')
                         }else{
                           preload.hide()
                           swal("Error", "E-mail address not found!", "error")
                         }
                       })
                     }else{
                       preload.hide()
                       swal("Error", "E-mail address not found!", "error")
                     }
                   })
      })
    })
  </script>

</body>
</html>

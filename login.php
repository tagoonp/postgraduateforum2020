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
                  <div class="col-12 col-sm-4">
                    <h3 class="mb-3">Log In</h3>
                    <div class="p-2 mb-2" style="background: rgb(244, 244, 244); font-size: 0.8em;">
                      Log in with you postgraduateform2020 account.
                    </div>
                    <form onsubmit="return false;" class="loginForm">
                      <div class="form-group">
                        <label for="" class="text-muted" style="font-size: 0.8em;">E-mail address : <span class="text-danger">*</span> </label>
                        <input type="email"  name="txtUsername" id="txtUsername" value="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="" class="text-muted" style="font-size: 0.8em;">Password : <span class="text-danger">*</span> </label>
                        <input type="password"  name="txtPassword" id="txtPassword" value="" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Sign in</button>
                        <a href="#" style="font-size: 0.8em; margin-top: 13px;" class="float-right">Forget password?</a>
                      </div>

                      <div class="p-2 mb-2 text-danger" style="background-: rgb(244, 244, 244); font-size: 0.8em;">
                        Do not have postgraduateform2020 account? please create your account first.
                      </div>

                    </form>
                  </div>
                  <div class="col-12 col-sm-8">
                    <div class="" style="border: dashed; border-width: 0px 0px 0px 1px; border-color: rgb(195, 198, 193); padding: 0px 20px 0px 30px;">
                      <h3 class="mb-3">Create account</h3>
                      <div class="p-2 mb-2" style="background: rgb(244, 244, 244); font-size: 0.8em;">
                        Please enter all require fields.
                      </div>
                      <form onsubmit="return false;" class="registerForm">
                        <div class="form-group">
                          <label for="" class="text-muted" style="font-size: 0.8em;">Academin position : <span class="text-danger">*</span> </label>
                          <select class="form-control" name="txtPosition" id="txtPosition" >
                            <option value="">-- Choose position --</option>
                            <option value="Professor">Professor</option>
                            <option value="Associate Professor">Associate Professor</option>
                            <option value="Assistant Professor">Assistant Professor</option>
                            <option value="Lecturer">Lecturer</option>
                            <option value="Student">Student</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>

                        <div class="position_o dn">
                          <div class="form-group">
                            <label for="" class="text-muted fs09 fw500" style="font-size: 0.8em;">Other academic position : <span class="text-danger">**</span></label>
                            <input type="text"  class="form-control" id="txtPosition_o" placeholder="Enter your academic position title ...">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="" class="text-muted fs09 fw500" style="font-size: 0.8em;">Title : <span class="text-danger">**</span></label>
                              <select name="txtPrefix"  id="txtPrefix" class="form-control">
                                  <option value="">-- Choose title --</option>
                                  <option value="Mr.">Mr.</option>
                                  <option value="Ms.">Ms.</option>
                                  <option value="Mrs.">Mrs.</option>
                                  <option value="Miss">Miss</option>
                               </select>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-group">
                              <label for="" class="text-muted fs09 fw500" style="font-size: 0.8em;">Full name : <span class="text-danger">**</span></label>
                              <input type="text"  class="form-control" id="txtFullname">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="text-muted fs09 fw500" style="font-size: 0.8em;">Institution / Faculty / University : <span class="text-danger">**</span></label>
                          <input type="text"  class="form-control" id="txtInstitution">
                        </div>

                        <div class="form-group">
                          <label for="" class="text-muted fs09 fw500" style="font-size: 0.8em;">Phone number : <span class="text-danger">**</span></label>
                          <input type="text"  class="form-control" id="txtPhone">
                        </div>

                        <div class="row">
                          <div class="form-group col-12 col-sm-6">
                            <label for="" class="text-muted" style="font-size: 0.8em;">E-mail address : <span class="text-danger">*</span> </label>
                            <input type="email"  name="txtEmail" id="txtEmail" value="" class="form-control">
                          </div>
                          <div class="form-group col-12 col-sm-6" style="font-size: 0.8em;">
                            <label for="" class="text-muted">Password : <span class="text-danger">*</span> </label>
                            <input type="text"  name="txtPassword1" id="txtPassword1" value="" class="form-control">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="" class="text-muted fs09 fw500" style="font-size: 0.8em;">Register as : <span class="text-danger">**</span></label>
                          <select name="txtPrefix" id="txtRegtype" class="form-control">
                              <option value="">-- Choose type --</option>
                              <option value="Author">Author</option>
                              <option value="Presenter">Presenter</option>
                              <option value="Participants">Speaker / Participants</option>
                           </select>
                           <div class="text-muted p-2" style="font-size: 0.8em;">
                             - Author is the first name in article<br>
                             - Presenter is the person who come and present on behalf of the main author.
                           </div>
                        </div>

                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Sign up</button>
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
  <script src="./template/js/main.js"></script>
  <script src="./assets/js/config.js"></script>
  <script src="./assets/js/core.js"></script>

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

      $('.loginForm').submit(function(){
        let check = 0
        $('.form-control').removeClass('is-invalid')
        if($('#txtUsername').val() == ''){ check++; $('#txtUsername').addClass('is-invalid')}
        if($('#txtPassword').val() == ''){ check++; $('#txtPassword').addClass('is-invalid')}
        if(check != 0){ return ;}
        var param = {
          username: $('#txtUsername').val(),
          password: $('#txtPassword').val()
        }
        preload.show()
        var jxr = $.post(wc_config.api + 'authenication?stage=login', param, function(){}, 'json')
                   .always(function(snap){
                     console.log(snap);
                     if(fnc.json_exist(snap)){
                       snap.forEach(i=>{
                         window.localStorage.setItem(wc_config.prefix + 'uid', i.uid)
                         window.localStorage.setItem(wc_config.prefix + 'role', i.role)
                         window.location = './' + i.role + '?uid=' + i.uid
                       })
                     }else{
                       preload.hide()
                       swal("Error", "Invalid user account!", "error")
                     }
                   })
      })

      $('.registerForm').submit(function(){
        let check = 0
        $('.form-control').removeClass('is-invalid')
        if($('#txtPosition').val() == ''){ check++; $('#txtPosition').addClass('is-invalid')}
        if($('#txtPrefix').val() == ''){ check++; $('#txtPrefix').addClass('is-invalid')}
        if($('#txtFullname').val() == ''){ check++; $('#txtFullname').addClass('is-invalid')}
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
        var sec_key = fnc.randomString(12)
        var param = {
          position: $('#txtPosition').val(),
          position_o: $('#txtPosition_o').val(),
          prefix: $('#txtPrefix').val(),
          fullname: $('#txtFullname').val(),
          institution: $('#txtInstitution').val(),
          phone: $('#txtPhone').val(),
          email: $('#txtEmail').val(),
          password: $('#txtPassword1').val(),
          regtype: $('#txtRegtype').val(),
          sec: sec_key
        }
        var jxr = $.post(wc_config.api + 'authenication?stage=create', param, function(){})
                   .always(function(resp){
                     if(resp == 'Y'){
                       var content = '<p><h4>Postgraduate Forum 2020 Account Information</h4></p>' +
                                     '<p>You created postgraduate forum 2020 account via this information as below<br>' +
                                     '<strong>Username :</strong> ' + $('#txtEmail').val() + '<br><strong>Password:</strong> ' + $('#txtPassword1').val() + '</p>' +
                                     '<p>For complete account registration, you will need to submit this verification code to verify your account by ' +
                                     'click this link https://postgraduateforum2020.com/activate?response_id=' + sec_key + ' (copy and paste if link not active)</p>' +
                                     '<p>You can login and check your attend status at https://postgraduateforum2020.com/login</p>' +
                                     '<p>Regards,<br>Postgraduate Forum 2020 Auto mailer system</p>'


                       var param = {
                           title: 'Postgraduate Forum 2020 Account Information',
                           content: content,
                           user: 'rmismedpsu@gmail.com',
                           key: 'cm1pc21lZHBzdUBnbWFpbC5jb20yMDE5LTEwLTIyIDIxOjU4OjU3MTI0LjEyMi40Mi4yNDU=',
                           toemail: $('#txtEmail').val(),
                           toname: $('#txtPrefix').val() + $('#txtFullname').val()
                       }

                       fnc.send_email(param, 'redirect', '', 'ระบบได้ดำเนินการตามกระบวนที่ท่านได้ดำเนินการแล้ว แต่เกิดข้อผิดพลาดในส่วนของการส่งอีเมล์ กรุณาแจ้งเจ้าหน้าที่เพื่อตรวจสอบและดำเนินการแก้ไข', true, 'register_result?status=success')

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

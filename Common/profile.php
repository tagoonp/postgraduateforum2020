<?php
include "../config.inc.php";
include "../connect.inc.php";
include "../function.inc.php";

if(!isset($_GET['uid'])){
  header('Location: ../');
  die();
}

$uid = mysqli_real_escape_string($conn, $_GET['uid']);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="Description" content="">
        <meta name="Keywords" content="">

        <title>Postgraduate Forum 2020</title>

        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.css">
        <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">
        <link rel="stylesheet" href="../node_modules/preload.js/dist/css/preload.css">
        <link rel="stylesheet" href="../node_modules/sweetalert/dist/sweetalert.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/style-custom.css">
        <style media="screen">
          .dn{ display: none; }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background: #3e5965; margin: 0px; left: 0px; right: 0px;">
            <a class="navbar-brand" href="./?uid=<?php echo $uid;?>">PGF<span style="color: rgb(17, 226, 100);">2020</span></a>
            <button class="navbar-toggler dn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="index">หน้าแรก <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about">เกี่ยวกับโครงการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#indicatorModal">ตัวชี้วัด</a>
                    </li> -->
                </ul>
                <ul class="navbar-nav navbar-right">
                  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep-"><i class="far fa-envelope"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                      <div class="dropdown-header text-dark">Messages
                        <div class="float-right">
                          <a href="#">Mark as read</a>
                        </div>
                      </div>
                      <div class="dropdown-list-content dropdown-list-message">
                        <div class="row">
                          <div class="col-12 text-center text-muted">
                            <div class="pt-5" style="margin-top: 80px;">
                              <i class="fas fa-times" style="font-size: 3em;"></i>
                            </div>
                            No massage found.
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-footer text-center">
                        <a href="#">Read all <i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep-"><i class="far fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                      <div class="dropdown-header text-dark">Notification
                        <div class="float-right">
                          <a href="#">Mark as read</a>
                        </div>
                      </div>
                      <div class="dropdown-list-content dropdown-list-message">
                        <div class="row">
                          <div class="col-12 text-center text-muted">
                            <div class="pt-5" style="margin-top: 80px;">
                              <i class="fas fa-times" style="font-size: 3em;"></i>
                            </div>
                            No notification found.
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-footer text-center">
                        <a href="#">Read all <i class="fas fa-chevron-right"></i></a>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown text-white "><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-use text-whiter">
                    <!-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> -->
                    <div class="d-sm-none d-lg-inline-block text-white">Hello, <span class="textUserFullname"></span> <span class="textUserRole"> <i class="fas fa-sync fa-spin"></i> </span></div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="profile?uid=<?php echo $uid;?>" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profile
                      </a>
                      <a href="activities?uid=<?php echo $uid;?>" class="dropdown-item has-icon">
                        <i class="fas fa-bolt"></i> Activity log
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="Javascript:authen.logout()" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Sign out
                      </a>
                    </div>
                  </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
          <!-- Main Content -->
          <div class="main-content pl-0 pr-0">
            <section class="section">
              <div class="section-body mt-2">
                <div class="row d-none d-sm-block">
                  <div class="col-12">
                      <button type="button" class="btn btn-secondary text-dark bsdn" onclick="window.location='./?uid=<?php echo $uid;?>'"><i class="fas fa-home"></i></button>
                      <button type="button" class="btn btn-success text-dark- bsdn" onclick="window.location='profile?uid=<?php echo $uid;?>'"><i class="far fa-user"></i> Profile</button>
                      <button type="button" class="unSubmittion_componants btn btn-primary float-right bsdn" onclick="window.location='abstract?uid=<?php echo $uid; ?>'"><i class="fas fa-upload"></i> Submit abstract</button>
                  </div>
                </div>

                <div class="row d-block d-sm-none">
                  <div class="col-12">
                      <button type="button" class="btn btn-secondary text-dark bsdn"><i class="fas fa-bars"></i> เมนู</button>
                      <button type="button" class="unSubmittion_componants btn btn-primary float-right bsdn" onclick="window.location='abstract?uid=<?php echo $uid; ?>'"><i class="fas fa-upload"></i> Submit abstract</button>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-sm-12">
                    <strong>Profile UID : </strong>
                    <a href="#" class="float-right text-success"  data-toggle="modal" data-target="#profileModal"><i class="fas fa-pencil-alt"></i> Update profile</a>
                    <div class="card mt-2">
                      <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                          <tbody>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Academic position</td>
                              <td><span class="text-success" id="textAcademicPosition">-</span></td>
                            </tr>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Full name</td>
                              <td><span class="text-success textUserFullname" id="">-</span></td>
                            </tr>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Institution</td>
                              <td><span class="text-success" id="textInstitution">-</span></td>
                            </tr>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Country</td>
                              <td><span class="text-success" id="textCountry">-</span></td>
                            </tr>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">E-mail address</td>
                              <td><span class="text-success" id="textEmail">-</span></td>
                            </tr>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Phone number</td>
                              <td><span class="text-success" id="textPhone">-</span></td>
                            </tr>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Register as</td>
                              <td><span class="text-success" id="textRegas">-</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .row -->

                <div class="row mt-3">
                  <div class="col-sm-12">
                    <strong>Other information </strong>
                    <a href="#" class="float-right text-success"><i class="fas fa-pencil-alt"></i> Update info</a>
                    <div class="card mt-2">
                      <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                          <tbody>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Meal requirement</td>
                              <td><span>-</span></td>
                            </tr>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Accommodation</td>
                              <td><span>-</span></td>
                            </tr>
                            <tr>
                              <td style="width: 30%; font-weight: 400;" class="text-dark">Sightseeing in Songkhla</td>
                              <td><span class="text-success" id="textSightseeing">-</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .row -->

              </div>
            </section>
          </div>
        </div>

    </body>

    <button class="btn dn" id="btnResetPWD" data-toggle="modal" data-target="#resetPasswordModal"></button>
    <input type="hidden" class="hdUid" value="<?php echo $uid;?>">

    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js" ></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../node_modules/preload.js/dist/js/preload.js"></script>
    <script type="text/javascript" src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>

    <script src="../assets/js/config.js?token=<?php echo $sysdateu; ?>"></script>
    <script src="../assets/js/core.js?token=<?php echo $sysdateu; ?>"></script>
    <script src="../assets/js/authentication.js?token=<?php echo $sysdateu; ?>"></script>

    <script>
        $(document).ready(function(){
            preload.show()
            $ref_uid = $('.hdUid').val()
            if(current_user != $ref_uid ){
              console.log($ref_uid);
              console.log('aaa');
              return ;
              authen.logout()
              return ;
            }
            authen.get_current_user(true)
        })

        $(function(){
          $('.updateprofileForm').submit(function(){
            let check = 0
            $('.form-control').removeClass('is-invalid')
            if($('#txtPosition').val() == ''){ check++; $('#txtPosition').addClass('is-invalid')}
            if($('#txtPrefix').val() == ''){ check++; $('#txtPrefix').addClass('is-invalid')}
            if($('#txtFullname').val() == ''){ check++; $('#txtFullname').addClass('is-invalid')}
            if($('#txtInstitution').val() == ''){ check++; $('#txtInstitution').addClass('is-invalid')}
            if($('#txtPhone').val() == ''){ check++; $('#txtPhone').addClass('is-invalid')}
            if($('#txtEmail').val() == ''){ check++; $('#txtEmail').addClass('is-invalid')}
            if($('#txtRegtype').val() == ''){ check++; $('#txtRegtype').addClass('is-invalid')}
            if($('#txtCountry').val() == ''){ check++; $('#txtCountry').addClass('is-invalid')}

            if($('#txtPosition').val() == 'Other'){
              if($('#txtPosition_o').val() == ''){ check++; $('#txtPosition_o').addClass('is-invalid')}
            }
            $sightseeing = 0;
            if($('#txtCheckbox1').is(":checked")){
              $sightseeing = 1;
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
              regtype: $('#txtRegtype').val(),
              country: $('#txtCountry').val(),
              sightseeing: $sightseeing,
              uid: current_user
            }

            var jxr = $.post(wc_config.api + 'authenication?stage=updateinfo', param, function(){})
                       .always(function(resp){
                         if(resp == 'Y'){
                           var content = '<p><h4>Postgraduate Forum 2020 Account update notification</h4></p>' +
                                         '<p>You have to update profile information. If this activity is not your action please login, review userinformation and secure accout by chage your password at https://postgraduateforum2020.com/login</p>' +
                                         '<p>Regards,<br>Postgraduate Forum 2020 Auto mailer system</p>'
                           var param = {
                               title: 'PGF2020 Account Update notification',
                               content: content,
                               user: 'rmismedpsu@gmail.com',
                               key: 'cm1pc21lZHBzdUBnbWFpbC5jb20yMDE5LTEwLTIyIDIxOjU4OjU3MTI0LjEyMi40Mi4yNDU=',
                               toemail: $('#txtEmail').val(),
                               toname: $('#txtPrefix').val() + $('#txtFullname').val()
                           }

                           fnc.send_email(param, 'reload', 'Update account success (Status 1)', 'Update account success (Status 2)', true, '')

                         }else{
                           preload.hide()
                           window.location = 'register_result?status=fail'
                         }
                       })
          })
        })

        function closeModal(){
            $('.btnCloseModal').trigger('click')
            $('#btnResetPWD').trigger('click')
        }
    </script>
</html>

<!-- Modal -->
<div class="modal fade" id="indicatorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 0px; border: 0px;">
      <div class="modal-header bg-success" style="border-radius: 0px; border: 0px;">
        <h5 class="modal-title text-white" id="exampleModalLabel">เลือกตัวชี้วัด</h5>
        <button type="button" class="close btnCloseModal text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        $tb = TB_PREFIX.'indicator';
        $strSQL = "SELECT * FROM $tb WHERE ind_status = '1' ";
        $result = mysqli_query($conn, $strSQL);
        if(($result) && (mysqli_num_rows($result) > 0)){
            $c = 1;
            while($row = mysqli_fetch_array($result)){
                if($row['ind_url'] == '#'){
                    echo '<div class="p-2"><strong>'.$c.". ".$row['ind_name'].'</strong></div>';
                    $c++;
                }else{
                    if($row['ind_level'] == 1){
                        echo '<div class="p-2"><strong>'.$c.'. <a href="'.$row['ind_url'].'" class="custom-link-2">'.$row['ind_name'].'</a></strong></div>';
                    }else{
                        echo '<div class="p-1 pl-2"> - <a href="'.$row['ind_url'].'"  class="custom-link-1">'.$row['ind_name'].'</a></div>';
                    }

                }
            }
        }
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">Update profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form onsubmit="return false;" class="updateprofileForm">
        <div class="modal-body">
          <div class="form-group">
            <label for="" class="text-muted-" style="font-size: 0.8em;">Academin position : <span class="text-danger">*</span> </label>
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
                <label for="" class="text-muted- fs09 fw500" style="font-size: 0.8em;">Title : <span class="text-danger">**</span></label>
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
                <label for="" class="text-muted- fs09 fw500" style="font-size: 0.8em;">Full name : <span class="text-danger">**</span></label>
                <input type="text"  class="form-control" id="txtFullname">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="text-muted- fs09 fw500" style="font-size: 0.8em;">Institution / Faculty / University : <span class="text-danger">**</span></label>
            <input type="text"  class="form-control" id="txtInstitution">
          </div>

          <div class="form-group">
            <label for="" class="text-muted- fs09 fw500" style="font-size: 0.8em;">Country : <span class="text-danger">**</span></label>
            <select class="form-control" name="txtCountry" id="txtCountry">
              <option value="">-- Choose country --</option>
              <?php
              $strSQL = "SELECT * FROM udix2_countries WHERE 1 ORDER BY country_name";
              $resultCountry = mysqli_query($conn, $strSQL);
              if($resultCountry){
                while($row = mysqli_fetch_array($resultCountry)){
                  echo '<option value="'.$row['country_name'].'">'.$row['country_name'].'</option>';
                }
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="" class="text-muted- fs09 fw500" style="font-size: 0.8em;">Phone number : <span class="text-danger">**</span></label>
            <input type="text"  class="form-control" id="txtPhone">
          </div>



          <div class="row">
            <div class="form-group col-12 col-sm-6">
              <label for="" class="text-muted-" style="font-size: 0.8em;">E-mail address : <span class="text-danger">*</span> </label>
              <input type="email"  name="txtEmail" id="txtEmail" value="" class="form-control" readonly>
            </div>

            <div class="form-group col-12 col-sm-6">
              <label for="" class="text-muted- fs09 fw500" style="font-size: 0.8em;">Register as : <span class="text-danger">**</span></label>
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
          </div>
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input class="form-check-input mr-3" type="checkbox" id="txtCheckbox1" value="1">
              <label class="form-check-label" for="inlineCheckbox1"  style="font-size: 0.8em;">Would you like  to join sightseeing at Songkhla province on 14th July afternoon? <span class="text-danger">* free of charge</span></label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary- bsdn" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary bsdn">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 0px; border: 0px;">
      <div class="modal-header bg-success" style="border-radius: 0px; border: 0px;">
        <h5 class="modal-title text-white" id="exampleModalLabel">ลืมรหัสผ่าน</h5>
        <button type="button" class="close text-white"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form onsubmit="return false;" class="resetpasswordForm">
            <div class="form-group">
                <input type="text" id="txtEmail2" class="form-control custom-input" placeholder="อีเมล์แอดเดรส ...">
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-success" type="submit"><i class="fas fa-paper-plane"></i> ส่ง Reset password link</button>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>

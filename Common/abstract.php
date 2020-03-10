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
                      <button type="button" class="btn btn-secondary text-dark bsdn" onclick="window.location='profile?uid=<?php echo $uid;?>'"><i class="far fa-user"></i> Profile</button>
                      <!-- <button type="button" class="unSubmittion_componants btn btn-primary float-right bsdn" onclick="window.location='abstract?uid=<?php echo $uid; ?>'"><i class="fas fa-upload"></i> Submit abstract</button> -->
                  </div>
                </div>

                <div class="row d-block d-sm-none">
                  <div class="col-12">
                      <button type="button" class="btn btn-secondary text-dark bsdn"><i class="fas fa-bars"></i> เมนู</button>
                      <!-- <button type="button" class="unSubmittion_componants btn btn-primary float-right bsdn" onclick="window.location='abstract?uid=<?php echo $uid; ?>'"><i class="fas fa-upload"></i> Submit abstract</button> -->
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-sm-12">
                    <h4 class="text-dark">Submission new abstract </h4>
                    <div class="dn-">
                      Abstract id : <span class="textPid">(AUTO GENERATE AFTER SUBMISSION SUCCESS)</span>
                    </div>
                    <div class="card mt-2">
                      <div class="card-header bg-success">
                        <h4 class="text-white">Submission form</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <form onsubmit="return false;" class="abstractForm">
                              <div class="form-group">
                                <label for="">UID : <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="txtUid" id="txtUid" value="<?php echo $uid; ?>" readonly>
                              </div>

                              <div class="form-group">
                                <label for="">Title : <span class="text-danger">*</span> </label>
                                <textarea name="txtTitle" id="txtTitle" rows="8" cols="80" class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                <label for="">Presentation type : <span class="text-danger">*</span> </label>
                                <select class="form-control" name="txtType" id="txtType">
                                  <option value="">-- Choose type --</option>
                                  <option value="Oral">Oral presenatation</option>
                                  <option value="Poster">Poster presenatation</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="">Author / Co-author : <span class="text-danger">*</span> </label>
                                <button type="button" class="btn btn-success- bsdn btn-sm text-danger float-right" onclick="checkTitle()"><i class="fas fa-plus"></i> Click here to add new author / co-author</button>
                                <table class="table table-striped table-sm-">
                                  <thead>
                                    <tr style="background: rgb(235, 235, 235);">
                                      <th  style="width: 50px;">No.</th>
                                      <th>Author/Co-author's name</th>
                                      <th style="width: 100px;" class="pl-0">Presenter?</th>
                                      <th style="width: 250px;"></th>
                                    </tr>
                                  </thead>
                                  <tbody id="tableAuthor">
                                    <tr><td colspan="4" class="text-center">No author / co-author found</td></tr>
                                  </tbody>
                                </table>
                              </div>

                              <div class="form-group">
                                <label for="">Abstract : <span class="text-danger">*</span> </label>
                                <a href="#" class="float-right text-success"  data-toggle="modal" data-target="#instructionModal">- Click here for instruction -</a>
                                <textarea name="txtAbstract" id="txtAbstract" rows="8" cols="80" class="form-control"></textarea>
                              </div>

                              <div class="form-group">
                                <label for="">Keywords : <span class="text-danger">*</span> </label>
                                <input type="text" name="txtKeyword" id="txtKeyword" value="" class="form-control">
                                <small>Each keyword seperate by comma. <strong>Example</strong>: keyword1, keyword2, keyword3</small>
                              </div>

                              <div class="form-group">
                                <label for="">Abstract categories : <span class="text-danger">*</span> </label>
                                <select class="form-control" name="txtCategory" id="txtCategory">
                                  <option value="">-- Choose categories --</option>
                                  <option value="Health system and policy">Health system and policy</option>
                                  <option value="Health workforce and finance">Health workforce and finance</option>
                                  <option value="Primary health care">Primary health care</option>
                                  <option value="Health equity">Health equity</option>
                                  <option value="Health in sustainable development goals">Health in sustainable development goals</option>
                                </select>
                              </div>

                              <div class="form-group text-center">
                                <button type="reset" class="btn btn-primary- bsdn btn-lg">Reset form</button>
                                <button type="submit" class="btn btn-primary bsdn btn-lg">Submit</button>
                              </div>

                            </form>
                          </div>
                        </div>
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
    <script type="text/javascript" src="../node_modules/ckeditor_lite/ckeditor.js"></script>
    <script type="text/javascript" src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>

    <script src="../assets/js/config.js?token=<?php echo $sysdateu; ?>"></script>
    <script src="../assets/js/core.js?token=<?php echo $sysdateu; ?>"></script>
    <script src="../assets/js/authentication.js?token=<?php echo $sysdateu; ?>"></script>
    <script src="../assets/js/submission.js?token=<?php echo $sysdateu; ?>"></script>

    <script>
      var abstract = null

      if($("#txtAbstract").length) {
          abstract = CKEDITOR.replace( 'txtAbstract', {
              wordcount :
              {
                showWordCount : true,
                maxWordCount: 250
              },
              height: '500px'
          });

          abstract.setData(
                          '<p><strong>Background</strong> : ......... </p>' +
                          '<p><strong>Objective</strong> : ......... </p>' +
                          '<p><strong>Method</strong> : ......... </p>' +
                          '<p><strong>Results</strong> : ......... </p>' +
                          '<p><strong>Conclusions</strong> : ......... </p>'
                          )
      }

        $(document).ready(function(){

          console.log(current_project);

          preload.show()
          $ref_uid = $('.hdUid').val()
          if(current_user != $ref_uid ){
            authen.logout()
            return ;
          }
          authen.get_current_user()
          submission.get_lasted_submission(true)
          submission.list_author()
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

          setInterval(function(){
            submission.savedraft()
          }, 3000)


          $('#txtTitle').blur(function(){
            submission.savedraft()
          })

          $('.abstractForm').submit(function(){
            submission.savedraft(1)
          })



          $('.authorForm').submit(function(){
            let check = 0
            $('.form-control').removeClass('is-invalid')
            if($('#txtPosition').val() == ''){ check++; $('#txtPosition').addClass('is-invalid')}
            if($('#txtPrefix').val() == ''){ check++; $('#txtPrefix').addClass('is-invalid')}
            if($('#txtFullname').val() == ''){ check++; $('#txtFullname').addClass('is-invalid')}
            if($('#txtInstitution').val() == ''){ check++; $('#txtInstitution').addClass('is-invalid')}
            if($('#txtEmail').val() == ''){ check++; $('#txtEmail').addClass('is-invalid')}
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
              country: $('#txtCountry').val(),
              email: $('#txtEmail').val(),
              pid: current_project,
              uid: current_user
            }
            var jxr = $.post(wc_config.api + 'submission?stage=create_author', param, function(){})
                       .always(function(resp){
                         if(resp == 'Y'){
                           preload.hide()
                           $('.btnCloseModal').trigger('click')
                           $('#txtPosition').val('')
                           $('#txtPosition_o').val('')
                           $('#txtPrefix').val('')
                           $('#txtFullname').val('')
                           $('#txtInstitution').val('')
                           $('#txtCountry').val('')
                           $('#txtEmail').val('')
                           submission.list_author()
                         }else{
                           preload.hide()
                           swal("Error!", "Can not add author name!", "error")
                         }
                       })
          })

          $('.authorupdateForm').submit(function(){
            let check = 0
            $('.form-control').removeClass('is-invalid')
            if($('#txtAuthorId2').val() == ''){ check++; $('#txtPosition').addClass('is-invalid')}
            if($('#txtPosition2').val() == ''){ check++; $('#txtPosition').addClass('is-invalid')}
            if($('#txtPrefix2').val() == ''){ check++; $('#txtPrefix').addClass('is-invalid')}
            if($('#txtFullname2').val() == ''){ check++; $('#txtFullname').addClass('is-invalid')}
            if($('#txtInstitution2').val() == ''){ check++; $('#txtInstitution').addClass('is-invalid')}
            if($('#txtEmail2').val() == ''){ check++; $('#txtEmail').addClass('is-invalid')}
            if($('#txtPosition2').val() == 'Other'){
              if($('#txtPosition_o2').val() == ''){ check++; $('#txtPosition_o').addClass('is-invalid')}
            }
            if(check != 0){ return ;}
            preload.show()
            var sec_key = fnc.randomString(12)
            var param = {
              aid: $('#txtAuthorId2').val(),
              position: $('#txtPosition2').val(),
              position_o: $('#txtPosition_o2').val(),
              prefix: $('#txtPrefix2').val(),
              fullname: $('#txtFullname2').val(),
              institution: $('#txtInstitution2').val(),
              country: $('#txtCountry2').val(),
              email: $('#txtEmail2').val(),
              pid: current_project,
              uid: current_user
            }
            var jxr = $.post(wc_config.api + 'submission?stage=update_author', param, function(){})
                       .always(function(resp){
                         if(resp == 'Y'){
                           preload.hide()
                           $('.btnCloseModal').trigger('click')
                           $('#txtAuthorId2').val(''),
                           $('#txtPosition').val('')
                           $('#txtPosition_o').val('')
                           $('#txtPrefix').val('')
                           $('#txtFullname').val('')
                           $('#txtInstitution').val('')
                           $('#txtCountry').val('')
                           $('#txtEmail').val('')
                           submission.list_author()
                         }else{
                           preload.hide()
                           swal("Error!", "Can not add author name!", "error")
                         }
                       })
          })

        })

        function closeModal(){
            $('.btnCloseModal').trigger('click')
            $('#btnResetPWD').trigger('click')
        }

        function checkTitle(){
          if($('#txtTitle').val() != ''){
            $('#authorModal').modal()
          }
        }

    </script>
</html>

<!-- Modal -->
<div class="modal fade" id="authorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 0px; border: 0px;">
      <div class="modal-header bg-success" style="border-radius: 0px; border: 0px;">
        <h5 class="modal-title text-white pb-3" id="exampleModalLabel">Author / Co-author</h5>
        <button type="button" class="close btnCloseModal text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form onsubmit="return false;" class="authorForm">
          <div class="form-group">
            <label for="" class="text-dark" style="font-size: 0.8em;">Academin position : <span class="text-danger">*</span> </label>
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
              <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Other academic position : <span class="text-danger">**</span></label>
              <input type="text"  class="form-control" id="txtPosition_o" placeholder="Enter your academic position title ...">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Title : <span class="text-danger">**</span></label>
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
                <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Full name : <span class="text-danger">**</span></label>
                <input type="text"  class="form-control" id="txtFullname">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-12 col-sm-8">
              <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Institution / Faculty / University : <span class="text-danger">**</span></label>
              <input type="text"  class="form-control" id="txtInstitution">
              <div class="text-muted" style="font-size: 0.9em;">
                * Dept name of organization (of Affiliation), name of organization
              </div>
            </div>
            <div class="form-group col-12 col-sm-4">
              <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Country : <span class="text-danger">**</span></label>
              <select name="txtPrefix"  id="txtCountry" class="form-control">
                  <option value="">-- Choose country --</option>
                  <?php
                  $strSQL = "SELECT CountryName FROM udix2_country WHERE 1 ORDER BY CountryName";
                  $resultCountry = mysqli_query($conn, $strSQL);
                  if($resultCountry){
                    while($row = mysqli_fetch_array($resultCountry)){
                      ?>
                      <option value="<?php echo $row['CountryName'];?>"><?php echo $row['CountryName'];?></option>
                      <?php
                    }
                  }
                  ?>
               </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-12">
              <label for="" class="text-dark" style="font-size: 0.8em;">E-mail address : <span class="text-danger">*</span> </label>
              <input type="email"  name="txtEmail" id="txtEmail" value="" class="form-control">
            </div>
          </div>

          <div class="form-group text-right">
            <button type="submit" class="btn btn-success bsdn"><i class="fas fa-plus"></i> Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="authorModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 0px; border: 0px;">
      <div class="modal-header bg-success" style="border-radius: 0px; border: 0px;">
        <h5 class="modal-title text-white pb-3" id="exampleModalLabel">Update Author / Co-author information</h5>
        <button type="button" class="close btnCloseModal text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form onsubmit="return false;" class="authorupdateForm">
          <div class="form-group dn">
            <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Other academic position : <span class="text-danger">**</span></label>
            <input type="text" readonly class="form-control" id="txtAuthorId2" placeholder="Enter your academic position title ...">
          </div>

          <div class="form-group">
            <label for="" class="text-dark" style="font-size: 0.8em;">Academin position : <span class="text-danger">*</span> </label>
            <select class="form-control" name="txtPosition2" id="txtPosition2" >
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
              <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Other academic position : <span class="text-danger">**</span></label>
              <input type="text"  class="form-control" id="txtPosition_o2" placeholder="Enter your academic position title ...">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Title : <span class="text-danger">**</span></label>
                <select name="txtPrefix"  id="txtPrefix2" class="form-control">
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
                <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Full name : <span class="text-danger">**</span></label>
                <input type="text"  class="form-control" id="txtFullname2">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-12 col-sm-8">
              <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Institution / Faculty / University : <span class="text-danger">**</span></label>
              <input type="text"  class="form-control" id="txtInstitution2">
              <div class="text-muted" style="font-size: 0.9em;">
                * Dept name of organization (of Affiliation), name of organization
              </div>
            </div>
            <div class="form-group col-12 col-sm-4">
              <label for="" class="text-dark fs09 fw500" style="font-size: 0.8em;">Country : <span class="text-danger">**</span></label>
              <select name="txtPrefix"  id="txtCountry2" class="form-control">
                  <option value="">-- Choose country --</option>
                  <?php
                  $strSQL = "SELECT CountryName FROM udix2_country WHERE 1 ORDER BY CountryName";
                  $resultCountry = mysqli_query($conn, $strSQL);
                  if($resultCountry){
                    while($row = mysqli_fetch_array($resultCountry)){
                      ?>
                      <option value="<?php echo $row['CountryName'];?>"><?php echo $row['CountryName'];?></option>
                      <?php
                    }
                  }
                  ?>
               </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-12">
              <label for="" class="text-dark" style="font-size: 0.8em;">E-mail address : <span class="text-danger">*</span> </label>
              <input type="email"  name="txtEmail" id="txtEmail2" value="" class="form-control">
            </div>
          </div>

          <div class="form-group text-right">
            <button type="submit" class="btn btn-success bsdn">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="instructionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Abstrct instruction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li><strong>Title:</strong> The manuscript title should be as succinct as possible. Titles should generally not include abbreviations, and not be longer than 60 characters (including spaces).</li>
          <li><strong>Abstract:</strong> The abstracts of original articles or systematic reviews must have a structured abstract that states  the purpose, basic procedures, main findings and principal conclusions of the study. Divide the abstract with the headings Objective, Material and Methods, Results, and Conclusion. Case reports or review articles should have an unstructured abstract.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

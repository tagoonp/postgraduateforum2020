<?php
include "../config.inc.php";
include "../connect.inc.php";
include "../function.inc.php";

if((!isset($_GET['uid'])) || (!isset($_GET['pid']))) {
  header('Location: ../');
  die();
}

$uid = mysqli_real_escape_string($conn, $_GET['uid']);
$pid = mysqli_real_escape_string($conn, $_GET['pid']);


// Get project info
$strSQL = "SELECT * FROM udix2_submission WHERE PID = '$pid' AND sub_uid = '$uid' AND sub_use_status = 'Y'";
$resultSubmistion = mysqli_query($conn, $strSQL);
$dataSubmission = '';
if(($resultSubmistion) && (mysqli_num_rows($resultSubmistion) > 0)){
  $dataSubmission = mysqli_fetch_assoc($resultSubmistion);
}else{
  header('Location: ../');
  die();
}
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
                      <button type="button" class="btn btn-secondary text-dark bsdn" onclick="window.history.back()"><i class="fas fa-pencil-alt"></i> Back to edit</button>
                  </div>
                </div>

                <div class="row d-block d-sm-none">
                  <div class="col-12">
                      <button type="button" class="btn btn-secondary text-dark bsdn"><i class="fas fa-bars"></i> Menu</button>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-12 col-sm-8">
                        <h4 class="text-dark">Review your submission</h4>
                        <div class="dn-">
                          Abstract id : <span class="textPid">(AUTO GENERATE AFTER SUBMISSION SUCCESS)</span>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4 text-right">
                        <button type="button" name="button" class="btn btn-success bsdn" onclick="printAsFile2()"><i class="fas fa-print"></i></button>
                        <button type="button" name="button" class="btn btn-danger bsdn" onclick="comfirmSubmission()"><i class="fas fa-paper-plane"></i> Confirm and send to staff</button>
                      </div>
                    </div>
                    <div class="card mt-2">
                      <div class="card-header bg-success">
                        <h4 class="text-white">Submission information</h4>
                      </div>
                      <div class="card-body" id="printArea">

                        <div class="row">
                          <div class="col-12 col-sm-6">
                            <strong>Presentation type :</strong> <span id="textType"><?php echo $dataSubmission['sub_presenttype']; ?></span>
                          </div>
                          <div class="col-12 col-sm-6 text-right">
                            <strong>Category :</strong> <span id="textCategory"><?php echo $dataSubmission['sub_category']; ?></span>
                          </div>
                        </div>
                        <div class="row pt-3">
                          <div class="col-12 text-left">
                            <h2 id="textTitle" style="font-size: 20px;" class="text-dark"><?php echo $dataSubmission['sub_title']; ?></h2>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 text-left text-dark" style="font-size: 16px; padding-bottom: 8px;">
                            <?php
                            $strSQL = "SELECT * FROM udix2_author WHERE author_pid = '$pid'";
                            $resultAuthor = mysqli_query($conn, $strSQL);
                            if(($resultAuthor) && (mysqli_num_rows($resultAuthor) > 0)){
                              $buff = array();
                              $c = 0;
                              while ($row = mysqli_fetch_array($resultAuthor)) {
                                if($c == 0){
                                  if($row['author_presenter'] == 'Y'){
                                    $buff[] = "<strong><u>".$row['author_fullname']."</u></strong>"."<sup>".($c+1)."</sup>";
                                  }else{
                                    $buff[] = "<strong>".$row['author_fullname']."</strong>"."<sup>".($c+1)."</sup>";;
                                  }
                                }else{
                                  if($row['author_presenter'] == 'Y'){
                                    $buff[] = "<u>".$row['author_fullname']."</u>"."<sup>".($c+1)."</sup>";
                                  }else{
                                    $buff[] = $row['author_fullname']."<sup>".($c+1)."</sup>";
                                  }
                                }
                                $c++;
                              }

                              echo implode(", ", $buff);
                            }
                            ?>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 text-left">
                            <?php
                            $strSQL = "SELECT * FROM udix2_author WHERE author_pid = '$pid'";
                            $resultAuthor = mysqli_query($conn, $strSQL);
                            if(($resultAuthor) && (mysqli_num_rows($resultAuthor) > 0)){
                              $buff = array();
                              $c = 1;
                              while ($row = mysqli_fetch_array($resultAuthor)) {
                                echo "<sup>".$c."</sup> ".$row['author_institution']."<br>";
                                $c++;
                              }

                              echo implode(" , ", $buff);
                            }
                            ?>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12">
                            <div class="" style="padding-top: 20px;">
                              <strong style="font-weight: 500; font-size: 16px;" class="text-dark">Abstract : </strong>
                              <span id="textAbstract" style="font-size: 14px;" class="text-dark"><?php echo $dataSubmission['sub_abstract']; ?></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 text-dark">
                            <strong>Keywords : </strong><?php echo $dataSubmission['sub_keywords']; ?>
                          </div>

                          <input type="hidden" name="txtEmail" id="txtEmail" value="">
                          <input type="hidden" name="txtFullname" id="txtFullname" value="">
                          <input type="hidden" name="txtPrefix" id="txtPrefix" value="">
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
    <!-- <script src="../assets/js/submission.js?token=<?php echo $sysdateu; ?>"></script> -->

    <script>
      var abstract = null

        $(document).ready(function(){

          preload.show()
          $ref_uid = $('.hdUid').val()
          if(current_user != $ref_uid ){
            authen.logout()
            return ;
          }
          authen.get_current_user(true)
          // submission.get_lasted_submission()
          // submission.list_author()
        })

        $(function(){

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

        function comfirmSubmission(){
          if(current_project == null){
            alert('Invalid session')
            window.location = './index?uid=' + current_user
          }

          swal({    title: "Are you sure?",
              text: "You will not be able to update submission until staff have some response",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Confirm",
              cancelButtonText: "Back to review",
              closeOnConfirm: true },
              function(){
                preload.show()
                var param = {
                  uid: current_user,
                  pid: current_project
                }
                console.log(param);
                var jxr = $.post(wc_config.api + 'submission?stage=confirm_draft', param, function(){})
                           .always(function(resp){
                             console.log(wc_config.api);
                             console.log(resp);
                             if(resp == 'Y'){
                               // Get all auther email

                               var content = '<p><h4>Postgraduate Forum 2020 Abstrct submission information</h4></p>' +
                                             '<p><strong>Dear</strong> ' + $('#txtPrefix').val() + $('#txtFullname').val() + '</p>' +
                                             '<p>You have submit abstract title <strong>' + $('#textTitle').text() + '</strong> in The 14th Postgraduate Forum on Health Systems and Policy' +
                                             'Research in the Era of Universal Health Coverage. Our staff will progress and response as soon as posibile. Please always check your e-mail address for any staff contact.</p>' +
                                             '<p>Regards,<br>Postgraduate Forum 2020 Auto mailer system</p>'
                               // var param = {
                               //     title: 'PGF2020 Abstrct submission information',
                               //     content: content,
                               //     user: 'rmismedpsu@gmail.com',
                               //     key: 'cm1pc21lZHBzdUBnbWFpbC5jb20yMDE5LTEwLTIyIDIxOjU4OjU3MTI0LjEyMi40Mi4yNDU=',
                               //     toemail: $('#txtEmail').val(),
                               //     toname: $('#txtPrefix').val() + $('#txtFullname').val()
                               // }

                               var param = {
                                   title: 'PGF2020 Abstrct submission information',
                                   content: content,
                                   user: 'epiunit.psu@gmail.com',
                                   key: 'ZXBpdW5pdC5wc3VAZ21haWwuY29tMjAyMC0wMS0yMyAxMTo0NzowMTIwMi4xMi43My4yNg==',
                                   toemail: $('#txtEmail').val(),
                                   toname: $('#txtPrefix').val() + $('#txtFullname').val()
                               }

                               fnc.send_email(param, 'index?uid=' + current_user, 'Submission sending success (Status 1)', 'Submission sending success (Status 2)', true, '')
                             }else{
                               preload.hide()
                               swal("Error", "Can not submit your abstract, please contact system administrator (2)" + resp , "error")
                             }
                           })
              });

        }

        function printAsFile2(){
          var printData = $('#printArea').html()
          PopUp(printData)
        }

        function PopUp(data) {
          var mywindow = window.open('','','left=0,top=0,width=950,height=600,toolbar=0,scrollbars=0,status=0,addressbar=0');

          var is_chrome = Boolean(mywindow.chrome);
          var isPrinting = false;
          var printData = '<!DOCTYPE html>' +
                          '<html lang="en">' +
                          '<head>' +
                            '<title>PGF2020 Abstrct Submission</title>' +
                            '<meta charset="UTF-8">' +
                            '<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">' +
                            '<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" >' +
                            '<link rel="stylesheet" href="../assets/css/style.css">' +
                            '<link rel="stylesheet" href="../assets/custom/css/style.css">' +
                            '<style media="screen">' +
                            'body {font-size: 16px !important; padding-left: 40px; padding-right: 40px;}' +
                            'img {' +
                              '-webkit-print-color-adjust: exact;' +
                            '}' +
                            '</style>' +
                          '</head>' +
                          '<body style="font-size: 16px !important; padding-left: 40px; padding-right: 40px;">' + data + '</body></html>'

          mywindow.document.write(printData);
          mywindow.document.close(); // necessary for IE >= 10 and necessary before onload for chrome


          if (is_chrome) {
              mywindow.onload = function() { // wait until all resources loaded
                  isPrinting = true;
                  mywindow.focus(); // necessary for IE >= 10
                  mywindow.print();  // change window to mywindow
                  mywindow.close();// change window to mywindow
                  isPrinting = false;
              };
              setTimeout(function () { if(!isPrinting){mywindow.print();mywindow.close();} }, 300);
          }
          else {
              mywindow.document.close(); // necessary for IE >= 10
              mywindow.focus(); // necessary for IE >= 10
              mywindow.print();
              mywindow.close();
          }

          return true;
      }

    </script>
</html>

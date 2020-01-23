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
            <a class="navbar-brand" href="./?uid=<?php echo $uid;?>">PGF<span style="color: rgb(17, 226, 100);">2020</span> <small>Administrator</small> </a>
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
                      <button type="button" class="btn btn-success text-dark- bsdn" onclick="window.location='./?uid=<?php echo $uid;?>'"><i class="fas fa-home"></i></button>
                      <button type="button" class="btn btn-secondary text-dark bsdn" onclick="window.location='./module-user?uid=<?php echo $uid;?>'"><i class="far fa-user"></i> Users</button>
                      <button type="button" class="btn btn-secondary text-dark bsdn" onclick="window.location='./module-submission?uid=<?php echo $uid;?>'"><i class="fas fa-bar"></i> All submission</button>

                      <?php
                      $strSQL = "SELECT * FROM udix2_submission WHERE sub_uid = '$uid' AND sub_use_status = 'Y' AND sub_submit_status NOT IN ('Withdraw')";
                      $resultAbstract = mysqli_query($conn, $strSQL);
                      if(($resultAbstract) && (mysqli_num_rows($resultAbstract) < 2)){
                          ?>
                          <button type="button" class="unSubmittion_componants btn btn-primary float-right bsdn" onclick="window.location='abstract?uid=<?php echo $uid; ?>'"><i class="fas fa-upload"></i> Submit abstract</button>
                          <?php
                      }
                      ?>

                  </div>
                </div>

                <div class="row d-block d-sm-none">
                  <div class="col-12">
                      <button type="button" class="btn btn-secondary text-dark bsdn"><i class="fas fa-bars"></i> เมนู</button>
                      <button type="button" class="unSubmittion_componants btn btn-primary float-right bsdn" onclick="window.location='abstract?uid=<?php echo $uid; ?>'"><i class="fas fa-upload"></i> Submit abstract</button>
                  </div>
                </div>

                <div class="row mt-3 dn">
                  <div class="col-sm-12">
                    <strong>Annoucements</strong>
                    <div class="card">
                      <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                          <thead>
                            <tr style="background: rgb(11, 185, 112);">
                              <th class="text-white " style="width: 250px;">Date of annoucement</th>
                              <th class="text-white " style="">Info.</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td colspan="4" class="text-center">No annoucement found.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .row -->

                <div class="row mt-3">
                  <div class="col-12">
                    <div class="alert alert-secondary text-dark" role="alert">
                      You can submit maximum 2 abstract.
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <strong>Submission record </strong>
                    <div class="card">
                      <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                          <thead>
                            <tr style="background: rgb(11, 185, 112);">
                              <th class="text-white " style="width: 50px;">#</th>
                              <th class="text-white " style="">Title</th>
                              <th class="text-white " style="width: 150px;">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $strSQL = "SELECT * FROM udix2_submission WHERE sub_uid = '$uid' AND sub_use_status = 'Y'";
                            $resultAbstract = mysqli_query($conn, $strSQL);
                            // var_dump($resultAbstract);
                            if(($resultAbstract) && (mysqli_num_rows($resultAbstract) > 0)){
                              $c = 1;
                              while($row = mysqli_fetch_array($resultAbstract)){
                                ?>
                                <tr>
                                  <td class="pt-2 pb-2" style="vertical-align: top;"><?php echo $c;?></td>
                                  <td class="pt-2 pb-2" style="vertical-align: top;">
                                    <a href="Javascript:setSubmissionInfo2('<?php echo $row['PID'];?>')" class="text-success"><?php echo $row['sub_title'];?></a>
                                    <div class="">
                                      <?php
                                      $strSQL = "SELECT author_fullname, author_presenter FROM udix2_author WHERE author_pid = '".$row['PID']."' AND author_uid = '$uid'";
                                      $resultTeam = mysqli_query($conn, $strSQL);
                                      if(($resultTeam) && (mysqli_num_rows($resultTeam) > 0)){
                                        $result = array();
                                        while($row2 = mysqli_fetch_array($resultTeam)){
                                          if($row2['author_presenter'] == 'Y'){
                                            $result[] = "<u>".$row2['author_fullname']."</u>";
                                          }else{
                                            $result[] = $row2['author_fullname'] ;
                                          }
                                        }
                                        if(sizeof($result) > 0){
                                          echo implode(', ' , $result);
                                        }
                                      }
                                      ?>
                                    </div>

                                    <div class="pt-2">
                                      <?php
                                      if($row['sub_submit_status'] == 'Withdraw'){

                                      }else{
                                        if($row['sub_draft'] == 'Y'){
                                          ?>
                                          <button type="button" class="btn btn-icon" onclick="setSubmissionInfo('<?php echo $row['PID'];?>')"><i class="fas fa-pencil-alt"></i> Edit</button>
                                          <?php
                                        }else{
                                          ?>
                                          <button type="button" class="btn btn-icon" onclick="" disabled><i class="fas fa-pencil-alt"></i> Edit</button>
                                          <?php
                                        }
                                      }

                                      ?>

                                      <?php
                                      if($row['sub_submit_status'] != 'Withdraw'){
                                        ?>
                                        <button type="button" class="btn btn-icon text-danger" onclick="WithdrawSubmittion('<?php echo $row['PID'];?>', '<?php echo $row['sub_title']; ?>')"><i class="fas fa-trash"></i> Withdraw</button>
                                        <?php
                                      }
                                      ?>

                                    </div>
                                  </td>
                                  <td class="pt-2 pb-2" style="vertical-align: top;">
                                    <?php
                                    if($row['sub_draft'] == 'Y'){
                                      echo "Draft";
                                    }else{
                                      echo $row['sub_submit_status'];
                                    }
                                    ?>
                                  </td>
                                </tr>
                                <?php
                                $c++;
                              }
                            }else{
                              ?>
                              <tr>
                                <td colspan="3" class="text-center">No submisstion found.<?php //echo $strSQL;?></td>
                              </tr>
                              <?php
                            }
                            ?>

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
              authen.logout()
              return ;
            }
            authen.get_current_user(true)
            window.localStorage.removeItem(wc_config.prefix + 'pid')
        })

        $(function(){
          $('.withDrawForm').submit(function(){
            $('.form-control').removeClass('is-invalid')
            if($('#txtReason').val() == ''){
              $('#txtReason').addClass('is-invalid')
              return ;
            }

            swal({    title: "Are you sure?",
              text: "You will not be able to recover this record after withdraw!",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, confirm!",
              cancelButtonText: "Cancel",
              closeOnConfirm: true },
              function(){

                var param = {
                  uid: current_user,
                  pid: $('#txtPid').val(),
                  reason: $('#txtReason').val()
                }

                preload.show()
                var jxr = $.post(wc_config.api + 'submission?stage=withdraw', param, function(){})
                           .always(function(resp){
                             if(resp == 'Y'){
                               setTimeout(function(){ window.location.reload() }, 2000)
                             }else{
                               setTimeout(function(){
                                 preload.hide()
                                 swal("Error", "Can not withdraw or delete this record, please contact system administrator", "error")
                               }, 1000)
                             }
                           })
              });



          })
        })

        function closeModal(){
            $('.btnCloseModal').trigger('click')
            $('#btnResetPWD').trigger('click')
        }

        function setSubmissionInfo2(id){
          current_project = id
          window.localStorage.setItem(wc_config.prefix + 'pid', id)
          window.location = 'abstract_review?uid=' + current_user + '&pid=' + id
        }

        function setSubmissionInfo(id){
          current_project = id
          window.localStorage.setItem(wc_config.prefix + 'pid', id)
          window.location = 'abstract?uid=' + current_user
        }

        function WithdrawSubmittion(id, title){
          $('#txtPid').val(id)
          $('#txtTitle').val(title)
          $('#withDrawModal').modal()
        }
    </script>
</html>

<!-- Modal -->
<div class="modal fade" id="withDrawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Withdraw/Delete submission</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="withDrawForm" onsubmit="return false;">
        <div class="modal-body">
          <div class="form-group dn">
            <label for="">Abstract ID : <span class="text-danger">*</span> </label>
            <input type="text" name="txtPid" id="txtPid" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Abstract title : <span class="text-danger">*</span> </label>
            <textarea name="txtTitle" id="txtTitle" class="form-control" rows="8" cols="80" readonly></textarea>
          </div>
          <div class="form-group">
            <label for="">Explain you withdraw or delete reason : <span class="text-danger">*</span> </label>
            <textarea name="txtReason" id="txtReason" class="form-control" rows="8" cols="80"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary-" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary bsdn">Withdraw</button>
        </div>
      </form>
    </div>
  </div>
</div>

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

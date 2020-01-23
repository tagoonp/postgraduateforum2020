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
        <link rel="stylesheet" href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

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
                      <button type="button" class="btn btn-secondary text-dark bsdn"><i class="fas fa-bars"></i> Menu</button>
                      <button type="button" class="unSubmittion_componants btn btn-primary float-right bsdn" onclick="window.location='abstract?uid=<?php echo $uid; ?>'"><i class="fas fa-upload"></i> Submit abstract</button>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-sm-12">
                    <strong>Activity log : </strong>
                    <div class="card mt-2">
                      <div class="card-body">
                        <table class="table table-striped mb-0" id="table-1">
                          <thead>
                            <tr>
                              <th style="width: 100px;">#</th>
                              <th style="width: 200px;">Date time</th>
                              <th>Activity</th>
                              <th>IP</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $strSQL = "SELECT * FROM udix2_log WHERE log_uid = '$uid' ORDER BY log_datetime DESC";
                            $resultLog = mysqli_query($conn, $strSQL);
                            if(($resultLog) && (mysqli_num_rows($resultLog) > 0)){
                              $c = 1;
                              while ($row = mysqli_fetch_array($resultLog)) {
                                ?>
                                <tr>
                                  <td><?php echo $c; ?></td>
                                  <td><?php echo $row['log_datetime']; ?></td>
                                  <td><?php echo $row['log_info']; ?></td>
                                  <td><?php echo $row['log_ip']; ?></td>
                                </tr>
                                <?php
                                $c++;
                              }
                            }else{
                              ?>
                              <tr>
                                <td colspan="4" class="text-center">No activity found.</td>
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
    <script type="text/javascript" src="../node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

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

            $("#table-1").dataTable({
              "columnDefs": [
                { "sortable": false, "targets": [2,3] }
              ]
            });
        })

        $(function(){

        })

        function closeModal(){
            $('.btnCloseModal').trigger('click')
            $('#btnResetPWD').trigger('click')
        }
    </script>
</html>

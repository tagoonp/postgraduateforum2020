<?php
include "../wisnior-config.php";
include "../config.class.php";
include "../domain.conf.php";
include "../function.class.php";

if((!isset($_GET['uid'])) && ($_GET['uid'] == '')){
  header('Location: ../administrator/login');
  die();
}
$uid = mysqli_real_escape_string($conn, $_GET['uid']);
$muid = $uid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>WisniorWeb.KIT</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../node_modules/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../node_modules/preload.js/dist/css/preload.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/admin_template/css/style.css">
  <link rel="stylesheet" href="../assets/admin_template/css/components.css">

  <link rel="stylesheet" href="../assets/core/css/master-style.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#NISA</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  NISA Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to NISA template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <span class="currentUserFullname">Loading ...</span></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-changepassword" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Change password
              </a>
              <div class="dropdown-divider"></div>
              <a href="Javascript:authen.signout()" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <?php include "componants/menu.php";   ?>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Users</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <h6>Users list</h6>
                <div class="card">
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-3"><button class="btn btn-primary" onclick="showModal('add_user_modal')"><i class="fas fa-plus"></i> Add new user</button></div>
                      <div class="col-9 text-right">
                        <nav class="d-inline-block">
                          <ul class="pagination mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item disabled">
                              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <table class="table mb-0">
                      <thead>
                        <tr class="bg-secondary">
                          <th class="text-dark" scope="col">ID</th>
                          <th class="text-dark" scope="col">Full name</th>
                          <th class="text-dark" scope="col">Domain</th>
                          <th class="text-dark" scope="col">Role</th>
                          <th class="text-dark" scope="col">Status</th>
                          <th class="text-dark" scope="col"></th>
                        </tr>
                      </thead>
                      <tbody id="result1">
                        <?php
                        $tb1 = $db_prefix."user";
                        $tb2 = $db_prefix."subdomain";

                        $strSQL = "SELECT a.ID, a.user_fullname, a.user_login, b.sub_domain, a.user_role, a.user_domain, a.user_status FROM $tb1 a LEFT JOIN $tb2 b ON a.user_domain = b.ID WHERE 1";
                        $query = mysqli_query($conn, $strSQL);
                        if($query){
                          while($row = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                              <td><?php echo $row['ID']; ?></td>
                              <td><?php echo $row['user_fullname']; ?><div style="font-size: 0.8em;">Username : <?php echo $row['user_login'];?></div></td>
                              <td>
                                <div class="">
                                  <?php
                                  if($row['user_domain'] != NULL){
                                    echo "/sub/".$row['sub_domain']."/";
                                  }else{
                                    echo "-";
                                  }
                                  ?>
                                </div>
                              </td>
                              <td><?php echo $row['user_role'];?></td>
                              <td>
                                <?php
                                if($row['user_role'] == 'superadmin'){

                                }else{
                                  if($row['user_domain'] != NULL){
                                    ?>
                                    <label class="custom-switch mt-2 pl-0">
                                      <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php if($row['user_status'] == '1'){ echo "checked"; }; ?>>
                                      <span class="custom-switch-indicator"></span>
                                    </label>
                                    <?php
                                  }
                                }
                                ?>
                              </td>
                              <td class="text-right">
                                <button type="button" name="button" class="btn btn-sm btn-icon" data-toggle="tooltip" data-placement="top" title="View info"><i class="fas fa-search"></i></button>
                                <button type="button" name="button" class="btn btn-sm btn-icon" data-toggle="tooltip" data-placement="top" title="Delete account "><i class="fas fa-trash"></i></button>
                              </td>
                            </tr>
                            <?php
                          }
                        }else{
                            echo $strSQL.'<tr><td colspan="4" scope="row" class="text-center">No position found</td></tr>';
                        }
                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://wisnior.com/wisniorweb/">Wisnior Co., Ltd.</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="../node_modules/jquery/dist/jquery.js" ></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../node_modules/preload.js/dist/js/preload.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/admin_template/js/stisla.js"></script>
  <script src="../assets/admin_template/js/scripts.js"></script>

  <!-- Template JS File -->
  <script type="text/javascript" src="../assets/core/js/config.1.0.js"></script>
  <script type="text/javascript" src="../assets/core/js/wisnior.1.0.js"></script>
  <script type="text/javascript" src="../assets/core/page/js/authen-ready.js"></script>
  <script type="text/javascript" src="../assets/core/page/js/superadmin.js"></script>


  <script type="text/javascript">
    $(document).ready(function(){
      preload.hide()
    })

    $(function(){
      $('#txtRole').change(function(){
        if(($('#txtRole').val() == 'sub-domain-admin') || ($('#txtRole').val() == 'response-person')){
          $('.sub-domain-div').removeClass('dn')
        }else{
          $('.sub-domain-div').addClass('dn')
          $('#txtSubdomain').val('')
        }
      })

      $('.new-user-form').submit(function(){
        $check = 0
        $('.form-control').removeClass('is-invalid')
        if($('#txtName').val() == ''){
          $check++
          $('#txtName').addClass('is-invalid')
        }

        if($('#txtDisplayname').val() == ''){
          $check++
          $('#txtDisplayname').addClass('is-invalid')
        }

        if($('#txtEmail').val() == ''){
          $check++
          $('#txtEmail').addClass('is-invalid')
        }

        if($('#txtPassword').val() == ''){
          $check++
          $('#txtPassword').addClass('is-invalid')
        }

        if($('#txtRole').val() == ''){
          $check++
          $('#txtRole').addClass('is-invalid')
        }else{
          if(($('#txtRole').val() == 'sub-domain admin') || ($('#txtRole').val() == 'response person')){
            if($('#txtSubdomain').val() == ''){
              $check++
              $('#txtSubdomain').addClass('is-invalid')
            }
          }
        }

        if($check != 0){
          return ;
        }

        var param = {
          uid: current_user,
          fullname: $('#txtName').val(),
          displayname: $('#txtDisplayname').val(),
          email: $('#txtEmail').val(),
          password: $('#txtPassword').val(),
          role: $('#txtRole').val(),
          subdomain: $('#txtSubdomain').val(),
          url: $('#txtUrl').val()
        }

        admin.user_create(param)



      })
    })
  </script>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="add_user_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white pb-3" id="exampleModalLabel">Add new user</h5>
        <button type="button" class="close text-white btnCloseModal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="new-user-form" onsubmit="return false;">
        <div class="modal-body">
            <div class="form-group">
              <label for="">Full name <span class="text-danger">*</span> </label>
              <input type="text" name="txtName" id="txtName" value="" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Display name <span class="text-danger">*</span> </label>
              <input type="text" name="txtDisplayname" id="txtDisplayname" value="" class="form-control">
            </div>

            <div class="row">
              <div class="form-group col-12 col-sm-6">
                <label for="">E-mail address <span class="text-danger">*</span> </label>
                <input type="email" name="txtEmail" id="txtEmail" value="" class="form-control">
              </div>

              <div class="form-group col-12 col-sm-6">
                <label for="">Password <span class="text-danger">*</span> </label>
                <input type="password" name="txtPassword" id="txtPassword" value="" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label for="">Profile URL</label>
              <input type="text" name="txtUrl" id="txtUrl" value="" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Role <span class="text-danger">*</span> </label>
              <select class="form-control" name="txtRole" id="txtRole">
                <option value="">-- Choose user role --</option>
                <option value="superadmin">Super administrator</option>
                <option value="administrator">Administrator</option>
                <option value="sub-domain-admin">Sub-domain administrator</option>
                <option value="response-person">Response person</option>
                <option value="general-user">General user</option>
              </select>
            </div>

            <div class="sub-domain-div dn">
              <div class="form-group">
                <label for="">Sub-domain in response <span class="text-danger">*</span> </label>
                <select class="form-control" name="txtSubdomain" id="txtSubdomain">
                  <option value="">-- Choose sub-domain name --</option>
                  <?php
                  $tb1 = $db_prefix."subdomain";
                  $strSQL = "SELECT * FROM $tb1 WHERE 1";
                  $query = mysqli_query($conn, $strSQL);
                  if($query){
                    while($row = mysqli_fetch_array($query)){
                      ?>
                      <option value="<?php echo $row['ID'];?>"><?php echo $row['sub_domain'];?></option>
                      <?php
                    }
                  }
                  ?>
                </select>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

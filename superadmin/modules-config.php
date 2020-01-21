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

$tb = TB_PREFIX.'user';
$strSQL = "SELECT user_domain FROM $tb WHERE ID = '$uid'";
$q = mysqli_query($conn, $strSQL);
$d = mysqli_fetch_assoc($q);
$domain = $d['user_domain'];

$tb = TB_PREFIX.'configuration';
$strSQL = "SELECT * FROM $tb WHERE conf_domain = '$domain'";
$result_conf = mysqli_query($conn, $strSQL);
$data_conf = null;
if(($result_conf) && (mysqli_num_rows($result_conf) > 0)){
  foreach ($result_conf as $key => $value) {
    // if($key == '')
  }
}

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
  <link rel="stylesheet" href="../node_modules/dropzone/dist/min/dropzone.min.css">
  <link rel="stylesheet" href="../node_modules/preload.js/dist/css/preload.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">

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
            <h1>General site configuration</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <h6>Thai site</h6>
                <div class="card">
                  <div class="card-body">
                    <form class="site-form-th" onsubmit="return false;">
                      <div class="row">

                        <div class="form-group col-12 dn">
                          <label for="">Site title : <span class="text-danger">*</span> </label>
                          <input type="hidden" name="txtDomain" id="txtDomain" value="<?php echo $domain; ?>" class="form-control">
                        </div>

                        <div class="form-group col-12 col-sm-6">
                          <label for="">Site title : <span class="text-danger">*</span> </label>
                          <input type="text" name="txtTitle" id="txtTitle" value="<?php echo get_configuration($conn, 'title', 1, $domain); ?>" class="form-control">
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <label for="">Main author name : </label>
                          <input type="text" name="txtAuthor" id="txtAuthor" value="<?php echo get_configuration($conn, 'author', 1, $domain); ?>" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="">Site description : </label>
                        <textarea name="txtDesc" id="txtDesc" rows="8" cols="80" class="form-control"><?php echo get_configuration($conn, 'description', 1, $domain); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label for="">Domain name : <span class="text-danger">*</span></label>
                        <input type="text" name="txtDomainName" id="txtDomainName" value="<?php echo get_configuration($conn, 'domain_name', 1, $domain); ?>" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="">Site keywords : </label>
                        <textarea name="txtKeyword" id="txtKeyword" rows="8" cols="80" class="form-control"><?php echo get_configuration($conn, 'keywords', 1, $domain); ?></textarea>
                      </div>

                      <div class="row">
                        <div class="form-group col-12 col-sm-6">
                          <label for="">Site name : <span class="text-danger">*</span></label>
                          <input type="text" name="txtSiteH1" id="txtSiteH1" value="<?php echo get_configuration($conn, 'site_name_1', 1, $domain); ?>" class="form-control">
                        </div>

                        <div class="form-group col-12 col-sm-6">
                          <label for="">Site Sub-name : <span class="text-danger">*</span></label>
                          <input type="text" name="txtSiteH2" id="txtSiteH2" value="<?php echo get_configuration($conn, 'site_name_2', 1, $domain); ?>" class="form-control">
                        </div>
                      </div>

                      <div class="form-group text-right">
                        <button type="submit" name="button" class="btn btn-primary btn-lg bsdn">SAVE</button>
                      </div>

                    </form>
                  </div>
                </div>

                <h6>English site</h6>
                <div class="card">
                  <div class="card-body">
                    <form class="site-form-en" onsubmit="return false;">
                      <div class="row">

                        <div class="form-group col-12 dn">
                          <label for="">Site title : <span class="text-danger">*</span> </label>
                          <input type="hidden" name="txtDomainEn" id="txtDomainEn" value="<?php echo $domain; ?>" class="form-control">
                        </div>

                        <div class="form-group col-12 col-sm-6">
                          <label for="">Site title : <span class="text-danger">*</span> </label>
                          <input type="text" name="txtTitleEn" id="txtTitleEn" value="<?php echo get_configuration($conn, 'title', 2, $domain); ?>" class="form-control">
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <label for="">Main author name : </label>
                          <input type="text" name="txtAuthorEn" id="txtAuthorEn" value="<?php echo get_configuration($conn, 'author', 2, $domain); ?>" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="">Site description : </label>
                        <textarea name="txtDescEn" id="txtDescEn" rows="8" cols="80" class="form-control"><?php echo get_configuration($conn, 'description', 2, $domain); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label for="">Domain name : <span class="text-danger">*</span></label>
                        <input type="text" name="txtDomainNameEn" id="txtDomainNameEn" value="<?php echo get_configuration($conn, 'domain_name', 2, $domain); ?>" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="">Site keywords : </label>
                        <textarea name="txtKeywordEn" id="txtKeywordEn" rows="8" cols="80" class="form-control"><?php echo get_configuration($conn, 'keywords', 2, $domain); ?></textarea>
                      </div>

                      <div class="row">
                        <div class="form-group col-12 col-sm-6">
                          <label for="">Site name : <span class="text-danger">*</span></label>
                          <input type="text" name="txtSiteH1En" id="txtSiteH1En" value="<?php echo get_configuration($conn, 'site_name_1', 2, $domain); ?>" class="form-control">
                        </div>

                        <div class="form-group col-12 col-sm-6">
                          <label for="">Site Sub-name : <span class="text-danger">*</span></label>
                          <input type="text" name="txtSiteH2En" id="txtSiteH2En" value="<?php echo get_configuration($conn, 'site_name_2', 2, $domain); ?>" class="form-control">
                        </div>
                      </div>

                      <div class="form-group text-right">
                        <button type="submit" name="button" class="btn btn-primary btn-lg bsdn">SAVE</button>
                      </div>

                    </form>
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
  <script src="../node_modules/dropzone/dist/min/dropzone.min.js"></script>
  <script src="../node_modules/preload.js/dist/js/preload.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/admin_template/js/stisla.js"></script>
  <script src="../assets/admin_template/js/scripts.js"></script>
  <!-- <script src="../assets/admin_template/js/custom.js"></script> -->

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
      $('.site-form-th').submit(function(){
        $check = 0
        $('.form-control').removeClass('is-invalid')
        if($('#txtTitle').val() == ''){
          $check++
          $('#txtTitle').addClass('is-invalid')
        }

        if($('#txtDomainName').val() == ''){
          $check++
          $('#txtDomainName').addClass('is-invalid')
        }

        if($('#txtSiteH2').val() == ''){
          $check++
          $('#txtSiteH2').addClass('is-invalid')
        }

        if($('#txtSiteH1').val() == ''){
          $check++
          $('#txtSiteH1').addClass('is-invalid')
        }

        if($check != 0){
          return ;
        }

        var param = {
          title: $('#txtTitle').val(),
          author: $('#txtAuthor').val(),
          desc: $('#txtDesc').val(),
          domain_name: $('#txtDomainName').val(),
          keyword: $('#txtKeyword').val(),
          site_1: $('#txtSiteH1').val(),
          site_2: $('#txtSiteH2').val(),
          lang: 1,
          domain: $('#txtDomain').val(),
          uid: current_user
        }

        admin.site_config('set', param)
      })

      $('.site-form-en').submit(function(){
        $check = 0
        $('.form-control').removeClass('is-invalid')
        if($('#txtTitleEn').val() == ''){
          $check++
          $('#txtTitleEn').addClass('is-invalid')
        }

        if($('#txtDomainNameEn').val() == ''){
          $check++
          $('#txtDomainNameEn').addClass('is-invalid')
        }

        if($('#txtSiteH2En').val() == ''){
          $check++
          $('#txtSiteH2En').addClass('is-invalid')
        }

        if($('#txtSiteH1En').val() == ''){
          $check++
          $('#txtSiteH1En').addClass('is-invalid')
        }

        if($check != 0){
          return ;
        }

        if($check != 0){
          return ;
        }

        var param = {
          title: $('#txtTitleEn').val(),
          author: $('#txtAuthorEn').val(),
          desc: $('#txtDescEn').val(),
          domain_name: $('#txtDomainNameEn').val(),
          keyword: $('#txtKeywordEn').val(),
          site_1: $('#txtSiteH1En').val(),
          site_2: $('#txtSiteH2En').val(),
          lang: 2,
          domain: $('#txtDomainEn').val(),
          uid: current_user
        }

        admin.site_config('set', param)
      })
    })
  </script>
</body>
</html>

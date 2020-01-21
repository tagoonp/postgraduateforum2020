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

$page_id = '';
$tb1 = TB_PREFIX."content";
$result = false;

if((isset($_GET['id'])) && ($_GET['id'] != '')){
  $page_id = mysqli_real_escape_string($conn, $_GET['id']);
  $strSQL = "SELECT * FROM $tb1 WHERE POST_ID = '$page_id'";
  $query = mysqli_query($conn, $strSQL);
  if(($query) && (mysqli_num_rows($query) > 0)){
    $result = mysqli_fetch_assoc($query);
  }
}else{
  // header('Location: modules-page-list');
  // die();
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
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="../node_modules/preload.js/dist/css/preload.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/admin_template/css/style.css">
  <link rel="stylesheet" href="../assets/admin_template/css/components.css">
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
            <?php
            if($page_id != ''){
              echo "<h1>Update post content</h1>";
            }else{
              echo "<h1>Create new post</h1>";
            }
            ?>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form class="new-page-form" onsubmit="return false;">

                      <div class="form-group dn">
                        <label for="">Page ID <span class="text-danger">*</span></label>
                        <input type="text" name="txtID" id="txtID" value="<?php echo $page_id;?>" class="form-control" placeholder="Enter page title ..." readonly>
                      </div>

                      <div class="form-group">
                        <label for="">Title <span class="text-danger">*</span></label>
                        <input type="text" name="txtTitle" id="txtTitle" value="<?php if($result){ echo $result['post_title']; } ?>" class="form-control" placeholder="Enter page title ...">
                      </div>

                      <div class="form-group dn">
                        <label for="">URL <span class="text-danger">*</span></label>
                        <input type="text" name="txtUrl" id="txtUrl" value="<?php if($result){ echo $result['post_url']; } ?>" class="form-control" placeholder="Enter page url ...">
                      </div>

                      <div class="row">
                        <div class="form-group col-12 col-sm-6">
                          <label for="">Category <span class="text-danger">*</span></label>
                          <select class="form-control" name="txtCategory" id="txtCategory">
                            <option value="">-- Select category --</option>
                            <?php
                            $tb1 = $db_prefix."category";
                            $tb2 = $db_prefix.'language';
                            $strSQL = "SELECT * FROM $tb1 a LEFT JOIN $tb2 b on a.cat_lang = b.lang_id WHERE 1";
                            $query = mysqli_query($conn, $strSQL);
                            if($query){
                              while($row = mysqli_fetch_array($query)){
                                ?>
                                <option value="<?php echo $row['cat_id']; ?>" <?php if($result){ if($result['post_category'] == $row['cat_id']){echo "selected";} } ?>><?php echo " [".$row['lang_short_name']."] ".$row['cat_name']; ?></option>
                                <?php
                              }
                            }
                            ?>
                          </select>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <label for="">Alt </label>
                          <input type="text" name="txtAlt" id="txtAlt" value="<?php if($result){ echo $result['post_alt']; } ?>" class="form-control" placeholder="Enter short detail ...">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="">Content</label>
                        <textarea class="summernote-" id="txtContent"><?php if($result){ echo $result['post_content']; } ?></textarea>
                      </div>

                      <div class="row">
                        <div class="form-group col-12 col-sm-6">
                          <label>Language <span class="text-danger">*</span> </label>
                          <select class="form-control" name="txtLanguage" id="txtLanguage">
                            <option value="">-- Choose language --</option>
                            <option value="1" <?php if($result){ if($result['post_lang'] == 1){echo "selected";} } ?>>Thai</option>
                            <option value="2" <?php if($result){ if($result['post_lang'] == 2){echo "selected";} } ?>>English</option>
                          </select>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                          <label>Tags</label>
                          <input type="text" class="form-control inputtags" id="txtTags" value="<?php if($result){ echo $result['post_tags']; } ?>">
                        </div>
                      </div>

                      <!-- <div class="form-group">
                        <label>Embeded PDF on page </label><a href="#" onclick="" class="float-right"><i class="fas fa-image mr-2"></i></i>Choose file from media</a>
                        <input type="text" class="form-control" id="txtPDF" value="<?php if($result){ echo $result['post_pdf']; } ?>">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                          Allow only PDF file
                        </small>
                      </div> -->

                      <div class="row">
                        <div class="form-group col-12 col-sm-6">
                          <label>Embeded PDF on page </label><a href="#" onclick="" class="float-right"><i class="fas fa-image mr-2"></i></i>Choose file</a>
                          <input type="text" class="form-control" id="txtPDF" value="<?php if($result){ echo $result['post_pdf']; } ?>">
                          <small id="passwordHelpBlock" class="form-text text-muted">
                            Allow only PDF file
                          </small>
                        </div>

                        <div class="form-group col-12 col-sm-6">
                          <label>Embeded Image gallery? </label><a href="#" onclick="" class="float-right"><i class="fas fa-image mr-2"></i></i>Choose album</a>
                          <input type="text" class="form-control" id="txtGallery" value="<?php if($result){ echo $result['post_gallery']; } ?>">
                          <small id="passwordHelpBlock" class="form-text text-muted">
                            Enter gallery ID (only number)
                          </small>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-12 col-sm-6">
                          <label>Figure URL </label><a href="#" onclick="" class="float-right"><i class="fas fa-image mr-2"></i></i>Choose from album</a>
                          <input type="text" class="form-control" id="txtFigure" value="<?php if($result){ echo $result['post_figure']; } ?>">
                          <small id="passwordHelpBlock" class="form-text text-muted">
                            This picture will show in home page. Recommand image size is <span class="text-danger">300 x 250</span> pixed
                          </small>
                        </div>

                        <div class="form-group col-12 col-sm-6">
                          <label>Public date</label>
                          <input type="text" id="txtPubdate" class="form-control datepicker" value="<?php if($result){ if($result['post_pub_date'] != NULL){echo $result['post_pub_date'];} } ?>" >
                        </div>

                        <div class="form-group col-12 col-sm-6">
                          <label>Is expire?</label>
                          <select name="txtIsexp" id="txtIsexp" class="form-control">
                            <option value="0" <?php if($result){ if($result['post_publictype'] == 'always'){ echo "selected"; } } ?>>No</option>
                            <option value="1" <?php if($result){ if($result['post_publictype'] == 'daterange'){ echo "selected"; } } ?>>Yes</option>
                          </select>
                        </div>

                        <div class="form-group col-12 col-sm-6 <?php if($result){ if($result['post_publictype'] == 'daterange'){ }else{ echo "dn"; } }else{ echo "dn"; } ?>" id="divExp">
                          <label>Expire date<?php echo $result['post_exp_date']; ?></label>
                          <input type="text" id="txtExpdate" class="form-control datepicker" value="" > 
                        </div>

                      </div>

                      <div class="form-group">
                         <div class="text-center">
                           <button type="reset" name="button" class="btn">Reset</button>
                           <button type="submit" name="button" class="btn btn-primary">Save</button>
                         </div>
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
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="../node_modules/preload.js/dist/js/preload.js"></script>
  <script src="../node_modules/ckeditor_full/ckeditor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="../node_modules/moment/min/moment.min.js"></script>
  <script src="../node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="../assets/admin_template/js/stisla.js"></script>
  <script src="../assets/admin_template/js/scripts.js"></script>

  <!-- Template JS File -->
  <script type="text/javascript" src="../assets/core/js/config.1.0.js"></script>
  <script type="text/javascript" src="../assets/core/js/wisnior.1.0.js"></script>
  <script type="text/javascript" src="../assets/core/page/js/authen-ready.js"></script>
  <script type="text/javascript" src="../assets/core/page/js/superadmin.js"></script>


  <script type="text/javascript">
    var contentData = '';

    $(document).ready(function(){
      preload.hide()
      $(".inputtags").tagsinput('items');

      contentData = CKEDITOR.replace( 'txtContent', {
          height: '850px'
      });

      <?php 
      if($result){ 
        ?>
        $('#txtExpdate').val('<?php echo $result['post_exp_date']; ?>')
        <?php
      } 
      ?>
    })

    $(function(){

      $('#txtIsexp').change(function(){
        if($('#txtIsexp').val() == '1'){
          $('#divExp').removeClass('dn')
        }else{
          $('#divExp').addClass('dn')
        }
      })
      $('.new-page-form').submit(function(){
        $check = 0;
        $('.form-control').removeClass('is-invalid')

        if($('#txtTitle').val() == ''){
          $check++
          $('#txtTitle').addClass('is-invalid')
        }

        if($('#txtCategory').val() == ''){
          $check++
          $('#txtCategory').addClass('is-invalid')
        }

        if($('#txtLanguage').val() == ''){
          $check++
          $('#txtLanguage').addClass('is-invalid')
        }

        if($check != 0){
          return ;
        }

        var cdm = 'null'
        if(current_domain == null){
          cdm = 'null'
        }

        var param = {
          uid: current_user,
          domain: cdm,
          id: $('#txtID').val(),
          title: $('#txtTitle').val(),
          category: $('#txtCategory').val(),
          alt: $('#txtAlt').val(),
          url: $('#txtUrl').val(),
          tags: $('#txtTags').val(),
          figure: $('#txtFigure').val(),
          pdf: $('#txtPDF').val(),
          gallery: $('#txtGallery').val(),
          language: $('#txtLanguage').val(),
          // content: $('#txtContent').summernote('code')
          content: contentData.getData(),
          pubdate: $('#txtPubdate').val(),
          expdate: $('#txtExpdate').val(),
          isexp: $('#txtIsexp').val()
        }

        admin.post_create(param)
        return ;
      })
    })
  </script>
</body>
</html>

<?php
mysqli_close($conn);
die();
?>

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

$row_per_page = 20;
$first_row = 0;
$cpage = 1;
if((isset($_GET['page'])) && ($_GET['page'] != '')){
  $cpage = $_GET['page'];
  if($cpage == 1){
    $first_row = 0;
  }else{
    $first_row = ($cpage * $row_per_page) - $row_per_page;
  }
}

$searchterm = '';
if((isset($_GET['searchterm'])) && ($_GET['searchterm'] != '')){
  $searchterm = $_GET['searchterm'];
}

$prevpage = $cpage - 1;
$nextpage = $cpage + 1;

// $strSQL = ""
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
            <h1>Posts</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <h6>Post list</h6>
                <div class="card">
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-3"><button class="btn btn-primary btn-block" onclick="window.location = 'modules-post-new?uid=<?php echo $muid;?>'"><i class="fas fa-plus"></i> Add new post</button></div>
                      <div class="col-3">
                        <input type="hidden" name="" id="txtStartNum" value="<?php echo $first_row + 1;?>" class="hidden">
                        <input type="text" name="txtSearch" id="txtSearch" value="<?php echo $searchterm;?>" class="form-control" placeholder="Enter post name ...">
                      </div>
                      <div class="col-6 text-right">
                        <nav class="d-inline-block">
                          <ul class="pagination mb-0">
                            <?php
                            $tb1 = $db_prefix."content";
                            $strSQL = "SELECT COUNT(*) qmenu FROM $tb1 WHERE post_domain = '$domain' AND post_type = 'post'";
                            if($searchterm != ''){
                              $strSQL = "SELECT COUNT(*) qmenu FROM $tb1 WHERE post_domain = '$domain' AND post_title LIKE '$searchterm%' AND post_type = 'post'";
                            }
                            $query = mysqli_query($conn, $strSQL);
                            if(($query) && (mysqli_num_rows($query) > 0)){
                              $row = mysqli_fetch_assoc($query);
                              $q = $row['qmenu'];
                              $num_btn = $q/$row_per_page;
                              $num_btn = floor($num_btn);
                              $num_btn_mod = $q%$row_per_page;
                              if($num_btn_mod != 0){
                                $num_btn += 1;
                              }

                              for ($i=1; $i <= $num_btn; $i++) {
                                if($i == 1){
                                  ?>
                                  <li class="page-item <?php if($cpage == 1){ echo "disabled"; } ?>">
                                    <a class="page-link" href="Javascript:gotoLocalPage('modules-post-list?uid=<?php echo $uid; ?>&page=<?php echo $prevpage;?>')" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                  </li>
                                  <?php
                                }

                                $mnactive = '';
                                if($i == $cpage){
                                  $mnactive = "active";
                                }

                                echo '<li class="page-item '.$mnactive.'"><a class="page-link" href="Javascript:gotoLocalPage(\'modules-post-list?uid='.$uid.'&page='.$i.'\')">'.$i.' <span class="sr-only">(current)</span></a></li>';

                                if($i == $num_btn){
                                  ?>
                                  <li class="page-item <?php if($i == $cpage){ echo "disabled"; } ?>">
                                    <a class="page-link" href="Javascript:gotoLocalPage('modules-post-list?uid=<?php echo $uid; ?>&page=<?php echo $nextpage;?>')"><i class="fas fa-chevron-right"></i></a>
                                  </li>
                                  <?php
                                }
                              }
                            }else{

                              ?>
                              <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
                              <li class="page-item disabled">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                              </li>
                              <?php
                            }
                            ?>


                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <table class="table mb-0">
                      <thead>
                        <tr class="bg-secondary">
                          <th class="text-dark" scope="col" style="width: 40px;">#</th>
                          <th class="text-dark" scope="col">Title</th>
                          <th class="text-dark" scope="col">Language</th>
                          <th class="text-dark" scope="col">View</th>
                          <th class="text-dark" scope="col" style="width: 60px;">Status</th>
                          <th class="text-dark" scope="col"></th>
                        </tr>
                      </thead>
                      <tbody id="result1">
                        <tr><td colspan="6" scope="row" class="text-center">No post found</td></tr>
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
      var param = {
        start: <?php echo $first_row; ?>,
        rpp: <?php echo $row_per_page; ?>,
        search: '<?php echo $searchterm; ?>'
      }

      admin.post_list(param)
      preload.hide()
    })

    $(function(){
      $('.new-menu-form').submit(function(){
        admin.menu_create()
      })

      $('.update-menu-form').submit(function(){
        admin.menu_update()
      })

      $('#txtSearch').keyup(function(e){
        // var param = {
        //   start: <?php //echo $first_row; ?>,
        //   rpp: <?php //echo $row_per_page; ?>,
        //   search: $('#txtSearch').val()
        // }

        // admin.post_list(param)

        if (e.keyCode == 13) {
            var tb = $('#txtSearch').val()
            window.location = 'modules-post-list?uid=' + current_user + '&searchterm=' + tb
            return ;
        }


        
      })
    })

    function gotoLocalPage(url){
      window.location = url
    }
  </script>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="add_menu_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white pb-3" id="exampleModalLabel">Add new menu item</h5>
        <button type="button" class="close text-white btnCloseModal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="new-menu-form" onsubmit="return false;">
        <div class="modal-body">
            <div class="form-group">
              <label for="">Title<span class="text-danger">*</span> </label>
              <input type="text" name="txtName" id="txtName" value="" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Position <span class="text-danger">*</span></label>
              <select class="form-control" name="txtPosition" id="txtPosition">
                <option value="">-- choose menu position --</option>
                <?php
                $tb1 = $db_prefix."menuposition";
                $strSQL = "SELECT * FROM $tb1 WHERE position_status = '1'";
                $query = mysqli_query($conn, $strSQL);
                if($query){
                  while($row = mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $row['position_div_name'];?>"><?php echo $row['position_title'];?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="">Parent</label>
              <select class="form-control" name="txtParent" id="txtParent">
                <option value="">No parent</option>
                <?php
                $tb1 = $db_prefix."menus";
                $strSQL = "SELECT * FROM $tb1 WHERE domain_id = 'null' AND level = '0'";
                $query = mysqli_query($conn, $strSQL);
                if($query){
                  while($row = mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $row['ID'];?>"><?php echo $row['menu_name'];?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </div>

            <div class="row">
              <div class="form-group col-12 col-sm-8">
                <label for="">URL</label>
                <input type="text" name="txtUrl" id="txtUrl" value="#" class="form-control">
              </div>
              <div class="form-group col-12 col-sm-4">
                <label for="">Target</label>
                <select class="form-control" name="txtTarget" id="txtTarget">
                  <option value="_self" selected>_self</option>
                  <option value="_blank">_blank</option>
                  <option value="_parent">_parent</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-12 col-sm-6">
                <label for="">Web language <span class="text-danger">*</span> </label>
                <select class="form-control" name="txtLang" id="txtLang">
                  <option value="">-- Choose language --</option>
                  <?php
                  $tb1 = $db_prefix."language";
                  $strSQL = "SELECT * FROM $tb1 WHERE 1";
                  $query = mysqli_query($conn, $strSQL);
                  if($query){
                    while($row = mysqli_fetch_array($query)){
                      ?>
                      <option value="<?php echo $row['lang_id'];?>"><?php echo $row['lang_long_name'];?></option>
                      <?php
                    }
                  }
                  ?>
                </select>
              </div>

              <div class="form-group col-12 col-sm-6">
                <label for="">Sub-domain in response </label>
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

<div class="modal fade" id="update_menu_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white pb-3" id="exampleModalLabel">Update menu item information</h5>
        <button type="button" class="close text-white btnCloseModal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="update-menu-form" onsubmit="return false;">
        <div class="modal-body">
            <div class="form-group dn">
              <label for="">ID<span class="text-danger">*</span> </label>
              <input type="text" name="txtID" id="txtID" value="" class="form-control" readonly>
            </div>

            <div class="form-group">
              <label for="">Title<span class="text-danger">*</span> </label>
              <input type="text" name="txtName2" id="txtName2" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Position <span class="text-danger">*</span></label>
              <select class="form-control" name="txtPosition2" id="txtPosition2">
                <option value="">-- choose menu position --</option>
                <?php
                $tb1 = $db_prefix."menuposition";
                $strSQL = "SELECT * FROM $tb1 WHERE position_status = '1'";
                $query = mysqli_query($conn, $strSQL);
                if($query){
                  while($row = mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $row['position_div_name'];?>"><?php echo $row['position_title'];?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label for="">Parent</label>
              <select class="form-control" name="txtParent2" id="txtParent2">
                <option value="">No parent</option>
                <?php
                $tb1 = $db_prefix."menus";
                $strSQL = "SELECT * FROM $tb1 WHERE domain_id = 'null' AND level = '0'";
                $query = mysqli_query($conn, $strSQL);
                if($query){
                  while($row = mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $row['ID'];?>"><?php echo $row['menu_name'];?></option>
                    <?php
                  }
                }
                ?>
              </select>
            </div>

            <div class="row">
              <div class="form-group col-12 col-sm-8">
                <label for="">URL</label>
                <input type="text" name="txtUrl2" id="txtUrl2" value="#" class="form-control">
              </div>

              <div class="form-group col-12 col-sm-4">
                <label for="">Target</label>
                <select class="form-control" name="txtTarget2" id="txtTarget2">
                  <option value="_self" selected>_self</option>
                  <option value="_blank">_blank</option>
                  <option value="_parent">_parent</option>
                </select>
              </div>
            </div>



            <div class="row">
              <div class="form-group col-12 col-sm-6">
                <label for="">Web language <span class="text-danger">*</span> </label>
                <select class="form-control" name="txtLang2" id="txtLang2">
                  <option value="">-- Choose language --</option>
                  <?php
                  $tb1 = $db_prefix."language";
                  $strSQL = "SELECT * FROM $tb1 WHERE 1";
                  $query = mysqli_query($conn, $strSQL);
                  if($query){
                    while($row = mysqli_fetch_array($query)){
                      ?>
                      <option value="<?php echo $row['lang_id'];?>"><?php echo $row['lang_long_name'];?></option>
                      <?php
                    }
                  }
                  ?>
                </select>
              </div>

              <div class="form-group col-12 col-sm-6">
                <label for="">Sub-domain in response </label>
                <select class="form-control" name="txtSubdomain2" id="txtSubdomain2">
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

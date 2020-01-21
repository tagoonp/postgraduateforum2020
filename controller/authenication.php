<?php
include "../config.inc.php";
include "../connect.inc.php";
include "../function.inc.php";

if(
  (!isset($_GET['stage']))
)
{

  mysqli_close($conn);
  die();
}

$return = array();
$stage = mysqli_real_escape_string($conn, $_GET['stage']);

if($stage == 'info'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['role']))
  ){
    mysqli_close($conn);
    die();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $role = mysqli_real_escape_string($conn, $_POST['role']);

  $strSQL = "SELECT * FROM udix2_account WHERE UID = '$uid' AND role = '$role' AND delete_status = 'N' AND activate_status = 'Y' AND use_status = 'Y' LIMIT 1";
  $resultCheck = mysqli_query($conn, $strSQL);
  if(($resultCheck) && (mysqli_num_rows($resultCheck) > 0)){
    while($row = mysqli_fetch_array($resultCheck)){
        $b = array();
        foreach ($row as $key => $value) {
          if(!is_int($key)){
            $b[$key] = $value;
          }
        }
        $b['status'] = 'Y';
        $return[] = $b;
    }
  }

  echo json_encode($return);
  mysqli_close($conn);
  die();
}


if($stage == 'login'){
  if(
    (!isset($_POST['username'])) ||
    (!isset($_POST['password']))
  ){
    mysqli_close($conn);
    die();
  }

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = base64_encode(mysqli_real_escape_string($conn, $_POST['password']));

  $strSQL = "SELECT * FROM udix2_account WHERE username = '$username' AND password = '$password' AND delete_status = 'N' AND activate_status = 'Y' AND use_status = 'Y' LIMIT 1";
  $resultCheck = mysqli_query($conn, $strSQL);
  if(($resultCheck) && (mysqli_num_rows($resultCheck) > 0)){
    $row = mysqli_fetch_assoc($resultCheck);
    $return[0]['status'] = 'Success';
    $return[0]['msg'] = 'Login success';
    $return[0]['uid'] = $row['UID'];
    $return[0]['role'] = $row['role'];
    $return[0]['username'] = $row['username'];
    $return[0]['fullname'] = $row['prefix'].$row['fullname'];

    $strSQL = "INSERT INTO udix2_log
                (log_datetime, log_ip, log_info, log_msg, log_uid)
               VALUES
                ('$sysdatetime','$ip','Log in','','".$row['UID']."')
              ";
              mysqli_query($conn, $strSQL);

  }else{
    $return[0]['status'] = 'Fail';
    $return[0]['msg'] = 'Invalid user account'.$strSQL;
  }

  echo json_encode($return);
  mysqli_close($conn);
  die();
}

if($stage == 'create'){

  if(
    (!isset($_POST['position'])) ||
    (!isset($_POST['prefix'])) ||
    (!isset($_POST['fullname'])) ||
    (!isset($_POST['institution'])) ||
    (!isset($_POST['phone'])) ||
    (!isset($_POST['email'])) ||
    (!isset($_POST['password'])) ||
    (!isset($_POST['sec'])) ||
    (!isset($_POST['regtype']))
  ){
    mysqli_close($conn);
    die();
  }

  $position = mysqli_real_escape_string($conn, $_POST['position']);
  $position_o = mysqli_real_escape_string($conn, $_POST['position_o']);
  $prefix = mysqli_real_escape_string($conn, $_POST['prefix']);
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $institution = mysqli_real_escape_string($conn, $_POST['institution']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = base64_encode(mysqli_real_escape_string($conn, $_POST['password']));
  $regtype = mysqli_real_escape_string($conn, $_POST['regtype']);
  $sec = mysqli_real_escape_string($conn, $_POST['sec']);

  $strSQL = "SELECT * FROM udix2_account WHERE username = '$email' AND delete_status = 'N' AND activate_status = 'Y'";
  $result = mysqli_query($conn, $strSQL);
  if(($result) && (mysqli_num_rows($result) > 0)){
    echo "D";
    mysqli_close($conn);
    die();
  }

  $uid = base64_encode($sysdateu);

  $strSQL = "INSERT INTO udix2_account
              (
                UID, username, password, academic_title, academic_title_o,
                prefix, fullname, institution, phone, register_type,
                reg_datetime, secret_id
              )
             VALUES
              (
                '$uid', '$email', '$password', '$position', '$position_o',
                '$prefix', '$fullname', '$institution', '$phone', '$regtype',
                '$sysdatetime', '$sec'
              )";
  $resultInsert = mysqli_query($conn, $strSQL);

  if($resultInsert){
    echo "Y";
    $strSQL = "INSERT INTO udix2_log
                (log_datetime, log_ip, log_info, log_msg, log_uid)
               VALUES
                ('$sysdatetime','$ip','Register','','$uid')
              ";
              mysqli_query($conn, $strSQL);
  }else{
    echo "N".$strSQL;
  }

  mysqli_close($conn);
  die();
}



?>

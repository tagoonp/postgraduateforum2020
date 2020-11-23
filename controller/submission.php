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

if($stage == 'withdraw'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['pid']))
  ){
    mysqli_close($conn);
    die();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  $reason = mysqli_real_escape_string($conn, $_POST['reason']);

  $strSQL = "UPDATE udix2_submission
             SET
             sub_submit_status = 'Withdraw'
             WHERE PID = '$pid' AND sub_uid = '$uid' AND sub_use_status = 'Y'";
  $resultUpdate = mysqli_query($conn, $strSQL);
  if($resultUpdate){
    // echo $strSQL;
    // die();
    echo "Y";
    $strSQL = "INSERT INTO udix2_log
                (log_datetime, log_ip, log_info, log_msg, log_uid)
               VALUES
                ('$sysdatetime','$ip','Withdraw abstract ID $pid with reason : $reason','','$uid')
              ";
              mysqli_query($conn, $strSQL);
  }
  mysqli_close($conn);
  die();
}

if($stage == 'confirm_draft'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['pid']))
  ){
    echo "a";
    mysqli_close($conn);
    die();
  }

  echo $uid;

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);

  $strSQL = "SELECT * FROM udix2_submission WHERE PID = '$pid' AND sub_uid = '$uid' AND sub_use_status = 'Y'";
  $resultCheck = mysqli_query($conn, $strSQL);
  if(($resultCheck) && (mysqli_num_rows($resultCheck) > 0)){
    $strSQL = "UPDATE udix2_submission
               SET
               sub_submit = 'Y',
               sub_draft = 'N',
               sub_submit_status = 'Submitted' ,
               sub_submit_datetime = '$sysdatetime'
               WHERE PID = '$pid' AND sub_uid = '$uid' AND sub_use_status = 'Y'";
    $resultUpdate = mysqli_query($conn, $strSQL);
    if($resultUpdate){
      echo "Y";
      $strSQL = "INSERT INTO udix2_log
                  (log_datetime, log_ip, log_info, log_msg, log_uid)
                 VALUES
                  ('$sysdatetime','$ip','Submit abstract ID $pid','','$uid')
                ";
                mysqli_query($conn, $strSQL);
    }else{
      echo $strSQL;
    }
  }else{
    echo $strSQL;
  }
  mysqli_close($conn);
  die();
}

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

if($stage == 'recent_info'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['pid']))
  ){
    mysqli_close($conn);
    die();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);

  $strSQL = "SELECT * FROM udix2_submission WHERE PID = '$pid' AND sub_uid = '$uid' AND sub_use_status = 'Y'";
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

if($stage == 'save_draft'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['pid'])) ||
    (!isset($_POST['title'])) ||
    (!isset($_POST['type'])) ||
    (!isset($_POST['abstract'])) ||
    (!isset($_POST['keyword'])) ||
    (!isset($_POST['category']))
  ){
    mysqli_close($conn);
    die();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $type = mysqli_real_escape_string($conn, $_POST['type']);
  $abstract = mysqli_real_escape_string($conn, $_POST['abstract']);
  $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);
  $category = mysqli_real_escape_string($conn, $_POST['category']);

  if($pid == NULL){

    // $ord = 1;
    // $strSQL = "SELECT MAX(PID) mx FROM udix2_submission WHERE sub_use_status = 'Y'";
    // $resultOrd = mysqli_query($conn, $strSQL);
    // if(($resultOrd) && (mysqli_num_rows($resultOrd) > 0)){
    //   $dataOrd = mysqli_fetch_assoc($resultOrd);
    //   $ord = $dataOrd['mx'] + 1;
    // }

    // $pid = $ord;
    $pid = base64_encode($sysdateu).$uid;
    $strSQL = "INSERT INTO udix2_submission
              (PID, sub_title, sub_presenttype, sub_abstract, sub_keywords, sub_category, sub_udatetime, sub_uid)
              VALUES
              (
                '$pid', '$title', '$type', '$abstract', '$keyword', '$category', '$sysdatetime', '$uid'
              )
              ";
    $resultInsert = mysqli_query($conn, $strSQL);
    if($resultInsert){
      $return[0]['pid'] = $pid;
      $return[0]['status'] = 'Success';
    }else{
      $return[0]['status'] = 'Fail';
    }
  }
  else{
    $strSQL = "UPDATE udix2_submission
               SET
                sub_title = '$title',
                sub_presenttype = '$type',
                sub_abstract = '$abstract',
                sub_keywords = '$keyword',
                sub_category = '$category',
                sub_udatetime = '$sysdatetime'
              WHERE
                PID = '$pid' AND sub_uid = '$uid'
              ";
    $resultUpdate = mysqli_query($conn, $strSQL);
    if($resultUpdate){
      $return[0]['pid'] = $pid;
      $return[0]['status'] = 'Success';
    }else{
      $return[0]['status'] = 'Fail';
    }
  }

  echo json_encode($return);
  mysqli_close($conn);
  die();
}

if($stage == 'update_author'){
  if(
    (!isset($_POST['position'])) ||
    (!isset($_POST['prefix'])) ||
    (!isset($_POST['fullname'])) ||
    (!isset($_POST['institution'])) ||
    (!isset($_POST['email'])) ||
    (!isset($_POST['uid'])) ||
    (!isset($_POST['aid'])) ||
    (!isset($_POST['pid']))
  ){
    mysqli_close($conn);
    die();
  }

  $position = mysqli_real_escape_string($conn, $_POST['position']);
  $position_o = mysqli_real_escape_string($conn, $_POST['position_o']);
  $prefix = mysqli_real_escape_string($conn, $_POST['prefix']);
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $institution = mysqli_real_escape_string($conn, $_POST['institution']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  $aid = mysqli_real_escape_string($conn, $_POST['aid']);

  $strSQL = "UPDATE udix2_author
             SET
               author_position = '$position',
               author_position_o = '$position_o',
               author_prefix = '$prefix',
               author_fullname = '$fullname',
               author_email = '$email',
               author_institution = '$institution',
               author_country = '$country'
             WHERE
              ID = '$aid' AND author_pid = '$pid' AND author_uid = '$uid'
            ";
  $resultUpdate = mysqli_query($conn, $strSQL);
  if($resultUpdate){
    echo "Y";
  }else{
    echo "N";
  }
  mysqli_close($conn);
  die();
}

if($stage == 'delete_author'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['aid'])) ||
    (!isset($_POST['pid']))
  ){
    mysqli_close($conn);
    die();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  $aid = mysqli_real_escape_string($conn, $_POST['aid']);

  $strSQL = "DELETE FROM udix2_author WHERE author_pid = '$pid' AND author_uid = '$uid' AND ID = '$aid' ";
  $resultDelete = mysqli_query($conn, $strSQL);
  if($resultDelete){
      echo "Y";
  }else{
      echo "N";
  }
  mysqli_close($conn);
  die();
}

if($stage == 'switch_author'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['aid'])) ||
    (!isset($_POST['pid']))
  ){
    mysqli_close($conn);
    die();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  $aid = mysqli_real_escape_string($conn, $_POST['aid']);

  $strSQL = "UPDATE udix2_author
             SET
               author_presenter = 'N'
             WHERE
              author_pid = '$pid' AND author_uid = '$uid'
            ";
  $resultUpdate = mysqli_query($conn, $strSQL);
  if($resultUpdate){
    $strSQL = "UPDATE udix2_author
               SET
                 author_presenter = 'Y'
               WHERE
               ID = '$aid' AND author_pid = '$pid' AND author_uid = '$uid'
              ";
    $resultUpdate2 = mysqli_query($conn, $strSQL);
    if($resultUpdate2){
      echo "Y";
    }else{
      echo "N2";
    }
  }else{
    echo "N1";
  }
  mysqli_close($conn);
  die();

}

if($stage == 'create_author'){
  if(
    (!isset($_POST['position'])) ||
    (!isset($_POST['prefix'])) ||
    (!isset($_POST['fullname'])) ||
    (!isset($_POST['institution'])) ||
    (!isset($_POST['email'])) ||
    (!isset($_POST['uid'])) ||
    (!isset($_POST['pid']))
  ){
    mysqli_close($conn);
    die();
  }

  $position = mysqli_real_escape_string($conn, $_POST['position']);
  $position_o = mysqli_real_escape_string($conn, $_POST['position_o']);
  $prefix = mysqli_real_escape_string($conn, $_POST['prefix']);
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $institution = mysqli_real_escape_string($conn, $_POST['institution']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);

  $strSQL = "SELECT MAX(author_seq) MX FROM udix2_author WHERE author_pid = '$pid' AND author_uid = '$uid'";
  $resultSeq = mysqli_query($conn, $strSQL);
  $nseq = 1;

  if(($resultSeq) && (mysqli_num_rows($resultSeq) > 0)){
    $data = mysqli_fetch_assoc($resultSeq);
    $nseq = $data['MX'] + 1;
  }

  $strSQL = "INSERT INTO udix2_author
            (
              author_position, author_position_o, author_prefix, author_fullname,
              author_email, author_institution, author_country,
              author_seq, author_pid, author_uid, author_udatetime
            )
            VALUES
            (
              '$position', '$position_o', '$prefix', '$fullname', '$email', '$institution',
              '$country', '$nseq', '$pid', '$uid', '$sysdatetime'
            )
            ";
    $resultInsert = mysqli_query($conn, $strSQL);
    if($resultInsert){
      echo "Y";
      $strSQL = "INSERT INTO udix2_log
                  (log_datetime, log_ip, log_info, log_msg, log_uid)
                 VALUES
                  ('$sysdatetime','$ip','Add author info '.$prefix.$fullname ,'','$uid')
                ";
                mysqli_query($conn, $strSQL);
    }else{
      echo "N";
    }

    mysqli_close($conn);
    die();
}

if($stage == 'list_author'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['pid']))
  ){
    mysqli_close($conn);
    die();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);

  $strSQL = "SELECT * FROM udix2_author WHERE author_pid = '$pid' AND author_uid = '$uid'";
  $resultCheck = mysqli_query($conn, $strSQL);
  if(($resultCheck) && (mysqli_num_rows($resultCheck) > 0)){
    while($row = mysqli_fetch_array($resultCheck)){
        $b = array();
        foreach ($row as $key => $value) {
          if(!is_int($key)){
            $b[$key] = $value;
          }
        }
        $return[] = $b;
    }
  }

  echo json_encode($return);
  mysqli_close($conn);
  die();
}

if($stage == 'get_author'){
  if(
    (!isset($_POST['uid'])) ||
    (!isset($_POST['aid'])) ||
    (!isset($_POST['pid']))
  ){
    mysqli_close($conn);
    die();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  $aid = mysqli_real_escape_string($conn, $_POST['aid']);

  $strSQL = "SELECT * FROM udix2_author WHERE ID = '$aid' AND author_pid = '$pid' AND author_uid = '$uid'";
  $resultCheck = mysqli_query($conn, $strSQL);
  if(($resultCheck) && (mysqli_num_rows($resultCheck) > 0)){
    while($row = mysqli_fetch_array($resultCheck)){
        $b = array();
        foreach ($row as $key => $value) {
          if(!is_int($key)){
            $b[$key] = $value;
          }
        }
        $return[] = $b;
    }
  }

  echo json_encode($return);
  mysqli_close($conn);
  die();
}




?>

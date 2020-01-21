<?php
include "./config.inc.php";
include "./connect.inc.php";
include "./function.inc.php";

if(
  (!isset($_GET['response_id']))
)
{
  echo "Invalid parameters<br>";
  echo "<a href='https://postgraduateforum2020.com'>Go to main site</a>";
  mysqli_close($conn);
  die();
}

$id = mysqli_real_escape_string($conn, $_GET['response_id']);

$strSQL = "SELECT * FROM udix2_account WHERE secret_id = '$id'";
$result = mysqli_query($conn, $strSQL);
if(($result) && (mysqli_num_rows($result) > 0)){
  $data = mysqli_fetch_assoc($result);
  $strSQL = "UPDATE udix2_account SET activate_status = 'Y', activete_datetime = '$sysdatetime' WHERE  secret_id = '$id'";
  $resultUpdate = mysqli_query($conn, $strSQL);
  if($resultUpdate){
    $uid = $data['UID'];
    $strSQL = "INSERT INTO udix2_log
                (log_datetime, log_ip, log_info, log_msg, log_uid)
               VALUES
                ('$sysdatetime','$ip','Activate account','','$uid')
              ";
              mysqli_query($conn, $strSQL);
    echo "Activation success <a href='https://postgraduateforum2020.com/login'>Go to login site</a><br>";
    mysqli_close($conn);
    die();
  }else{
    echo "Invalid secret key, please check other email or contact administrator.<br>";
    echo "<a href='https://postgraduateforum2020.com'>Go to main site</a>";
    mysqli_close($conn);
    die();
  }
}else{
  echo "Invalid secret key, please check other email or contact administrator.<br>";
  echo "<a href='https://postgraduateforum2020.com'>Go to main site</a>";
  mysqli_close($conn);
  die();
}
?>

<?php
include "../config.inc.php";
include "../connect.inc.php";
include "../function.inc.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$strSQL = "SELECT * FROM udix2_account WHERE 1";
$result = mysqli_query($conn, $strSQL);
if($result){
  print_r($result);
}else{
  echo "b";
}

mysqli_close($conn);
die();
?>

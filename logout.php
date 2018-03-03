<?php session_start();
if(!isset($_SESSION['type'])){
  header("location:logit.php");
}else{
session_destroy();
session_unset();
$_SESSION = array();
  header("location:logit.php");
}

?>

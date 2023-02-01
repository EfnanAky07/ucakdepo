<?php 

include_once 'core/init.php';
$error = isset($_GET["error"]) ? intval(trim($_GET["error"])) : 0;
if (IsLogin()) {
    include 'pages/home.php';
} else {
    include 'pages/login.php';
}
if($error == 1){
    Alert("Kullanıcı adı ve ya şifre yanlış!!");
  }
?>
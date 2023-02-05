<?php 
session_start();
require_once 'database/connection.php';
require_once 'class/user.php'; 
require_once 'class/part.php';
function IsLogin(){
 if (!empty($_SESSION['username'])) {
   return true;  
   
} else {
    return false;
}


};
function Alert($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
<?php 
require '../init.php';
if (isset($_POST['loginform'])) {
    @$username=trim(strip_tags($_POST['username']));
    @$password=trim(strip_tags($_POST['password']));
    $user= new User();
    $user->Login($username,$password);
    
} else {
    echo 'error';
}



?>
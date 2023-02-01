<?php  
class User{
 private $db;
 public function __construct(){
    $this->db = new Connection();
    $this->db = $this->db->dbConnect(); 
    $this->db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8' ");
 }
 public function Login($username, $password){
     if ($username=='admin' && $password=='737800') {
         $_SESSION['username']=$username;
         header('Location: ../../index.php');

     }else {
         header('Location: ../../index.php?error=1');
     }
 }


}


?>
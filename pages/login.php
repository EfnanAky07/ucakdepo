<?php 
include_once 'core/init.php';
if (IsLogin()) {
   header('Location: index.php');

}
else {
    echo' <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
        <form action="core/controller/login.php" method="POST">
            <h2>User Login</h2>
            <input required type="text" name="username" placeholder="Username" >
            <input required type="password" name="password" placeholder="password">
            <input type="submit" name="loginform"  class="submit" value="login">
        </form>
        
    </body>
    </html> ';
}

?>

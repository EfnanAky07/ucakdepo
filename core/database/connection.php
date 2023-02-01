<?php 
 class Connection {
    public function dbConnect (){
        $host = 'localhost';
        $dbName = 'movino_depo';
        $dbUserName = 'root';
        $dbPassword = '';

        try { 
            return new PDO('mysql: host ='.$host.'; dbname ='.$dbName, $dbUserName, $dbPassword);
          
        } catch (PDOException $e) {
           exit('Database connection error');
        }
    }

 }
?>
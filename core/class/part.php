<?php
class Part{
    private $db;
 public function __construct(){
    $this->db = new Connection();
    $this->db = $this->db->dbConnect(); 
    $this->db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8' ");
 }
 public function Getdata(){
    $getData=$this->db->query("SELECT * FROM movino_depo.parts ");
  
    $g=$getData->fetchAll(PDO::FETCH_ASSOC);
    if($g){
    foreach ($g as $d){
        $getcons=$this->db->prepare("SELECT * FROM movino_depo.companies WHERE id=? LIMIT 1 ");
        $getcons->execute([$d["supplier"]]);
        $supplier=$getcons->fetch();
        echo '<tr>
        <td>'.$d["part_no"].'</td>
        <td>'.$d["serial_no"].'</td>
        <td>'.$d["piece"].'</td>
        <td>'.$d["incoming_date"].'</td>
        <td>'.$supplier["name"].'</td>
        </tr>';
    }
        
    }

 }
 public function Search($word){
    $sorgu=$this->db->prepare("SELECT * FROM movino_depo.parts WHERE part_no LIKE :partno");
    $sorgu->execute(array(':partno'=> '%'.$word.'%'));
    if ($sorgu->rowCount()){
        
        foreach ($sorgu as $row){
            $getcons=$this->db->prepare("SELECT * FROM movino_depo.companies WHERE id=? LIMIT 1 ");
            $getcons->execute([$row["supplier"]]);
            $supplier=$getcons->fetch();
            echo '<tr>
            <td>'.$row["part_no"].'</td>
            <td>'.$row["serial_no"].'</td>
            <td>'.$row["piece"].'</td>
            <td>'.$row["incoming_date"].'</td>
            <td>'.$supplier["name"].'</td>
            </tr>';    
        }
       
    }

 }
}


?>
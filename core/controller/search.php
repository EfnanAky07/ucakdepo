<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" href="../../css/style2.css">
</head>
<body>
    <h1><a href= "../../index.php"> return home </a></h1>
<h2>Receiving</h2>
<form action=" " method="GET">
            
            <input required type="text" name="search" placeholder="words" >
            <input type="submit" name="searchform"  class="submit" value="search">
        </form> 
    <table>
        <tr id="tablo-baslik">
            <td>Part No</td>
            <td>Serial No</td>
            <td>Piece</td>
            <td>İncoming Date</td>
            <td>Supplier</td>
        </tr>

        
    
<?php 
require '../init.php';
if (isset($_GET['searchform'])) {
    @$word=trim(strip_tags($_GET['search']));
   
    $part= new Part();
    $part->Search($word);
    
} else {
    echo 'error';
}
?>
</table>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" href="css/style2.css">
</head>
<body>
<h2>Receiving</h2>
<form action="core/controller/search.php" method="GET">
            
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
        <?php $getdata=new Part(); $getdata->Getdata();?>
        
    </table>
 
</body>
</html>


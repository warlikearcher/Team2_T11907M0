<?php
include_once (__DIR__ . "..\config\database\connectDB.php");
$s1=$_REQUEST["search"];
$select_query="select * from tblaptoplist where nameProduct like '%".$s1."%'";
$sql= mysqli_query($link,$select_query) or die (mysql_error());
$s="";
while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='?view=detail&id=".$row['idProduct']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src=".$row['photo1'].">
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['nameProduct']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>Giá:".number_format($row['rate'])."</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
?>
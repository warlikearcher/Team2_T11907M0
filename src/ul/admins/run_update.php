
<?php

include_once './controllers/database/connectDB.php';
$name = $_GET["txtName"];
$rate = $_GET["txtRate"];
$id = $_GET["hidden_id"];
$nameTable = $_GET["hidden_tableName"];


$sql = "update $nameTable set nameProduct = '$name', rate='$rate' WHERE idProduct= '$id' ;";


$r = mysqli_query($link, $sql);

if ($r == FALSE) {
    echo "<h3 style='color:blue'>Lỗi sai Điều Chỉnh thông tin sản phẩm</h3>";
    exit();
} else {
    
    header("location:index.php");
    echo '<script >';
    echo 'alert("Cập nhật thành công");';
    echo '</script>';
    exit();
}



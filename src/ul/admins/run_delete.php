<?php

include_once './controllers/database/connectDB.php';
$id = $_GET["hidden_id"];
$nameTable = $_GET["hidden_tableName"];


$sql = "DELETE FROM $nameTable WHERE idProduct= '$id' ;";


$r = mysqli_query($link, $sql);

if ($r == FALSE) {
    echo "<h3 style='color:blue'>Lỗi sai id sản phẩm</h3>";
    exit();
} else {
    
    header("location:index.php");
    echo '<script >';
    echo 'alert("Đã xóa sản phẩm");';
    echo '</script>';
    exit();
}


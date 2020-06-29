<?php

/* 
server  MySQL  = 3308 , server MariaDB = 3306
 */

$serverDB = "localhost:3308";
$dbName = "project";
$username = "root";
$password = "";

$link= mysqli_connect($serverDB, $username, $password,$dbName);

if($link == NULL){
    echo "Loi sai ket noi";
}
?>
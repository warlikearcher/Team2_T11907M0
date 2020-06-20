<?php

// Below is optional, remove if you have already connected to your database.
include_once 'connectDB.php';
$columns = "idProduct";
$sort_order = "ASC";
$r = mysqli_query($link,"SELECT * FROM ( ( SELECT tbcpulist.idProduct, tbcpulist.nameProduct, tbcpulist.rate FROM tbcpulist ) UNION ( SELECT tbgraphicslist.idProduct, tbgraphicslist.nameProduct, tbgraphicslist.rate FROM tbgraphicslist ) UNION ( SELECT tblaptoplist.idProduct, tblaptoplist.nameProduct, tblaptoplist.rate FROM tblaptoplist ) UNION ( SELECT tbramlist.idProduct, tbramlist.nameProduct, tbramlist.rate FROM tbramlist ) UNION ( SELECT tbradiatorslist.idProduct, tbradiatorslist.nameProduct, tbradiatorslist.rate FROM tbradiatorslist ) ) AS r ORDER BY `r`.'". $columns . $sort_order ."'");


?>
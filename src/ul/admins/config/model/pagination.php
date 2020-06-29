<?php
$quer = "SELECT count(idProduct) as total FROM ( ( SELECT tbcpulist.idProduct FROM tbcpulist ) UNION ( SELECT tbgraphicslist.idProduct FROM tbgraphicslist ) UNION ( SELECT tblaptoplist.idProduct FROM tblaptoplist ) UNION ( SELECT tbramlist.idProduct FROM tbramlist ) UNION ( SELECT tbradiatorslist.idProduct FROM tbradiatorslist ) ) AS r";
$r = mysqli_query($link,$quer);
$row = mysqli_fetch_assoc($r);
$total_records = $row['total'];
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;
$total_page = ceil($total_records / $limit);
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}
$start = ($current_page - 1) * $limit;
//$result = mysqli_query($conn, "SELECT * FROM news LIMIT $start, $limit");
<?php
$sql_a = "(SELECT tbgraphicslist.idProduct,tbgraphicslist.nameProduct,tbgraphicslist.rate from tbgraphicslist) union (select tbramlist.idProduct,tbramlist.nameProduct,tbramlist.rate from tbramlist) union (select tbradiatorslist.idProduct,tbradiatorslist.nameProduct,tbradiatorslist.rate from tbradiatorslist) order by rand() limit 0,6;";
$sql_b = "(SELECT tbcpulist.idProduct,tbcpulist.nameProduct,tbcpulist.rate from tbcpulist) union (select tblaptoplist.idProduct,tblaptoplist.nameProduct,tblaptoplist.rate from tblaptoplist) order by rand() limit 0,6;";

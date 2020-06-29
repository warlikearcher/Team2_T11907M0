<?php

include_once (__DIR__ . "..\config\database\connectDB.php");
$s1 = $_REQUEST["search"];
$select_query = "select * from tblaptoplist where nameProduct like '%" . $s1 . "%'";
$select_query = "SELECT
    *
FROM
    (
        (
        SELECT
            tbcpulist.idProduct,
            tbcpulist.nameProduct,
            tbcpulist.rate,
            tbcpulist.photo1
        FROM
            tbcpulist
    )
UNION
    (
    SELECT
        tbgraphicslist.idProduct,
        tbgraphicslist.nameProduct,
        tbgraphicslist.rate,
        tbgraphicslist.photo1
    FROM
        tbgraphicslist
)
UNION
    (
    SELECT
        tblaptoplist.idProduct,
        tblaptoplist.nameProduct,
        tblaptoplist.rate,
        tblaptoplist.photo1
    FROM
        tblaptoplist
)
UNION
    (
    SELECT
        tbramlist.idProduct,
        tbramlist.nameProduct,
        tbramlist.rate,
        tbramlist.photo1
    FROM
        tbramlist
)
UNION
    (
    SELECT
        tbradiatorslist.idProduct,
        tbradiatorslist.nameProduct,
        tbradiatorslist.rate,
        tbradiatorslist.photo1
    FROM
        tbradiatorslist
)
    ) AS r
WHERE
    r.nameProduct like '%" . $s1 . "%'";
$sql = mysqli_query($link, $select_query) or die(mysql_error());
$s = "";
while ($row = mysqli_fetch_array($sql)) {
    $s = $s . "
	<a class='link-p-colr' href='?view=detail&id=" . $row['idProduct'] . "'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src=" . $row['photo1'] . ">
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>" . $row['nameProduct'] . "</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>Giá:" . number_format($row['rate']) . "</p></div>
                    </div>
                </div>
            </div>
	</a>
	";
}
echo $s;
?>
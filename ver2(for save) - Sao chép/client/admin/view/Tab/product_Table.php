<?php
//$columns = isset($_GET['column']) && ($_GET['column']) == 'idProduct' ? 'nameProduct' : 'rate';
if(isset($_GET['column'])){
    $columns = $_GET['column'];
}
else{
    $columns = 'idProduct';
}
//$sort_order = isset($_GET['sort']) && ($_GET['sort']) == 'ASC' ? 'DESC' : 'ASC';
$sort_order = 'ASC';
if(isset($_GET['sort'])){
    $sort_order = $_GET['sort'];
}



//('SELECT * FROM students ORDER BY ' .  $column . ' ' . $sort_order)
$sqli = "SELECT * FROM ( ( SELECT tbcpulist.idProduct, tbcpulist.nameProduct, tbcpulist.rate FROM tbcpulist ) UNION ( SELECT tbgraphicslist.idProduct, tbgraphicslist.nameProduct, tbgraphicslist.rate FROM tbgraphicslist ) UNION ( SELECT tblaptoplist.idProduct, tblaptoplist.nameProduct, tblaptoplist.rate FROM tblaptoplist ) UNION ( SELECT tbramlist.idProduct, tbramlist.nameProduct, tbramlist.rate FROM tbramlist ) UNION ( SELECT tbradiatorslist.idProduct, tbradiatorslist.nameProduct, tbradiatorslist.rate FROM tbradiatorslist ) ) AS r ORDER BY `r`." . $columns .'   '. $sort_order."";
$r = mysqli_query($link,$sqli);
?>
<div class="container-fluid">
    <div class="button-area">
        <div class="row">
            <div class="col-md-4">
                <div class="session_card mb-4 padding-0">
                    <div class="card border-left-success shadow">
                        <div class="card-body">
                            <div class=" no-gutters align-items-center">
                                <div class="card-font">
                                    <a href="?action=add_product">Thêm sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="session_card mb-4 padding-0">
                    <div class="card border-left-success shadow">
                        <div class="card-body">
                            <div class=" no-gutters align-items-center">
                                <div class="card-font">
                                    <a href="?action=addBanner">Thêm Banner</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="table-area">
        <div class="search-product">
            <input>
            <button>submit</button>
        </div>

        <table border="2" id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm"><a href="?src=productTable&column=idProduct&&sort=DESC">ID sản phẩm</a></th>
                    <th class="th-sm">Tên sản phẩm</th>
                    <th class="th-sm">Giá sản phẩm</th>
                    <th class="th-sm">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo $sqli;

                $danhSachSanPham = mysqli_fetch_all($r);
                foreach ($danhSachSanPham as $item) {
                    echo '<tr>';
                    echo "<td> $item[0] </td>";
                    echo "<td> $item[1] </td>";
                    echo "<td>" . number_format($item[2], 0) . "</td>";
                    echo "<td>";
                    echo "<a href='Lab07_SuaLop.php?id=$item[0]'>Thay đổi</a> | ";
                    echo "<a href='Lab07_XoaLop.php?id=$item[0]'>Xóa</a>";
                    echo "</td>";
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

    </div>
</div>
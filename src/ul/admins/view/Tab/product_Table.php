<?php
//$columns = isset($_GET['column']) && ($_GET['column']) == 'idProduct' ? 'nameProduct' : 'rate';
if (isset($_GET['column'])) {
    $columns = $_GET['column'];
} else {
    $columns = 'idProduct';
}
//$sort_order = isset($_GET['sort']) && ($_GET['sort']) == 'ASC' ? 'DESC' : 'ASC';
$sort_order = 'ASC';
if (isset($_GET['sort'])) {
    $sort_order = $_GET['sort'];
}
if (isset($_POST["txtSearch"])) {
    $txtSearch = $_POST["txtSearch"];
    $sqli = "SELECT * FROM ( ( SELECT tbcpulist.idProduct, tbcpulist.nameProduct, tbcpulist.rate FROM tbcpulist ) UNION ( SELECT tbgraphicslist.idProduct, tbgraphicslist.nameProduct, tbgraphicslist.rate FROM tbgraphicslist ) UNION ( SELECT tblaptoplist.idProduct, tblaptoplist.nameProduct, tblaptoplist.rate FROM tblaptoplist ) UNION ( SELECT tbramlist.idProduct, tbramlist.nameProduct, tbramlist.rate FROM tbramlist ) UNION ( SELECT tbradiatorslist.idProduct, tbradiatorslist.nameProduct, tbradiatorslist.rate FROM tbradiatorslist ) ) AS r  WHERE r.idProduct = '$txtSearch' OR r.nameProduct LIKE '%$txtSearch%' ORDER BY `r`." . $columns . '   ' . $sort_order . " LIMIT $start, $limit ";
    $r = mysqli_query($link, $sqli);
    $check = mysqli_fetch_assoc($r);
    if ($check === NULL) {
        $r = mysqli_query($link, "SELECT * FROM ( ( SELECT tbcpulist.idProduct, tbcpulist.nameProduct, tbcpulist.rate FROM tbcpulist ) UNION ( SELECT tbgraphicslist.idProduct, tbgraphicslist.nameProduct, tbgraphicslist.rate FROM tbgraphicslist ) UNION ( SELECT tblaptoplist.idProduct, tblaptoplist.nameProduct, tblaptoplist.rate FROM tblaptoplist ) UNION ( SELECT tbramlist.idProduct, tbramlist.nameProduct, tbramlist.rate FROM tbramlist ) UNION ( SELECT tbradiatorslist.idProduct, tbradiatorslist.nameProduct, tbradiatorslist.rate FROM tbradiatorslist ) ) AS r ORDER BY `r`." . $columns . '   ' . $sort_order . " LIMIT $start, $limit ");
        echo '<script>';
        echo 'Alert("Khong tim thay san pham")';
        echo '</script>';
    }
} else {
    //('SELECT * FROM students ORDER BY ' .  $column . ' ' . $sort_order)
    $sqli = "SELECT * FROM ( ( SELECT tbcpulist.idProduct, tbcpulist.nameProduct, tbcpulist.rate FROM tbcpulist ) UNION ( SELECT tbgraphicslist.idProduct, tbgraphicslist.nameProduct, tbgraphicslist.rate FROM tbgraphicslist ) UNION ( SELECT tblaptoplist.idProduct, tblaptoplist.nameProduct, tblaptoplist.rate FROM tblaptoplist ) UNION ( SELECT tbramlist.idProduct, tbramlist.nameProduct, tbramlist.rate FROM tbramlist ) UNION ( SELECT tbradiatorslist.idProduct, tbradiatorslist.nameProduct, tbradiatorslist.rate FROM tbradiatorslist ) ) AS r ORDER BY `r`." . $columns . '   ' . $sort_order . " LIMIT $start, $limit ";
    $r = mysqli_query($link, $sqli);
}

echo $sqli;

$repost = '';
if (isset($_GET['sort']) && $_GET['sort'] == 'DESC') {
    $repost = 'Giảm dần';
} else {
    $repost = 'Tăng dần';
}
if ($sort_order == 'DESC') {
    $sort = 'ASC';
} else {
    $sort = 'DESC';
}
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
                    <div class="card border-left-warning shadow">
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
        <div class="double-func">
            <div class="search-product">
                <form method="POST">
                    <i>Nhập mã sản phẩm (Yêu cầu chính xác) hoặc tên sản phẩm </i>
                    <input id="txtSearch" name="txtSearch">
                    <button type="submit">Tìm Kiếm</button>
                </form>

            </div>
            <div class="report-sort">
                <?php
                if (isset($_GET['sort']) && $_GET['sort'] == 'ASC') {
                    $characterSort = "&#x25B2";
                } else if (isset($_GET['sort']) && $_GET['sort'] == 'DESC') {
                    $characterSort = "&#x25BC";
                } else {
                    $characterSort = "";
                }
                switch ($columns) {
                    case "idProduct":
                        $nameSort = "ID";
                        break;
                    case "nameProduct":
                        $nameSort = "Tên sản phẩm";
                        break;
                    case "rate":
                        $nameSort = "Giá";
                        break;
                    default :
                        $nameSort = "";
                        break;
                }
                ?>
                <h5>Sắp xếp cột: <span><?php echo $nameSort; ?></span></h5>

                <span><?php
                    echo $repost;
                    echo $characterSort;
                    ?></span>
            </div>
        </div>

        <table border="2" id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm"><a href="?src=productTable&column=idProduct&&sort=<?php echo $sort; ?>">ID sản phẩm </a></th>
                    <th class="th-sm"><a href="?src=productTable&column=nameProduct&&sort=<?php echo $sort; ?>">Tên sản phẩm</a></th>
                    <th class="th-sm"><a href="?src=productTable&column=rate&&sort=<?php echo $sort; ?>">Giá sản phẩm</a></th>
                    <th class="th-sm">Hành động</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (isset($_POST["txtSearch"])) {
                    if (mysqli_num_rows($r) > 1) {
                        $danhSachSanPham = mysqli_fetch_all($r);
                        foreach ($danhSachSanPham as $item) {
                            echo '<tr>';
                            echo "<td> $item[0] </td>";
                            echo "<td> $item[1] </td>";
                            echo "<td>" . number_format($item[2], 0) . "</td>";
                            echo "<td>";
                            echo "<a href='?action=update&id=$item[0]'>Thay đổi</a> | ";
                            echo "<a href='?action=delete&id=$item[0]&&name=$item[1]'>Xóa</a>";
                            echo "</td>";
                            echo '</tr>';
                        }
                    } else {
                        $danhSachSanPham = mysqli_fetch_row($r);
                        echo '<tr>';
                        echo "<td>".$danhSachSanPham[0]."</td>";
                        echo "<td>" . $danhSachSanPham["nameProduct"]. "</td>";
                        echo "<td>" . number_format($danhSachSanPham[2], 0) . "</td>";
                        echo "<td>";
                        echo "<a href='?action=update&id=$danhSachSanPham[0]'>Thay đổi</a> | ";
                        echo "<a href='?action=delete&id=$danhSachSanPham[0]&&name=$danhSachSanPham[1]'>Xóa</a>";
                        echo "</td>";
                        echo '</tr>';
                    }
                } else {
                    $danhSachSanPham = mysqli_fetch_all($r);
                    foreach ($danhSachSanPham as $item) {
                        echo '<tr>';
                        echo "<td> $item[0] </td>";
                        echo "<td> $item[1] </td>";
                        echo "<td>" . number_format($item[2], 0) . "</td>";
                        echo "<td>";
                        echo "<a href='?action=update&id=$item[0]'>Thay đổi</a> | ";
                        echo "<a href='?action=delete&id=$item[0]&&name=$item[1]'>Xóa</a>";
                        echo "</td>";
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" style="text-align: center">
                        <div class="pagination">
                            <?php
                            if ($current_page > 1 && $total_page > 1) {
                                echo '<a href="index.php?src=productTable&page=' . ($current_page - 1) . '">Prev</a> | ';
                            }

                            for ($i = 1; $i <= $total_page; $i++) {
                                if ($i == $current_page) {
                                    echo '<span>' . $i . '</span> |';
                                } else {
                                    echo '<a href="index.php?src=productTable&page=' . $i . '">' . $i . '</a> | ';
                                }
                            }

                            if ($current_page < $total_page && $total_page > 1) {
                                echo '<a href="index.php?src=productTable&page=' . ($current_page + 1) . '">Next</a>';
                            }
                            ?>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>
</div>
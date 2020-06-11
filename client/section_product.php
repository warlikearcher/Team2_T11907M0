<?php
include_once (__DIR__ . "\..\config\database\connectDB.php");

//pagiantion 
$record_per_page = 9;
$page = '';
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    settype($page, "int");
} else {
    $page = 1;
}

$start_from = ($page - 1) * $record_per_page;
require (__DIR__ . "\..\config\model\load.php");
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class="second-menu">
    <div class="container">
        <div class="row">
            <!-- Left Section-->

            <div class="col-md-3 padding-0">
                <!-- Start menu list-->
                <div class="menu-container">
                    <div class="menu-inside">
                        <ul class="nav-area">
                            <!-- List 1-->
                            <li><a  href="?ref=laptop">Laptop</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>
                                <div class="sub-nav padding-0">
                                    <div class="sub-menu grid-container">
                                        <div class="line-1 grid-item item1">
                                            <h3>Laptop theo hãng</h3>
                                            <ul>
                                                <li><a  href="?ref=laptopAsus">Asus</a></li>
                                                <li><a  href="?ref=laptopAcer">Acer</a></li>
                                                <li><a  href="?ref=laptopDell">Dell</a></li>
                                                <li><a  href="?ref=laptopHP">HP</a></li>
                                                <li><a  href="?ref=laptopLenovo">Lenovo</a></li>
                                                <li><a  href="?ref=laptopMSI">MSI</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item2">
                                            <h3>Giá khoảng từ</h3>
                                            <ul>
                                                <li><a  href="?ref=laptop10">Dưới 10 triệu</a></li>
                                                <li><a  href="?ref=laptop1020">Từ 10 triệu đến 20 triệu</a></li>
                                                <li><a  href="?ref=laptop2040">Từ 20 triệu đến 40 triệu</a></li>
                                                <li><a  href="?ref=laptop40h">Trên 40 triệu</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-3 grid-item item3">
                                            <h3>Dựa vào CPU</h3>
                                            <ul>
                                                <li><a  href="?ref=laptopInteli3">Intel core i3</a></li>
                                                <li><a  href="?ref=laptopInteli5">Intel core i5</a></li>
                                                <li><a  href="?ref=laptopInteli7">Intel core i7</a></li>
                                                <li><a  href="?ref=laptopInteli9">Intel core i9</a></li>
                                                <li><a  href="?ref=laptopAMD3">AMD Ryzen 3</a></li>
                                                <li><a  href="?ref=laptopAMD5">AMD Ryzen 5</a></li>
                                                <li><a  href="?ref=laptopAMD7">AMD Ryzen 7</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--End list 1 --> 

                            <!--List 2 -->
                            <li><a  href="?ref=keyboard">Bàn phím</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>
                                <div class="sub-nav">
                                    <div class="sub-menu">
                                        <div class="line-1 grid-item item1">
                                            <h3>Bàn phím Gaming</h3>
                                            <ul>
                                                <li><a  href="?ref=keyboardRazer">Razer</a></li>
                                                <li><a  href="?ref=keyboardLogitech">Logitech</a></li>
                                                <li><a  href="?ref=keyboardSteel">SteelSerie</a></li>
                                                <li><a  href="?ref=keyboardEDra">E-Dra Serie</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item2">
                                            <h3>Bàn phím thường</h3>
                                            <ul>
                                                <li><a  href="?ref=keyboardCommon">Common</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End list 2 -->

                            <!--List 3 -->
                            <li><a  href="?ref=mainboard">MainBoard</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>
                                <div class="sub-nav">
                                    <div class="sub-menu">
                                        <div class="line-1 grid-item item1">
                                            <h3>Theo nhà sản xuất</h3>
                                            <ul>
                                                <li><a  href="?ref=mainboardAsus">Asus</a></li>
                                                <li><a  href="?ref=mainboardAcer">Acer</a></li>
                                                <li><a  href="?ref=mainboarDell">Dell</a></li>
                                                <li><a  href="?ref=mainboardMSI">MSI</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item2">
                                            <h3>Theo thông tin</h3>
                                            <ul>
                                                <li><a  href="?ref=mainboardIntel">MainBoard Intel</a></li>
                                                <li><a  href="?ref=mainboardAMD">MainBoard AMD </a></li>
                                                <li><a  href="?ref=mainboardSlot">Number ram slot</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <!-- End list 3 -->

                            <!--List 4-->
                            <li><a  href="?ref=cpu">CPU</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>
                                <div class="sub-nav">
                                    <div class="sub-menu">
                                        <div class="line-1 grid-item item1">
                                            <h3>Dựa vào phiên bản</h3>
                                            <ul>
                                                <li><a  href="?ref=CPUAMD">AMD</a></li>
                                                <li><a  href="?ref=CPUIntel">Intel</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item2">
                                            <h3>Dựa vào giá</h3>
                                            <ul>
                                                <li><a  href="?ref=CPU2">Dưới 2 triệu</a></li>
                                                <li><a  href="?ref=CPU26">Từ 2 đến 6 triệu</a></li>
                                                <li><a  href="?ref=CPU6h">Trên 6 triệu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- End list 4 -->

                            <!-- List 5-->
                            <li><a  href="?ref=pccase">Thùng PC</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>
                                <div class="sub-nav">
                                    <div class="sub-menu">
                                        <div class="line-1 grid-item item1">
                                            <h3>Phân loại theo hãng</h3>
                                            <ul>
                                                <li><a  href="?ref=pccaseCorsair">Corsair</a></li>
                                                <li><a  href="?ref=pccaseThermaltake">Thermaltake</a></li>
                                                <li><a  href="?ref=pccaseXigmatek">Xigmatek</a></li>
                                                <li><a  href="?ref=pccaseNZXT">NZXT</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item2">
                                            <h3>Phân loại theo giá</h3>
                                            <ul>
                                                <li><a  href="?ref=pccase1">Dưới 1 triệu</a></li>
                                                <li><a  href="?ref=pccase13">Từ 1 đến 3 triệu</a></li>
                                                <li><a  href="?ref=pccase3h">Trên 3 triệu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--End list 5 -->

                            <!--List 6 -->
                            <li><a  href="?ref=radiator">Tản nhiệt</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>
                                <div class="sub-nav">
                                    <div class="sub-menu">
                                        <div class="line-1 grid-item item1">
                                            <h3>Theo giá</h3>
                                            <ul>
                                                <li><a  href="?ref=radiatorRazer">Razer</a></li>
                                                <li><a  href="?ref=radiatorLogitech">Logitech</a></li>
                                                <li><a  href="?ref=radiatorSteelSerie">SteelSerie</a></li>
                                                <li><a  href="?ref=radiatorEDra">E-Dra Serie</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--End list 6 -->

                            <!--List 7 -->
                            <li><a  href="?ref=ram">Ram</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>
                                <div class="sub-nav">
                                    <div class="sub-menu">
                                        <div class="line-1 grid-item item1">
                                            <h3>Theo hãng</h3>
                                            <ul>
                                                <li><a  href="?ref=ramCorsair">Corsair</a></li>
                                                <li><a  href="?ref=ramGSkill">G Skill</a></li>
                                                <li><a  href="?ref=ramGalax">Galax</a></li>
                                                <li><a  href="?ref=ramKing">King</a></li>
                                                <li><a  href="?ref=ramTeamgroup">Teamgroup</a></li>
                                                <li><a  href="?ref=ramPatriot">Patriot</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item2">
                                            <h3>Theo giá</h3>
                                            <ul>
                                                <li><a  href="?ref=ram1">Dưới 1 triệu</a></li>
                                                <li><a  href="?ref=ram12">Từ 1 đến 2 triệu</a></li>
                                                <li><a  href="?ref=ram24">Từ 2 đến 4 triệu</a></li>
                                                <li><a  href="?ref=ram4h">Trên 4 triệu</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item3">
                                            <h3>Theo GB</h3>
                                            <ul>
                                                <li><a  href="?ref=ram4GB">4GB</a></li>
                                                <li><a  href="?ref=ram8GB">8GB</a></li>
                                                <li><a  href="?ref=ram16GB">16GB</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--End list 7 -->

                            <!--List 8 -->
                            <li><a  href="?ref=speak">Loa</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>

                            </li>
                            <!--End list 8 -->

                            <!--List 9 -->
                            <li><a  href="?ref=graphics">Graphics</a><span class="glyphicon" id="icon-menu-open">&#xe080;</span>
                                <div class="sub-nav">
                                    <div class="sub-menu">
                                        <div class="line-1 grid-item item1">
                                            <h3>Theo hãng</h3>
                                            <ul>
                                                <li><a  href="?ref=graphicsAsus">Asus</a></li>
                                                <li><a  href="?ref=graphicsGalax">Galax</a></li>
                                                <li><a  href="?ref=graphicsGigabyte">Gigabyte</a></li>
                                                <li><a  href="?ref=graphicsMSI">MSI</a></li>
                                                <li><a  href="?ref=graphicsPalit">Palit</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item2">
                                            <h3>Theo card</h3>
                                            <ul>
                                                <li><a  href="?ref=graphicsNVIDIA">NVIDIA</a></li>
                                                <li><a  href="?ref=graphicsGeForce">GeForce</a></li>
                                                <li><a  href="?ref=graphicsRadeon">Radeon</a></li>
                                            </ul>
                                        </div>
                                        <div class="line-2 grid-item item3">
                                            <h3>Giá khoảng từ</h3>
                                            <ul>
                                                <li><a  href="?ref=graphics1">Dưới 5 triệu</a></li>
                                                <li><a  href="?ref=graphics13">Từ 5 đến 10 triệu</a></li>
                                                <li><a  href="?ref=graphics3h">Trên 10 triệu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!--End list 9 -->
                        </ul>
                    </div>
                </div>
                <!-- End menu list-->
            </div>
            <!-- End left section-->
            <!-- Right Section-->
            <div class="col-md-9 padding-0">
                <div class="col-sm-6 right-ct-list padding-0">
                    <!--Start Sort bar-->
                    <div class="sort-bar">
                        <div class="click-sort">
                            <form action="">
                                <!--Sort A-Z -->
                                <div class="sort-content" >
                                    <a href="?sortby=sortAZ"><input type="button" value="A -> Z" name="sort"></a>
                                </div>
                                <!--End Sort A-Z -->

                                <!-- Sort price Low-hight-->
                                <div class="sort-content">
                                    <a href="?sortby=sortLowHight"><input type="button" value=" Giá Thấp -> Cao " name="sort"></a>
                                </div>
                                <!--End sort price Low-Height -->

                                <!--Sort Hight-low -->
                                <div class="sort-content">
                                    <a href="?sortby=sortHightLow"><input type="button" value="Giá Cao -> Thấp" name="sort"></a>
                                </div>
                                <!--End sort Hight-low -->
                            </form>
                        </div>
                    </div>
                    <!-- End Sort bar-->

                    <!-- Start Display product-->
                    <div class="grid-container">

                        <?php foreach ((array) $rows as $values) : ?>
                            <?php require (__DIR__ . "\..\config\model\load_image.php"); ?>
                            <div class="grid-item">
                                <div class="block_item height">
                                    <ul class="item-inf padding-0">
                                        <li>
                                            <figure>

                                                <a class="item-img" href="product_info.php?id=<?php echo $values['idProduct']; ?>"><img src="image/Image_Product/<?php echo $image_link_1; ?>   " alt="Image Product"></a>
                                                <a class="add-card-btn" href="cart.php?id=<?php echo $values['idProduct']; ?>"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>
                                                <figcaption >
                                                    <div class="name-pr">
                                                        <h4 class="item-title"><a href="product.html"><?php echo $values['nameProduct']; ?></a></h4>
                                                    </div>

                                                    <div class="span-price">
                                                        <span class="item-price"><?php echo $values['rate']; ?></span><span
                                                            class="item-price-del"><del>23000000</del></span>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                        </li>
                                    </ul> 
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- End display product-->

                    <!-- Start pagination-->
                    <div class="pagination-container" align ="center">
                        <?php
                        $page_query = "SELECT * FROM $tableName ORDER BY idProduct";
                        $page_result = mysqli_query($link, $page_query);
                        $total_records = mysqli_num_rows($page_result);
                        $total_pages = ceil($total_records / $record_per_page);
                        $start_loop = $page;
                        $difference = $total_pages - $page;
                        if ($difference <= 2) {
                            $start_loop = $total_pages - 2;
                        }
                        $end_loop = $start_loop + 1;
                        if ($page > 1) {
                            echo "<a href='product.php?ref=" . $ref . "&page=1'>First</a>";
                            echo "<a href='product.php?ref=" . $ref . "&page=" . ($page) . "'><<</a>";
                        }
                        for ($i = $start_loop + 1; $i <= $end_loop + 1; $i++) {
                            echo "<a href='product.php?ref=" . $ref . "&page=" . $i . "'>" . $i . "</a>";
                            echo "  ";
                        }
                        if ($page <= $end_loop) {
                            echo "<a href='product.php?ref=" . $ref . "&page=" . ($page + 1) . "'>>></a>";
                            echo "<a href='product.php?ref=" . $ref . "&page=" . $total_pages . "'>Last</a>";
                        }
                        ?>

                    </div>
                    <!-- End pagiantion-->
                </div>            
            </div>
            <!-- End right section-->
        </div>
    </div></div>
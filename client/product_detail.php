<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id_table = substr($id, 0, 1);
$nameTable = '';
switch ($id_table) {
    case "1":
        $nameTable = 'tbgraphicslist';
        break;
    case "2":
        $nameTable = 'tbradiatorslist';
        break;
    case "3":
        $nameTable = 'tbcpulist';
        break;
    case "4":
        $nameTable = 'tblaptoplist';
        break;
    case "5":
        $nameTable = 'tbspeaklist';
        break;
    case "6":
        $nameTable = '';
//            $sql = "select * from $aa where idProduct = '$id' ";
        break;
    case "7":
        $nameTable = 'tbpccaselist';
        break;
    case "8":
        $nameTable = '';
//            $sql = "select * from $aa where idProduct = '$id' ";
        break;
    case "9":
        $nameTable = 'tbramlist';
        break;
    case "10":
        $nameTable = '';
//            $sql = "select * from $aa where idProduct = '$id' ";
        break;
}
$sql = "select * from $nameTable where idProduct = '$id'; ";
$sql_same = "select idProduct,nameProduct,rate,photo1 from $nameTable";

$result = mysqli_query($link, $sql);
$result_same = mysqli_query($link, $sql_same);

$row = mysqli_fetch_assoc($result);
$row_same = mysqli_fetch_all($result_same);
?>
<div class="container main">
    <div class="product-detail">
        <div class="container">
            <div class="product-detail-left">
                <div class="sp-loading">
                    <img src="image/Screen_Image/sp-loading.gif">
                    Loading Images
                </div>
                <div class="sp-wrap">
                    <a href="<?php echo $row["photo1"]; ?>"><img src="<?php echo $row["photo1"]; ?>" alt=""></a>
                    <a href="<?php echo $row["photo2"]; ?>"><img src="<?php echo $row["photo2"]; ?>" alt=""></a>
                    <a href="<?php echo $row["photo3"]; ?>"><img src="<?php echo $row["photo3"]; ?>" alt=""></a>
                    <a href="<?php echo $row["photo4"]; ?>"><img src="<?php echo $row["photo4"]; ?>" alt=""></a>
                    <a href="<?php echo $row["photo5"]; ?>"><img src="<?php echo $row["photo5"]; ?>" alt=""></a>
                </div>
            </div>
            <div class="product-detail-right">
                <form method="post" action="?view=detail&action=add&&id=<?php echo $row["idProduct"]; ?>">
                    <input type="hidden" name="quantity" value="1" class="form-control" />
                    <input type="hidden" name="hidden_name" value="<?php echo $row["nameProduct"]; ?>" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row["rate"]; ?>" />
                    <h3><?php echo $row["nameProduct"]; ?><br><small>Code : <?php echo $row["idProduct"]; ?></small></h3>
                    <h5><b>Giá :</b> <i class="fas fa-dollar-sign"></i> <?php echo number_format($row["rate"],0); ?> đ</h5>
                    <h5><b>Thương Hiệu : </b> <?php echo ($manufacturer = isset($row["manufacturer"])?$row["manufacturer"]:'Chưa cập nhật'); ?></h5>
                    <br>
                    <a class="buynow" name="add_to_cart" href="?view=detail&action=add&&id=<?php echo $row["idProduct"]; ?>">
                        <span class="fa fa-shopping-cart"></span>
                        <input type="submit" name="add_to_cart" value="Thêm vào giỏ hàng">
                    </a>
                </form>


            </div>
            <div class="product-detail-feature">
                <h3>Thông số</h3>
                <p>Brand : Apple</p>
                <p>Bluetooth : Yes</p>
                <p>Wifi : Yes</p>
                <p>Webcam : Yes</p>
                <p>Weight : 1.37kg</p>
                <p>Dimensions : 304x212x14.9mm</p>
                <p>Speakers : Yes</p>
                <p>Microphone : Yes</p>
                <p>Laptop Processor Code : 7360U</p>
                <p>Laptop Processor Code : 2</p>
                <p>Laptop Catch Size : 4M</p>
                <p>Laptop Processor : Intel Core i7</p>
                <p>Laptop Processor Frequency : 3.6 GHz</p>
                <p>Laptop OS : MacOS sierra</p>
                <p>Laptop Series : Macbook Pro</p>
                <p>Laptop Purpose : Work, Multimedia</p>
                <p>Laptop Keyboard Backlight : Yes</p>
                <p>Laptop Hard Drive Capacity : 128GB</p>
                <p>Laptop Hard Drive Type : SSD</p>
                <p>Laptop RAM : 8GB</p>
                <p>Laptop Screen Size : 13.3 inch</p>
                <p>Laptop Screen Resolution : 2560x1600</p>
                <p>Laptop LED Backlight : Yes</p>
                <p>Matrix Type of Laptop Screen : IPS</p>
                <p>Laptop Screen Cover : Glossy</p>
                <p>Widescreen Laptop Screen : Yes</p>
                <p>Video Card Manufacturer : Inter Iris Plus Graphics</p>
                <p>Notebook Graphics Card Type : Inter</p>
            </div>
        </div>
    </div>


    <div class="news">
        <div class="container">
            <h3>Sản phẩm tương tự</h3>
            <div class="owl-carousel">
                <?php foreach ($row_same as $item): ?>
                    <div class="item">
                        <img src="<?php echo $item[3]; ?>">
                        <div class="name-pr">
                            <h4 class="item-title"><a href="?view=detail&id=<?php echo $item[0]; ?>"><?php echo $item[1]; ?></a></h4>
                        </div>
                        <div class="span-price">
                            <span class="item-price"><?php echo number_format($item[2],0); ?> đ</span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>


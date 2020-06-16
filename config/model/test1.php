<?php
session_start();
include_once (__DIR__ . "..\config\database\connectDB.php");
require (__DIR__ . "..\config\model\load_random.php");
$result_a = mysqli_query($link, $sql_a);
$result_b = mysqli_query($link, $sql_b);
$result_test = mysqli_query($link, "select * from tblaptoplist  limit 0,4;");
$rows_test = mysqli_fetch_all($result_test, MYSQLI_ASSOC);
$rows_a = mysqli_fetch_all($result_a, MYSQLI_ASSOC);
$rows_b = mysqli_fetch_all($result_b, MYSQLI_ASSOC);
$acc = "";
if (isset($_GET['user'])) {
    $acc = $_GET['user'];
}
switch ($acc) {
    case "1":
        header('location: /../client/user/index.php');
        break;
    case "0":
        header('location: /../client/admin/index.php');
        break;
    default :
        break;
}

if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Sản phẩm đã có trong giỏ hàng")</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET["idProduct"],
            'item_name' => $_POST["nameProduct"],
            'item_price' => $_POST["rate"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Đã xóa sản phẩm")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }
    }
}
?>
<div style="clear:both"></div>
<br />
<h3>Order Details</h3>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
        </tr>
        <?php
        if (!empty($_SESSION["shopping_cart"])) {
            $total = 0;
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                ?>
                <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_quantity"]; ?></td>
                    <td>$ <?php echo $values["item_price"]; ?></td>
                    <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                    <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                </tr>
                <?php
                $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
            ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                <td></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>

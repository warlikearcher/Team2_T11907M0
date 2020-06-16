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
//add cart
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
        }
    } else {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
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
            }
        }
    }
}
//end add cart
//add promo code
$code_promo_n = "";
$promo_code = "";
$promo_alert = false;
if (isset($_POST["add_promo"])) {
    $code_promo_n = $_POST["promo_code"];
}
switch ($code_promo_n) {
    case 'newbie':
        $promo_code = 0.2;
        break;
    case 'saigon':
        $promo_code = 0.1;
        break;
    default :
        $promo_alert = true;
        break;
}
//end add promo code

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="library/css/bootstrap.min.css">
        <link rel="stylesheet" href="library/css/style.css">
        <link rel="stylesheet" href="library/css/font-awesome.min.css">
        <script src="library/js/jquery.min.js"></script>
        <script src="library/js/jquery-3.2.1.min.js"></script>
        <script src="library/js/bootstrap.min.js"></script>
        <title>TechMedia</title>
        <script>
            function showHint(str) {
                if (str.length == 0) {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "call_ajax.php?search=" + str, true);
                    xmlhttp.send();
                }
            }

        </script>

    </head>
    <body>
        <?php include 'client/view/header.php'; ?>

        <main>
            <?php
            if (!isset($_GET['view'])) {
                $view = "";
            } else {
                $view = $_GET['view'];
            }
            switch ($view) {
                case "home":
                    include 'client/view/vertical_menu.php';
                    include 'client/view/section.php';
                    break;

                case "review":
                    include 'client/view/review.php';
                    break;
                case "product":
                    include 'client/section_product.php';
                    break;
                case "product_inf":
                    include 'client/section_product_inf.php';
                    break;
                case "promo":
                    include 'client/view/promo.php';
                    break;
                case "contact":
                    include 'client/view/contact.php';
                    break;
                case "user":
                    include 'client/view/user.php';
                    break;
                case "cart":
                    include 'client/view/cart_view.php';
                    break;
                case "payment":
                    include 'client/view/payment.php';
                    break;
                default :
                    include 'client/view/vertical_menu.php';
                    include 'client/view/section.php';
                    break;
            }
            ?>
        </main>

        <?php
        include 'client/view/footer.php';
        ?>
    </body> 
</html>

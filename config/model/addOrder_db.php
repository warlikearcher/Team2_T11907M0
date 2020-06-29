<?php

session_start();
include_once (__DIR__ . "\..\database\connectDB.php");
//var_dump($_SESSION["cart_item"]);
//if (isset($_SESSION["cart_item"])) {
//    echo '<pre>';
//    var_dump($_SESSION["cart_item"]);
//    echo '</pre>';
//}

if (isset($_POST["btnSubmit"]) == FALSE) {
    header("location: index.php?view=home");
    exit();
}
if (isset($_SESSION["cart_item"])) {
    do {
        $randomID = uniqid();
        $sql = "select count( distinct order_id ) = 1 as matched from orders WHERE order_id = '$randomID';";
//                    echo $sql;
        $result = mysqli_query($link, $sql);
        $rows = mysqli_fetch_row($result);
    } while ($rows[1] = 0);
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $total_final = $_POST["total_final"];
//    insert 
    $into = "insert into orders(order_id,name,phone,email,street,city,state,zip_code,total_price) values ('$randomID','$firstname','$phone','$email','$address','$city','$state','$zip','$total_final');";
//    echo $into;
    $r = mysqli_query($link, $into);
    if ($r == TRUE) {
//        $last_id = mysqli_insert_id($link);
//        echo 'Last id:' . $last_id;
        foreach ($_SESSION["cart_item"] as $item) {
            $item_price = $item["quantity"] * $item["price"];
            $idProduct = $item["code"];
            $quantity = $item["quantity"];
            $name = $item["name"];
            $into1 = "insert into orders_item(order_id,idProduct,quantity,list_price,nameProduct) values ('$randomID','$idProduct',$quantity,$item_price,'$name');";

            $r = mysqli_query($link, $into1);

//            var_dump($r);
//            echo $into1;
        }

        unset($_SESSION["cart_item"]);
        header("Location: finishOrder.php?idOrder=$randomID");
    }
}
//echo 'Đã có lỗi xảy ra khi xác nhận đơn hàng !!';


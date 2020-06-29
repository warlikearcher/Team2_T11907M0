<?php

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
    $into = "insert into orders(name,phone,email,street,city,state,zip_code,total_price) values ('$firstname','$phone','$email','$address','$city','$state','$zip','$total_final');";
    $r = mysqli_query($link, $into);
    if ($r == TRUE) {
        $last_id = mysqli_insert_id($link);
        foreach ($_SESSION["cart_item"] as $item) {
            $item_price = $item["quantity"] * $item["price"];
            $idProduct = $item["code"];
            $quantity = $item["quantity"];
            $name = $item["name"];
            $into = "insert into orders(order_id,idProduct,quantity,list_price,nameProduct) values ('$last_id','$idProduct','$quantity','$item_price','$name');";
            $r = mysqli_query($link, $into);
        }
        unset($_SESSION["cart_item"]);
        header("Location: index.php?view=home");
    }
    echo 'Đã có lỗi xảy ra khi xác nhận đơn hàng !!';
}



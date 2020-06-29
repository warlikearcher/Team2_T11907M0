<?php

if (!isset($_GET['ref'])) {
    $ref = "";
} else {
    $ref = $_GET['ref'];
}
switch ($ref) {
    case "home":
        header("location: ../index.php");
        break;
    case "review":
        include 'review.php';
        break;
    case "payment":
        include 'payment.php';
        break;
    case "promo":
        include 'promo.php';
        break;
    case "contact":
        include 'contact.php';
        break;
    case "user":
        include 'user.php';
        break;
    case "cart":
        include 'cart.php';
        break;
}

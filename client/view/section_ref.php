<?php

if(!isset($_GET['ref']))
{$ref="";}
else{$ref=$_GET['ref'];}

switch ($ref){
    case "home":
        include 'client/store/index.php';
        break;
    case "review":
        include 'client/client_search_DB.php';
        break;
    case "payment":
        include 'client/store/payment.php';
        break;
    case "promo":
        include 'client/Cart/promo.php';
        break;
    case "contact":
        include 'contact.php';
        break;
    case "user":
        include 'client/blog/user.php';
        break;
    case "cart":
        include 'client/blog/cart.php';
        break;
}
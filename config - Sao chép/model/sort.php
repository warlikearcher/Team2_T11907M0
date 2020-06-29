<?php
if(isset($_GET['sortby'])){
    $sortby =  $_GET['sortby'];
    
}
else{
    $sortby = null;
}
$orderSort = "";
switch ($sortby){
    case "":
        $orderSort = ' `nameProduct` ASC';
        break;
    case "";
        $orderSort = ' `rate` ASC';
        break;
    case "";
        $orderSort = ' `rate` DESC';
        break;
    default :
        $orderSort = 'idProduct';
        break;
}

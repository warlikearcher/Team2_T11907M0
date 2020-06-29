<?php
//$sql = "select SUM(total_price) as totalAll from `orders`";
//Get day-month-years
$dayEnd = date("d");
$dayFrom = $dayEnd - 7;

$montEnd = date("m");
$montFrom = $montEnd - 1;

$yearEnd = date("Y");
$yearFrom = $yearEnd - 1;

//End day-mon-years
//
//query
$queryDay = "SELECT SUM(total_price) as totalAll FROM orders WHERE DAY(order_date) BETWEEN $dayFrom AND $dayEnd";
$queryMonth = "SELECT SUM(total_price) as totalAll FROM orders WHERE MONTH(order_date) BETWEEN $montFrom AND $montEnd";
$queryYear = "SELECT SUM(total_price) as totalAll FROM orders WHERE YEAR(order_date) BETWEEN $yearFrom AND $yearEnd";
//end query

//run query
$resultDay = mysqli_query($link, $queryDay);
$resultMont = mysqli_query($link, $queryMonth);
$resultYear = mysqli_query($link, $queryYear);

//end run

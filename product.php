<?php
include_once(__DIR__ . "..\config\database\connectDB.php");
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
        <script src="library/js/bootstrap.min.js"></script>
        <title>TechMedia</title>
    </head>
    <body>
        <?php include 'client/view/header.php';
        
        include 'client/section_product.php';
        
        include 'client/view/footer.php'; ?>
    </body> 
</html>

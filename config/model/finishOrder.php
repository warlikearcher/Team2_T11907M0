<!DOCTYPE html>
<?php
include_once (__DIR__ . "\..\database\connectDB.php");
if (isset($_GET['idOrder'])) {
    $post = TRUE;
    $randomID = $_GET['idOrder'];
} else {
    $post = FALSE;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../library/css/bootstrap.min.css">
        <title></title>
        <style>
            body{
                font-family: 'Times New Roman', Times, serif;
                color:black;
                background: rgb(235, 235, 235);
                margin: 0;
                padding: 0!important;
                min-height: 100%;
                height: 100%;

            }
            .box-text{
                margin-left: 20%;
                margin-right: 20%;
                margin-top: 10%;

                border: solid #33CC33;
                border-radius: 10px;
                background-color: #33CC33;

                box-shadow: 10px 15px grey;

                text-align: center;
            }
            a{
                color: black;
                font-size: 20px;
            }
            a:hover{
                color: blue;
            }
        </style>
    </head>

    <body>
        <?php if ($post == TRUE) { ?>
            <div class="container">
                <div class="box-text">
                    <h1>Cảm ơn bạn đã đặt hàng</h1>
                    <h3>Mã đơn hàng của bạn là: <span style="color: blue"><?php echo $randomID; ?></span></h3>
                    <i>Vui lòng lưu lại để truy vấn khi cần thiết</i>
                    <br>
                    <a href="../../index.php">Quay lại Trang Chủ (<span id="time"></span>)</a> 
                </div>
                
            </div>
            <script>
                function startTimer(duration, display) {
                    var timer = duration, seconds;
                    setInterval(function () {
                        seconds = parseInt(timer % 60, 10);
                        seconds = seconds < 10 ? "0" + seconds : seconds;

                        display.textContent = seconds;

                        if (--timer < 0) {
                            window.location.href = '../../index.php';
                        }
                    }, 1000);
                }

                window.onload = function () {
                    var twenty = 15,
                            display = document.querySelector('#time');
                    startTimer(twenty, display);
                };
            </script>
        <?php } if ($post == FALSE) { ?>
            <div class="container">
                <div class="box-text">
                    <h1>Bạn chưa đặt hàng</h1>
                    <br>
                    <a href="../../index.php">Quay lại Trang Chủ (<span id="time"></span>)</a> 
                </div>

            </div>
            <script>
                function startTimer(duration, display) {
                    var timer = duration, seconds;
                    setInterval(function () {
                        seconds = parseInt(timer % 60, 10);
                        seconds = seconds < 10 ? "0" + seconds : seconds;

                        display.textContent = seconds;

                        if (--timer < 0) {
                            window.location.href = '../../index.php';
                        }
                    }, 1000);
                }

                window.onload = function () {
                    var twenty = 1,
                            display = document.querySelector('#time');
                    startTimer(twenty, display);
                };
            </script>
        <?php } ?>

    </body>
</html>

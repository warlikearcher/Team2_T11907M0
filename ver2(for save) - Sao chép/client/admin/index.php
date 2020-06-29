<?php
include_once './controllers/database/connectDB.php';
include './config/model/take_money.php';
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
        <link href="library/css/main.css" rel="stylesheet">
        <link href="library/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Admins page</title>
        <script>
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    //theme: "light2",
                    title: {
                        text: "Salmon Production - 1997 to 2006"
                    },
                    axisX: {
                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true
                        }
                    },
                    axisY: {
                        title: "in Metric Tons",
                        crosshair: {
                            enabled: true,
                            snapToDataPoint: true
                        }
                    },
                    toolTip: {
                        enabled: false
                    },
                    data: [{
                            type: "area",
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                        }]
                });
                chart.render();

            }
        </script>
    </head>
    <body>
        <div id="wrapper" class="padding-0">
            <div class="container-fluid padding-0 ">
                <div class="row no-gutters">
                    <div class="col-md-2 padding-0 dashBoard-List">
                        <?php
                        include (__DIR__ . "../view/dashBoard.php");
                        ?>
                    </div>
                    <div class="col-md-10 padding-0 tab-list">
                        <?php
                        include (__DIR__ . "../view/tab.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="../admin/library/js/copllapsible.js"></script>
        <script src="../admin/library/js/canvasjs.min.js.js"></script>
    </body>
</html>

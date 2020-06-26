<?php
$sql = "select SUM(total) as totalAll from `tborderlist`";
$result = mysqli_query($link, $sql);

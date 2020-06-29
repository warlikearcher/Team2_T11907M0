
<?php
//Start get ref
if (!isset($_GET['ref'])){
    $ref = "";
} else {
    $ref = $_GET['ref'];
}
$sql = "";
$tableName = "";
switch ($ref) {
//    ref laptop
    case "laptop":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page ;";
        break;
    case "laptopAsus":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where nameProduct like '%Asus%' order by idProduct  LIMIT $start_from, $record_per_page ;";
        break;
    case "laptopAcer":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where nameProduct like '%Acer%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopDell":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where nameProduct like '%Dell%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopHP":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where nameProduct like '%HP%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopLenovo":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where nameProduct like '%Lenovo%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptop10":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where rate < 10000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptop1020":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where rate between 10000000 and 20000000 order by idProduct  LIMIT $start_from, $record_per_page ;";
        break;
    case "laptop2040":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where rate between 20000000 and 40000000 order by idProduct  LIMIT $start_from, $record_per_page ;";
        break;
    case "laptop40h":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where rate > 40000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopInteli3":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where `CPU type` like '%i3%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopInteli5":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where `CPU type` like '%i5%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopInteli7":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where `CPU type` like '%i7%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopInteli9":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where `CPU type` like '%i9%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopAMD3":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where `CPU type` like '%Ryzen 3%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopAMD5":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where `CPU type` like '%Ryzen 5%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "laptopAMD7":
        $tableName = "tblaptoplist";
        $sql = "select * from $tableName where `CPU type` like '%Ryzen 7%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
//    end ref laptop
//    
//    start ref ram
    case "ram":
        $tableName = "tbramlist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ramCorsair":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where nameProduct like '%Corsair%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ramGSkill":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where nameProduct like '%GSkill%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ramGalax":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where nameProduct like '%Galax%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ramKing":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where nameProduct like '%King%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ramTeamgroup":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where nameProduct like '%TeamGroup%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ramPatriot":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where nameProduct like '%Patriot%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ram1":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where rate < 1000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ram12":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where rate between 1000000 and 2000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ram24":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where rate between 2000000 and 4000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ram4h":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where rate > 4000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ram4GB":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where `Capacity (GB)` like '%4%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ram8GB":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where `Capacity (GB)` like '%8%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "ram16GB":
        $tableName = "tbramlist";
        $sql = "select * from $tableName where `Capacity (GB)` like '%16%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
//    end ref ram
//    
//    start ref mainboard
    case "mainboard":
        $tableName = "tbmainboardlist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "mainboardAsus":
        $tableName = "tbmainboardlist";
        $sql = "select * from $tableName where nameProduct like '%Asus%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "mainboardAcer":
        $tableName = "tbmainboardlist";
        $sql = "select * from $tableName where nameProduct like '%Acer%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "mainboarDell":
        $tableName = "tbmainboardlist";
        $sql = "select * from $tableName where nameProduct like '%Dell%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "mainboardMSI":
        $tableName = "tbmainboardlist";
        $sql = "select * from $tableName where nameProduct like '%MSI%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "mainboardIntel":
        $tableName = "tbmainboardlist";
        $sql = "select * from $tableName where `technology` like '%Intel%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "mainboardAMD":
        $tableName = "tbmainboardlist";
        $sql = "select * from $tableName where `technology` like '%AMD%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
//    end ref mainboard
//    
//    start ref cpu
    case "cpu":
        $tableName = "tbcpulist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "CPUAMD":
        $tableName = "tbcpulist";
        $sql = "select * from $tableName where `Manufacturer` like '%AMD%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "CPUIntel":
        $tableName = "tbcpulist";
        $sql = "select * from $tableName where `Manufacturer` like '%Intel%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "CPU2":
        $tableName = "tbcpulist";
        $sql = "select * from $tableName where rate < 2000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "CPU26":
        $tableName = "tbcpulist";
        $sql = "select * from $tableName where rate between 2000000 and 6000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "CPU6h":
        $tableName = "tbcpulist";
        $sql = "select * from $tableName where rate > 6000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
//    end ref cpu
//    
//    start ref pccase
    case "pccase":
        $tableName = "tbpccaselist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "pccaseCorsair":
        $tableName = "tbpccaselist";
        $sql = "select * from $tableName where nameProduct like '%Corsair%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "pccaseThermaltake":
        $tableName = "tbpccaselist";
        $sql = "select * from $tableName where nameProduct like '%Thermaltake%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "pccaseXigmatek":
        $tableName = "tbpccaselist";
        $sql = "select * from $tableName where nameProduct like '%Xigmatek%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "pccase1":
        $tableName = "tbpccaselist";
        $sql = "select * from $tableName where rate < 1000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "pccase13":
        $tableName = "tbpccaselist";
        $sql = "select * from $tableName where rate between 1000000 and 3000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "pccase3h":
        $tableName = "tbpccaselist";
        $sql = "select * from $tableName where rate > 3000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
//    end ref pccase
    
//    start ref radiator
    case "radiator":
        $tableName = "tbradiatorslist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "radiatorRazer":
        $tableName = "tbradiatorslist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "radiatorLogitech":
        $tableName = "tbradiatorslist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "radiatorSteelSerie":
        $tableName = "tbradiatorslist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "radiatorEDra":
        $tableName = "tbradiatorslist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
//    end ref radiator
    
//    start ref speak
    case "speak":
        $tableName = "tbspeaklist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    
//    end ref speak
    
//    start ref graphics
    case "graphics":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphicsAsus":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where nameProduct like '%Asus%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphicsGalax":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where nameProduct like '%Galax%' ";
        break;
    case "graphicsGigabyte":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where nameProduct like '%Gigabyte%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphicsMSI":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where nameProduct like '%MSI%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphicsPalit":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where nameProduct like '%Palit%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphicsNVIDIA":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where `Graphic processor` like '%NVIDIA%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphicsGeForce":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where `Graphic processor` like '%GeForce%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphicsRadeon":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where `Graphic processor` like '%Radeon%' order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphics5":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where rate < 5000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphics510":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where rate between 5000000 and 10000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
    case "graphics10h":
        $tableName = "tbgraphicslist";
        $sql = "select * from $tableName where rate > 10000000 order by idProduct  LIMIT $start_from, $record_per_page;";
        break;
//    end ref graphics
    default :
        header("Location: error502.php");
        exit();
}
//end get ref
?>
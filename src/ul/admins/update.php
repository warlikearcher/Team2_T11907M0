<?php
$sql = '';
$nameTable = '';
if (isset($_GET['id']) && $_GET['id'] != NULL) {
    $id = $_GET['id'];
    $id_table = substr($_GET['id'], 0, 1);
    switch ($id_table) {
        case "1":
            $nameTable = 'tbgraphicslist';
            $sql = "select * from tbgraphicslist where idProduct = '$id' ";
            break;
        case "2":
            $nameTable = 'tbradiatorslist';
            $sql = "select * from tbradiatorslist where idProduct = '$id' ";
            break;
        case "3":
            $nameTable = 'tbcpulist';
            $sql = "select * from tbcpulist where idProduct = '$id' ";
            break;
        case "4":
            $nameTable = 'tblaptoplist';
            $sql = "select * from tblaptoplist where idProduct = '$id' ";
            break;
        case "5":
            $nameTable = 'tbspeaklist';
            $sql = "select * from tbspeaklist where idProduct = '$id' ";
            break;
        case "6":
            $nameTable = '';
//            $sql = "select * from $aa where idProduct = '$id' ";
            break;
        case "7":
            $nameTable = 'tbpccaselist';
            $sql = "select * from tbpccaselist where idProduct = '$id' ";
            break;
        case "8":
            $nameTable = '';
//            $sql = "select * from $aa where idProduct = '$id' ";
            break;
        case "9":
            $nameTable = 'tbramlist';
            $sql = "select * from tbramlist where idProduct = '$id' ";
            break;
        case "10":
            $nameTable = '';
//            $sql = "select * from $aa where idProduct = '$id' ";
            break;
    }
}

$res = mysqli_query($link, $sql);
$dataResult = mysqli_query($link, "SELECT COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH 
    FROM information_schema.columns 
    WHERE table_schema = 'project' 
    AND table_name = '$nameTable';");
$dataResult_alone_name = mysqli_query($link, "SELECT COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH 
    FROM information_schema.columns 
    WHERE table_schema = 'project' 
    AND table_name = '$nameTable' 
    AND COLUMN_NAME = 'nameProduct' ;");
$dataResult_alone_rate = mysqli_query($link, "SELECT COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH 
    FROM information_schema.columns 
    WHERE table_schema = 'project' 
    AND table_name = '$nameTable' 
    AND COLUMN_NAME = 'rate' ;");
?>
<div class="update-body">
    <div class="update-top-bar padding-0">
        <div class="banner-top top-content-update shadow">
            <div class="card-body">
                <div class=" no-gutters align-content-center">
                    <div class="card-font">
                        <h1>Cập nhật sản phẩm</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $getdata = mysqli_fetch_row($res);
    $dataColumn_all = mysqli_fetch_all($dataResult);
    $dataColumn_alone_name = mysqli_fetch_row($dataResult_alone_name);
    $dataColumn_alone_rate = mysqli_fetch_row($dataResult_alone_rate);
    ?>
    <div class="row row-update" style="width: 100%;max-width: 100%;margin: 0;">
        <div class="left-content shadow">
            <h3>Cập nhật thông tin sản phẩm</h3>
            <div class="left-data-content">
                <?php ?>
                <form action="run_update.php">
                    <input type="hidden" name="hidden_id" value="<?php echo $id; ?>" />
                    <input type="hidden" name="hidden_tableName" value="<?php echo $nameTable; ?>" />
                    <h4>Tên cũ: <span><?php echo $getdata[2]; ?></span></h4>
                    <i>Chú ý kiểu dữ liệu: <span><?php echo $dataColumn_alone_name[1]; ?></span> - Số kỹ tự tối đa: <span><?php echo $dataColumn_alone_name[2]; ?></span></i>
                    <br>
                    <input type="text" id="adb" name="txtName" placeholder="Tên sản phẩm mới" required>
                    <h4>Giá cũ: <span><?php echo $getdata[3]; ?></span></h4>
                    <i>Chú ý kiểu dữ liệu: <span><?php echo $dataColumn_alone_rate[1]; ?></span> - Số kỹ tự tối đa: <span><?php echo $dataColumn_alone_rate[2]; ?></span></i>
                    <br>
                    <input type="text" id="emailid" name="txtRate" placeholder="Nhập giá mới" required >
                    <br>
                    <br>
                    <div class="submit-update">
                        <button class="btn btn-success buttonSubmit" name="btnOK">Cập nhật thông tin sản phẩm</button>
                    </div>
                </form>
            </div>
        </div>
        <!--        <div class="col-md-6 right-content shadow">
                    <h3>Cập nhật thông số sản phẩm</h3>
                    <div class="right-data-content">
        <?php foreach ($dataColumn_all as $value) : ?>
                            <form>
                                <i>Chú ý kiểu dữ liệu: <span><?php echo $value[1]; ?></span> - Số kỹ tự tối đa: <span><?php echo $value[2]; ?></span></i>
                                <br>
                                <input type="text" id="adb" name="firstname" placeholder="Thông tin mới" >
                            </form>
        <?php endforeach; ?>
                    </div>
                    <div>
                        <button class="btn btn-success">Cập nhật thông số sản phẩm</button>
                    </div>
                </div>-->
    </div>
    <!--    <div>
            <button class="btn btn-success">Cập nhật tất cả</button>
        </div>-->

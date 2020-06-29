<?php
$sql = '';
$nameTable = '';
if (isset($_GET['id']) && $_GET['id'] != NULL) {
    $id = $_GET['id'];
    $id_table = substr($_GET['id'], 0, 1);
    $name = $_GET['name'];
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
?>
<div class="delete-body">
    <div class="delete-top-bar padding-0">
        <div class="banner-top top-content-delete shadow">
            <div class="card-body">
                <div class=" no-gutters align-content-center-delete">
                    <div class="card-font">
                        <h1>Bạn thật sự muốn xóa sản phẩm:</h1>
                        <h2><?php echo $name; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <form action="run_delete.php">
                <input type="hidden" name="hidden_id" value="<?php echo $id; ?>" />
                <input type="hidden" name="hidden_tableName" value="<?php echo $nameTable; ?>" />
                <button class="btn btn-danger btnSubmit_delete">Xác nhận xóa</button>
            </form>

        </div>


    </div>
</div>
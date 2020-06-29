<?php
$codeOrder = '';
if (isset($_POST['btnSubmit_Search_Order'])) {
    $codeOrder = $_POST['codeOrder'];
    $query = "SELECT * FROM (select orders.order_id,orders.name,orders_item.nameProduct,orders.total_price,orders.order_date from orders INNER JOIN orders_item on orders.order_id = orders_item.order_id) AS r WHERE r.order_id = '$codeOrder';";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_all($result, MYSQLI_BOTH);
}
?>

<div class="container" style="min-height: 100%">
    <div class="box-text" style="margin-left: 30%;margin-right: 30%;">
        <form method="POST">
            <h1>Nhập mã đơn hàng: </h1>
            <input style="height: 3rem;width: 100%" id="codeOrder" name="codeOrder" value="<?php echo $codeOrder; ?>">
            <button class="btn btn-success" name="btnSubmit_Search_Order" id="btnSubmit_Search_Order">Xác nhận</button>
        </form>

    </div>
    <?php if (isset($row)) { ?>

    <table class="table table-sm">
            <thead>
                <tr>
                    <th class="th-sm">ID đơn hàng </th>
                    <th class="th-sm">Tên người đặt hàng</th>
                    <th class="th-sm">Danh sách sản phẩm đơn hàng</th>
                    <th class="th-sm">Tổng giá</th>
                    <th class="th-sm">Ngày đặt</th>
                </tr>
            </thead>
            <tbody>
            <td><?php echo $row[0]['order_id']; ?></td>
            <td><?php echo $row[0]['name']; ?></td>
            <td>
                <?php
                foreach ($row as $values) {
                    echo $values[2];
                    echo '<br>';
                }
                ?>
            </td>

            <td><?php echo number_format($row[0]['total_price'], 0); ?> VND</td>
            <td><?php echo date('M j Y g:i A', strtotime($row[0]['order_date'])); ?></td>
            </tbody>
        </table>
    <?php } ?>
</div>

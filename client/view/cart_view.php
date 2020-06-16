<div class="container">
    <div class="row row_cart">
    <div class="col-md-6 padding-1">
        <form id="formCart">
            <h3>Giỏ hàng</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Tên sản phẩm</th>
                        <th width="10%">Số lượng</th>
                        <th width="20%">Giá</th>
                        <th width="15%">Tổng</th>
                        <th width="5%"></th>
                    </tr>
                    <?php
                    if (!empty($_SESSION["cart"])) {
                        $total = 0;
                        foreach ($_SESSION["cart"] as $keys => $values) {
                            ?>
                            <tr>
                                <td><?php echo $values["item_name"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td>$ <?php echo $values["item_price"]; ?></td>
                                <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"],0); ?></td>
                                <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                            </tr>
                            <?php
                            $totals = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Tổng đơn hàng</td>
                            <td align="right">$ <?php echo number_format($totals,0); ?></td>
                            <td></td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
        </form>
        <div class="button_submit_cart">
            <form method="post" action="">
                <div class="input_promo_code">
                    <h3>Nhập mã giảm giá:</h3>
                    <input class="promo_in" name="promo_code">
                    <button class=" btn-danger" name="add_promo" type="submit">Xác nhận</button>
                </div>
            </form>
            <?php if ($promo_alert == FALSE) { ?>
            <div class="total_pay">
                <form method="post">
                    <table class="table table-bordered">
                            <tr>
                                <th width="40%">Tổng đơn hàng sau khi nhập mã</th>
                            </tr>

                            <tr>
                                <th><?php echo number_format($total_promo = $totals - ($totals * $promo_code), 0); ?> đ</th>

                            </tr>


                        </table>
                </form>
                
            </div>
            <?php } ?>
            <?php if ($promo_alert == TRUE) { ?>
            <div class="total_pay">
                <form method="post">
                    <table class="table table-bordered">
                        <tr>
                            <th width="40%">Tổng đơn hàng</th>
                        </tr>

                        <tr>
                            <th><?php echo number_format($total_promo = $totals, 0); ?> đ</th>

                        </tr>


                    </table>
                </form>
                
            </div>
            
                    <?php } ?>
            <div class="button_sub">
                <form method="post" action="?view=payment">
                    <button class="btn btn-success" type="submit" name="submit_payment" value="Thanh Toán">Thanh Toán</button>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-6 img_cart">
        <div class="imgLeft">
            <img src="/TechMedia/image/Screen_Image/cart-list.png"/>
        </div>

    </div>
</div>
</div>





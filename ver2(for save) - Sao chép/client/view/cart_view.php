
<div class="container">
    <div class="row row_cart">
        <div class="col-md-6 padding-1">
            <?php
            if (isset($_SESSION["cart_item"])) {
            $total_price = 0;
            ?>
            <form id="formCart">
                <div>
                    <h3>Giỏ hàng</h3>
                    <a id="btnEmpty" href="index.php?action=empty">Xóa toàn bộ giỏ hàng</a>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="text-align:left;">Tên sản phẩm</th>
                            <th style="text-align:right;" >Số lượng</th>
                            <th style="text-align:right;">Giá tổng</th>
                            <th style="text-align:center;" >Xóa</th>
                        </tr>
                        <?php
                        foreach ($_SESSION["cart_item"] as $item) {
                        $item_price = $item["quantity"] * $item["price"];
                        ?>
                        <tr>
                            <td><?php echo $item["name"]; ?></td>
                            <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                            <td  style="text-align:right;"><?php echo "$ " . number_format($item_price, 0); ?></td>
                            <td style="text-align:center;"><a href="index.php?action=remove&id=<?php echo $item["code"]; ?>" class="fa fa-close">Xóa</a></td>
                        </tr>
                        <?php
                        $total_price += ($item["price"] * $item["quantity"]);
                        }
                        ?>


                    </table>
                    <?php
                    } else {
                    ?>
                    <div class="no-records">Giỏ hàng của bạn trống</div>
                    <?php
                    }
                    ?>
                </div>
            </form>
            <div class="button_submit_cart">
                <form method="post" action="">
                    <div class="input_promo_code">
                        <h3>Nhập mã giảm giá:</h3>
                        <input class="promo_in" name="promo_code" value="<?php echo $code_promo_n; ?>">
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
                                    <th><?php echo number_format($total_promo = $total_price - ($total_price * $promo_code), 0); ?> đ</th>

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
                                    <th><?php echo number_format($total_promo = $total_price, 0); ?> đ</th>

                                </tr>


                            </table>
                        </form>

                    </div>

                <?php } ?>
                <div class="button_sub">
                    <?php 
                    if($promo_alert==TRUE){
                        $total_promo = $total_price;
                    }
                    else{
                        $total_promo = $total_price - ($total_price * $promo_code);
                    }
                    ?>
                    <form method="post" action="?view=payment">
                        <input class="total_pro" type="hidden" name="total_pro" value="<?php echo $total_promo; ?>">
                        <button class="btn btn-success" type="submit" name="submitCart" id="submitCart" value="Thanh Toán">Thanh Toán</button>
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





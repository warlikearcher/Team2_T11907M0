<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="paycontainer">
                <form action="/action_page.php">

                    <div class="row">
                        <div class="col-50">
                            <h3>Địa chỉ giao hàng</h3>
                            <label for="fname"><i class="fa fa-user"></i> Tên đầy đủ</label>
                            <input type="text" id="fname" name="firstname" placeholder="Nguyễn Văn Trần Hòa">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="mmosuper25@gmail.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Địa chỉ</label>
                            <input type="text" id="adr" name="address" placeholder="590 CMT8">
                            <label for="city"><i class="fa fa-institution"></i> Thành phố</label>
                            <input type="text" id="city" name="city" placeholder="Hồ Chí Minh city">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="state">Tỉnh</label>
                                    <input type="text" id="state" name="state" placeholder="Hồ Chí Minh">
                                </div>
                                <div class="col-md-6">
                                    <label for="zip">Mã bưu điện (ZIP code)</label>
                                    <input type="text" id="zip" name="zip" placeholder="63000">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Thanh toán</h3>
                            <label for="fname">Chấp nhận thanh toán qua</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-paypal" style="color:navy;"></i>
                            </div>
                            <label for="cname">Tên chủ thẻ</label>
                            <input type="text" id="cname" name="cardname" placeholder="Nguyễn Văn Trần Hòa">
                            <label for="ccnum">Số thẻ</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Ngày lập</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="May">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="expyear">Năm lập</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col-md-6">
                                    <label for="cvv">Mã xác nhận VCC</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Hàng đính kèm hóa đơn 
                    </label>
                    <input type="submit" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <div class="payment_area">
                <h2>Tổng đơn hàng: </h2>
                <table class="table-bordered">
                    <?php
                    if (!empty($_SESSION["cart"])) {
                        $total = 0;
                        foreach ($_SESSION["cart"] as $keys => $values) {
                            $totals = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                        ?>
                        <span><?php echo number_format($totals, 0); ?> đ</span>
                        <?php
                    }
                    ?>
                </table>
                <h3> Mã giảm giá đã dùng: <span><?php echo $code_promo_n ?></span></h3>
                <hr>
                <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
            </div>
        </div>
    </div>
</div>

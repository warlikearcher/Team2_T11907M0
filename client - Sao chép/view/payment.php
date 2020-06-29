
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
                            <label for="email"><i class="fa fa-phone"></i> Số điện thoại</label>
                            <input type="text" id="phone" name="phone" placeholder="0123456789" pattern="[0-9]{10}">
                            <label for="email"><i class="fa fa-address-book-o"></i> Địa chỉ đường</label>
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
                            <label for="fname">Chấp nhận thanh toán</label>
                            <div class="btn_payment_icon">
                                <div class="icon-container">
                                    <i class="fa fa-cc-paypal"  id="paypalBtn" style="color:navy;"></i>
                                </div>
                                <div class="icon-payment">
                                    <i class="fa" id="momoBtn"><img src="/TechMedia/image/Screen_image/logo-momo.jpg"/></i>
                                </div>
                                <div class="payment">
                                    <i class="fa " style="color:navy;" id="noPayBtn">Khi nhận hàng</i>
                                </div>
                            </div>

                            <div class="pay-info-paypal" id="paypalForm">
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
                            <div id="momoForm">
                                <div>
                                    <img src="../image/Screen_Image/fast.png">
                                </div>
                                <div>
                                    <input>
                                </div>
                            </div>
                            <div id="noPay">Bạn đã chọn thanh toán khi nhận hàng</div>

                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Hàng đính kèm hóa đơn 
                    </label>
                    <input type="submit" value="Xác nhận đặt hàng" class="btn">
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <div class="payment_area">
                <?php
                if (isset($_SESSION["cart_item"])) {
                    $total_price = 0;
                    ?>
                    <h2>Tổng đơn hàng: </h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th style="text-align:left;">Tên sản phẩm</th>
                            </tr>
                            <?php
                            foreach ($_SESSION["cart_item"] as $item) {
                                $item_price = $item["quantity"] * $item["price"];
                                ?>
                                <tr>
                                    <td><?php echo $item["name"]; ?></td>
                                </tr>
                                <?php
                                $total_price += ($item["price"] * $item["quantity"]);
                            }
                            ?>


                        </table>
                        <?php
                    }
                    ?>
                </div>
                <hr>
                <h2>Tổng tiền cần thanh toán: <span class="price" style="color:red"><b><?php echo number_format($final_total,0); ?></b></span></h2>
            </div>
        </div>
    </div>
    <!--SELECT * FROM orders LEFT JOIN orders_item ON orders.order_id = orders_item.order_id-->
</div>
<script>
    $(document).ready(function () {
        $("#paypalForm").toggle();
        $("#momoForm").toggle();
        $("#noPay").toggle();
        $("#paypalBtn").click(function () {
            $("#paypalForm").toggle();
            $("#momoForm").hide();
            $("#noPay").hide();
        });
        $("#momoBtn").click(function () {
            $("#paypalForm").hide();
            $("#momoForm").toggle();
            $("#noPay").hide();
        });
        $("#noPayBtn").click(function () {
            $("#paypalForm").hide();
            $("#momoForm").hide();
            $("#noPay").toggle();
        });
    });
</script>
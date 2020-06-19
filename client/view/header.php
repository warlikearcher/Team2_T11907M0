
<!--Start Header-->
<div class="web-header">
    <div class="container">
        <div id="main-header">
            <div class="col-md-3 col-sm-2 col-xs-12" id="left-header">
                <div id="logo">
                    <a href="#"><img src="image/Screen_Image/Logoweb.png" alt="TechMedia"></a>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12" id="center-header">
                <div class="clearfix" id="center-header-top">
                    <ul>
                        <li id="fb"><a href="https://www.facebook.com/TechMedia-107704110962045/" target="_blank"><span class="fa fa-facebook ">acebook</span></a></li>
                        <li id="tw"><a href="https://twitter.com/MinelrealEric" target="_blank"><span class="fa fa-twitter">Twitter</span></a></li>
                        <li id="gmail"><a href="mailto:warlikearcher@gmail.com" target="_blank"><span class="fa fa-google">mail</span></a></li>
                        <li id="promo"><a href="#" target="_blank"><span class="glyphicon glyphicon-gift">Khuyến mãi</span></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix" id="center-header-search">
                    <div class="wrap">
                        <form action="search.php" method="get">
                            <div class="bk padding-0">
                                <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)" class="textbox padding-0" placeholder="What you need?" tabindex="1">
                                <button type="button" class="textbox-clr padding-0" id="textbox-clr" onClick="lightbg_clr()"></button>
                                <button type="submit" class="query-submit" tabindex="2"><i class="fa fa-search" style="color:#727272; font-size:20px"></i></button>
                                <div id="txtHint"></div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-5 col-xs-12" id="right-header">
                <div class="delivery">
                    <img src="image/Screen_Image/fast.png" alt="giaohanglogo">
                    <span id="rg-column-1">GIAO HÀNG TOÀN QUỐC</span>
                    <span id="rg-column-2">Vận chuyển thần tốc</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Finish Header-->
<!--Start menu-->
<div class="nav-menu navbar navbar-inverse">
    <div class="container" >
        <div class="row">
            <div class="col-md-3 left-menu ">
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <i class="fa fa-list-ul"></i>
                        <span>Danh mục sản phẩm</span>
                    </div>
                </div>

            </div>
            <div class="col-md-6 center-menu" >
                <div>
                    <ul class="nav navbar-nav" id="list-nav">
                        <li class="menu-list"><a href="?view=home">Trang chủ</a></li>
                        <li class="menu-list"><a href="?view=review">Giới thiệu</a></li>
                        <li class="menu-list"><a href="?view=payment">Thanh Toán</a></li>
                        <li class="menu-list"><a href="?view=promo">Khuyến mãi</a></li>
                        <li class="menu-list"><a href="?view=contact">Liên hệ</a></li>
                        <li class="menu-list"><a href="?view=user">Tài khoản</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 right-menu">
                <?php
                if (!empty($_SESSION["cart_item"])) {
                    $cart_count = count(array_keys($_SESSION["cart_item"]));
                    ?>
                    <ul class="nav navbar-nav cart_div" id="list-nav">
                        <li class="cart" id="buttonCart"><a href="?view=cart">Giỏ Hàng <span class="fa fa-shopping-cart"></span><span>(<?php echo $cart_count; ?>)</span></a></li>
                    </ul>

                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>
<!--Finish Menu-->



<!--Start list Hot-->
<div class="popular-list">
    <div class="container">
        <h3>
            <span>Sản phẩm hot</span>
        </h3>
        <div class="row">
            <?php foreach ((array) $rows_test as $values) : ?>
                <div class="col-sm-3" id="item">
                    <div class="block_item height">
                        <div class="item-inf">
                            <form method="POST" action="index.php?action=add&id=<?php echo $values["idProduct"]; ?>">
                                <ul class="padding-0">
                                        <li>
                                            <figure>
                                                <input type="hidden" name="quantity" value="1"/>
                                                <input type="hidden" name="nameProduct" value="<?php echo $values["nameProduct"]; ?>" />
                                                <input type="hidden" name="rate" value="<?php echo $values["rate"]; ?>" />
                                                <a class="item-img"  href="?view=detail&id=<?php echo $values['idProduct']; ?>"><img src="../../image/Screen_Image/testposition.jpg" alt="Image Product"></a>
                                                
                                                <a class="add-card-btn" name="add_to_cart" href="index.php?action=add&id=<?php echo $values['idProduct']; ?>"><span class="fa fa-shopping-cart"></span><input type="submit" name="add_to_cart" value="Thêm vào giỏ hàng"></a>
                                                <figcaption >
                                                    <div class="name-pr">
                                                        <h4 class="item-title"><a href="#"><?php echo $values['nameProduct']; ?></a></h4>
                                                    </div>

                                                    <div class="span-price">
                                                        <span class="item-price"><?php echo number_format($values["rate"],0) ; ?></span><span
                                                            class="item-price-del"><del><?php echo number_format($del_price= $values['rate']+ round($values['rate']*0.2,-4),0) ; ?></del></span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        <li>
                                    </ul>
                            </form>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<!--End list Hot-->

<!--Start list popular-->
<div class="list-i">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 left-ct-list">
                <h2 class="title-list-i">
                    <span class="left-title">Linh kiện</span>
                </h2>
                <div class="grid-container">
                    <?php foreach ((array) $rows_a as $values) : ?>
                        <form method="POST" action="index.php?action=add&id=<?php echo $values["idProduct"]; ?>">
                            <div class="grid-item">
                                <div class="block_item height">
                                    <ul class="item-inf padding-0">
                                        <li>
                                            <figure>
                                                <input type="hidden" name="quantity" value="1" class="form-control" />
                                                <input type="hidden" name="hidden_name" value="<?php echo $values["nameProduct"]; ?>" />
                                                <input type="hidden" name="hidden_price" value="<?php echo $values["rate"]; ?>" />
                                                <a class="item-img" href="?view=detail&id=<?php echo $values['idProduct']; ?>"><img src="#" alt="Image Product"></a>

                                                <a class="add-card-btn" name="add_to_cart" href="index.php?action=add&id=<?php echo $values['idProduct']; ?>"><span class="fa fa-shopping-cart"></span><input type="submit" name="add_to_cart" value="Thêm vào giỏ hàng"></a>
                                                <figcaption >
                                                    <div class="name-pr">
                                                        <h4 class="item-title"><a href="#"><?php echo $values['nameProduct']; ?></a></h4>
                                                    </div>

                                                    <div class="span-price">
                                                        <span class="item-price"><?php echo number_format($values["rate"],0) ; ?></span><span
                                                            class="item-price-del"><del><?php echo number_format($del_price= $values['rate']+ round($values['rate']*0.2,-4),0) ; ?></del></span>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                        </li>
                                    </ul> 
                                </div>
                            </div>
                        </form>

                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-sm-6 right-ct-list">
                <h2 class="title-list-i">
                    <span class="right-title">Laptop và PC</span>
                </h2>
                <div class="grid-container">
                    <?php foreach ((array) $rows_b as $values) : ?>
                        <form method="POST" action="index.php?action=add&id=<?php echo $values["idProduct"]; ?>">
                            <div class="grid-item">
                                <div class="block_item height">
                                    <ul class="item-inf padding-0">
                                        <li>
                                            <figure>
                                                <input type="hidden" name="quantity" value="1" class="form-control" />
                                                <input type="hidden" name="hidden_name" value="<?php echo $values["nameProduct"]; ?>" />
                                                <input type="hidden" name="hidden_price" value="<?php echo $values["rate"]; ?>" />
                                                <a class="item-img" href="?view=detail&id=<?php echo $values['idProduct']; ?>"><img src="#" alt="Image Product"></a>

                                                <a class="add-card-btn" name="add_to_cart" href="index.php?action=add&id=<?php echo $values['idProduct']; ?>"><span class="fa fa-shopping-cart"></span><input type="submit" name="add_to_cart" value="Thêm vào giỏ hàng"></a>
                                                <figcaption >
                                                    <div class="name-pr">
                                                        <h4 class="item-title"><a href="#"><?php echo $values['nameProduct']; ?></a></h4>
                                                    </div>

                                                    <div class="span-price">
                                                        <span class="item-price"><?php echo number_format($values["rate"],0) ; ?></span><span
                                                            class="item-price-del"><del><?php echo number_format($del_price= $values['rate']+ round($values['rate']*0.2,-4),0) ; ?></del></span>
                                                    </div>
                                                </figcaption>
                                            </figure>

                                        </li>
                                    </ul> 
                                </div>
                            </div>
                        </form>

                    <?php endforeach;
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
<!--End popular -->
<!--Start news-->
<div class="list-ii">
    <div class="container">
        <h2 class="news-title">
            <span>Tin tức</span>
        </h2>
        <div class="news-wrap">
            <div class="news-list">
                <div class="grid-container">
                    <div class="item">
                        <a target="_self" href="index.php?view=new&id=" class="news-content">
                            <figure>
                                <div class="news-item-img">
                                    <picture>
                                        <img src="#" alt="#">
                                    </picture>
                                </div>
                                <figcaption>
                                    <time>$date</time>
                                    <h3>$title-news</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a target="_self" href="#" class="news-content">
                            <figure>
                                <div class="news-item-img">
                                    <picture>
                                        <img src="#" alt="#">
                                    </picture>
                                </div>
                                <figcaption>
                                    <time>$date</time>
                                    <h3>$title-news</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a target="_self" href="#" class="news-content">
                            <figure>
                                <div class="news-item-img">
                                    <picture>
                                        <img src="#" alt="#">
                                    </picture>
                                </div>
                                <figcaption>
                                    <time>$date</time>
                                    <h3>$title-news</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a target="_self" href="#" class="news-content">
                            <figure>
                                <div class="news-item-img">
                                    <picture>
                                        <img src="#" alt="#">
                                    </picture>
                                </div>
                                <figcaption>
                                    <time>$date</time>
                                    <h3>$title-news</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a target="_self" href="#" class="news-content">
                            <figure>
                                <div class="news-item-img">
                                    <picture>
                                        <img src="#" alt="#">
                                    </picture>
                                </div>
                                <figcaption>
                                    <time>$date</time>
                                    <h3>$title-news</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="item">
                        <a target="_self" href="#" class="news-content">
                            <figure>
                                <div class="news-item-img">
                                    <picture>
                                        <img src="#" alt="#">
                                    </picture>
                                </div>
                                <figcaption>
                                    <time>$date</time>
                                    <h3>$title-news</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End news-->

<br>
<br>
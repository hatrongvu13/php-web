<?php
// print_r($list);
?>
<div class="product-sec1">
    <h3 class="heading-tittle"><?php ?></h3>
    <div class="row">
        <?php
        for ($i=0; $i < count($list) ; $i++) {?>
            <div class="col-md-4 product-men" style="height: 320px">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="../../admin_mvc/public/images/product/<?php echo $list[$i]['image'];?>" alt="" style="width: 166px;height: 150px">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="singgle.php?id=<?php echo $list[$i]['id'];?>" class="link-product-add-cart">Xem >></a>
                            </div>
                        </div>
                        <?php if ($list[$i]['promotion_price']!=0) {?>
                            <span class="product-new-top">SALE</span>
                        <?php }?>
                    </div>
                    <div class="item-info-product ">
                        <h4>
                            <a href="singgle.php?id=<?php echo $list[$i]['id'];?>"><?php echo $list[$i]['product_name']?></a>
                        </h4>
                        <div class="info-product-price">
                            <?php if ($list[$i]['promotion_price']!=0) { ?>
                                <span class="item_price"><?php echo $list[$i]['promotion_price'];?></span>
                                <del><?php echo $list[$i]['unit_price'];?></del>
                            <?php }else{?>
                                <span class="item_price"><?php echo $list[$i]['unit_price'];?></span>
                            <?php }?>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="config.php" method="post">
                                <fieldset>
                                    Sl: <input type="text" name="total" value="1" class="entry value">
                                    <button class="btn btn-primary">Thêm vào giỏ hàng</button>
                                    <input type="hidden" name="type" value="add" />
                                    <input type="hidden" name="id" value="<?php echo $list[$i]['id']; ?>" />
                                    <input type="hidden" name="return_url" value="<?php echo $current_url;?>">
                                    <!-- <input type="hidden" name="total" value="1"> -->
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <div class="clearfix">
    </div>
</div>

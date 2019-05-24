<?php for ($i=0; $i <count($bot) ; $i++) { ?>
<li>
<div class="w3l-specilamk">
    <div class="speioffer-agile">
        <a href="single.html">
            <img src="../../admin_mvc/public/images/product/<?php echo $bot[$i]['image'];?>" alt="" style="width: 109px;height: 150px">
        </a>
    </div>
    <div class="product-name-w3l">
        <h4>
            <a href="singgle.php?id=<?php echo $bot[$i]['id'];?>"><?php echo $bot[$i]['product_name'];?></a>
        </h4>
        <div class="w3l-pricehkj">
            <h6><?php echo $bot[$i]['promotion_price'];?></h6>
            <p>Giá cũ:<?php echo $bot[$i]['unit_price'];?></p>
        </div>
        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
            <form action="checkout.php" method="post">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="add" value="1" />
                    <input type="hidden" name="business" value=" " />
                    <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                    <input type="hidden" name="amount" value="220.00" />
                    <input type="hidden" name="discount_amount" value="1.00" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="hidden" name="return" value=" " />
                    <input type="hidden" name="cancel_return" value=" " />
                    <input type="submit" name="submit" value="Mua hàng" class="button" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
</li>
<?php } ?>
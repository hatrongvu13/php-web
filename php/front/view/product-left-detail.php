<?php for ($i=0; $i <count($left) ; $i++) { ?>
<div class="special-sec1">
    <div class="col-xs-4 img-deals">
        <img src="../../admin_mvc/public/images/product/<?php echo $left[$i]['image'];?>" alt="" style="width: 70px;height: 70px">
    </div>
    <div class="col-xs-8 img-deal1">
        <h3><?php echo $left[$i]['product_name'];?></h3>
        <a href="singgle.php?id=<?php echo $left[$i]['id'];?>"><?php echo $left[$i]['unit_price'];?></a>
    </div>
    <div class="clearfix"></div>
</div>
<?php } ?>
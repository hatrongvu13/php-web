<?php
// print_r($_SESSION["products"]);
if(isset($_SESSION["products"])){
    // print_r($_SESSION["products"]);
?>
<div class="checkout-right">
    <h4>Giỏ hàng của bạn có:
        <span><?php echo count($_SESSION['products']);?></span>
    </h4>
    <div class="table-responsive">
        <table class="timetable_sub">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Tên sản phẩm</th>

                    <th>Giá</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($_SESSION['products'] as $v) { ?>
                <tr class="rem1">
                    <td class="invert-image">
                        <a href="single2.html">
                            <img src="../../../admin_mvc/public/images/product/<?php echo $v['img'];?>" alt=" " class="img-responsive" style="width: 170px;height: 170px">
                        </a>
                    </td>
                    <td class="invert">
                        <div class="quantity">
                            <div class="quantity-select">
                            <form action="config.php" method="post">
                            <fieldset>
                                <input type="text" name="total" value="<?php echo $v['total'];?>" class="entry value">
                                <button class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                <input type="hidden" name="type" value="add" />
                                <input type="hidden" name="id" value="<?php echo $v['id']; ?>" />
                            </fieldset>
                        </form>
                            </div>
                        </div>
                    </td>
                    <td class="invert"><?php echo $v['name'];?></td>
                    <td class="invert"><?php echo $v['price']* $v['total'];?></td>
                    <td class="invert">
                        <div class="rem">
                            <!-- <div class="close1"> </div> -->
                            <a href="config.php?removep=<?php echo $v['id'];?>"><div class="close1"> </div></a>
                        </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<div class="checkout-left">
    <div class="address_form_agile">
        <div>
        <form action="product.php" method="post">
            <fieldset>
                <button class="btn btn-primary">Tiếp tục mua hàng</button>
                <input type="hidden" name="actiondb" value="db" />
            </fieldset>
        </form>
        </div>
    <div class="checkout-right-basket">
        <form action="pay.php" method="post">
            <fieldset>
                <button class="btn btn-success btn-lg">Đặt hàng <span class="fa fa-hand-o-right" aria-hidden="true"></span></button>
                <input type="hidden" name="actiondb" value="db" />
            </fieldset>
        </form>
        <!-- <a href="pay.php">Đặt hàng
            
        </a> -->
    </div>
</div>
<?php }else{
    echo '<div align="center">Giỏ hàng của bạn đang trống</div>';
} ?>
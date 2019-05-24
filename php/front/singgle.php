<?php 
include('./controller/c_product.php');
include("includes/head.php");
include("includes/header.php");
$id = "";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
$c_product = new Laydulieu;
$chitiet = $c_product->Lay_san_pham_theo_id($id);
?>
<?php foreach ($chitiet as $ct) { ?>
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<a href="index.php" class="btn btn-success">Quay lại</a>
			<h3 class="tittle-w3l">Chi tiết sản phẩm
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<div class="thumb-image">
							<img src="../admin_mvc/public/images/product/<?php echo $ct->anh ?>" style="width: 407px;height: 402px" class="img-responsive" alt=""> 
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3><?php echo $ct->ten ?></h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<?php if ($ct->giakm > 0) {?>
					<p>
						<span class="item_price"><?php echo $ct->giakm ?> vnd</span>
						<del><?php echo $ct->gia ?> vnd</del>
						<label>Miễn phí vận chuyển</label>
					</p>
				<?php }else {?>
					<p>
						<span class="item_price"><?php echo $ct->gia ?></span>
						<label>Miễn phí vận chuyển</label>
					</p>
				<?php } ?>
				<div class="product-single-w3l" style="padding: 20px">
					<?php if ($ct->mota == "") {?>
						<?php echo 'Không có mô tả'; ?>
					<?php }else { ?>
						<?php echo $ct->mota ?>
					<?php } ?>
				</div>
				<div class="occasion-cart">
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
			<div class="clearfix"> </div>
		</div>
	</div>
<?php } ?>
<?php 
include_once("includes/footer.php"); 
?>
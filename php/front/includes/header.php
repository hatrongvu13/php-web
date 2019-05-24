<body>
	<!-- header-bot-->
	<?php if (isset($_SESSION['user'])) {
		$show1 = "none";
		$show2 = "";
	}else{
		$show1 = "";
		$show2 = "none";
	}?>
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.php">
						<img src="source/images/logo.jpg" alt="" style="width: 200px;height: 85px">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
							<span class="fa fa-map-marker" aria-hidden="true"></span>Địa điểm shop</a>
						</li>
						<li>
							<!-- <a href="#" data-toggle="modal" data-target="#myModal1"> -->
								<a href="checkout.php">
									<span class="fa fa-cart-arrow-down" aria-hidden="true"></span>Chi tiết giỏ hàng
								</a>
							</li>
							<li>
								<span class="fa fa-phone" aria-hidden="true"></span>00099988877
							</li>
							<li style="display: <?php echo $show1; ?>">
								<a href="#" data-toggle="modal" data-target="#myModal1">
									<span class="fa fa-unlock-alt" aria-hidden="true"></span>Đăng nhập 
								</a>
							</li>
							<li style="display: <?php echo $show1; ?>">
								<a href="#" data-toggle="modal" data-target="#myModal2">
									<span class="fa fa-pencil-square-o" aria-hidden="true" ></span>Đăng ký
								</a>
							</li>
							<li style="display: <?php echo $show2; ?>;width: 300px">
								<span>Xin chào <?php echo $_SESSION['user'] ?></span>
								<form action="" method="post">
									<input type="submit" name="dangxuat" value="Đăng xuất" style="position: absolute; top: 1px;right: 0;background: #e03418; color: #fff; padding: 5px 10px; border-radius: 20px">
								</form>
								<?php if (isset($_POST['dangxuat'])) {
									session_unset();
								} ?>
							</li>
						</ul>
						<!-- //header lists -->
						<!-- search -->
						<div class="agileits_search">
							<form action="" method="post">
								<input name="Search" type="search" placeholder="Tìm kiếm sản phẩm" required="">
								<button type="submit" class="btn btn-default timkiem" name="timkiem" aria-label="Left Align">
									<span class="fa fa-search" aria-hidden="true"> </span>
								</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="top_nav_right">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<button class="w3view-cart" type="submit" name="submit" value="">
									<a href="#" data-toggle="modal" data-target="#Modalcart">
										<i class="fa fa-cart-arrow-down" ></i></a>
									</button>
								</div>
							</div>
							<!-- //cart details -->
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
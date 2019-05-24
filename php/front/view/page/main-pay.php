
<!-- //page -->
<!-- payment page-->
<?php 

$conn = mysqli_connect("localhost","root","","webthuongmai");
mysqli_set_charset($conn, 'UTF8');
$sql = "SELECT * FROM customer WHERE email = '" .$_SESSION['user']."'";
$recordset = mysqli_query($conn, $sql);
$num = mysqli_num_rows($recordset); 
if ($num > 0) {
	while ($row = mysqli_fetch_assoc($recordset)) {
		?>
		<div class="privacy">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Thanh toán
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
				<!-- //tittle heading -->
				<div class="checkout-right">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="save_cart_db.php" method="post" class="creditly-card-form agileinfo_form">
									<div class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Họ tên:</label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="<?php echo $row['c_name'] ?>">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">

													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Địa chỉ:</label>
															<input class="security-code form-control" Â· inputmode="numeric" type="text" name="address" placeholder="&#149;&#149;&#149;">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Số điện thoại</label>
													<input class="expiration-month-and-year form-control" type="text" name="phone" placeholder="SĐT">
												</div>
												<div class="controls">
													<label class="control-label">Hình thức thnah toán</label>
													<div class="swit-radio">
														<div class="check_box_one">
															<div class="radio_one">
																<label>
																	<input type="radio" name="radio" checked="" value="COD">
																	<i></i>COD</label>
																</div>
															</div>
															<div class="check_box_one">
																<div class="radio_one">
																	<label>
																		<input type="radio" name="radio" value="Chuyen khoan">
																		<i></i>Chuyển khoản</label>
																	</div>
																</div>
																<div class="check_box_one">
																	<div class="radio_one">
																		<label>
																			<input type="radio" name="radio" value="khac">
																			<i></i>Khác</label>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</div>
														</div>
														<input type="hidden" name="save" value="action">
														<button class="submit">
															<span>Hoàn thành</span>
														</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!--Plug-in Initialisation-->
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
	<!-- //payment page -->
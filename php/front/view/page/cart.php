
<div class="modal fade" id="Modalcart" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Giỏ hàng</h3>
                        <?php 
                        if(isset($_SESSION["products"])){
                            foreach ($_SESSION["products"] as $v) {
                            ?>
                            <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="rem1">
                                    <td class="invert-image">
                                        <a href="single2.html">
                                            <img src="../../../admin_mvc/public/images/product/<?php echo $v['img'];?>" alt=" " class="img-responsive" style="width: 150px;height: 150px">
                                        </a>
                                    </td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                    <span><?php echo $v['total'];?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert"><?php echo $v['price'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php } }else{
                            echo 'Giỏ hàng trống';
                        }?>
                            
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
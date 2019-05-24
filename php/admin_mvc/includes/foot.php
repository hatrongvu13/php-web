	<script src="public/vendors/js/vendor.bundle.base.js"></script>
	<script src="public/vendors/js/vendor.bundle.addons.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="public/js/off-canvas.js"></script>
	<script src="public/js/misc.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="public/js/dashboard.js"></script>
	<script src="public/ckeditor/ckeditor.js"></script>
	<script>
    CKEDITOR.replace( 'editor' );
	</script>
	<script>
		jQuery(document).ready(function($) {
			$(".timkiem").keyup(function(event) {
				var search = $(".timkiem").val();
				$.post('ajax.php',{data : search},function(data){
					$(".danhsach").html(data);
				});
			});
		});
	</script>
	<!-- End custom js for this page-->
</body>
</html>
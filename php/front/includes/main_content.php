<?php 
require('menu.php');
if(isset($slide)){
require($slide);
}
?>
<!-- top Products -->
<?php if(!isset($view)){?>
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Sản phẩm mới 
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <!-- sản phẩn bên trái -->
        <?php 
        require('product-left.php');
        ?>
        <!-- sản phẩm bên phải -->
        <?php 
        require('product-right.php');
        ?>
        
    </div>
</div>
<!-- //top products -->
<?php 
require('product-bot.php');
?>
<!-- //special offers -->
<?php }else{
    include($view);
} ?>
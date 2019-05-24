<!-- product right -->
<div class="agileinfo-ads-display col-md-9">
    <div class="wrapper danhsach">
        <!-- first section (nuts) -->
        <?php
        include('view/product-right-detail.php');
        ?>
    </div>
</div>
<?php if($sotrang > 1){
    ?>
    <div class="phantrang text-center">
        <div class="container">
          <ul class="pagination">
            <li class="page-item">
                <?php if($tranghientai > 1 && $sotrang >1){?>
                    <a class="page-link" href="index.php?<?php echo $trang; echo($tranghientai-1);?>" aria-label="Previous">

                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                <?php }?>
            </li>
            <?php for ($i=1; $i <=$sotrang ; $i++) {?>
                <li><a href="index.php?<?php echo $trang; echo($i);?>"><?php echo $i;?></a></li>
            <?php }?>
            <li class="page-item">
                <?php if ($tranghientai != $sotrang && $sotrang >1) {?>
                    <a class="page-link" href="index.php?<?php echo $trang; echo($tranghientai+1); ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                <?php }?>
            </li>
        </ul>
        <?php 
//   echo $tranghientai;
        ?>
    </div>
</div>
<?php
}?>

<!-- //product right -->
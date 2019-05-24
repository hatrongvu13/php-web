<?php
ini_set("display_errors",1);
include("controllers/c_product.php");
$c_hoa=new C_product();
$c_hoa->Hien_thi_san_pham(); 
?>
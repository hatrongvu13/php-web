<?php
ini_set("display_errors",1);
include("controllers/c_tin_tuc.php");
$c_tin_tuc=new C_tin_tuc;
$c_tin_tuc->Hien_thi_tin_tuc_theo_ma_tin_tuc();
?>
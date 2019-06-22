<?php
ini_set("display_errors",1);
include("controllers/c_khach_hang.php");
$c_khach_hang=new C_khach_hang();
$c_khach_hang->Them_khach_hang();
?>
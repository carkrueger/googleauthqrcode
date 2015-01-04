<?php 
include "phpqrcode.php5";
$url=$_GET["url"];
QRcode::png($url, false, QR_ECLEVEL_L, 6, 0, false ); 
?>

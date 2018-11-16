<?php
require_once('bitmex.php');

$bitmex = new my_bitmex('YOUR_API_KEY', 'YOUR_API_SECRET');

print_r($bitmex->fetch_ticker('XBTUSD'));
?>

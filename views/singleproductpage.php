<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 04/03/2016
 * Time: 19:58
 */

$produc = (empty($_GET ['product_id'])) ? '' :  $_GET['product_id'];
$product = $produc - 1;

echo "<div id='clicked-product'>";
echo "<h1>".$products[$product]['title']."</h1>";
echo "<img src=".$products[$product]['picture'].">";
echo "<p>".$products[$product]['price']."</p>";
echo "<div id='clicked-product-p'>";
echo "<p>".$products[$product]['product_info']."</p>";
echo "</div>";
echo "</div>";


?>

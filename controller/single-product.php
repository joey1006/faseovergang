<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 06/03/2016
 * Time: 22:10
 */

$products = array();

$sql = "SELECT * FROM products";
$result = $mysqli->query($sql);
while($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
//return $products;
?>
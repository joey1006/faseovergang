<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 06/03/2016
 * Time: 22:10
 */

// query om alles van de tabel products om te zetten in de variable $products

$products = array();

$sql = "SELECT * FROM products";
$result = $mysqli->query($sql);
while($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}
//return $products;
?>
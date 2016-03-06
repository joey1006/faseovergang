<?php
echo "<div id='random-featured'>";
echo "<h1>Featured!</h1>";
for ($i=0; $i < 3; $i++) {
//J wordt een willekeurig getal tussen 0 en 99
    $j = mt_rand(0,9);
//Laat de items zien die gelijk zijn aan j
    $product_id = $products[$j]['id'];
    echo "<div id='random-featured-pic'>";
    $product_picture = $products[$j]['picture'];


    echo "<a href='?page=singleproductpage&product_id=$product_id'>"."<img src=".$product_picture.">"."</a><br>";
    echo "</div>";
}
echo "</div>";
?>
<?php
echo "<div id='gallery'>";

foreach ($list as $productDisplay){

    echo "<div id='gallery-item'>";


        echo "<div id='gallery-item-photo'>";
            echo "<a href='?page=singleproductpage&product_id=".$productDisplay['id']."'><img src=".$productDisplay['picture']."></a>";
        echo "</div>";

        echo "<div id='gallery-item-text'>";
            echo "<h1>".$productDisplay['title']."</h1>";
            echo "<p>".$productDisplay['price']."</p>";
            echo "<p>".$productDisplay['product_info']."</p>";
        echo "</div>";


    echo "</div>";

}
echo "</div>";
//echo "<div id='pagination-whole'>";
//echo "<a href='?page=producten&page_nr=1'>".'|<'."</a> ";
////Ga naar de pagina's
//for ($i=1; $i<=$total_pages; $i++) {
//    echo "<a href='?page=producten&page_nr=".$i."'>".$i."</a> ";
//};
////Ga naar de laatste pagina
//echo "<a href='?page=producten&page_nr=$total_pages'>".'>|'."</a> ";
//echo "</div>";
?>

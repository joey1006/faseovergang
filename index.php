<html>
<head>
    <link href="css/main.css" type="text/css" rel="stylesheet">
    <link href="css/products.css" type="text/css" rel="stylesheet">
    <link href="css/about.css" type="text/css" rel="stylesheet">
    <link href="css/search.css" type="text/css" rel="stylesheet">
    <script src="js/gallery.js"></script>
</head>
<body>

</body>

</html>

<?php
// dit include de files die niet via de switch worden geladen op de site.
include "config/config.php";
require_once "config/database.php";
include "views/nav.php";
include "controller/products.php";





// hier wordt de page en product id uit de url geladen
// zodat ze gebruikt kunnen worden in een van de files below

$page = (empty($_GET ['page'])) ? '' : $_GET['page'];
$product_id = (empty($_GET ['product_id'])) ? '' :  $_GET['product_id'];

// de switch gebruikt de informatie uit de links van de nav.php
// om zo de juiste files te include bij de juiste paginalink
switch($page){

    case 'home':
        break;
    case 'producten':
        include 'controller/single-product.php';
        include "views/randomfeatured.php";
        include "views/pagination.php";
        include "views/productpage.php";


        break;
    case 'search':
        include "views/search.html";
        break;
    case'information':

        break;
    case 'about':
        include "views/about.php";
        break;
    case 'singleproductpage':

        include 'controller/single-product.php';
        include 'views/singleproductpage.php';
        break;
    default:

        break;
}
?>



<!--//echo              '<section class="color-10">';-->
<!--//echo               '<nav class="cl-effect-10">';-->
<!--//echo                 '<a href="#" data-hover="Seraglio"><span>Seraglio</span></a>';-->
<!--//echo                 '<a href="#" data-hover="Sumptuous"><span>Sumptuous</span></a>';-->
<!--//echo                 '<a href="#" data-hover="Scintilla"><span>Scintilla</span></a>';-->
<!--//echo                 '<a href="#" data-hover="Palimpsest"><span>Palimpsest</span></a>';-->
<!--//echo                 '<a href="#" data-hover="Assemblage"><span>Assemblage</span></a>';-->
<!--//echo                '</nav>';-->
<!--//echo             '</section>';-->


<?php

$num_rec_per_page=3;

if (isset($_GET["page_nr"])) {
    $page  = $_GET["page_nr"];
} else {
    $page=1;
};
$start_from = ($page-1) * $num_rec_per_page;


$sql = "SELECT * FROM products LIMIT ".$start_from.",". $num_rec_per_page;
$result = $mysqli->query($sql);
if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        $list[] = $rows;
    }
}
$sql = "SELECT * FROM products";

$rs_result = $mysqli->query($sql);

$total_records =$rs_result->num_rows;

$total_pages = ceil($total_records / $num_rec_per_page);
?>

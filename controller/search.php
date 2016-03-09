
<?php
$servername = "rdbms.strato.de";
$database = "DB2494547";
$uid = "U2494547";
$pwd = "abcd1234";//inloggegevens
$resultArray = array();// array voor de query output
//
$search = $_GET['q']; //let op niet beschermd tegen SQL injectie!!!
$type = $_GET['type']; //let op niet beschermd tegen SQL injectie!!!

// maakt een connectie met het database

$con = mysqli_connect($servername,$uid,$pwd,$database);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    exit();
}
mysqli_select_db($con,"exoworld");
//dubbele wildcard
//$sql = "SELECT * FROM country WHERE name LIKE '%$search%' LIMIT 4";

//enkele wildcard
$sql = "SELECT * FROM products WHERE title LIKE '$search%' ";
if ($type == "list"){
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
        array_push($resultArray, $row['title']);
    }
    echo json_encode($resultArray);
}
if ($type == "answer"){
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<div id=search-results>";
        echo "<tr>";
        echo "<td><h1>" . $row["title"] . "</h1></td>";
        echo "<td><img src=".$row['picture']."></td>";
        echo "<td><p>" . $row["price"] . "</p></td>";
        echo "<div id=search-results-p>";
        echo "<td><p>" . $row["product_info"] . "</p></td>";
        echo "</div>";
//        echo "<td>" . $row["picture"] . "</td>";
        echo "</tr>";
        echo "</div>";
    }

}
mysqli_close($con);
?>


 
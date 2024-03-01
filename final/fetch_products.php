<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php'; // Include the database connection

$sql = "SELECT product.name, price, path FROM product
join product_image on product.id = product_image.product_id";
$result = $conn->query($sql);

$products = [];
if ($result && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    echo "0 results or error in query execution: " . $conn->error;
}
$conn->close();
?>

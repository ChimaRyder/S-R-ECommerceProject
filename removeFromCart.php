<?php
include("connect.php");
$id = $_GET['id'];
$cart_id = $_GET['cart'];
$removequery = "UPDATE tblcart_item SET is_Deleted = 'YES' WHERE CartItem_ID = '$id'";
$updatequery = "UPDATE tblcart SET Total_Quantity = (SELECT SUM(Quantity) from tblcart_item WHERE Cart_ID = '$cart_id' AND is_Deleted = 'NO'), Total_Price = (SELECT SUM(Total_Item_Price) from tblcart_item WHERE Cart_ID = '$cart_id' AND is_Deleted = 'NO')";
mysqli_query($connection, $removequery);
mysqli_query($connection, $updatequery);
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>

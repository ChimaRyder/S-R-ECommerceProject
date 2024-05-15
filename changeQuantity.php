<?php
if (isset($_POST['changeQuantity'])) {
    $item = $_POST['changeQuantity'];
    $newq = $_POST['quantity'];
    $updateitem = $connection->prepare("UPDATE tblcart_item SET Quantity = ? , Total_Item_Price = (SELECT tblproduct.Price from tblproduct, tblcart_item WHERE tblproduct.Product_ID = tblcart_item.Product_ID AND tblcart_item.CartItem_ID = ?) * ? WHERE CartItem_ID = ?");
    $updateitem->bind_param("iiii", $newq, $item, $newq, $item);
    $updateitem->execute();

    $cart = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Cart_ID from tblcart_item WHERE CartItem_ID = '$item'"))['Cart_ID'];
    $updatequery = $connection->prepare("UPDATE tblcart SET Total_Quantity = (SELECT SUM(Quantity) from tblcart_item WHERE Cart_ID = ? AND is_Deleted = 'NO'), Total_Price = (SELECT SUM(Total_Item_Price) from tblcart_item WHERE Cart_ID = ? AND is_Deleted = 'NO') WHERE Cart_ID = ?");
    $updatequery->bind_param("iii", $cart, $cart, $cart);
    $updatequery->execute();

    $_SESSION['updatedProduct'] = 'true';
    echo "
        <script>
            window.location.replace(window.location.href);
        </script>
    ";
}
?>


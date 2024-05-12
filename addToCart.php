<?php
    if (isset($_POST['addCart'])) {
        if (!isset($_SESSION['Customer_ID'])) {
            echo "
            <script>
                window.location.replace('login.php'); 
            </script>
        ";
        }

        $findcart = "SELECT Cart_ID from tblcart WHERE Customer_ID = '$id'";
        $cart_id = mysqli_fetch_assoc(mysqli_query($connection, $findcart))['Cart_ID'];
        $prod_id = $product['Product_ID'];
        $quantity = $_POST['quantity'];
        $totalprice = $quantity * $product['Price'];

        $addquery = "INSERT into tblcart_item(Product_ID, Cart_ID, Quantity, Total_Item_Price) values($prod_id, $cart_id, $quantity, $totalprice)";
        $updatequery = "UPDATE tblcart SET Total_Quantity = (SELECT SUM(Quantity) from tblcart_item WHERE Cart_ID = '$cart_id' AND is_Deleted = 'NO'), Total_Price = (SELECT SUM(Total_Item_Price) from tblcart_item WHERE Cart_ID = '$cart_id' AND is_Deleted = 'NO') WHERE Cart_ID = '$cart_id'";

        mysqli_query($connection, $addquery);
        mysqli_query($connection, $updatequery);

        echo "
        <script>
            window.location.replace('product.php?id=$prod_id'); 
        </script>
        ";
    }
?>

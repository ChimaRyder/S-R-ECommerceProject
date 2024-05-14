<?php
if (isset($_POST['placeOrder'])) {
    include("connect.php");

    $total_price = $q['Total_Price'];

    $shipmethod = $_POST['shipmentMethod'];
    $name = $_POST['fname']." ".$_POST['lname'];
    $address = $_POST['address'].", ".$_POST['munprovince'].", ".$_POST['country']." ".$_POST['zip'];

    $paymethod = $_POST['paymentMethod'];
    $cardName = $_POST['cardName'];
    $cardNumber = $_POST['cardNumber'];
    $cardExp = $_POST['cardExp'];
    $cardCV = $_POST['cardCV'];

    $makeOrder = "INSERT into tblorder(Customer_ID, Total_Order_Price) values('$id', '$total_price')";
    mysqli_query($connection, $makeOrder);
    $orderID = $connection->insert_id;

    $makeShipment = $connection->prepare("INSERT into tblshipment(Order_ID, Customer_ID, Shipment_Method, Shipment_Name, Address) values(?, ?, ?, ?, ?)");
    $makeShipment->bind_param("iisss",$orderID, $id, $shipmethod, $name, $address);
    $makeShipment->execute();

    $makePayment = $connection->prepare("INSERT into tblpayment(Order_ID, Customer_ID, Payment_Method, Card_Name, Card_Number, Expiration, CVV, Amount) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $makePayment->bind_param("iisssssd",$orderID, $id, $paymethod, $cardName, $cardNumber, $cardExp, $cardCV, $total_price);
    $makePayment->execute();

    //loop to make order items
    $cartID = $q['Cart_ID'];
    $res = mysqli_query($connection, "SELECT CartItem_ID from tblcart_item WHERE Cart_ID = '$cartID' AND is_Deleted = 'NO'");

    while ($row = mysqli_fetch_assoc($res)) {
       $cartitemID = $row['CartItem_ID'];
       $cartItem = mysqli_fetch_assoc(mysqli_query($connection, "SELECT Product_ID, Quantity, Total_Item_Price from tblcart_item WHERE CartItem_ID = '$cartitemID'"));
       $makeitem = $connection->prepare("INSERT into tblorder_item(Order_ID, Product_ID, Quantity, Total_OrderItem_Price) values(?, ?, ?, ?)");
       $makeitem->bind_param("iiid",$orderID, $cartItem['Product_ID'], $cartItem['Quantity'], $cartItem['Total_Item_Price']);
       $makeitem->execute();

        //update cart and delete cart_items
        $removeFromCart = "UPDATE tblcart_item SET is_Deleted = 'YES' WHERE CartItem_ID = '$cartitemID'";
        mysqli_query($connection, $removeFromCart);
    }


    $resetCart = "UPDATE tblcart SET Total_Quantity = 0, Total_Price = 0 WHERE Cart_ID = '$cartID'";
    mysqli_query($connection, $resetCart);

    echo "
    <script>
        window.location.replace('index.php');
    </script>
    ";
}
?>

<?php
    $id = $_GET["customer"];

    include("connect.php");
    $query = "UPDATE tblcustomer SET is_Deleted = 'YES' WHERE Customer_ID = '$id'";
    mysqli_query($connection, $query);

    header("Location: seller_accounts.php");
?>

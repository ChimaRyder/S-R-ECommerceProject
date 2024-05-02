<?php
    $id = $_GET["customer"];

    include("connect.php");
    $query = "DELETE from tblcustomer WHERE Customer_ID = '$id'";
    mysqli_query($connection, $query);

    header("Location: seller_accounts.php");
?>

<?php
    $id = $_GET["seller"];

    include("connect.php");
    $query = "UPDATE tblseller SET is_Deleted = 'YES' WHERE Seller_ID = '$id'";
    mysqli_query($connection, $query);

    header("Location: seller_accounts.php");
?>


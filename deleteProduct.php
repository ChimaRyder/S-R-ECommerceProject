<?php
    include("connect.php");

    $id = $_GET["id"];

    $query = "UPDATE tblproduct SET is_Deleted = 'YES' WHERE Product_ID = '$id'";
    mysqli_query($connection, $query);
    header("Location: sellerProducts.php");

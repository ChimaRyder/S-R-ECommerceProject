<?php
    include("connect.php");

    $id = $_GET["id"];

    $query = "DELETE from tblproduct WHERE Product_ID = '$id'";
    mysqli_query($connection, $query);
    header("Location: sellerProducts.php");

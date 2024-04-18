<?php
    $id = $_GET["seller"];

    include("connect.php");
    $query = "DELETE from tblseller WHERE Seller_ID = '$id'";
    mysqli_query($connection, $query);

    header("Location: index.php");
?>
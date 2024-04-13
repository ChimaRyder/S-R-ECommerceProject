<?php
    if (isset($_POST['add_product'])) {
        include ("connect.php");

        $store = mysqli_fetch_assoc(mysqli_query($connection, "select Store_ID from tblstore where Seller_ID='$id'"))['Store_ID'];
        $pname = $_POST["product_name"];
        $pdesc = $_POST["product_description"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];

        $pimage = $_FILES["product_image"]["name"];
        $temppimage = $_FILES["product_image"]["tmp_name"];
        $folder = "uploaded_images/".$pimage;

        $query = "insert into tblproduct(Store_ID, Product_Name, Product_Description, Price, Stock, Product_Image) values('$store','$pname', '$pdesc', '$price', '$stock', '$pimage')";
        mysqli_query($connection, $query);

        if (move_uploaded_file($temppimage, $folder)) {
            echo "File uploaded";
        } else {
            echo "File not uploaded";
        }


        echo "<script>
               window.sessionStorage.setItem('productCreated', 'true');
               window.location.replace('sellerProducts.php');
            </script>";
    }
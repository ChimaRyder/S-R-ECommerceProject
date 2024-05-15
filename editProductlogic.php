<?php

if (isset($_POST["saveProductEdits"])) {
    if (isset($_POST["productName"])) {
        $pName = $connection->prepare("UPDATE tblproduct SET Product_Name = ? WHERE Product_ID = ?");
        $pName->bind_param("si", $_POST['productName'], $pID);
        $pName->execute();
    }

    if (isset($_POST["productDescription"])) {
        $pDescription = $connection->prepare("UPDATE tblproduct SET Product_Description = ? WHERE Product_ID = ?");
        $pDescription->bind_param("si", $_POST['productDescription'], $pID);
        $pDescription->execute();
    }

    if (isset($_POST["productPrice"])) {
        $pPrice = $connection->prepare("UPDATE tblproduct SET Price = ? WHERE Product_ID = ?");
        $pPrice->bind_param("si", $_POST['productPrice'], $pID);
        $pPrice->execute();

        $pCartUpdate = $connection->prepare("UPDATE tblcart_item SET Total_Item_Price = (SELECT Price from tblproduct WHERE Product_ID = ?) * Quantity WHERE Product_ID = ?");
        $pCartUpdate->bind_param("ii", $pID, $pID);
        $pCartUpdate->execute();

        $pCart = $connection->prepare("UPDATE tblcart SET Total_Price = (SELECT SUM(Total_Item_Price) from tblcart_item, tblcart WHERE tblcart.Cart_ID = tblcart_item.Cart_ID AND is_Deleted = 'NO')");
        $pCart->execute();
    }

    if (isset($_POST["productStock"])) {
        $pStock = $connection->prepare("UPDATE tblproduct SET Stock = ? WHERE Product_ID = ?");
        $pStock->bind_param("si", $_POST['productStock'], $pID);
        $pStock->execute();
    }

    if (isset($_FILES["productImage"])) {
        $pimage = $_FILES['productImage']["name"];
        $temppimage = $_FILES["productImage"]["tmp_name"];

        $extension = explode('.', $pimage);
        $extension = strtolower(end($extension));
        $newImageName = uniqid();
        $newImageName .= '.' . $extension;
        move_uploaded_file($temppimage, 'uploaded_images/'.$newImageName);

        $pImage = $connection->prepare("UPDATE tblproduct SET Product_Image = ? WHERE Product_ID = ?");
        $pImage->bind_param("si", $newImageName, $pID);
        $pImage->execute();
    }

    $_SESSION['productEdited'] = 'true';

    echo "
    <script>
        window.location.replace(window.location.href);
    </script>
    ";
}
?>
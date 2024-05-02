<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style and Relax with S&R</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
include ("includes/header.php");
?>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Name</th>
            <th scope="col">Seller</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
       <?php
            $query = "SELECT Product_ID, Product_Name, seller.First_Name, seller.Last_Name, Price, Stock 
            from tblproduct, tblstore, tblseller as seller 
            WHERE tblproduct.Store_ID = tblstore.Store_ID 
            AND seller.Seller_ID = tblstore.Seller_ID
            ORDER BY Date_Created";
            $res = mysqli_query($connection, $query);

            $i = 0;
            while($products=mysqli_fetch_assoc($res)) {
                $i++;
               $id = $products['Product_ID'];
               $name = $products['Product_Name'];
               $sname = $products['First_Name'].' '.$products['Last_Name'];
               $price = $products['Price'];
               $stock = $products['Stock'];
               echo "
               <tr>
                   <td>$id</td>
                   <td>$name</td>
                   <td>$sname</td>
                   <td>$price</td>
                   <td>$stock</td>
               </tr>
               ";

            }
       ?>
        </tbody>
    </table>
</body>

<!-- FOoter-->
<?php
include("includes/footer.php");
?>



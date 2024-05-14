<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <?php
    include ("includes/header.php");
    ?>

    <?php
    $quantity = "SELECT Cart_ID, Total_Quantity, Total_Price from tblCart where Customer_ID='$id'";
    $q = mysqli_fetch_assoc(mysqli_query($connection, $quantity));

    if ($q['Total_Quantity'] == 0) {
        echo "
        <script>
            window.location.replace('index.php');
        </script>
        ";
    }
    ?>
       <div class="row g-5 m-3">
           <div class="col-md-5 col-lg-4 order-md-last">
               <h4 class="d-flex justify-content-between align-items-center mb-3">
                   <span class="text-primary" style="color:#92140c !important;">Your cart</span>
                   <span class="badge bg-primary primary-color rounded-pill"><?php echo $q['Total_Quantity']?></span>
               </h4>
               <ul class="list-group mb-3">
                   <?php
                   $query = "SELECT product.Product_Name, product.Product_Image, cartitem.Quantity, cartitem.Total_Item_Price from tblproduct as product, tblcart as cart, tblcart_item as cartitem, tblcustomer WHERE cartitem.Product_ID = product.Product_ID AND tblcustomer.Customer_ID = cart.Customer_ID AND cart.Cart_ID = cartitem.Cart_ID AND tblcustomer.Customer_ID = '$id' AND product.is_Deleted = 'NO' AND cartitem.is_Deleted ='NO'";
                   $res = mysqli_query($connection, $query);

                   if ($res) {
                       while ($items = mysqli_fetch_assoc($res)) {
                              $name = substr($items['Product_Name'], 0, 20)."...";
                              $image = "uploaded_images/".$items['Product_Image'];
                              $quantity = $items['Quantity'];
                              $price = "P".number_format($items['Total_Item_Price'], 2);

                              echo "
                              <li class='list-group-item d-flex justify-content-between lh-sm'>
                              <div class='d-flex align-items-center'>
                                <img
                                    src='$image'
                                    alt=''
                                    style='width: 45px; height: 45px'
                                    class='rounded-circle me-2'
                                />
                                   <div>
                                       <h6 class='my-0'>$name</h6>
                                       <small class='text-body-secondary'>x $quantity</small>
                                   </div>
                               </div>
                               <span class='text-body-secondary'>$price</span>
                               </li>
                              ";

                       }
                   }
                   ?>
                   <li class="list-group-item d-flex justify-content-between">
                       <span>Total (PHP)</span>
                       <strong><?php echo "P".number_format($q['Total_Price'], 2) ?></strong>
                   </li>
               </ul>

           </div>
           <div class="col-md-7 col-lg-8">
               <h4 class="mb-3">Shipping Address</h4>
               <form method="post">
                   <div class="row g-3">
                       <div class="my-3">
                           <div class="form-check">
                               <input id="ninjavan" value="NinjaVan" name="shipmentMethod" type="radio" class="form-check-input" required>
                               <label class="form-check-label" for="ninjavan">NinjaVan</label>
                           </div>
                           <div class="form-check">
                               <input id="fedex" value="FedEx" name="shipmentMethod" type="radio" class="form-check-input" required>
                               <label class="form-check-label" for="fedex">FedEx</label>
                           </div>
                           <div class="form-check">
                               <input id="regular" value="Standard" name="shipmentMethod" type="radio" class="form-check-input" checked required>
                               <label class="form-check-label" for="regular">Standard Shipping</label>
                           </div>
                       </div>
                       <div class="col-sm-6">
                           <label for="firstName" class="form-label">First name</label>
                           <input type="text" class="form-control" id="firstName" placeholder="" value="" name="fname" required>
                           <div class="invalid-feedback first-name-invalid">
                               Valid first name is required.
                           </div>
                       </div>

                       <div class="col-sm-6">
                           <label for="lastName" class="form-label">Last name</label>
                           <input type="text" class="form-control" id="lastName" placeholder="" value="" name="lname" required>
                           <div class="invalid-feedback second-name-invalid">
                               Valid last name is required.
                           </div>
                       </div>

                       <div class="col-12">
                           <label for="address" class="form-label">Address</label>
                           <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
                           <div class="invalid-feedback address-invalid">
                               Please enter your shipping address.
                           </div>
                       </div>

                       <div class="col-md-5">
                           <label for="country" class="form-label">Country</label>
                           <input type="text" class="form-control" id="country" name="country" required>
                           <div class="invalid-feedback country-invalid">
                               Please select a valid country.
                           </div>
                       </div>

                       <div class="col-md-4">
                           <label for="province" class="form-label">City/Municipality & Province</label>
                           <input type="text" class="form-control" id="province" name="munprovince" placeholder="Mandaue City, Cebu" required>
                           <div class="invalid-feedback province-invalid">
                               Please provide a valid municipality and province.
                           </div>
                       </div>

                       <div class="col-md-3">
                           <label for="zip" class="form-label">Zip</label>
                           <input type="text" class="form-control" id="zip" placeholder="" name="zip" required>
                           <div class="invalid-feedback zip-invalid">
                               Zip code required.
                           </div>
                       </div>
                   </div>

                   <hr class="my-4">

                   <h4 class="mb-3">Payment</h4>

                   <div class="my-3">
                       <div class="form-check">
                           <input id="credit" value="Credit" name="paymentMethod" type="radio" class="form-check-input" onclick="displaycard()" checked required>
                           <label class="form-check-label" for="credit">Credit Card</label>
                       </div>
                       <div class="form-check">
                           <input id="debit" value="Debit" name="paymentMethod" type="radio" class="form-check-input" onclick="displaycard()" required>
                           <label class="form-check-label" for="debit">Debit Card</label>
                       </div>
                       <div class="form-check">
                           <input id="paypal" value="PayPal" name="paymentMethod" type="radio" class="form-check-input" onclick="displaycard()" required>
                           <label class="form-check-label" for="paypal">PayPal</label>
                       </div>
                   </div>

                   <div class="row gy-3 card-info">
                       <div class="col-md-6">
                           <label for="cc-name" class="form-label">Name on card</label>
                           <input type="text" class="form-control" id="cc-name" placeholder="" name="cardName" required>
                           <small class="text-body-secondary">Full name as displayed on card</small>
                           <div class="invalid-feedback">
                               Name on card is required
                           </div>
                       </div>

                       <div class="col-md-6">
                           <label for="cc-number" class="form-label">Credit card number</label>
                           <input type="text" class="form-control" id="cc-number" placeholder="" name="cardNumber" required>
                           <div class="invalid-feedback">
                               Credit card number is required
                           </div>
                       </div>

                       <div class="col-md-3">
                           <label for="cc-expiration" class="form-label">Expiration</label>
                           <input type="text" class="form-control" id="cc-expiration" placeholder="" name="cardExp" required>
                           <div class="invalid-feedback">
                               Expiration date required
                           </div>
                       </div>

                       <div class="col-md-3">
                           <label for="cc-cvv" class="form-label">CVV</label>
                           <input type="text" class="form-control" id="cc-cvv" placeholder="" name="cardCV" required>
                           <div class="invalid-feedback">
                               Security code required
                           </div>
                       </div>
                   </div>

                   <script>
                       function displaycard() {
                           const card_info = document.querySelector(".card-info");
                           const cod = document.getElementById("cod");

                           if (cod.checked) {
                               card_info.style.display = "none";
                           } else {
                               card_info.style.removeProperty("display");
                           }
                       }
                   </script>

                   <hr class="my-4">

                   <button class="w-100 btn btn-primary btn-lg see-more" type="submit" name="placeOrder">Place Order</button>
               </form>
           </div>
       </div>
    <!-- FOoter-->

    <?php
        include("placeOrder.php");
        include("includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
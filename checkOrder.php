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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<?php
    include("includes/header.php");
    if (!isset($_SESSION["Seller_ID"])){
       echo "<script>
               window.location.replace('index.php');
           </script>";
    }
?>

<!--svg icons-->
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    </symbol>
</svg>

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </svg>
    Order Status has been updated.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </button>
</div>

<script>
    const statusUpdated = window.sessionStorage.getItem('statusUpdated');

    if (statusUpdated === 'true') {
        document.querySelector('.alert').style.display = 'block';
        window.sessionStorage.removeItem('statusUpdated');
    }
</script>

<div class="row w-100">

    <div class="col-2 d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary ms-2" style="width: 280px; height: 80vh;">
        <a href="selleroverview.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4">
                <?php
                $sqlstorename = "select Store_Name from tblstore where Seller_ID='$id'";
                $row = mysqli_fetch_assoc(mysqli_query($connection, $sqlstorename));

                echo $row['Store_Name'];
                ?>
            </span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="selleroverview.php" class="nav-link link-body-emphasis text-black" aria-current="page">
                    <svg class="bi pe-none me-2 text-black" width="16" height="16"><use xlink:href="#home"/></svg>
                    Overview
                </a>
            </li>
            <li>
                <a href="sellerStats.php" class="nav-link link-body-emphasis text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart pe-none me-2" viewBox="0 0 16 16">
                        <path d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z"/>
                    </svg>
                    Statistics
                </a>
            </li>
            <li>
                <a href="sellerOrders.php" class="nav-link link-body-emphasis da active">
                    <svg class="bi pe-none me-2 text-white" width="16" height="16"><use xlink:href="#table"/></svg>
                    Orders
                </a>
            </li>
            <li>
                <a class="nav-link link-body-emphasis text-black" data-bs-toggle="collapse" href="#storeContent" role="button" aria-expanded="true" aria-controls="storeContent" >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop-window pe-none me-2" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    Store
                </a>
                <div class="collapse ps-3" id="storeContent" >
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="sellerProducts.php" class="nav-link rounded text-black">
                                <svg class="bi pe-none me-2 text-black" width="16" height="16"><use xlink:href="#grid"/></svg>
                                Products</a></li>
                    </ul>
                </div>
                <div class="collapse ps-3" id="storeContent" >
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="addProduct.php" class="nav-link rounded text-black">
                                <svg class="bi pe-none me-2 text-black" width="16" height="16"><use xlink:href="#grid"/></svg>
                                Add a Product</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>
                    <?php
                    if (isset($_SESSION["Seller_ID"])) {
                        echo $user["First_Name"];
                    }
                    ?>
                </strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
            </ul>
        </div>
    </div>

    <?php
    $orderID = $_GET['id'];
    $store = mysqli_fetch_assoc(mysqli_query($connection, "select Store_ID from tblstore where Seller_ID='$id'"))['Store_ID'];
    $order = $connection->prepare("SELECT product.Product_Name, product.Product_Image, orderitem.Quantity, orderitem.Total_OrderItem_Price from tblproduct as product, tblorder_item as orderitem WHERE orderitem.Product_ID = product.Product_ID AND product.Store_ID = ? AND orderitem.Order_ID = ?");
    $order->bind_param("ii", $store,$orderID);
    $order->execute();
    $orderItems = $order->get_result();

    $shipping = $connection->prepare("SELECT shipment.Shipment_Method, shipment.Shipment_Name, shipment.Address from tblshipment as shipment WHERE shipment.Order_ID = ?");
    $shipping->bind_param("i", $orderID);
    $shipping->execute();
    $shippingDetails = mysqli_fetch_assoc($shipping->get_result());
    ?>
    <div class="col m-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="fw-bolder">Order Details</h1>
            <a href="sellerOrders.php" class="btn btn-primary see-more">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-return-left text-white" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                </svg>
            </a>
        </div>
        <hr>
        <h3>Products Details</h3>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th class="fw-bold">Product Name</th>
                <th class="fw-bold">Quantity</th>
                <th class="fw-bold">Price</th>

            </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($orderItems)) {
                    $name = $row['Product_Name'];
                    $image = "uploaded_images/".$row['Product_Image'];
                    $quant = $row['Quantity'];
                    $price = "P".number_format($row['Total_OrderItem_Price'], 2);

                    echo "
                    <tr>
                        <td>
                            <div class='d-flex align-items-center'>
                                <img
                                    src='$image'
                                    alt=''
                                    style='width: 45px; height: 45px'
                                    class='rounded-circle'
                                />
                                <div class='ms-3'>
                                    <p class='fw-bold mb-1'>$name</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            $quant
                        </td>
                        <td>
                            $price
                        </td>
                    </tr>
                    ";
                }

                ?>
            </tbody>
        </table>
        <hr>
        <h3>Shipment Details</h3>
        <div class="my-3 border border-2 border-warning w-25 p-2">
            <h5 class="fw-bold"><?php echo $shippingDetails['Shipment_Name']?></h5>
            <?php
                $address = explode(",", $shippingDetails['Address']);
            ?>
            <h6><?php echo $address[0]?></h6>
            <h6><?php echo $address[1].", ".$address[2]?></h6>
            <h6><?php echo $address[3]?></h6>
        </div>
        <hr>
        <form method="post">
            <div class="row">
                <div class="col">
                    <label class="form-label" for="OrderStatus">Order Status</label>
                    <select id="OrderStatus" class="form-select" aria-label="OrderStatus" name="OrderStatus">
                        <?php
                        $statusquery = "SELECT Order_Status from tblorder WHERE Order_ID = '$orderID'";
                        $status = mysqli_fetch_assoc(mysqli_query($connection, $statusquery))['Order_Status'];
                        $statuses = ["PENDING", "PROCESSING", "SHIPPED"];
                        for ($i = 0; $i < 3; $i++) {
                            if (!strcmp($status, $statuses[$i])) {
                                echo "<option value=$statuses[$i] selected>$statuses[$i]</option>";
                            } else {
                                echo "<option value=$statuses[$i]>$statuses[$i]</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <label for="trackingNumber" class="form-label">Tracking Number</label>
                    <?php
                    $tracking = $connection->prepare("Select Tracking_Number from tblshipment WHERE Order_ID = ?");
                    $tracking->bind_param("i", $orderID);
                    $tracking->execute();
                    $tNumber = mysqli_fetch_assoc($tracking->get_result())['Tracking_Number'];

                    if (!empty($tNumber)) {
                        echo "<input class='form-control' id='trackingNumber' value='$tNumber' type='text' disabled>";
                    } else {
                        echo "<input class='form-control' name='trackingNumber' id='trackingNumber' type='text'>";
                    }

                    ?>
                </div>
            </div>


            <button class="btn btn-primary see-more mt-2" type="button" data-bs-toggle="modal" data-bs-target="#updateModal" onclick="confirmStatus()">Update Order</button>

            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateConfirmation" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title fs-6" id="confirmationTitle">Are you sure you want to make the following changes?</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span class="fw-bold">STATUS -> </span><span class="changedStatus"></span><br>
                            <span class="fw-bold setTracker-label">TRACKING NUMBER -> </span><span class="setTracker"></span>
                        </div>
                        <script>
                            function confirmStatus() {
                                const pickedStatus = document.querySelector("#OrderStatus");
                                const modalStatus = document.querySelector(".changedStatus");

                                const trackerLabel = document.querySelector(".setTracker-label");
                                const setTracker = document.querySelector(".setTracker");
                                const trackerInfo = document.querySelector("#trackingNumber");

                                modalStatus.innerHTML = pickedStatus.value;

                                if (trackerInfo.value !== "" && !trackerInfo.disabled) {
                                    trackerLabel.style.removeProperty("display");
                                    setTracker.style.removeProperty("display");
                                    setTracker.innerHTML = trackerInfo.value;
                                } else {
                                    trackerLabel.style.display = "none";
                                    setTracker.style.display = "none";
                                }
                            }
                        </script>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="saveChangedStatus">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['saveChangedStatus'])) {
   $newStatus = $_POST['OrderStatus'];
   $statusquery = $connection->prepare("UPDATE tblorder SET Order_Status = ? WHERE Order_ID = ?");
   $statusquery->bind_param("si", $newStatus, $orderID);
   $statusquery->execute();

   $tracking = $_POST['trackingNumber'];
   if (!empty($tracking)){
      $t = $connection->prepare("UPDATE tblshipment SET Tracking_Number = ? WHERE Order_ID = ?");
      $t->bind_param("si", $tracking, $orderID);
      $t->execute();
   }

   echo "
   <script>
      window.sessionStorage.setItem('statusUpdated', 'true'); 
      window.location.replace('checkOrder.php?id=$orderID');
   </script>
   ";
}

?>

<?php
    include("includes/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>



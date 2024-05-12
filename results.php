<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <?php
    include ("includes/header.php");
    ?>

    <?php
    $search = $_GET["search"];
    $query = "SELECT Product_ID, Product_Name, Product_Image, Product_Description, Average_Rating, Price from tblproduct WHERE Product_Name LIKE '%$search%' AND is_Deleted = 'NO'";
    $similar = mysqli_query($connection, $query);
    $foundres = mysqli_num_rows($similar);

    echo "<h3 class='mt-3 d-flex justify-content-center'> Found ".$foundres.($foundres > 1 ? " results" : " result")."</h3>";
    ?>

    <div class="d-flex flex-row justify-content-start flex-wrap p-5 m-5">
    <?php
    if ($similar) {
        while ($simprod = mysqli_fetch_assoc($similar)) {
            $simImage = "uploaded_images/".$simprod["Product_Image"];
            $simlink = "product.php?id=".$simprod["Product_ID"];
            $name = $simprod["Product_Name"];
            $description = $simprod["Product_Description"];
            $rating = $simprod["Average_Rating"];
            $stars = "";
            for ($i = 0; $i < 5; $i++) {
                if ($i < $rating) {
                    $stars .= "<i class='bi bi-star-fill text-warning'></i>";
                } else {
                    $stars .= "<i class='bi bi-star-fill'></i>";
                }
            }

            $price = "₱".number_format($simprod["Price"], 2);

            echo "
                     <div class='col-4'>
                     <div class='card border shadow-sm' style='width: 17rem;'>
                        <img src='$simImage' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h6 class='card-title fw-bold my-3'>$name</h6>
                            <p class='card-text'>$description</p>
                            <div class='d-flex flex-row justify-content-start border-bottom pb-2 mb-2'>
                                $stars
                            </div>
                            <div class='d-flex flex-row justify-content-between pt-2'>
                                <a href='$simlink' class='btn btn-link stretched-link m-0 p-0'><h6>$price</h6></a>
                                <div>
                                    <i class='bi bi-heart-fill'></i>
                                    <i class='bi bi-cart-fill'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    ";
        }
    }
    ?>
    </div>

<!--    <div class="card border shadow-sm" style="width: 17rem;">-->
<!--        <img src="images/prod-1.avif" class="card-img-top" alt="...">-->
<!--        <div class="card-body">-->
<!--            <h6 class="card-title fw-bold my-3">AIRISM BRA CAMISOLE</h6>-->
<!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
<!--            <div class="d-flex flex-row justify-content-start border-bottom pb-2 mb-2">-->
<!--                <i class="bi bi-star-fill text-warning"></i>-->
<!--                <i class="bi bi-star-fill"></i>-->
<!--                <i class="bi bi-star-fill"></i>-->
<!--                <i class="bi bi-star-fill"></i>-->
<!--                <i class="bi bi-star-fill"></i>-->
<!--            </div>-->
<!--            <div class="d-flex flex-row justify-content-between pt-2">-->
<!--                <a class="stretched-link" href=""><h6>P100.00</h6></a>-->
<!--                <div>-->
<!--                    <i class="bi bi-heart-fill"></i>-->
<!--                    <i class="bi bi-cart-fill"></i>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    
    <?php
    include ("includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include ("connect.php");

    $idprod = $_GET['id'];
    $query = "SELECT Product_ID, Product_Image, Product_Name, Product_Description, Price, Stock, tblproduct.Store_ID, store.Store_Name, store.Store_Description, seller.First_Name, seller.Last_Name from tblproduct, tblstore as store, tblseller as seller WHERE Product_ID = '$idprod' AND tblproduct.Store_ID = store.Store_ID AND store.Seller_ID = seller.Seller_ID";
    $product = mysqli_fetch_assoc(mysqli_query($connection, $query));

    $proddispimage = "uploaded_images/".$product['Product_Image'];
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['Product_Name']?> | S&R</title>
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

<section aria-label="Main content" role="main" class="product-detail">
  <div itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
    <meta itemprop="image" content="//cdn.shopify.com/s/files/1/1047/6452/products/product_grande.png?v=1446769025">
    <div class="shadow">
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
            <div class="big">
              <span id="big-image" class="img" quickbeam="image" style="<?php echo "background-image: url(".$proddispimage.");"?>" data-src="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025"></span>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name"><?php echo $product['Product_Name']?></h1>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="PHP">
              <link itemprop="availability" href="https://schema.org/InStock">
              <div class="price-shipping">
                <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                    ₱<?php echo number_format($product['Price'], 2)?>
                </div>
              </div>
                <form method="post">
              <div class="swatches">
                <div class="swatch clearfix" data-option-index="0">
                  <div class="header">Size</div>
                  <div data-value="M" class="swatch-element plain m available">
                    <input id="swatch-0-m" type="radio" name="option-0" value="M" checked  />
                    <label for="swatch-0-m">
                      M
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="L" class="swatch-element plain l available">
                    <input id="swatch-0-l" type="radio" name="option-0" value="L"  />
                    <label for="swatch-0-l">
                      L
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="XL" class="swatch-element plain xl available">
                    <input id="swatch-0-xl" type="radio" name="option-0" value="XL"  />
                    <label for="swatch-0-xl">
                      XL
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                  <div data-value="XXL" class="swatch-element plain xxl available">
                    <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL"  />
                    <label for="swatch-0-xxl">
                      XXL
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                    </label>
                  </div>
                </div>
                <div class="swatch clearfix" data-option-index="1">
                  <div class="header">Color</div>
                  <div data-value="Blue" class="swatch-element color blue available">
                    <div class="tooltip">Blue</div>
                    <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked  />
                    <label for="swatch-1-blue" style="border-color: blue;">
                      <span style="background-color: blue;"></span>
                    </label>
                  </div>
                  <div data-value="Red" class="swatch-element color red available">
                    <div class="tooltip">Red</div>
                    <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red"  />
                    <label for="swatch-1-red" style="border-color: red;">
                      <span style="background-color: red;"></span>
                    </label>
                  </div>
                  <div data-value="Yellow" class="swatch-element color yellow available">
                    <div class="tooltip">Yellow</div>
                    <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow"  />
                    <label for="swatch-1-yellow" style="border-color: yellow;">
                      <span style="background-color: yellow;"></span>
                    </label>
                  </div>
                </div>
              </div>
                <div class="d-flex flex-row">
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                        </svg>
                    </button>

                    <input id="form1" min="0" name="quantity" value="1" type="number"
                           class="form-control form-control-sm" style="width: 50px;" name="quantity"/>

                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                    </button>

                </div>

                <button class="btn btn-primary my-2 w-100 see-more" type="submit" name="addCart">Add to Cart</button>
                </form>
                <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-black active" id="home-tab" data-bs-toggle="tab" data-bs-target="#description-tab-pane" type="button" role="tab" aria-controls="description-tab-pane" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-black" id="profile-tab" data-bs-toggle="tab" data-bs-target="#store-tab-pane" type="button" role="tab" aria-controls="store-tab-pane" aria-selected="false">Store</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel" aria-labelledby="description-tab" tabindex="0"><?php echo $product['Product_Description']?></div>
                    <div class="tab-pane fade" id="store-tab-pane" role="tabpanel" aria-labelledby="store-tab" tabindex="0"><?php echo strtoupper($product['Store_Name'])." | ".$product['First_Name']." ".$product['Last_Name']?><br><?php echo $product['Store_Description']?></div>
                </div>
              <div class="social-sharing-btn-wrapper">
                <span id="social_sharing_btn">Share</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <aside class="related">
      <div class="_cont">
        <h2>You might also like</h2>
        <div class="collection-list row justify-content-start" id="collection-list" data-products-per-page="4">
         <?php
             $storeID = $product['Store_ID'];
             $prodID = $product['Product_ID'];
             $query = "SELECT Product_ID, Product_Name, Product_Image, Product_Description, Average_Rating, Price from tblproduct WHERE Store_ID = '$storeID' AND Product_ID != '$prodID' LIMIT 4";
             $similar = mysqli_query($connection, $query);

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
                                <a href=$simlink class='btn btn-link stretched-link m-0 p-0'><h6>$price</h6></a>
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
        <div class="more-products" id="more-products-wrap">
          <span id="more-products" data-rows_per_page="1">More products</span>
        </div>
      </div>
    </aside>
  </div>

</section>

    <?php
    include ("includes/footer.php");
    include ("addToCart.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>

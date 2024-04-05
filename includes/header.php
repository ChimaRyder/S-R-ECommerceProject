<?php
include("connect.php");
session_start();
if (isset($_SESSION["Customer_ID"])){
    $id = $_SESSION["Customer_ID"];
    $query = "select * from tblcustomer where Customer_ID = '$id'";
    $user = mysqli_fetch_assoc(mysqli_query($connection, $query));
}
?>

<header>
    <!-- Navbar at the top of the page -->

    <nav class="navbar navbar-expand-lg primary-color">
        <div class="container-fluid mx-5 my-2">
            <a class="navbar-brand" href="index.php">S&R</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#f4fffd" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">Men's</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Women's</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Deals</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">What's New</a>
                    </li>
                </ul>

                <form class="d-flex searchbar" role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search Product" aria-label="Search">
                        <span class="input-group-append">
                    <button class="btn btn-secondary search-button" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#92140c" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </span>
                    </div>
                </form>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="index.php">
                            Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="aboutUs.php">
                            About Us</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="contact.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                            </svg>
                            Contact</a>
                    </li>
                    <li class="nav-item mx-2">
                        <?php
                        if(!isset($_SESSION["Customer_ID"])){
                            $link = "login.php";
                           } else {
                            $link = "dashboard.php";
                        }

                        echo "
                            <a class='nav-link' href='$link'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
                                <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z'/>
                            </svg>
                            Account</a>
                        "
                        ?>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                            Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

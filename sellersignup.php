<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Become a Seller!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login_signup.css">
  </head>
  <body>
  <?php
      session_start();
  ?>
    <div class="container">

        <div class="login-container">
            <div class="login-bg">

            </div>

            <div class="loginForm">
                <h1>Become a Seller!</h1>

                <form method="POST">
                    <div class="row my-4">
                        <div class="col">
                            <label for="fname">First Name</label>
                            <input class="form-control" id="fname" placeholder="John" name="fname" value="<?php echo isset($_POST["fname"]) ? $_POST["fname"] : ''; ?>" required>
                        </div>
                        <div class="col">
                            <label for="lname">Last Name</label>
                            <input class="form-control" id="lname" placeholder="Doe" name="lname" value="<?php echo isset($_POST["lname"]) ? $_POST["lname"] : ''; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="emailaddress">Email address</label>
                      <input type="email" class="form-control" id="emailaddress" aria-describedby="emailHelp" placeholder="johndoe@gmail.com" name="emailaddress" value="<?php echo isset($_POST["emailaddress"]) ? $_POST["emailaddress"] : ''; ?>" required>
                        <div class="invalid-feedback email-invalid">This account already exists.</div>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" value="<?php echo isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : ''; ?>" required>
                        <div class="invalid-feedback password-invalid">Password does not match.</div>
                      </div>

                    <button type="submit" class="btn btn-warning" name="register_seller">Join</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </div>

    <!-- FOoter-->

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
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Frenz Repunte </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">BSCS-2</a>
                    </li>

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
                            ☏ Contact</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                            </svg>
                            Account</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                            Cart</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link">
                            © Copyright all rights reserved</a>
                    </li>
                </ul>
    </nav>

  </body>
</html>

<?php
include ("sellerregister.php");
?>

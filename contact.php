<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

    <!-- Navbar at the top of the page -->

    <nav class="navbar navbar-expand-lg primary-color">
        <div class="container-fluid mx-5 my-2">
          <a class="navbar-brand" href="#">S&R</a>
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

            <form class="d-flex w-50" role="search">
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
              </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        <div class="contact-parent">
           <div class="contact-child child1">
              <p>
                 <i class="fas fa-map-marker-alt"></i> Address <br />
                 <span> Shinjuku Ward
                 <br />
                  Tokyo, Japan
                 </span>
              </p>
              <p>
                 <i class="fas fa-phone-alt"></i> Let's Talk <br />
                 <span> 09955775397</span>
                 <br>
                 <span> 09951899726</span>
              </p>
              <p>
                 <i class=" far fa-envelope"></i> General Support <br />
                 <span>frenzrpnte@gmail.com</span>
                 <br>
                 <span>dechiesullano@gmail.com</span>
              </p>
           </div>
           <div class="contact-child child2">
              <div class="inside-contact">
                 <h2>Contact Us</h2>
                 <h3>
                    <span id="confirm">
                 </h3>
                 <p>Name *</p>
                 <input id="txt_name" type="text" Required="required">
                 <p>Email *</p>
                 <input id="txt_email" type="text" Required="required">
                 <p>Phone *</p>
                 <input id="txt_phone" type="text" Required="required">
                 <p>Subject *</p>
                 <input id="txt_subject" type="text" Required="required">
                 <p>Message *</p>
                 <textarea id="txt_message" rows="4" cols="20" Required="required" ></textarea>
                 <input type="submit" id="btn_send" value="SEND">
              </div>
           </div>
        </div>
     </div>

    <!-- FOoter-->

    <nav class="navbar navbar-expand-lg primary-color">
        <div class="container-fluid mx-5 my-2">
            <a class="navbar-brand" href="#">S&R</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#f4fffd" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Dechie Sullano</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">BSCS-2</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="index.html">
                            Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="aboutUs.php">
                            About Us</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="contact.html">
                            ☏ Contact</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="login.html">
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
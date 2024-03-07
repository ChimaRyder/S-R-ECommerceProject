<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login_signup.css">
  </head>
  <body>
    <?php
      include ("register.php");
      include ("connect.php");
    ?>

    <div class="container">
    
        <div class="login-container">
            <div class="login-bg">
                
            </div>
    
            <div class="loginForm">
                <h1>Register!</h1>
    
                <form method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="email" class="form-control" id="username" placeholder="Enter Username" name="username">
                      </div>

                    <div class="form-group">
                      <label for="emailaddress">Email address</label>
                      <input type="email" class="form-control" id="emailaddress" aria-describedby="emailHelp" placeholder="johndoe@gmail.com" name="emailaddress">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                      </div>
                    
                    <button type="submit" class="btn btn-warning" name="register">Register</button>
                </form>                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </div>

  </body>
</html>
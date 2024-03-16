<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login_signup.css">
  </head>
  <body>
    <div class="container">
    
        <div class="login-container">
            <div class="login-bg">
                
            </div>
    
            <div class="loginForm">
                <h1>Register!</h1>
    
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

                    <div class="row">
                        <div class="col">
                            <label for="birthdate">Date of Birth</label>
                            <input class="form-control" id="birthdate" placeholder="Doe" name="birthdate" type="date" value="<?php echo isset($_POST["birthdate"]) ? $_POST["birthdate"] : ''; ?>" required>
                        </div>
                        <div class="col">
                            <label for="gender">Gender</label>
                            <select class="form-select" id="gender" name="gender" value="<?php echo isset($_POST["gender"]) ? $_POST["gender"] : ''; ?>" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>" required>
                        <div class="invalid-feedback username-invalid">This username is already in use.</div>
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
                    
                    <button type="submit" class="btn btn-warning" name="register">Register</button>
                </form>                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </div>

  <?php
    include ("includes/footer.php");
  ?>

  </body>
</html>

<?php
include ("register.php");
?>
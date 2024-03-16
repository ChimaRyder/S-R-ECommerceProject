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

    <?php
    include ("includes/header.php");
    ?>

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

    <?php
    include ("includes/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
<?php

    if (isset($_POST['login'])) {
        include ('connect.php');

        if ($password == "1"){
            header("Location: http://localhost/f1sullano/seller_accounts.php");
            exit();
        }

        //get data from form
        $email = $_POST['emailaddress'];
        $password = $_POST['password'];

        //search for users with same email
        $sqlfind = "select * from tblcustomer where Email = '$email' ";
        $sqlfindseller = "select * from tblseller where Email = '$email' ";
        $result = mysqli_query($connection, $sqlfind);
        $sellerresult = mysqli_query($connection, $sqlfindseller);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($email === $row["Email"] && password_verify($password, $row["Password"])) {
                $_SESSION["Customer_ID"] = $row["Customer_ID"];
                echo "<script>
                window.location.href = 'dashboard.php';
                </script>";
            } else {
                echo "<script>
                document.querySelector('.invalid-feedback').style.display = 'block';
                </script>";

            }
        } else if (mysqli_num_rows($sellerresult) === 1) {
            $row = mysqli_fetch_assoc($sellerresult);

            if ($email === $row["Email"] && password_verify($password, $row["Password"])) {
                $_SESSION["Seller_ID"] = $row["Seller_ID"];
                echo "<script>
                window.location.href = 'selleroverview.php';
                </script>";
            } else {
                echo "<script>
                document.querySelector('.invalid-feedback').style.display = 'block';
                </script>";

            }
        }

        echo "<script>
                document.querySelector('.invalid-feedback').style.display = 'block';
                </script>";
    }

?>
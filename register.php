<?php


    if (isset($_POST['register'])) {
        include ("connect.php");
        //retreive data from form
        $emailaddress = $_POST['emailaddress'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $confirm_password = $_POST['confirm_password'];

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        $sqlfind = "select * from tblcustomer where Email = '$emailaddress' ";

        $count_email = mysqli_num_rows(mysqli_query($connection , $sqlfind));

        if ($count_email == 0 && password_verify($confirm_password, $password)) {

            //query
            $sql = "insert into tblcustomer(First_Name, Last_Name, Email, Password) values('$fname', '$lname', '$emailaddress', '$password')";
            mysqli_query($connection, $sql);

            $sqlsearch = "select * from tblcustomer where Email = '$emailaddress' ";
            $result = mysqli_query($connection, $sqlfind);
            $row = mysqli_fetch_assoc($result);
            $customerID = $row['Customer_ID'];

            $createwallet = "insert into tblpoints_wallet(Customer_ID) values('$customerID')";
            $createcart = "insert into tblcart(Customer_ID) values('$customerID')";

            mysqli_query($connection, $createwallet);
            mysqli_query($connection, $createcart);

            echo "<script>
               window.sessionStorage.setItem('accountCreated', 'true');
               window.location.replace('login.php');
            </script>";
        } else {
            if (!password_verify($confirm_password, $password)) {
                echo "<script>
            document.querySelector('.password-invalid').style.display = 'block';
            </script>";
            }

            if ($count_email != 0) {
                echo "<script>
            document.querySelector('.email-invalid').style.display = 'block';
            </script>";
            }
        }
    }


?>
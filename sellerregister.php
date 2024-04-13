<?php


if (isset($_POST['register_seller'])) {
    include("connect.php");
    //retreive data from form
    $emailaddress = $_POST['emailaddress'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $sqlfind = "select * from tblseller where Email = '$emailaddress' ";

    $count_email = mysqli_num_rows(mysqli_query($connection, $sqlfind));

    if ($count_email == 0 && password_verify($confirm_password, $password)) {

        //query
        $sql = "insert into tblseller(First_Name, Last_Name, Email, Password) values('$fname', '$lname', '$emailaddress', '$password')";
        mysqli_query($connection, $sql);

        $sqlsearch = "select * from tblseller where Email = '$emailaddress' ";
        $result = mysqli_query($connection, $sqlfind);
        $row = mysqli_fetch_assoc($result);
        $sellerID = $row['Seller_ID'];

        $store = "insert into tblstore(Seller_ID) values('$sellerID')";
        mysqli_query($connection, $store);

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




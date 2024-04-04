<?php

    if (isset($_POST['login'])) {
        include ('connect.php');

        //get data from form
        $email = $_POST['emailaddress'];
        $password = $_POST['password'];

        //search for users with same email
        $sqlfind = "select * from tblcustomer where Email = '$email' ";
        $result = mysqli_query($connection, $sqlfind);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($email === $row["Email"] && password_verify($password, $row["Password"])) {
                echo "<script>
                window.location.href = 'dashboard.php';
                </script>";
            } else {
                echo "<script>
                document.querySelector('.invalid-feedback').style.display = 'block';
                </script>";

            }
        }
    }

?>
<?php

    if (isset($_POST['login'])) {
        include ('connect.php');

        //get data from form
        $email = $_POST['emailaddress'];
        $password = $_POST['password'];

        //search for users with same email
        $sqlfind = "select * from tbluseraccount where emailadd = '$email' ";
        $result = mysqli_query($connection, $sqlfind);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $user = $row["username"];

            if ($email === $row["emailadd"] && password_verify($password, $row["password"])) {
                echo "<script>
                window.location.href = 'index.php';
                alert('Login successful! Welcome back, $user!');
                </script>";
            } else {
                echo "<script>
                document.querySelector('.invalid-feedback').style.display = 'block';
                </script>";

            }
        }
    }

?>
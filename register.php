<?php


    if (isset($_POST['register'])) {
        include ("connect.php");
        //retreive data from form
        $username = $_POST['username'];
        $emailaddress = $_POST['emailaddress'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $confirm_password = $_POST['confirm_password'];

        $sqlfind = "select * from tbluseraccount where emailadd = '$emailaddress' ";

        $count_users = mysqli_num_rows(mysqli_query($connection , $sqlfind));

        if ($count_users == 0 && password_verify($confirm_password, $password)) {
            //query
            $sql = "insert into tbluseraccount(username, emailadd, password) values('$username', '$emailaddress', '$password')";
            mysqli_query($connection, $sql);

            echo "<script>
               window.location.href = 'login.php';
               alert('Account created! Please login.');
            </script>";
        } else {
            echo "<script>
                alert('This account already exists.');
            </script>";

        }
    }


?>
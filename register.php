<?php


    if (isset($_POST['register'])) {
        include ("connect.php");
        //retreive data from form
        $username = $_POST['username'];
        $emailaddress = $_POST['emailaddress'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $confirm_password = $_POST['confirm_password'];

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];

        $sqlfind = "select * from tbluseraccount where emailadd = '$emailaddress' ";
        $sqlfinduser = "select * from tbluseraccount where username = '$username' ";

        $count_email = mysqli_num_rows(mysqli_query($connection , $sqlfind));
        $count_users = mysqli_num_rows(mysqli_query($connection , $sqlfinduser));

        if ($count_email == 0 && $count_users == 0 && password_verify($confirm_password, $password)) {

            //query
            $sql = "insert into tbluseraccount(username, emailadd, password) values('$username', '$emailaddress', '$password')";
            mysqli_query($connection, $sql);

            $profile = "insert into tbluserprofile(firstname, lastname, gender, birthdate) values('$fname', '$lname', '$gender', '$birthdate')";
            mysqli_query($connection, $profile);

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

            if ($count_users != 0) {
                echo "<script>
            document.querySelector('.username-invalid').style.display = 'block';
            </script>";
            }

        }
    }


?>
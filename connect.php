<?php

    $connection = new mysqli('localhost', 'root', '', 'dbsullanof1');

    if (!$connection) {
        die (mysqli_error($connection));
    }


?>

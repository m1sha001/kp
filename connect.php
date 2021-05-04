<?php
    $connect = mysqli_connect('localhost', 'root', 'newpassword', 'register');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>

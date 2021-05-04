<?php
        session_start();
        require_once 'connect.php';

        $ida =$_SESSION['art']['id'];

        mysqli_query($connect, "DELETE FROM `articles` WHERE `id`='$ida';");
        header('Location: ../person.php');
?>

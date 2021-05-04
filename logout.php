<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['art']);
header('Location: ../index.php');
?>
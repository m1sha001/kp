<?php
    session_start();
    require_once 'connect.php';

    $name_article = $_POST['name_article'];
    $edittext = $_POST['edittext'];
    $id_art = $_SESSION['art']['id'];

    mysqli_query($connect, "UPDATE  `articles` SET articlename='$name_article', articletext='$edittext', articledate=CURRENT_TIMESTAMP  WHERE id='$id_art';");

    header('Location: ../person.php');
?>

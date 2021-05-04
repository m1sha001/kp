<?php

    session_start();
    require_once 'connect.php';

    $articlename = $_POST['articlename'];
    $edittext = $_POST['edittext'];
    $id_user = $_SESSION['user']['id'];
    $user_article = $_SESSION['user']['name'];

    mysqli_query($connect, "INSERT INTO `articles` (`id`, `articlename`, `articletext`, `user_article`, `articledate`,`id_user`)
                                            VALUES (NULL, '$articlename', '$edittext', '$user_article', CURRENT_TIMESTAMP, '$id_user')");
    header('Location: ../person.php');

?>

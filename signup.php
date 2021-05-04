<html lang="ru">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Ошибка</title>

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>

    <header>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

      <h5 class="my-0 mr-md-auto font-weight-normal">Ошибка</h5>
      <nav class="my-2 my-md-0 mr-md-3">

      </nav>

      </div>
    </header>
<main>
        <?php
            session_start();
            require_once 'connect.php';

            $name = $_POST['name'];
            $login = $_POST['login'];
            $pass = $_POST['pass'];


            if (($name != '') && ($login != '') && ($pass != '')){
                mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `pass`) VALUES (NULL, '$name', '$login', '$pass')");
                header('Location: ../index.php');
            }
        ?>

    <section>
      <div align="center" class="container">
            <h3>Заполните все поля</h3>
            <br>
            <a href="/register.php" class="btn btn-success">Назад</a>
      </div>
    </section>
</main>
<footer class=" container pt-4 my-md-5 pt-md-2 border-top">
<small class="d-block mb-3 text-muted">©2021 А-08-18 Мельков М.В.</small>
</div>

</footer>
</body>
</html>

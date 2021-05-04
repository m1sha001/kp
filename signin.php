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
      <div  class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

      <h5 class="my-0 mr-md-auto font-weight-normal">Ошибка</h5>
      <nav class="my-2 my-md-0 mr-md-3">

      </nav>

      </div>
    </header>
<main>
        <?php
                session_start();
                require_once 'connect.php';

                $login = $_POST['login'];
                $pass = $_POST['pass'];

                $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
                if (mysqli_num_rows($check_user) > 0) {
                    $user = mysqli_fetch_assoc($check_user);

                    $_SESSION['user'] = [
                        "id" => $user['id'],
                        "name" => $user['name'],
                    ];

                    header('Location: ../person.php');
                }
        ?>
    <section>
      <div  align="center" class="container">
            <h3>Неправильно введены данные</h3>
            <br>
            <a href="/vxod.php" class="btn btn-success">Назад</a>
      </div>
    </section>
</main>

<footer class=" container pt-4 my-md-5 pt-md-2 border-top">
<small class="d-block mb-3 text-muted">©2021 А-08-18 Мельков М.В.</small>
</div>

</footer>
</body>
</html>

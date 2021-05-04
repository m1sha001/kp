<!doctype html>
<html lang = "ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Форма авторизации</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<h5 class="my-0 mr-md-auto font-weight-normal">Авторизация</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="index.php">Главная</a>
      </nav>
    </div>

<div class="container mt-4">
  <h1> Форма авторизации</h1>
  <form  action="model/signin.php" method="post"><br>
  <input type="text" class="form-control" name="login"  placeholder="Введите логин"><br><br>
  <input type="password" class="form-control" name="pass"  placeholder="Введите пароль"><br><br>
  <button class="btn btn-success"  type ="submit" >Войти</button>
 </form>



 <footer class=" container pt-4 my-md-5 pt-md-2 border-top">
 <small class="d-block mb-3 text-muted">©2021 А-08-18 Мельков М.В.</small>
 </div>

 </footer>
</div>
</body>
</html>

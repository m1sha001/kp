<!doctype html>
<html lang = "ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Удаление</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>


  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

<h5 class="my-0 mr-md-auto font-weight-normal">Удаление</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="person.php">Главная</a>
      </nav>
    </div>

<div class="container mt-4">
  <h1>Вы уверены что хотите удалить статью?</h1>
  <form  action="model/deleteart.php" method="post"><br>
  <button class="btn btn-success"  type ="submit" >Да</button><br><br>
 </form>
<a class="btn btn-success"  href="redactart.php" >Нет</a>


 <footer class=" container pt-4 my-md-5 pt-md-2 border-top">
 <small class="d-block mb-3 text-muted">©2021 А-08-18 Мельков М.В.</small>
 </div>

 </footer>

</div>

</body>
</html>

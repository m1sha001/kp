<!doctype html>
<html lang = "ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Форма регистрации</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>


<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
<h5 class="my-0 mr-md-auto font-weight-normal">Личный кабинет</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="index.php">Главная</a>
        <a class="btn btn-outline-primary" href="article.php">Написать статью</a>
        <a class="btn btn-outline-primary" href="model/logout.php">Выйти</a>
      </nav>
    </div>

    <main>
    <?php
      session_start();
      error_reporting(0);
      if ($_SESSION['user']):?>

      <section >
        <div class="container">
          <p class="lead">Пользователь:  <?= $_SESSION['user']['name'] ?></p>

        </div>

      <section>
        <div class="container">
                <h5>Измененить статью</h5>
              <form  action="model/signart.php" method="post"><br>
              <h6>
              <input type="text" class="form-control" name="number"  placeholder="Введите id статьи"><br>
              <button class="btn btn-outline-primary"  type ="submit" >Изменить</button><br><br>
            </h6>
            </form>
        </div>
      </section>
      <section>
        <div class="container">
              <div class="d-flex flex-wrap">
              <div class="card mb-4 rounded-5 shadow-sm">
              <div class="card-header py-3">
                <div class="card-body">
              <h3> Статьи: </h3><br>
                    <?php
                      require_once 'model/connect.php';
                      $idus=$_SESSION['user']['id'];
                      $res=mysqli_query($connect, "SELECT * FROM "."articles"." WHERE id_user=$idus order by id desc;");
                        if(mysqli_num_rows($res)!=0){
                          while ($row = mysqli_fetch_array($res)) {
                              echo '<h3>'.$row[1].'</h3>
                                    '.$row[2].'
                                    <h6>Дата: '.$row[4].'</h6>
                                    <h6>id: '.$row[0].'</h6>  <br><hr><br>';

                          }
                        }
                      else{
                        echo '<h4>Вы еще не написали ни одной статьи.</h4>';
                      }
                    ?>
            </div>
          </div>
    </div>
  </div>
  </div>
      </section>
      <?php else:?>
      <?php endif; ?>
  		<script src="js/jquery.min.js"></script>
    </main>

 <footer class=" container pt-4 my-md-5 pt-md-2 border-top">
 <small class="d-block mb-3 text-muted">©2021 А-08-18 Мельков М.В.</small>
 </div>

 </footer>

</div>

</body>
</html>

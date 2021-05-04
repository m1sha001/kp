<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Редактирование статьи</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

  <script src="ckeditor/ckeditor.js"></script>
</head>
<body>

  <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Редактирование статьи</h5>
    <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="person.php">Назад</a>
    <a class="btn btn-outline-primary" href="model/logout.php">Выход</a>
    </nav>
    </div>
  </header>

  <main>

  <?php
    session_start();
    error_reporting(0);
    if ($_SESSION['user']):?>

    <section>
      <div class="container">
        <p class="lead">Пользователь:  <?= $_SESSION['user']['name'] ?></p>
<a class="btn btn-outline-primary" href="conf.php">Удалить</a>
      </div>
<br>
            </section>
            <section>
              <div class="container">
                  <form  action="model/updateart.php" method="post">
                    <button class="btn btn-outline-primary" type ="submit" >Изменить</button><br><br>

                                  <h3> Название статьи:</h3><br>
                                      <input type="text" value="<?= $_SESSION['art']['articlename'] ?>" name="name_article" class="form-control"  placeholder="Название статьи" class="inart"><br><br>

                                <textarea name="edittext" class="textwrapper"><?= $_SESSION['art']['articletext'] ?></textarea>
                                <script>
                                CKEDITOR.replace( 'edittext' );
                                </script>
                                <br>

                </form>
              </div>
            </section>


    <?php endif; ?>
  <script src="js/jquery.min.js"></script>
  </main>
  <footer class=" container pt-4 my-md-5 pt-md-2 border-top">
<small class="d-block mb-3 text-muted">©2021 А-08-18 Мельков М.В.</small>
</div>

</footer>

</body>
</html>

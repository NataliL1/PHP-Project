<!DOCTYPE html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/minty/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="photo/logomodel1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Регистрация</title>
</head1>
<body>
  <style type="text/css">
  .icons {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
      }
  </style>
<?php
include_once 'mysql_connection.php';
include_once 'database.php';
if($con)
{
  //echo "Имаме връзка!";
  
  mysqli_select_db($con,$db);
  mysqli_set_charset($con,"UTF8");
  
  if(isset($_POST['submit']))
  {
    $error = 0;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $height = $_POST['height'];

    $query = "INSERT INTO `users`
    (`name`, `email`, `age` , `phone` ,`height`) 
    VALUES ('$name','$email','$age' ,'$phone' , '$height')";
    if($error == 0)
    {
      $result = mysqli_query($con,$query);
      echo "<h1>Успешно изпратихте своята кандидатура!</h2>";
    }
  }
  
}

?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img class="img-fluid" width="40" height="30" src="photo/logomodel1.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link text-dark" href="index.php">Нашите модели</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark active" href="registraciq.php">Стани модел</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="vhod.php">Вход</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container mt-5">
  <div class="row text-center text-dark mb-5">
    <div class="col-12">
      <h1>Стани модел</h1> <br>
      <p class="fs-4">Искаш да бъдеш модел, ние ти даваме тази възможност, просто попълни формата.</p>
    </div>
  </div>
  <div class="row">
  <div class="col-lg-6 col-md-12 col-sm-12 mb-md-4 mb-sm-4">
    <img src="photo/photo.jpg" class="img-fluid">
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12">
    <form action="" method="POST">
Име и фамилия: <input type="text" id="formLabel1" name="name" class="form-control" /><br />
Имейл: <input type="text" name="email" class="form-control" /><br />
Години: <input type="text" name="age" class="form-control" /><br />
Телефонен номер: <input type="text" name="phone" class="form-control" /><br />
Ръст (в см.): <input type="text" name="height" class="form-control" /><br />
<input type="submit" name="submit" class="btn btn-primary text-dark" value="Кандидатствай" />
</form>
  </div>
</div>
</div>
    <div class="container-fluid footer bg-light mt-5">
      <div class="row align-items-center">
        <div class="col-4">© 2022 ВСИЧКИ ПРАВА ЗАПАЗЕНИ</div>
        <div class="col-4 text-center">
          <a href="#" class="fa fa-facebook icons"></a>
          <a href="#" class="fa fa-twitter icons"></a>
          <a href="#" class="fa fa-instagram icons"></a>
        </div>
        <div class="col-4" style="text-align: right">Privacy Policy Terms of Use</div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
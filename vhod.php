<!DOCTYPE html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/minty/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="photo/logomodel1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Вход</title>
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
//session_start();

$con = mysqli_connect('localhost', 'root','' );
$db = mysqli_select_db($con, 'kursova');

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = " SELECT * FROM  admins WHERE username='$username' AND password='$password' ";
  $query = mysqli_query($con,$sql);

  $row = mysqli_num_rows($query);
    if($row == 1){
      echo "Успешно влизане!";
      $_SESSION['user'] = $username;
      echo "<script>window.location.href='slujiteli.php'</script>";
      //header('Location:slujiteli.php');
      $time = 60*60*24*7;
      setcookie("username",$username,time()+$time);
      setcookie("password",$password,time()+$time);
    }else{
      echo '<h2>Неуспешно влизане!</h2>';
      //header('Location:registraciq.php');
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
              <a class="nav-link text-dark" href="registraciq.php">Стани модел</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark active" href="vhod.php">Вход</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container mt-5">
  <div class="row mb-5">
  <div class="col-12">
    <h1 class="text-center text-dark">Вход за служители</h1>
  </div>
</div>
  <div class="row">
  <div class="col-lg-6 col-md-12 col-sm-12 mb-md-4 mb-sm-4">
    <img src="photo/men.jpg" style="height: 400px; width: 600px" class="img-fluid">
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12">
    <form action="" method="POST">
Потребителско име: <input type="text" id="formLabel1" name="username" class="form-control" /><br />
Парола: <input type="password" name="password" class="form-control" /><br />
<input type="submit" name="submit" class="btn btn-primary text-dark" value="Напред" />
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
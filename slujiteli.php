<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/minty/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="photo/logomodel1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Кандидати</title>
</head>
<body>
	<style type="text/css">
	.icons {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
      }
      .footer{
        margin-bottom: 0;
      }
      .snimka{
        background-image: url(message.png);
        background-position: center center;
        background-size: cover;
        position: relative;
        height: 200px;
        align-items: center;
      }
	</style>
	<?php 
		include_once 'database.php';


		if($con)
		{
			$sql = 'SELECT * FROM users';
			$result = mysqli_query($con, $sql);
			$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            <li class="nav-item">
              <a class="nav-link text-dark active" href="logout.php">Изход</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="conainer">
	<div class="row snimka">
		<div class="col-12">
			<h1 class="text-center my-5 fw-bold text-dark" style="font-size: 60px">Добре дошли!</h1>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col">
			<p class="text-center fs-4">Изпратени кандидатури</p>
		</div>
	</div>
		<?php  foreach ($users as $users ) { ?>
      <div class="row justify-content-center">
      <div class="col-10">
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th>ID</th>
      <th>Име</th>
      <th>Имейл</th>
      <th>Години</th>
      <th>Телефонен номер</th>
      <th>Ръст</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><?php echo htmlspecialchars($users['id']); ?></th>
      <th><?php echo htmlspecialchars($users['name']); ?></th>
      <th><?php echo htmlspecialchars($users['email']); ?></th>
      <th><?php echo htmlspecialchars($users['age']); ?></th>
      <th><?php echo htmlspecialchars($users['phone']); ?></th>
      <th><?php echo htmlspecialchars($users['height']); ?></th>
    </tr>
  </tbody>
</table>	
</div>
</div>
</div>
	<?php	} ?>
<div class="container mb-0 mt-4">
  <div class="row">
    <div class="col-12">
      <img src="photo/message2.png" class="img-fluid" style="width: 100%;">
    </div>
  </div>
</div>
    <div class="container-fluid footer bg-light mb-0">
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
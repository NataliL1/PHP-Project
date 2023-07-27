<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/minty/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="photo/logomodel1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
     .header{
		min-height: 70vh;
		background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("photo/sunflowers.jpg");
		background-position: center top;
		background-size: cover;
		position: relative;
      }
      h1{
      	font-size: 80px;
      }
	</style>

	<script>
		jQuery(document).ready(function(){
			jQuery("#cards").fadeOut(800);
			jQuery("#cards").fadeIn(800);
			jQuery("#cards").click(function(){
			jQuery(this).css("background-color","pink");
		});
			jQuery("#cards1").fadeOut(900);
			jQuery("#cards1").fadeIn(900);
			jQuery("#cards1").click(function(){
			jQuery(this).css("background-color","pink");
		});
			jQuery("#cards2").fadeOut(1000);
			jQuery("#cards2").fadeIn(1000);
			jQuery("#cards2").click(function(){
			jQuery(this).css("background-color","pink");
		});
			jQuery("#cards3").fadeOut(1100);
			jQuery("#cards3").fadeIn(1100);
			jQuery("#cards3").click(function(){
			jQuery(this).css("background-color","pink");
		});
			jQuery("#cards4").fadeOut(1200);
			jQuery("#cards4").fadeIn(1200);
			jQuery("#cards4").click(function(){
			jQuery(this).css("background-color","aqua");
		});
			jQuery("#cards5").fadeOut(1300);
			jQuery("#cards5").fadeIn(1300);
			jQuery("#cards5").click(function(){
			jQuery(this).css("background-color","aqua");
		});
			jQuery("#cards6").fadeOut(1400);
			jQuery("#cards6").fadeIn(1400);
			jQuery("#cards6").click(function(){
			jQuery(this).css("background-color","aqua");
		});
			jQuery("#cards7").fadeOut(1500);
			jQuery("#cards7").fadeIn(1500);
			jQuery("#cards7").click(function(){
			jQuery(this).css("background-color","aqua");
		});
			$("h1").click(function(){
 			$("h1").animate({opacity: '0.5', height: '150px', width: '150px'});
			}); 
			  $("h2").click(function(){
			  var div = $("h2");  
			  div.animate({fontSize: '3em'}, "slow");
			  });
		});
	</script>
	<script>
		function showHint(str) {
		  if (str.length == 0) {
		    document.getElementById("txtHint").innerHTML = "";
		    return;
		  } else {
		    var xmlhttp = new XMLHttpRequest();
		    xmlhttp.onreadystatechange = function() {
		      if (this.readyState == 4 && this.status == 200) {
		        document.getElementById("txtHint").innerHTML = this.responseText;
		      }
		    };
		    xmlhttp.open("GET", "hint.php?q=" + str, true);
		    xmlhttp.send();
		  }
		}
	</script>
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
              <a class="nav-link text-dark active" href="index.php">Нашите модели</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="registraciq.php">Стани модел</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="vhod.php">Вход</a>
            </li>
          </ul>
           <form class="d-flex">
	        <input class="form-control me-sm-2" type="text" placeholder="Search" onkeyup="showHint(this.value)">
	        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Търси</button>
	        <p><span id="txtHint"></span></p>
	      </form>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-12 header">
    			<h1 class="text-light text-center mt-5 pt-5">Школа за модели</h1>
    		</div>
    	</div>
    </div>
	<div class="container mt-5">
		<div class="row mb-3">
			<div class="col-12">
				<h2 class="text-center text-primary">Нашите модели</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-12 mb-md-3 mb-sm-3">
				<div class="card text-center" id="cards" style="width: 18rem;">
				  <img src="photo/gabriela.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Габриела Иванова</h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Височина: 180 см</li>
				    <li class="list-group-item">Гръдна обиколка: 86 см</li>
				    <li class="list-group-item">Талия: 61 см </li>
				    <li class="list-group-item">Ханш: 91 см </li>
				    <li class="list-group-item">Обувки: 40</li>
				  </ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 mb-md-3 mb-sm-3">
				<div class="card text-center" id="cards1" style="width: 18rem;">
				  <img src="photo/viktoriq.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Виктория Лалева</h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Височина: 172 см</li>
				    <li class="list-group-item">Гръдна обиколка: 85 см</li>
				    <li class="list-group-item">Талия: 65 см </li>
				    <li class="list-group-item">Ханш: 88 см </li>
				    <li class="list-group-item">Обувки: 38</li>
				  </ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 mb-md-3 mb-sm-3">
				<div class="card text-center" id="cards2" style="width: 18rem;">
				  <img src="photo/hristina.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Христина Велкова</h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Височина: 176 см</li>
				    <li class="list-group-item">Гръдна обиколка: 85 см</li>
				    <li class="list-group-item">Талия: 62 см</li>
				    <li class="list-group-item">Ханш: 92 см</li>
				    <li class="list-group-item">Обувки: 39</li>
				  </ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 mb-md-3 mb-sm-3">
				<div class="card text-center" id="cards3" style="width: 18rem;">
				  <img src="photo/evelian.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Евелиана Радева</h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Височина: 171 см</li>
				    <li class="list-group-item">Гръдна обиколка: 85 см</li>
				    <li class="list-group-item">Талия: 61 см</li>
				    <li class="list-group-item">Ханш: 90 см</li>
				    <li class="list-group-item">Обувки: 39</li>
				  </ul>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-lg-3 col-md-12 col-sm-12 mb-md-3 mb-sm-3">
				<div class="card text-center" id="cards4" style="width: 18rem;">
				  <img src="photo/kristiqn.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Кристиян Тодоров</h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Височина: 183 см</li>
				    <li class="list-group-item">Гръдна обиколка: 90 см</li>
				    <li class="list-group-item">Талия: 82 см</li>
				    <li class="list-group-item">Ханш: 92 см</li>
				    <li class="list-group-item">Обувки: 44</li>
				  </ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 mb-md-3 mb-sm-3">
				<div class="card text-center" id="cards5" style="width: 18rem;">
				  <img src="photo/martin.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Мартин Петров</h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Височина: 183 см</li>
				    <li class="list-group-item">Гръдна обиколка: 100 см</li>
				    <li class="list-group-item">Талия: 75 см </li>
				    <li class="list-group-item">Ханш: 96 см </li>
				    <li class="list-group-item">Обувки: 43</li>
				  </ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 mb-md-3 mb-sm-3">
				<div class="card text-center" id="cards6" style="width: 18rem;">
				  <img src="photo/boiko.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Бойко Лъчезаров</h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Височина: 181 см</li>
				    <li class="list-group-item">Гръдна обиколка: 102 см</li>
				    <li class="list-group-item">Талия: 79 см </li>
				    <li class="list-group-item">Ханш: 96 см </li>
				    <li class="list-group-item">Обувки: 43</li>
				  </ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 mb-md-3 mb-sm-3">
				<div class="card text-center" id="cards7" style="width: 18rem;">
				  <img src="photo/radmil.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Радмил Василев</h5>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Височина: 103 см</li>
				    <li class="list-group-item">Гръдна обиколка: 80 см</li>
				    <li class="list-group-item">Талия: 80 см </li>
				    <li class="list-group-item">Ханш: 92 см </li>
				    <li class="list-group-item">Обувки: 42</li>
				  </ul>
				</div>
			</div>
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
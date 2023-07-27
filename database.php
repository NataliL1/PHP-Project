<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "kursova";

$con = mysqli_connect($host,$user,$pass,$db);
if($con)
{
	echo "Свързан";
}
else
{
	echo "Не сте свързан!!!";
}

?>
</body>
</html>
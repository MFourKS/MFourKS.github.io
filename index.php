<!doctype html>
<html lang="ru">
	<head>
		<title>informPortalULSU</title>
		<meta charset="utf-8">
		<meta name="Description" content="Архив документов УлГУ">
		<link rel="stylesheet" href="css/style.css" type="text/css">

<style type="text/css">
	footer {
				width: 100%;
				height: 100px;
				background: #979797;
				padding: 15px;
		}
	</style>
		<script src="script.js" type="text/javascript" 
		script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
		</script>

		</script>
	</head>

	<body>
		<header>
			<IMG SRC="image/Head_1.png" width = 100% height= 100%>
		</header>
<section>


		<div id="box" class="block">
		
			<span class="s1">
				<h1>Добро пожаловать!</h1>
				<center><b>Пожалуйста, войдите под своими учетными данными<br> для продолжения работы</b></center>
				<br><br>
			</span>
<!-- 			Проверка формы при помощи js -->
			<form action="frame_one.php" name="myForm" method="post">
			<span class="s2">
				Email адрес<br>
				<input id='email'type="email" name="email" value="" placeholder="Введите email" size="80"><br><br><br>
				Пароль<br>
				<input type="passvord" required name="passvord" value="" placeholder="Введите пароль" size="80"><br><br>
			</span>
				<center><button id='validate' type="submit" class="s3">Вход</button><br><br>
				<span class="s1"><a href="frame_two.php">Или продолжить как гость</a></span></center>
		</form>
		</div>
</section>
		<footer>
				<IMG SRC="image/telephone.png" width = 25px height= 22px><span class="s2"> 8-927-***-**-**</span><br><br>
				<IMG SRC="image/email.jpg"  width = 26px height= 22px><span class="s2"> group_is_18_1@mail.ru</span>
		</footer>

	</body>
</html>
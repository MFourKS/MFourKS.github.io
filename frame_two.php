<!doctype html>
<html>
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
		<script src="script.js" type="text/javascript"></script>
	</head>

	<body>
		<header>
			<IMG SRC="image/Head_1.png" width = 100% height= 100%>
		</header>



		<span class="s4">
			<form action="index.php">
				<h1>Вы вошли как <a href="#" >Гость</a>&nbsp;&nbsp;<button type="submit" class="s5"  >Выход</button></h1>
				<br>
			</form>
		</span>

		<span class="s1">
				<h1>Фильтры</h1>
				<br><br>
		</span>
  <form>
  	<!--   Фильтры -->
<center>

  	<select name="filters_one" class="s7">
    <option value="s1">Primary</option>
    <option value="s2">Primary</option>
    <option value="s3">Primary</option>
    <option value="s4">Primary</option>
   	</select> 

  	<select name="filters_two" class="s7">
    <option value="s1">Primary</option>
    <option value="s2">Primary</option>
    <option value="s3">Primary</option>
    <option value="s4">Primary</option>
   	</select> 

   	<select name="filters_free" class="s7">
    <option value="s1">Primary</option>
    <option value="s2">Primary</option>
    <option value="s3">Primary</option>
    <option value="s4">Primary</option>
   	</select> 

   	<select name="filters_four" class="s7">
    <option value="s1">Primary</option>
    <option value="s2">Primary</option>
    <option value="s3">Primary</option>
    <option value="s4">Primary</option>
   	</select> 

   	 <select name="filters_five" class="s7">
    <option value="s1">Primary</option>
    <option value="s2">Primary</option>
    <option value="s3">Primary</option>
    <option value="s4">Primary</option>
   	</select> 

   	 <select name="filters_six" class="s7">
    <option value="s1">Primary</option>
    <option value="s2">Primary</option>
    <option value="s3">Primary</option>
    <option value="s4">Primary</option>
   	</select> 
</center>

<!-- Справочник -->
  	<span class="s6">
   	<p><strong class="s6">Справочник</strong></p>
  	<p><select name="inform" class="s6">
    <option value="s1">Предметы</option>
    <option value="s2">Преподаватели</option>
    <option value="s3">Приказы</option>
    <option value="s4">Студенты</option>
   	</select> 
	</span>
  </form> 
<!-- Вывод результатов в виде таблицы-->
<section class="div_all" >
	
<table>
				<thead class="s8">
					<tr>
						<th>Таблицы базы данных</th>
					</tr>
				</thead>
				<tbody class="s8">
					<th>
<?php
	include 'script.php';
?>
					</th>
				</tbody>
			</table>
</section>
		<footer>
				<IMG SRC="image/telephone.png" width = 25px height= 22px><span class="s2"> 8-927-***-**-**</span><br><br>
				<IMG SRC="image/email.jpg"  width = 26px height= 22px><span class="s2"> group_is_18_1@mail.ru</span>
		</footer>

	</body>
</html>
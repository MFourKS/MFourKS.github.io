<?php
// echo 'Hello World! wdsdf';

$connect1=mysqli_connect("127.0.0.1", "root", "root", "mysql") or die ("Нe удалось
соединение с источником данных!");

$result = mysqli_query($connect1, "SHOW TABLES", MYSQLI_USE_RESULT)
or die("Ошибка запроса: " . mysqli_connect_error());

						foreach ($result as $value) {
	 					$string =  implode( ' </tr><tr>', $value);
	 					echo $string, '<br>';}
					

// $conn_string =  "host=localhost port=5432 dbname=postgres user=postgres password=postgres";
// $conn_string =  "host=92.63.96.147 port=5432 dbname=tts_for_doc user=for_practika password=is2021";
// $dbconn4 = pg_connect($conn_string) or die ("Нe удалось
// соединение с источником данных!");
    mysqli_free_result($result);

?>

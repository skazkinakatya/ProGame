<?php
setcookie ("user", "", time() - 60*60*24*14); //Убиваем куки
session_destroy();//Завершаем сесиию
header("Location: /autorize.php"); //Перебрасываем на страницу
die();
?>
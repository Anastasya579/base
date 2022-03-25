<?php

include "../autoload.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
<div class="menu">
    <a href="Applications.php">Applications</a>
    <a href="Teachers.php">Teachers</a>
    <a href="Groups.php">Groups</a>
    <a href="Divisions.php">Divisions</a>
    <a href="main.php">Go back</a>
</div>

<!-- Page content -->
<div class="main">
<h1>Пользователи</h1>
<form class="back-alert" method="POST">
            <h2>Форма запроса</h2>
            <div class="form-alert"> 
          <div>
              <label>Фамилия</label>
              <input type="text" id="fam" name="fam" required><span>(обязательно для ввода)</span>
            </div>
          <div>
              <label>Имя</label>
              <input type="text" id="name" name="name" required><span>(обязательно для ввода)</span>
            </div>
          <div>
              <label>Отчество</label>
              <input type="text" id="pat" name="pat" required><span>(обязательно для ввода)</span>
            </div>
          <div>
              <label>Адрес электронной почты</label>
              <input type="text" id="mail" name="mail" required><span>(обязательно для ввода)</span>
            </div>
              <input class="bot-send-mail" type="submit" value="Отправить запрос">
              <input class="bot-send-mail" type="reset" value="Очистить форму">
        </div></form>

</div>




</body>
</html>
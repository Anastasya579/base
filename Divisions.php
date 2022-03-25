<?php

include "../autoload.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisions</title>
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
  <h1>Структурные подразделения и филиалы</h1>
  <form class="back-alert" method="POST">
            <h2>Подразделения\филиалы</h2>
            <div class="form-alert"> 
            <div>
              <label>Полное название структурного подразделения\филиала</label>
              <input type="text" id="divis" name="divis" required><span>(обязательно для ввода)</span>
            </div>
              <input class="bot-send-mail" type="submit" value="Отправить запрос">
              <input class="bot-send-mail" type="reset" value="Очистить форму">
            </div>
    
</form>
</div>




</body>
</html>
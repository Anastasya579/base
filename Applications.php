<?php

include "../autoload.php"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleform.css">
    </head>
<body>  
<div class="menu">
    <a href="Applications.php">Applications</a>
    <a href="Teachers.php">Teachers</a>
    <a href="Groups.php">Groups</a>
    <a href="Divisions.php">Divisions</a>
    <a href="main.php">Go back</a>
</div>

<div class="main">
<h2>Форма запроса на подключение пользователей\групп к онлайн-курсам</h2>
</div>

<form class="forms" method="POST">
<fieldset class="frost-p">
				<legend class="osnform"><h3>Пожалуйста, представьтесь</h3></legend>
				Имя: <input type =  "text" name = "name" placeholder =  "Введите имя"> <br><br>
				Фамилия: <input type =  "text" name = "faml" placeholder =  "Введите фамилию"> <br><br>
                Отчество: <input type =  "text" name = "othc" placeholder =  "Введите отчество"> <br><br>
                Эл. почта: <input type =  "text" name = "mail" placeholder =  "inbox@mail.ru"> <br><br>
</fieldset>

<br>

<fieldset class="frost">
		<legend class="osnform"><h3>Форма для заполнения на подключение к курсам преподавателя и группы</h3></legend>
           
            Имя: <input type =  "text" name = "namep" placeholder =  "Введите имя"> <br><br>
			Фамилия: <input type =  "text" name = "famlp" placeholder =  "Введите фамилию"> <br><br>
            Отчество: <input type =  "text" name = "othcp" placeholder =  "Введите отчество"> <br><br>
            Эл. почта: <input type =  "text" name = "mailp" placeholder =  "inbox@mail.ru"> <br><br>

		Подразделение: <input list = "guestlist" name="podr">
		<datalist id = "guestlist">
			<option value = "Ивановский филиал"> </option>
			<option value = "Кировский филиал"> </option>
			<option value = "Институт экономической информатики"> </option>
		</datalist><br><br>
		
        Лекция: <input list = "guestlisti" name="curse">
		<datalist id = "guestlisti">
			<option value = "Математический анализ"> </option>
			<option value = "Высшая математика"> </option>
			<option value = "Уголовный процесс"> </option>
            <option value = "Арбитражный процесс"> </option>
            <option value = "История России"> </option>
            <option value = "Гражданское право"> </option>
		</datalist><br><br>
        Группа: <input type = "text"  name = "groups" placeholder =  "Введите название группы"> <br> <br>
		Код группы: <input type = "text" name = "cgroup" placeholder =  "Введите код группы из КАС"> <br> <br>
        <p><b>Дата подачи заявки</b></p>
	Дата: <input type="date" name="delivery_date"> Время: <input type="time" name="delivery_time">
            <hr>
            </div>
              <input class="botr" type="submit" value="Отправить запрос"><br><br>
              <input class="botr" type="reset" value="Очистить форму">
            </div>

</fieldset>

</form>

</body>
</html>


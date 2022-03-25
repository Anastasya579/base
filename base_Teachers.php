<?php

include "../autoload.php"; 
 
$dbh = new SQLite3('db/teachers.db');
 
$db_teachers_init_sql = 'CREATE TABLE `teachers`
                      (ID INT PRIMARY KEY, fam TEXT NOT NULL, name TEXT, pat TEXT, mail TEXT)';

$dbh->query($db_teachers_init_sql);
 
$dbh->close();
 
echo "база инициализрована";
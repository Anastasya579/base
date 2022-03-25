<?php

include "../autoload.php"; 
 
$dbh = new SQLite3('db/applications.db');
 
$db_applications_init_sql = 'CREATE TABLE `applications` (ID INT PRIMARY KEY, name TEXT NOT NULL, faml TEXT NOT NULL, 
othc TEXT NOT NULL, mail TEXT NOT NULL, namep TEXT NOT NULL, famlp TEXT NOT NULL, othcp TEXT NOT NULL,
mailp TEXT NOT NULL, podr TEXT NOT NULL, curse TEXT NOT NULL, groups TEXT NOT NULL, cgroup TEXT NOT NULL,
delivery_date TEXT, delivery_time TEXT)';

$dbh->query($db_applications_init_sql);
 
$dbh->close();
 
echo "база инициализрована";
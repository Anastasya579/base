<?php

include "../autoload.php"; 
 
$dbh = new SQLite3('db/divisions.db');
 
$db_divisions_init_sql = 'CREATE TABLE `divisions`
                      (ID INT PRIMARY KEY, divis TEXT NOT NULL)';

$dbh->query($db_divisions_init_sql);
 
$dbh->close();
 
echo "база инициализрована";
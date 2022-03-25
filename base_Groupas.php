<?php

include "../autoload.php"; 


$dbh = new SQLite3('db/groups.db');
 
$db_groups_init_sql = 'CREATE TABLE groups
                      (ID INT PRIMARY KEY, fam TEXT NOT NULL, name TEXT)';
 

 $dbh->query($db_groups_init_sql);
 
 $dbh->close();
  
 echo "база инициализрована";

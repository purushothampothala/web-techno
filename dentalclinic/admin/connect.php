<?php
define('DB_SERVER',"localhost");
define('DB_USER',"root");
define('DB_DATABASE',"dentalclinic");
define('DB_PASSWORD',"");
define('DB_TYPE',"mysql");
$conn = new PDO(DB_TYPE.":host=".DB_SERVER.";dbname=".DB_DATABASE,DB_USER,DB_PASSWORD);
?>
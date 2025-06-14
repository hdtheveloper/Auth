<?php


require "constants.php";
require "config.php";


$dsn = "mysql:dbname=$database_config[db];host=$database_config[host]";

try{
	
$pdo = new PDO($dsn, $database_config['user'], $database_config['pass']);

} catch(PDOException $e){
	
	echo 'Connection failed : '. $e->getMessage(); 
	die();

}

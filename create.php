<?php 
$dsn = 'mysql:host=localhost; dbname=farhad';
$con = new PDO($dsn, 'root', '' );
$con->query("create table tabletest(
	id int(11) auto_increment primary key,
	name varchar(30) not null,
	email varchar(40) not null
)");

?>
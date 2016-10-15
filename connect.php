<?php
$dbhost='localhost';
$dbuser= "root";
$dbpassword= "";
$dbname="ulmesp";


$db =new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if (!$db){

	die("Error in connection".mysql_error());
}

$db1 =new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if (!$db1){

	die("Error in connection".mysql_error());
}

$db2 =new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if (!$db2){

	die("Error in connection".mysql_error());
}

$db3 =new mysqli($dbhost,$dbuser,$dbpassword,$dbname);

if (!$db3){

	die("Error in connection".mysql_error());
}




<?php

$local = true;
if($local){
    $host="localhost"; // Host name
    $username="root"; // Mysql username
    $password="web"; // Mysql password
    $db_name="fungi"; // Database name

    //Connect to server and select database.
    $pdo = new PDO("mysql:dbname=$db_name;host=$host", $username);

	define ('BASE_PATH', 'C:/xampp/htdocs/fungi/');
	define ('WEB_PATH', BASE_PATH . 'public_html/');
	define ('WEB_ROOT', 'http://localhost/fungi/_public_html/');
}else{
    $host="camelot.cs.messiah.edu"; // Host name
    $username="fungiweb"; // Mysql username
    $password="lich3n"; // Mysql password
    $db_name="fungi"; // Database name

    //Connect to server and select database.
    $pdo = new PDO("mysql:dbname=$db_name;host=$host", $username, $password);

    define ('WEB_PATH', "http://camelot.cs.messiah.edu/home/fungi");
    define ('ROOT_PATH', '/home/fungi/public_html/');

}

?>
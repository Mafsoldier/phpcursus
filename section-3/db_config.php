<?php


$db_host = 'localhost';
$db_name = 'myschool';
$db_user = 'cursus';
$db_password = 'zUj8q27SOaM5iwKD';

$dns = "mysql:host=$db_host;dbname=$db_name";


try {
    $db_connection = new PDO($dns, $db_user, $db_password);
} catch (Exception $e) {
    echo "There was a failure - ";//. $e->getMessage();
}

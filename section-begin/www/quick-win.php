<?php

$db_host = 'localhost';
$db_name = 'company';
$db_user = 'root';
$db_password = '';

// data source name
$dsn = "mysql:host=$db_host;dbname=$db_name";

$db_connection = new PDO($dsn, $db_user, $db_password);

$query = "SELECT * FROM users";

$results = $db_connection->query($query);


$db_conneciton = null;

foreach ($results as $result) {
    echo $result['firstName'];
    echo "<br />";
}

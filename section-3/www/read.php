<?php

require_once("../db_config.php");

$query = " SELECT firstName, surname FROM teachers";

if ($results = $db_connection->query($query)) {
    foreach ($results as $result) {
        echo $result['firstName'] . " " . $result['surname'];
        echo "<br>";
    }
} else {
    echo  "no results";
}



$db_connection = null;

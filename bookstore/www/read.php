<?php

require_once("../db_config.php");

$query = "SELECT *
          FROM books
          ";


if ($results = $db_connection->query($query)) {
    foreach ($results as $result) {
        echo $result['Title'] . " " . $result['Author'];
        echo "<br />";
    }
} else {
    echo "Failed to retrieve any data";
}

?>
<!--
// if ($results = $db_connection->query($query)) {
//     foreach ($results as $result) {
//         echo $result['firstName'] . " " . $result['surname'];
//         echo "<br>";
//     }
// } else {
//     echo  "no results";
// } -->

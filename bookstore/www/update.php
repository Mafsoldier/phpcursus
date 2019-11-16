<?php

require_once("../db_config.php");

$query = "UPDATE books
          SET Publisher = 'penquin'
          WHERE id = 511";


if ($db_connection->exec($query)) {
    echo "Update succeeded";
} else {
    echo "Update failed";
}

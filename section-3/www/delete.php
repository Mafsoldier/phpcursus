<?php

require_once("../db_config.php");

$query = "DELETE FROM teachers
          WHERE id = 75
         ";

if ($db_connection->exec($query)) {
    echo "deleted";
} else {
    echo "Failed to delete record";
}

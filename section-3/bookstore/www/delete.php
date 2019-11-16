<?php


require_once("../db_config.php");

$query = "DELETE FROM books
          WHERE id = 12   ";

if ($db_connection->exec($query)) {
    echo "Deletion succesfull";
} else {
    echo  "Failed to delete";
}

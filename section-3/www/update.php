<?php

require_once("../db_config.php");

$query = "UPDATE teachers
          SET surname = 'Willemsen', firstName = 'Marc'
          WHERE id = 75
            ";

if ($db_connection->exec($query)) {
    echo "Updated";
} else {
    echo "failed to update";
}

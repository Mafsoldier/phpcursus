<?php

require_once("../db_config.php");

$query = "INSERT INTO books (id, Title, Author, Genre, Height, Publisher)
          VALUES (NULL, 'geef me de ruimte 2', 'thea beckman', 'histoy', 1234, 'dane')
        ";


if ($db_connection->exec($query)) {
    echo "Created";
} else {
    echo "Failed to create";
}

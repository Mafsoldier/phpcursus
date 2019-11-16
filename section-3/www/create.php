<?php


require_once("../db_config.php");



$query =  "  INSERT INTO teachers (id, firstName, surname, dob, email, startDate)
             VALUES (NULL, 'evert', 'Tinus', '12-12-1958', 'tines@tinus.nl', '12-12-2005')
          ";

if ($db_connection->exec($query)) {
    echo "insert success!";
} else {
    echo "failed!";
}

$db_connection = null;



 ?>


 <!-- // INSERT INTO `teachers` (`id`, `firstName`, `surname`, `dob`, `email`, `startDate`) VALUES (NULL, 'Marc', 'Willemsen', '27-05-1986', 'marc@bolt.nl', '27-5-1995'); -->

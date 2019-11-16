
<?php

require_once("../db_config.php");

$query = "SELECT * FROM books";

$results = $db_connection->query($query);




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>List of books</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/55af721932.js" crossorigin="anonymous"></script>
</head>
  <body>
    
    <div class="container">


    <table class='table'>

    <thead>
      <tr>
       
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>GENRE</th>
        <th>PUBLISHER</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>
    </thead>

    <tbody>

      <?php
    foreach ($results as $result) {
      ?>

      <tr>
      
      <td><?php echo $result['Title'];   ?></td>
      <td><?php echo $result['Author'];   ?></td>
      <td><?php echo $result['Genre'];   ?></td>
      <td><?php echo $result['Publisher'];   ?></td>
      <td><a href="edit.php?id=<?php echo $result['id']?>"><i class="far fa-edit"></i></a></td>
      <td><a href="delete.php?id=<?php echo $result['id']?>"><i class="fas fa-trash-alt"></i></a></td>
     

      <!-- <td><?php echo $result['id'];   ?></td> -->
      </tr>

    <?php
    }
    ?>
    
    </tbody>


    </table>

  </div>
  </body>
</html>
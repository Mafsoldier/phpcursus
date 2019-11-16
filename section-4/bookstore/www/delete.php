<?php


require_once("../db_config.php");



if (!isset($_GET['id'])) {
     header('Location: list-books.php ');
     die();
   } else {
     
      $id =filter_var($id = $_GET['id'], FILTER_VALIDATE_INT);
    
      if(!$id){

            header('Location: list-books.php ');
            die();

        }else {

            $query = "DELETE FROM books WHERE id = :id LIMIT 1";
  
            $result =$db_connection->prepare($query);
            $result->execute([
                'id' => $id
            ]);
            
            
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

    <div class="container">

    <?php 
    $rowsDelete = $result->rowCount();
    
    if ($rowsDelete == 1) {
        ?>

        <div class="alert alert-success" role="alert">
        Record has been deleted.
        </div>
    
    <?php
    
    }else {

        ?>
        <div class="alert alert-danger" role="alert">
        Failed to delete.
        </div>

    <?php
    }
    
    
    ?>


    </div>
    
</body>
</html>












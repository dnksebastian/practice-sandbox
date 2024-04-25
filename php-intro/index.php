<?php 
// Connect to database

$conn = mysqli_connect('localhost', 'username', 'pwd', 'database-name');

// check connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// query for all pizzas
// $sql = 'SELECT * FROM pizzas';
$sql = 'SELECT title, ingredients, id FROM pizzas';

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch resulting rows as an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);

print_r($pizzas);


?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <?php include('templates/footer.php'); ?>
    
</html>
<?php 
// Connect to database

$conn = mysqli_connect('localhost', 'username', 'pwd', 'database-name');

// check connection
if(!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// query for all pizzas
// $sql = 'SELECT * FROM pizzas';
// $sql = 'SELECT title, ingredients, id FROM pizzas';
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// make query and get result
$result = mysqli_query($conn, $sql);

// fetch resulting rows as an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);

// print_r($pizzas);

// print_r(explode(',', $pizzas[0]['ingredients']))


?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas!</h4>
    
    <div class="container">
        <div class="row">

        <?php foreach($pizzas as $pizza): ?>
            <div class="col s6 md3 ">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <!-- <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div> -->
                        <ul>
                            <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                                <li><?php echo htmlspecialchars($ing);  ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="#/" class="brand-text">More info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if(count($pizzas) >= 3): ?>
            <p>There are 2 or more pizzas</p>
        <?php else: ?>
            <p>There are less than 2 pizzas</p>
        <?php endif; ?>

        </div>
    </div>

    <?php include('templates/footer.php'); ?>
    
</html>
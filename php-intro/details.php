<?php

include('config/db_connect.php');

// check GET request ID parameter

if(isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql

    $sql = 'SELECT * FROM pizzas WHERE id = $id';

    // get query result

    $result = mysqli_query($conn, $sql);

    // fetch result in array format

    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="container center">
    <?php if($pizza): ?>
        <h4>
            <?php echo htmlspecialchars($pizza['title']); ?>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
            <p><?php echo date($pizza['created_at']); ?></p>
            <h5>Ingredients: </h5>
            <p><?php htmlspecialchars($pizza['ingredients']); ?></p>
        </h4>
    <?php else: ?>
        <h5>No such pizza exists!</h5>
    <?php endif ?>
</div>

<?php include('templates/footer.php'); ?>

</html>
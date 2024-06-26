<?php 

    include('config/db_connect.php');

    $errors = array('email' => '', 'title' => '', 'ingredients' => '');
    
    // $email = ''
    // $title = ''
    // $ingredients = ''

    $title = $email = $ingredients = ''

    if (isset($_POST['submit'])) {
        
        // check email
        if (empty($_POST['email'])) {
            $errors['email'] = 'An email is required <br / >';
        } else {
            // echo htmlspecialchars($_POST['email']);
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // echo 'Email must be a valid email address';
                $errors['email'] = 'Email must be a valid email address';
            }
        }

        // check title
        if (empty($_POST['title'])) {
            $errors['title'] = 'A title is required <br / >';
        } else {
            // echo htmlspecialchars($_POST['title']);
            $title = $_POST['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                // echo 'Title must be letters and spaces only';
                $errors['title'] = 'Title must be letters and spaces only';
            }
        }

        // check ingredients
        if (empty($_POST['ingredients'])) {
            $errors['ingredients'] = 'At least one ingredient is required <br / >';
        } else {
            // echo htmlspecialchars($_POST['ingredients']);
            $ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				// echo 'Ingredients must be a comma separated list';
                $errors['ingredients'] = 'Ingredients must be a comma separated list';
			}
        }

        if(array_filter($errors)) {
            // echo 'errors in the form';
            // do nothing...
        } else {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            // create sql
            $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";

            // save to db and check

            if(mysqli_query($conn, $sql)) {
                // success
                // echo 'form is valid';
                // redirecting:
                header('Location: index.php');
            } else {
                // error
                echo 'query error: ' . mysqli_error($conn);
            }

        }

    }
    // END of POST check

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="white">
            <label for="">Your Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label for="">Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
            <label for="">Ingredients (comma searated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors['indgredients']; ?></div>

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>
    
</html>
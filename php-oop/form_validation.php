<?php

if(isset($_POST['submit'])){
    // validate entries
    echo 'form submitted';
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<div class="new-user">
    <h2>Create a new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

      <label>Username: </label>
      <input type="text" name="username">

      <label>Email: </label>
      <input type="text" name="email">

      <input type="submit" value="submit" name="submit">

    </form>
  </div>
    
</body>
</html>
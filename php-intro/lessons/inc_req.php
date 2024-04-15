<?php

    include('ninjas.php'); // executes code which is in the ninjas file
    require('ninjas.php'); // pretty much the same as include but doesnt execute the code below if error occurs
    // require 'ninjas.php'; // both can also be used without ()

    echo 'end of php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include and Require</title>
</head>
<body>
    <?php include('content.php');  ?>
    <?php include('content.php');  ?>
</body>
</html>
<?php
    define('NAME', 'Yoshi'); //declaring constans which can't be overwritten
    // echo 'hello world';
    $name = 'Yoshi';
    $age = 30;
    // $name = 'Mario';

    // STRINGS:
    // $stringOne = 'my email is ';
    // $stringTwo = 'lorem@ipsum.co.uk';

    // echo $stringOne . $stringTwo; //concatenation

    // $name = 'mario';
    // echo 'Hey, my name is ' . $name;

    // echo "Hey, my name is $name"; // double quotes allow to use variables directly inside (interpolation)

    // echo "The ninja screamed \"whaa\""; //escaping characters with backslash
    // echo $name[0]; //accessing index in string

    // echo strlen($name); //checking length
    // echo strtoupper($name);
    // echo strtolower($name);
    // echo str_replace('m', 'w', $name); //replacing m's with w's in given string

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP file</title>
</head>
<body>
    <h1><?php echo 'hello world'; ?></h1>
    <div><?php echo NAME; ?></div>
    <div><?php echo $age; ?></div>
</body>
</html>
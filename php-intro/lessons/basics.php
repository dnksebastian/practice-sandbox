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

    // NUMBERS
    // $radius = 25; // integer
    // $pi = 3.14; // float

    // operators
    //basic *, /, +, -, **
    // echo $pi * $radius ** 2;
    // BIDMAS:
    // echo 2 * (4+9) / 3;

    // increment and decrement operators:
    // $radius++; // adds 1
    // $radius--; // subtracts 1

    // shorthand operators:
    // $age = 20;
    // $age += 10; // adds 10
    // $age -= 10; etc

    // number functions:
    // echo floor($pi); // floors down to nearest integer
    // echo ceil($pi) // rounds up to nearest int
    // echo pi(); // returns he value of pi

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
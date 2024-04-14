<?php

// variable scope

// local vars

function myFunc() {
    $price = 10; // this is local scope - available only inside the function
    echo $price;
}

myFunc();
// echo $price; //wont work because the variable is local to function

function myFuncTwo($age){
    echo $age;
}

myFuncTwo(25);

// echo $age; // wont work because its local to myFuncTwo


// global variables
$name = 'mario';

// function sayHello() {
//     // $name = 'local'; // overrides the global value
//     // echo "hello $name"; // wont work because by default its looking for a local variable inside function
    
//     global $name; //uses the global value
//     $name = 'yoshi'; //affects the global value too!
//     // echo "hello $name"; // works with global variable now
// }

// sayHello();
// echo $name; // displays yoshi!

function sayBye($name) {
    $name = 'luigi';
    echo "bye $name";
}

// function sayBye(&$name) { // the & causes the global variable to be affected by the function - by reference
//     $name = 'luigi';
//     echo "bye $name";
// }

sayBye($name); // passing global var as a parameter
echo $name; // global variable is not affected by the function now!

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable scope</title>
</head>
<body>
    
</body>
</html>
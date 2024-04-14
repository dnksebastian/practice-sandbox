<?php
// functions

function sayHello() {
    echo 'good moning yoshi';
}

// sayHello();


function greet($name = 'shaun', $time = 'morning') { //default set
    echo "good $time $name"; //can output the argument directly in double quotes
}

// greet('mario');
// greet('yoshi', 'night');

function formatProduct($product) {
    // echo "{$product['name']} costs £{$product['price']} to buy <br />"; // need to use {} when accessing properties
    return "{$product['name']} costs £{$product['price']} to buy <br />";
}

// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
// echo $formatted;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
</body>
</html>
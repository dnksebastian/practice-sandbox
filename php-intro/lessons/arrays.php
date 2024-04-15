<?php 

// indexed arrays
$peopleOne = ['shaun', 'crystal', 'ryu'];
// echo $peopleOne[1];

$peopleTwo = array('ken', 'chun-li'); // another way of creating arrays
// echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
// print_r($ages); // echo wouldnt work here

$ages[1] = 25;
$ages[] = 60; //adding new elements to the end of array
array_push($ages, '70') //another way of adding new values to the end of array

// echo count($ages) // shows the length of an array

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);


// associative arrays (key - value pairs)
$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
// echo $ninjasOne['mario']; //returns 'orange
// print_r($ninjasOne);

$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow'); //second method

$ninjasTwo['toad'] = 'pink'; //adding new element

$ninjasTwo['peach'] = 'pink'; //overriding element

echo count($ninjasOne);
$ninjasThree = array_merge($ninjasOne, $ninjasTwo);

print_r($ninjasThree);

// multi-dimensional arrays
// $blogs = [
//     ['mario party', 'mario', 'lorem', 30],
//     ['mario kart cheats', 'toad', 'lorem', 25],
//     ['zelda hidden chests', 'link', 'lorem', 50]
// ];

// print_r($blogs);

// associative arrays inside an indexed array:
$blogs = [
    ['title' => 'mario party', 'author' => 'mario','content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];

// echo $blogs[2]['author'];
// echo count($blogs);
$blogs['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100]; //adding new element

$popped = array_pop($blogs); // removes last element from given array, returns this element
// print_r($popped);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
</body>
</html>
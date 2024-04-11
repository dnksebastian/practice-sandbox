<?php
// for loops

// for ($i = 0; $i < 5; $i++) {
//     echo 'some template';
// }

// $blogs = [blog1, blog2, blog3, blog4, ...];

// for ($i = 0; $i < count($blogs); $i++) {
//     echo 'some template';
// }

// foreach($blogs as $blog) {
//     echo 'some template';
// }

$ninjas = ['shaun', 'ryu', 'yoshi'];

// for($i = 0; $i < count($ninjas); $i++) {
//     echo $ninjas[$i] . '<br />';
// }

// foreach($ninjas as $ninja) {
//     echo $ninja . '<br />';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// foreach($products as $product) {
//     echo $product['name'] . ' - ' . $product['price'];
//     echo '<br / >';
// }

// $i = 0;
// while($i < count($products)) {
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product) { ?>
            <h3><?php echo $product['name']; ?></h3>
            <p>£ <?php echo $product['price']; ?></p>
        <?php } ?>
    </ul>
</body>
</html>
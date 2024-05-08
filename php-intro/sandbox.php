<?php 

// ternery operators
$score = 50;

// if ($score > 40) {
//     echo 'high score!';
// } else {
//     echo 'low score :(';
// }

// $val = $score > 40 ? 'high score!' : 'low score :(';
// echo $val;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sandbox</title>
</head>
<body>

    <p><?php echo $score > 40 ? 'high score!' : 'low score :('; ?></p>
   
</body>
</html>
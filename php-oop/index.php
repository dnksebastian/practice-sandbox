<?php 

class User {
    // properties
    public $username = 'ryu';
    public $email = 'ryu@thenetninja.co.uk';

    // methods
    public function addFriend() {
        return "$this->username added a new friend";
    }

}

$userOne = new User(); // creating new instance of class
$userTwo = new User();

get_class($userOne); // tells what class the object is based on
echo 'the class is ' . get_class($userTwo);


echo $userOne->username . '<br />';
echo $userOne->email . '<br />';
echo $userOne->addFriend() . '<br />';

// $userTwo->username = 'yoshi';
// $userTwo->email = 'yoshi@thenetninja.co.uk';

echo $userTwo->username . '<br />';
echo $userTwo->email . '<br />';
echo $userTwo->addFriend() . '<br />';

// utility functions for classes
// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'));



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    
</body>
</html>
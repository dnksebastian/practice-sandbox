<?php 

class User {
    // properties
    public $username;
    private $email;

    // constructor method
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    // methods
    public function addFriend() {
        return "$this->username added a new friend";
    }

    // getters
    public function getEmail() {
        return $this->email;
    }

    // setters
    public function setEmail($email) {
        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }

}

$userOne = new User('mario', 'mario@thenetninja.co.uk'); // creating new instance of class
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

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

// access modifiers
// $userOne->username = 3; // is possible when property is public
// $userOne->email = 3; // is not possible when property is private (outside of the class)

// using getters
echo $userOne->getEmail() . '<br />';
echo $userTwo->getEmail() . '<br />';

// using setter
$userOne->setEmail('yoshi@thenetninja.co.uk');


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
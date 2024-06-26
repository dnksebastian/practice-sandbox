<?php 

class User {
    // properties
    public $username;
    protected $email; // available in subclasses
    public $role = 'member';
    private $age; // available only in current class

    // constructor method
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    public function __destruct() {
        // cleanup, run final code whenever the last reference to an object instance of that class is removed
        echo "the user $this->username was removed <br />";
    }

    public function __clone() {
        // runs for the instance being created by cloning
        $this->username = $this->username . '(cloned) <br />';
    }

    // methods
    public function addFriend() {
        return "$this->username added a new friend";
    }

    public function message() {
        return "$this->email sent a new message";
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

// class inheritance
class AdminUser extends User {

    public $level;
    public $role = 'admin'; // overrides the property from User class

    public function __construct($username, $email, $level) {
        $this->level = $level;
        parent::__construct($username, $email); // calling parent constructor method
    }

    public function message() {
        return "$this->email, an admin, sent a new message"; // wont work if the property is private, but works when its protected
    } // overrides method from User class


}

$userOne = new User('mario', 'mario@thenetninja.co.uk'); // creating new instance of class
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

$userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5); // inherits from User

// echo $userOne->role . '<br />';
// echo $userThree->role . '<br />';

// echo $userOne->message() . '<br />';


// echo $userThree->username . '<br />';
// echo $userThree->getEmail() . '<br />';
// echo $userThree->username . '<br />';

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

// magic methods - destruct & clone
$userFour = clone $userOne;
echo $userFour->username;


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
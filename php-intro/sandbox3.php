<?php

    // classes

    class User {
        private $name;
        private $email;
        public $age;

        public function __construct($name, $email, $age) {
            // $this->email = 'mario@thenetninja.co.uk';
            // $this->name = 'Mario';
            $this->email = $email;
            $this->name = $name;
            $this->age = $age;

        }

        public function login() {
            // echo 'the user logged in';
            echo $this->name . ' logged in';
        }

        // getters and setters:
        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            // basic validation
            if (is_string($name) && strlen($name) > 1) {
                $this->name = $name;
                return "name has been updated to $name";
            } else {
                return 'not a valid name';
            }
        }
    }


    // $userOne = new User(); // instantiating
    // $userOne->login();

    $userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');
    // echo $userTwo->name;
    // echo $userTwo->email;
    // echo $userTwo->login();

    $userTwo->name = 'mario'; // is not possible because property is private;
    $userTwo->email = 'test@co.uk'; // is not possible because property is private;
    $userTwo->age = 30; // is possible because property is public;

    echo $userTwo->getName(); // accessing private property with getter

    // echo $userTwo->setName(50); // not valid
    echo $userTwo->setName('Shaun');


?>
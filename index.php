<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo 'classes:' . '<br>';

    class User {
        
        public $username;
        protected $email;
        public $role = 'member';

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function __destruct() {
            echo "$this->username was removed <br>";
        }

        public function __clone() {
            $this->username = $this->username . '(cloned)';
        }

        public function addFriend() {
            return "$this->username added a new friend";
        }

        public function message(){
            return "$this->email sent a new message";
        }

        // getters
        public function getEmail() {
            return $this->email;
        }


        // setters
        public function setEmail($email) {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return 'email must be a valid email address';
            }
            $this->email = $email;
            return "email is changed to $this->email";
        }

    }

    class AdminUser extends User {
        
        public $level;
        public $role = 'admin';

        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
        
        public function message(){
            return "$this->email, an admin, sent a new message";
        }

    }

    $userOne = new User('mario', 'mario@aaa.com');
    $userTwo = new User('luigi', 'luigi@aaa.com');
    $userThree = new AdminUser('yoshi', 'yoshi@aaa.com', 5);

    //unset($userOne);
    $userFour = clone $userOne;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>
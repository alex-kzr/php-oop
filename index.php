<?php

    echo 'classes:' . '<br>';

    class User {
        
        public $username;
        private $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->username added a new friend";
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

        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
    }

    $userOne = new User('mario', 'mario@aaa.com');
    $userTwo = new User('luigi', 'luigi@aaa.com');
    $userThree = new AdminUser('yoshi', 'yoshi@aaa.com', 5);

    echo $userThree->username . '<br>';
    echo $userThree->getEmail() . '<br>';
    echo $userThree->level . '<br>';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>
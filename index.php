<?php

    echo 'classes:' . '<br>';

    class User {
        
        private $username;
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

    $userOne = new User('mario', 'mario@aaa.com');
    $userTwo = new User('luigi', 'luigi@aaa.com');

    // echo $userOne->username . '<br>';
    echo $userOne->getEmail() . '<br>';
    echo $userOne->addFriend() . '<br>';

    // echo $userTwo->username . '<br>';
    echo $userTwo->getEmail() . '<br>';
    echo $userTwo->addFriend() . '<br>';

    echo $userOne->setEmail('mario@xxx.com') . '<br>';
    echo $userTwo->setEmail('luigi') . '<br>';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>
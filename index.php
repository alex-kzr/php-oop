<?php

    echo 'classes:' . '<br>';

    class User {
        
        public $username;
        public $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->username added a new friend";
        }

    }

    $userOne = new User('mario', 'mario@aaa.com');
    $userTwo = new User('luigi', 'luigi@aaa.com');

    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';

    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>
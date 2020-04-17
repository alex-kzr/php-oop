<?php

    echo 'classes:' . '<br>';

    class User {
        
        public $username = 'ryu';
        public $email = 'ryu@aaa.com';

        public function addFriend() {
            return "$this->username added a new friend";
        }

    }

    $userOne = new User();
    $userTwo = new User();

    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';

    $userTwo->username = 'yoshi';
    $userTwo->email = 'yoshi@aaa.com';

    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';

    print_r(get_class_vars('User'));
    print_r(get_class_methods('User'));

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP OOP Tutorial</title>
</head>
<body>
    
</body>
</html>
<?php

    if(isset($_POST['submit'])){
        // validate entries
        echo 'form submited <br>';
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP OOP Tutorial</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Username:</label>
            <input type="text" name="username">

            <label>Email:</label>
            <input type="text" name="email">

            <input type="submit" value="submit" name="submit">
        </form>
    </div>

</body>
</html>
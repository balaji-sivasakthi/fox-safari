<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <main>

    <div class="container">
        <h1>Admin Panel</h1>
    <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post">
    
            <input type="text" placeholder="User Name" name="user" id="user">
            <input type="password" placeholder="Password" name="pass" id="pass">
            <input type="submit" value="Login">

        </form>
    </div>
    


</main>
</body>
</html>
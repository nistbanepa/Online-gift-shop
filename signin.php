<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="/Online-Store/css/styles.css" >
</head>
<body>
    <form class="btn-in" action="sign-action.php" method="Post"> 
        <label for="name">Username:</label>
        <input type="text" id="name" name="name" required> <br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br> 
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required> <br><br>
        <button class="btn-sub" type="submit">Sign IN</button>
    </form>
</body>
</html>
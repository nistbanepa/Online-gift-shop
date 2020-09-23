<?php
// Start the session
session_start();

if (isset($_SESSION['name'])) {
    header("Location:homepage.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/fashion-store/css/styles.css">
    <title>Login | Sujata Fashion Store</title>
    <style>
        a {
            margin: 100px;
            padding: 5px 88px 40px 88px;
            width: 100%;
            border: 3px solid black;
            background-color: #00bcd421;
            border-radius: 10px;

        }
    </style>
</head>

<body>
    <div class="container">

        <div class="form-container">
            <?php

            if (isset($_SESSION['login_error'])) {

                echo ("<p class='error'>" . $_SESSION['login_error'] . "</p>");
                unset($_SESSION['login_error']);
            }


            ?>

            <h4>Please Login to continue!!</h4>
            <form method="POST" action="homepage.php">

                <label>
                    Username:
                </label>
                <input type="text" name="name" required>

                <label>
                    Password:
                </label>
                <input type="Password" name="password" required>
                <button type="submit" class="btn-submit">Login</button>
            </form>


        </div>


    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center ;">Fake Page</h1>
    <h1 style="text-align: center ;">Sign Up</h1>
    <form action="index.php" method="post" style="text-align: center;">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Sign Up"><br>
    </form>
</body>
</html>
<?php
    echo $_POST["username"]. "<br>";
    $password = $_POST["password"];
    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.";
    } elseif (strlen($_POST["password"]) > 20) {
        echo "Password must not exceed 20 characters.";
    } elseif (!preg_match('/[A-Z]/', $_POST["password"])) {
        echo "Password must contain at least one uppercase letter.";
    } elseif (!preg_match('/[a-z]/', $_POST["password"])) {
        echo "Password must contain at least one lowercase letter.";
    } elseif (!preg_match('/[0-9]/', $_POST["password"])) {
        echo "Password must contain at least one number.";
    } elseif (!preg_match('/[\W_]/', $_POST["password"])) {
        echo "Password must contain at least one special character.";
    }
    else {
        echo "Sign Up successful.";
    }
?>
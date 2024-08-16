<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <h3>Start for Free</h3>
    <h2>Create a new one</h2>
    <form action="register.php" method="POST">
     
        <input type="text" name="firstname" placeholder="Firstname" required><br><br>

        <input type="text" name="lastname" placeholder="Lastname" required><br><br>
        
        <input type="email" name="email" placeholder="Email" required><br><br>
        
        <input type="password" name="password" placeholder="Password" required><br><br>

        <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br><br>
        
        <button type="submit">Register</button>
    </form>

    <a href="login.php">Login</a>
</body>
</html>
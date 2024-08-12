<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/signup.css" type="text/css" media="all" />
    <title>PanNote</title>
</head>
<body>
    <div class="form-container">
        <h3>Start for free</h3>
        <h1>Create new account</h1>
        <form id="signup" action="signup.php" method="POST">
            <input type="text" name="Firstname" placeholder="firstname" required>
            <input type="email" name="Email" placeholder="email" required>
            <input type="password" name="password" placeholder="Password" required>
        </form>
        <br>
        <button id="signupBtn">Sign up</button>
    </div>
     <a href="login.php">Log in</a>
</body>
</html>

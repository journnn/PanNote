<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css" media="all" />
    <title>PanNote</title>
</head>
<body>
    <div class="form-container">
        <h4>Start for free</h4>
        <h1>Create new account</h1>
        <form id="signup" action="signup.php" method="POST">
            <input type="text" name="Firstname" placeholder="Firstname" required>
            <input type="email" name="Email" placeholder="Email" required>
            <input type="password" name="Password" placeholder="Password" required>
        </form>
        <br>
        <button id="signupBtn">Sign up</button>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css" type="text/css" media="all" />
    <title>PanNote</title>
</head>
<body>
    <div class="form-container">
        <img src="" alt="Pa-Note Logo">
        <form id="loginForm" action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log in</button>
        </form>
        <br>
        <button id="signupBtn">Sign up</button>
    </div>
    
<script>
    document.getElementById("signupBtn").onclick = function() {
        window.location.href = "signup.php";
    }
</script>
</body>
</html>

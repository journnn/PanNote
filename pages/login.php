<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login_css.css">
    <title>Login</title>
</head>
<body>


        <div class="container">
        <?php
            if (isset($_SESSION['error'])) {
                echo '
                <div class="toast-container">
                    <p class="error">' . $_SESSION['error'] . '</p>
                </div>';
                unset($_SESSION['error']);
            }


            if (isset($_SESSION['success'])) {
                echo '
                <div class="toast-container">
                    <p class="success">' . $_SESSION['success'] . '</p>
                </div>';
                unset($_SESSION['success']);
            }
        ?>
       
            <div class="left-column">
                <h1> Pa-Note </h1>
                <h3> Log in here! </h3>
               
                <form action="./_login.php" method="POST">
                    <input autocomplete="on" type="text" name="user_input" placeholder= "Email">
                   
                    <input autocomplete="off" type="password" name="password" placeholder= "Password" >
                   
                    <button type="submit">Login</button>
                    </form>
                    <a href="signup.php" id="signupbtn"> SIGN UP </a>
            </div>
           
        </div>


    <script src="./login.js"></script>
</body>
</html>

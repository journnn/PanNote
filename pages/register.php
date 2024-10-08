<?php
    session_start();
    include './_dbcon.php';
    
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
                $fullName = $_POST['firstname'];
                $username = $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['error'] = "Invalid email format";
                    header("Location: ./signup.php");
                    exit;
                }
        
                // Check if password and confirmPassword match
                if ($password !== $confirmPassword) {
                    $_SESSION['error'] = "Password does not match";
                    header("Location: ./signup.php");
                    exit;
                }
                
                $check_sql = "SELECT ID FROM users WHERE email = ?";
        $stmt = $conn->prepare($check_sql);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $_SESSION['error'] = "Email or Username already exists";
            header("Location: ./signup.php");
            exit();
        }

        $stmt->close();

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $stmt = $conn->prepare("INSERT INTO users(firstname, lastname, email, password) VALUES (?,?,?,?)");
                if ($stmt == false) {
                    die('Prepare failed:' . htmlspecialchars($conn -> error));
                }
                
                $stmt->bind_param("ssss", $fullName, $username, $email, $hashed_password);

                if ($stmt -> execute()) {
                    echo "Success";
                    //$_SESSION['success'] = "New record created successfully";
                    //header("Location: ./signup.php?redirect=true");
                    //exit;
                    
                } else {
                    //$_SESSION['error'] = "Something went wrong";
                }

                $stmt->close();
                $conn->close();
            } else {
                //$_SESSION['error'] = "All fields are required";
                //header("Location: ./signup.php");
                //exit;
            }
        }
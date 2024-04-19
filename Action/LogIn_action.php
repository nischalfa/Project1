<?php
session_start(); // Start the session

include_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($email) || empty($password)) {
        header('Location: ../login.php?error=All fields are required');
        exit();
    } else {
        // Check if the user exists in the database
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Password is correct, start a session
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_fullname'] = $row['Full_Name'];
                header('Location: ../index.php');
                exit();
            } else {
                // Password is incorrect
                header('Location: ../login.php?error=Invalid email or password');
                exit();
            }
        } else {
            // User does not exist
            header('Location: ../login.php?error=User does not exist');
            exit();
        }
    }
    $conn->close();
}
?>

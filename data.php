<?php
session_start();
require_once "dbcon.php";
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check the email and password in the account table
$sql = "SELECT * FROM account WHERE email = '$email' AND password = '$password'"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Check if the user is an admin
        if (strpos($email, "@admin") !== false) {
            $_SESSION['status'] = TRUE;
            $_SESSION['role'] = 'admin';
            header("Location: ../admin/admin.php");
            exit();
        } else {
            // Handle regular user login
            $_SESSION['status'] = TRUE;
            $_SESSION['role'] = 'user';
            header("Location: ../user/user.php");
            exit();
        }
    }
} else {
    // Invalid login credentials
    $_SESSION['error'] = "INVALID EMAIL OR PASSWORD";
    header("Location: ../index.php");
    exit();
}
?>

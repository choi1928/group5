<?php
session_start();
require_once "../config/dbcon.php";
include "../plugin.php";

// Define NVIDIA color variables
$nvidia_green = "#76B900";
$nvidia_black = "#000000";
$nvidia_gray = "#343a40";
$nvidia_dark_gray = "#212529";
$nvidia_light = "#ffffff";

// Check if the user is logged in and has the correct role
if (isset($_SESSION['status']) && $_SESSION['status'] === TRUE) {
    include 'adminNav.php';
    include 'adminModal.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: <?= $nvidia_dark_gray ?>;
        color: <?= $nvidia_light ?>;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: radial-gradient(circle at center, #2e2e30, <?= $nvidia_dark_gray ?>);
        overflow: hidden;
    }

    .wrapper {
        display: flex;
        width: 100%;
        height: 100vh;
    }

    /* Sidebar Styling */
    .sidebar {
        width: 300px;
        background-color: #1a1c1f;
        padding: 30px;
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.5);
        position: relative;
        border-right: 2px solid <?= $nvidia_green ?>;
        z-index: 2;
    }

    .sidebar-header h2 {
        margin: 0;
        font-size: 2rem;
        color: <?= $nvidia_green ?>;
        text-transform: uppercase;
        font-weight: 600;
        text-shadow: 0 0 10px rgba(0, 255, 255, 0.8);
        margin-bottom: 40px;
    }

    .sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar-menu li {
        margin-bottom: 20px;
    }

    .sidebar-menu a {
        text-decoration: none;
        color: <?= $nvidia_light ?>;
        font-size: 1.2rem;
        font-weight: 500;
        padding: 10px;
        border-radius: 5px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    .sidebar-menu a::before {
        content: '⚡';
        margin-right: 10px;
        color: <?= $nvidia_green ?>;
    }

    .sidebar-menu a:hover {
        background-color: <?= $nvidia_green ?>;
        color: <?= $nvidia_dark_gray ?>;
        transform: translateX(5px);
        box-shadow: 0 0 10px <?= $nvidia_green ?>;
    }

    /* Main Content Styling */
    .main-content {
        flex: 1;
        padding: 40px;
        background-color: #1e2023;
        border-left: 4px solid <?= $nvidia_green ?>;
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 1;
        position: relative;
        overflow: hidden;
    }

    .header {
        background-color: #292b2e;
        padding: 30px;
        margin-bottom: 40px;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        text-align: center;
        position: relative;
    }

    .header::before, .header::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 2px;
        background: <?= $nvidia_green ?>;
        transform: translateY(-50%);
        z-index: -1;
    }

    .header::before {
        width: 80%;
        opacity: 0.3;
    }

    .header::after {
        width: 100%;
        opacity: 0.1;
    }

    .header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: <?= $nvidia_light ?>;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0 0 10px <?= $nvidia_green ?>;
        position: relative;
        z-index: 1;
        transition: color 0.4s ease;
    }

    .header:hover h1 {
        color: <?= $nvidia_green ?>;
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.2rem;
    }

    /* Profile Section */
    .profile-section {
        background-color: #292b2e;
        padding: 40px;
        border-radius: 12px;
        border: 2px solid <?= $nvidia_green ?>;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 500px;
        text-align: left;
        position: relative;
        overflow: hidden;
    }

    .profile-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at center, rgba(0, 191, 165, 0.2), transparent);
        transform: rotate(45deg);
        transition: all 0.3s ease;
    }

    .profile-section:hover::before {
        background: radial-gradient(circle at center, rgba(0, 191, 165, 0.3), transparent);
    }

    .profile-section h2 {
        margin-bottom: 20px;
        font-size: 2rem;
        font-weight: 600;
        color: <?= $nvidia_light ?>;
        text-shadow: 0 0 5px rgba(0, 255, 255, 0.5);
    }

    .profile-info {
        line-height: 1.8;
        font-size: 1.2rem;
    }

    .profile-info p {
        margin: 0;
        color: <?= $nvidia_light ?>;
    }

    .profile-info p strong {
        color: <?= $nvidia_green ?>;
        transition: color 0.4s ease;
    }

    .profile-info p strong:hover {
        color: <?= $nvidia_light ?>;
    }

    /* Animations */
    .sidebar-menu a,
    .header,
    .profile-section {
        animation: fadeInUp 0.6s ease both;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

</head>
<body>
<div class="wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">➤ Users</a></li>
                <li><a href="#">➤ Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <header class="header">
                <h1>Welcome, Admin!</h1>
            </header>
            <div class="content">
                <section class="profile-section">
                    <h2>Profile Information:</h2>
                    <div class="profile-info">
                        <p><strong>Email: </strong>admin@group.com</p>
                        <p><strong>Password: </strong>******</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
<?php
} else {
    // Set the error message
    $_SESSION['error'] = "You must log in first.";

    // Display an alert before redirecting
    echo "<script>
        alert('Access Denied: You must log in first.');
        window.location.href = '../index.php';
    </script>";
    exit(); // Ensure no further code is executed
}
?>
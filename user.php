<?php
session_start();
require_once "../config/dbcon.php";
include "../plugin.php";

// Check if the user is logged in and has a user role
if (isset($_SESSION['status']) == TRUE && isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
    include 'userNav.php';
    include 'userModal.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>User Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">➤ Profile</a></li>
                <li><a href="#">➤ Settings</a></li>
                <li><a href="#">➤ Recent Activity</a></li>
                <li><a href="#">➤ Help</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <header class="header">
                <h1>Welcome, [User Name]!</h1>
            </header>
            <div class="content">
                <section class="profile-summary">
                    <h2>Profile Summary</h2>
                    <p>Quickly view your profile information and recent updates.</p>
                    <a href="profile.php" class="btn">Go to Profile</a>
                </section>
                <section class="account-settings">
                    <h2>Account Settings</h2>
                    <p>Adjust your settings and preferences to fit your needs.</p>
                    <a href="settings.php" class="btn">Manage Settings</a>
                </section>
                <section class="recent-activity">
                    <h2>Recent Activity</h2>
                    <p>Check out what’s new and recent in your account.</p>
                    <a href="activities.php" class="btn">See Activities</a>
                </section>
                <section class="help-section">
                    <h2>Need Help?</h2>
                    <p>If you have any questions or need assistance, feel free to reach out!</p>
                    <a href="contact.php" class="btn help-btn">Contact Support</a>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
<?php
} else {
    $_SESSION['error'] = "You must login as a user first";

    echo "<script>
        alert('Access Denied: You must login as a user first.');
        window.location.href = '../index.php';
    </script>";
    exit();
}
?>

<style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #0c0c0c; /* Darker background for Nvidia theme */
        color: #e1e1e1; /* Lighter text color for contrast */
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .wrapper {
        display: flex;
        flex: 1;
    }

    /* Sidebar Styling */
    .sidebar {
        width: 300px;
        background-color: #1c1c1c; /* Darker gray for sidebar */
        padding: 30px;
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.5);
        border-right: 2px solid #76b900; /* Nvidia green border */
    }

    .sidebar-header h2 {
        margin: 0;
        font-size: 2rem;
        color: #76b900; /* Nvidia green for header */
        text-transform: uppercase;
        font-weight: 600;
        text-shadow: 0 0 10px rgba(118, 185, 0, 0.8); /* Slightly lighter green shadow */
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
        color: #e1e1e1; /* Light gray text */
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
        color: #76b900; /* Nvidia green for icons */
    }

    .sidebar-menu a:hover {
        background-color: #76b900; /* Nvidia green background on hover */
        color: #0c0c0c; /* Dark background for text contrast */
        transform: translateX(5px);
        box-shadow: 0 0 10px #76b900; /* Nvidia green shadow */
    }

    /* Main Content Styling */
    .main-content {
        flex: 1;
        padding: 40px;
        background-color: #1c1c1c; /* Darker gray for main content */
        border-left: 4px solid #76b900; /* Nvidia green border */
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 1;
        position: relative;
        overflow: hidden;
    }
    
    .header {
        background-color: #2e2e2e; /* Dark gray for header background */
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
        background: #76b900; /* Nvidia green for lines */
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
        color: #e1e1e1; /* Light gray text */
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0 0 10px #76b900; /* Nvidia green shadow */
        position: relative;
        z-index: 1;
        transition: color 0.4s ease;
    }

    .header:hover h1 {
        color: #76b900; /* Nvidia green on hover */
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.2rem;
    }

    /* Section Styling */
    section {
        background-color: #2e2e2e; /* Dark gray for sections */
        padding: 40px;
        border-radius: 12px;
        border: 2px solid #76b900; /* Nvidia green border */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 1000px;
        margin-bottom: 20px;
        text-align: center;
    }

    section h2 {
        margin-bottom: 20px;
        font-size: 2rem;
        font-weight: 600;
        color: #e1e1e1; /* Light gray text */
        text-shadow: 0 0 5px rgba(118, 185, 0, 0.5); /* Slightly lighter green shadow */
    }

    section p {
        color: #e1e1e1; /* Light gray text */
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #76b900; /* Nvidia green */
        color: #0c0c0c; /* Dark background for text contrast */
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .btn:hover {
        background-color: #4d8c00; /* Darker Nvidia green */
        transform: scale(1.05);
    }

    .help-btn {
        background-color: #00bfa5; /* Different color for help button */
    }

    .help-btn:hover {
        background-color: #019a8f; /* Darker color on hover */
    }

    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #0c0c0c; /* Darker background for Nvidia theme */
        color: #e1e1e1; /* Lighter text color for contrast */
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .wrapper {
        display: flex;
        flex: 1;
    }

    /* Sidebar Styling */
    .sidebar {
        width: 300px;
        background-color: #1c1c1c; /* Darker gray for sidebar */
        padding: 30px;
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.5);
        border-right: 2px solid #76b900; /* Nvidia green border */
    }

    .sidebar-header h2 {
        margin: 0;
        font-size: 2rem;
        color: #76b900; /* Nvidia green for header */
        text-transform: uppercase;
        font-weight: 600;
        text-shadow: 0 0 10px rgba(118, 185, 0, 0.8); /* Slightly lighter green shadow */
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
        color: #e1e1e1; /* Light gray text */
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
        color: #76b900; /* Nvidia green for icons */
    }

    .sidebar-menu a:hover {
        background-color: #76b900; /* Nvidia green background on hover */
        color: #0c0c0c; /* Dark background for text contrast */
        transform: translateX(5px);
        box-shadow: 0 0 10px #76b900; /* Nvidia green shadow */
    }

    /* Main Content Styling */
    .main-content {
        flex: 1;
        padding: 40px;
        background-color: #1c1c1c; /* Darker gray for main content */
        border-left: 4px solid #76b900; /* Nvidia green border */
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 1;
        position: relative;
        overflow: hidden;
    }

    .header {
        background-color: #2e2e2e; /* Dark gray for header background */
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
        background: #76b900; /* Nvidia green for lines */
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
        color: #e1e1e1; /* Light gray text */
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0 0 10px #76b900; /* Nvidia green shadow */
        position: relative;
        z-index: 1;
        transition: color 0.4s ease;
    }

    .header:hover h1 {
        color: #76b900; /* Nvidia green on hover */
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.2rem;
    }

    /* Section Styling */
    section {
        background-color: #2e2e2e; /* Dark gray for sections */
        padding: 40px;
        border-radius: 12px;
        border: 2px solid #76b900; /* Nvidia green border */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 600px;
        margin-bottom: 20px;
        text-align: center;
    }

    section h2 {
        margin-bottom: 20px;
        font-size: 2rem;
        font-weight: 600;
        color: #e1e1e1; /* Light gray text */
        text-shadow: 0 0 5px rgba(118, 185, 0, 0.5); /* Slightly lighter green shadow */
    }

    section p {
        color: #e1e1e1; /* Light gray text */
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #76b900; /* Nvidia green */
        color: #0c0c0c; /* Dark background for text contrast */
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .btn:hover {
        background-color: #4d8c00; /* Darker Nvidia green */
        transform: scale(1.05);
    }

    .help-btn {
        background-color: #76b900; /* Nvidia green */
    }

    .help-btn:hover {
        background-color: #4d8c00; /* Darker Nvidia green */
    }
    <style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #0c0c0c; /* Darker background for Nvidia theme */
        color: #e1e1e1; /* Lighter text color for contrast */
        display: flex;
        flex-direction: column;
        height: 100vh;
    }

    .wrapper {
        display: flex;
        flex: 1;
    }

    /* Sidebar Styling */
    .sidebar {
        width: 300px;
        background-color: #1c1c1c; /* Darker gray for sidebar */
        padding: 30px;
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.5);
        border-right: 2px solid #76b900; /* Nvidia green border */
        z-index: 2; /* Ensure it is above other content */
    }

    .sidebar-header h2 {
        margin: 0;
        font-size: 2rem;
        color: #76b900; /* Nvidia green for header */
        text-transform: uppercase;
        font-weight: 600;
        text-shadow: 0 0 10px rgba(118, 185, 0, 0.8); /* Slightly lighter green shadow */
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
        color: #e1e1e1; /* Light gray text */
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
        color: #76b900; /* Nvidia green for icons */
    }

    .sidebar-menu a:hover {
        background-color: #76b900; /* Nvidia green background on hover */
        color: #0c0c0c; /* Dark background for text contrast */
        transform: translateX(5px);
        box-shadow: 0 0 10px #76b900; /* Nvidia green shadow */
    }

    /* Main Content Styling */
    .main-content {
        flex: 1;
        padding: 40px;
        background-color: #1c1c1c; /* Darker gray for main content */
        border-left: 4px solid #76b900; /* Nvidia green border */
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 1;
        position: relative;
        overflow: hidden;
    }

    .header {
        background-color: #2e2e2e; /* Dark gray for header background */
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
        background: #76b900; /* Nvidia green for lines */
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
        color: #e1e1e1; /* Light gray text */
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0 0 10px #76b900; /* Nvidia green shadow */
        position: relative;
        z-index: 1;
        transition: color 0.4s ease;
    }

    .header:hover h1 {
        color: #76b900; /* Nvidia green on hover */
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 1.2rem;
    }

    /* Section Styling */
    section {
        background-color: #2e2e2e; /* Dark gray for sections */
        padding: 40px;
        border-radius: 12px;
        border: 2px solid #76b900; /* Nvidia green border */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 10000px;
        margin-bottom: 20px;
        text-align: center;
    }

    section h2 {
        margin-bottom: 20px;
        font-size: 2rem;
        font-weight: 600;
        color: #e1e1e1; /* Light gray text */
        text-shadow: 0 0 5px rgba(118, 185, 0, 0.5); /* Slightly lighter green shadow */
    }

    section p {
        color: #e1e1e1; /* Light gray text */
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #76b900; /* Nvidia green */
        color: #0c0c0c; /* Dark background for text contrast */
        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .btn:hover {
        background-color: #4d8c00; /* Darker Nvidia green */
        transform: scale(1.05);
    }

    .help-btn {
        background-color: #76b900; /* Nvidia green */
    }

    .help-btn:hover {
        background-color: #4d8c00; /* Darker Nvidia green */
    }

</style>

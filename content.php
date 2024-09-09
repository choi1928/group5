<?php
// Define NVIDIA color variables
$nvidia_green = "#76B900";
$nvidia_black = "#000000";
$nvidia_gray = "#343a40";
$nvidia_dark_gray = "#212529";
$nvidia_light = "#ffffff";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVIDIA GeForce GTX Experience</title>
    <style>
        body {
            background-color: <?= $nvidia_dark_gray ?>;
            color: <?= $nvidia_light ?>;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: <?= $nvidia_gray ?>;
            padding: 20px;
            text-align: center;
            border-bottom: 4px solid <?= $nvidia_green ?>;
        }
        
        .header h1 {
            margin: 0;
            color: <?= $nvidia_light ?>;
        }

        .content {
            padding: 40px;
            background-color: <?= $nvidia_gray ?>;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 900px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
        }

        .content h2 {
            color: <?= $nvidia_green ?>;
        }

        .footer {
            background-color: <?= $nvidia_gray ?>;
            color: <?= $nvidia_light ?>;
            padding: 20px;
            text-align: center;
            border-top: 4px solid <?= $nvidia_green ?>;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        a {
            color: <?= $nvidia_green ?>;
            text-decoration: none;
        }

        a:hover {
            color: <?= $nvidia_light ?>;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>NVIDIA GEFORCE GTX EXPERIENCE</h1>
    </div>

    <!-- Content Section -->
    <div class="content container">
        <h2>RTX. IT'S ON.</h2>
        <p>Take the best to class with NVIDIA GeForce RTX™ and Studio RTX™ 40 Series laptops. Experience class-leading learning, gaming, and creating with supercharged AI-enabled tools and apps.</p>
        <p>Plus, with exclusive access to the NVIDIA Studio platform of creative tools and tech, and Max-Q Technologies optimizing battery life, acoustics, and more, you’ve got the perfect laptop for both on and off campus life.</p>
        <p><a href="#">Learn more</a> about what we offer.</p>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Group 5. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

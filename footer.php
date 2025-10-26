<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Glace Media</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <style>
        /* Basic Reset */

        /* Footer Layout and Colors */
        .footer {
            background: #111111;
            color: #fff;
            padding: 40px 20px;
            font-family: 'Poppins', sans-serif;
        }

        /* Footer Logo */
        .footer-logo img {
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }

        /* Footer Top Section */
        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        /* Footer Navigation */
        .footer-nav {
            display: flex;
            gap: 30px;
            margin-left:8%        }

        .footer-nav a {
            font-size: 18px;
            color: #12a697;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-nav a:hover {
            color: #ffffff;
        }

        /* Social Media Icons */
        .footer-social {
            display: flex;
            gap: 20px;
        }

        /* Circle for Social Media Icons */
        .footer-social a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 50px; /* Circle size */
            height: 50px; /* Circle size */
            background: #12a697; /* Green background */
            border-radius: 50%; /* Makes it circular */
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .footer-social a:hover {
            background: #ffffff; /* On hover, change background to white */
            transform: scale(1.1); /* Slight zoom effect */
        }

        /* Initially white color for social media icons */
        .footer-social img {
            width: 24px; /* Adjust icon size */
            height: 24px; /* Adjust icon size */
            object-fit: contain;
            filter: brightness(0) invert(1); /* Make icons white initially */
            transition: filter 0.3s ease;
        }

        /* On hover, revert icon color back to original */
        .footer-social a:hover img {
            filter: brightness(1) invert(0); /* Revert icon color back to original */
        }

        /* Footer Bottom Section */
        .footer-bottom {
            text-align: center;
            font-size: 14px;
            color: #aaa;
            margin-top: 30px;
            
        }

        .footer-bottom a {
            color: #12a697;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-bottom a:hover {
            color: #ffffff;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .footer-top {
                flex-direction: column;
                text-align: center;
            }

            .footer-nav {
                flex-direction: column;
                gap: 10px;
                margin-bottom: 20px;
            }

            .footer-social {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<!-- Footer Section -->
<div class="footer">
    <!-- Footer Top Section -->
    <div class="footer-top">
        <!-- Logo Section -->
        <div class="footer-logo">
            <img src="image/footer-logo.png" alt="Glace Media Logo">
        </div>

        <!-- Navigation Links -->
        <div class="footer-nav">
            <a href="index.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="ourservices.php">Services</a>
            <a href="brands.php">Work</a>
            <a href="contactus.php">Contact Us</a>
        </div>

        <!-- Social Media Icons -->
        <div class="footer-social">
            <a href="#" target="_blank"><img src="image/2.png" alt="Instagram"></a>
            <a href="#" target="_blank"><img src="image/4.png" alt="Twitter"></a>
            <a href="#" target="_blank"><img src="image/3.png" alt="LinkedIn"></a>
            <a href="#" target="_blank"><img src="image/5.png" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="image/1.png" alt="YouTube"></a>
        </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="footer-bottom">
        <p>© 2024 Glace Media. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>

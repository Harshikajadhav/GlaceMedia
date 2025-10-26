<?php
include('header.php');
include('db_connection.php');  // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check which form was submitted
    if (isset($_POST['brand_submit'])) {
        // For Brands Form
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $message = $_POST['message'];

        // Insert data into brands table
        $query = "INSERT INTO brands (name, phone, email, service, message) VALUES ('$name', '$phone', '$email', '$service', '$message')";
        mysqli_query($conn, $query);
    }

    if (isset($_POST['influencer_submit'])) {
        // For Influencers Form
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $genre = $_POST['genre'];
        $followers = $_POST['followers'];
        $message = $_POST['message'];

        // Insert data into influencers table
        $query = "INSERT INTO influencers (name, phone, email, genre, followers, message) VALUES ('$name', '$phone', '$email', '$genre', '$followers', '$message')";
        mysqli_query($conn, $query);
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="mobile.css">
</head>
<body><br><br><br><br> <br><br><br>
    <section class="contact-us">
      <!-- 
    Another field -> Genre, followers
      -->
        <div class="contact-container">
            <!-- Left Section -->
            <div class="leftt-section">
                <h2 >
                Connect With Us</h2>
                <p> <img src="image/callicon.png" alt="Phone Icon" class="contact-icon"> <span>+91 99999 99999</span> </p>
                <p><img src="image/mail.png" alt="Mail Icon" class="contact-icon"> glacemedia@gmail.com</p>
            </div>

            <!-- Right Section -->
            <div class="right-section">
                <!-- Map Overlay -->
            
        
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120938.61483135225!2d72.77579687639813!3d19.08219783963716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf2ca9b418c1%3A0xb90e9c9ef9d89f50!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1691927102587!5m2!1sen!2sin"
                        width="300" height="300" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <!-- Form Section -->
                <div class="form-container">
                    <div class="tabs">
                        <button class="tab-button" onclick="showForm('brands-form')">Brands</button>
                        <button class="tab-button active" onclick="showForm('influencers-form')">Influencers</button>
                    </div>

                    <!-- Brands Form -->
                            <form id="brands-form" method="POST" class="contact-form active">
                                <input type="text" name="name" placeholder="Name" required>
                                <input type="text" name="phone" placeholder="Phone Number" required>
                                <input type="email" name="email" placeholder="Email ID" required>
                                <select name="service" required>
                                    <option value="" selected disabled hidden>Service you are looking for</option>
                                    <option value="Video production">Video production</option>
                                    <option value="Social Media Management">Social Media Management</option>
                                    <option value="Campaign Planning">Campaign Planning</option>
                                    <option value="Influencer Marketing">Influencer Marketing</option>
                                </select>
                                <input type="text" name="message" placeholder="Message">
                                <button type="submit" name="brand_submit">Send</button>
                            </form>


                    <!-- Influencers Form -->
                    <form id="influencers-form" method="POST" class="contact-form">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <input type="email" name="email" placeholder="Email ID" required>
    <input type="text" name="message" placeholder="Message">
    <select name="genre" required>
        <option value="" selected disabled hidden>Genre</option>
        <option value="Fashion & Beauty">Fashion & Beauty</option>
        <option value="Entertainment & Comedy">Entertainment & Comedy</option>
        <option value="Travel & Lifestyle">Travel & Lifestyle</option>
        <option value="Technology">Technology</option>
        <option value="Motivational">Motivational</option>
        <option value="Gaming">Gaming</option>
        <option value="Sports & Fitness">Sports & Fitness</option>
        <option value="Business & Finance">Business & Finance</option>
        <option value="Dance & Music">Dance & Music</option>
        <option value="Food">Food</option>
    </select>
    <input type="text" name="followers" placeholder="Followers Count" required>
    <button type="submit" name="influencer_submit">Send</button>
</form>


                    <div class="newsletter">
                        <p>Sign-in for Newsletter</p>
                        <input type="email" placeholder="Enter your email">
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <br><br><br>
<?php
include 'footer.php';
?>
    <script src="contactus.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Glace Media</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobile.css">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <!-- Google Font Links starts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Google Font Links ends -->
</head>
<body>
<!-- HEADER STARTS -->
<header>
            <div class="content">
                <p id="scrolling-text">Field trip by Kanye West is Trending</p>
            </div>
            <div class="header-container">
                <div class="logo">
                    <img src="image/logo.png" style="height:40px;width:150px;">
          
                </div>
                <nav>
                    <ul>
                        <li id="hideOnMobile"><a href="index.php">Home</a></li>
                        <li id="hideOnMobile"><a href="aboutus.php">About</a></li>
                        <li id="hideOnMobile"><a href="ourservices.php">Services</a></li>
                        <li id="hideOnMobile"><a href="brands.php">Work</a></li>
                    </ul>&nbsp;
                    <a class="btn-posnawr" href="#" id="hideOnMobile">Contact Us<span></span></a> 
                    <span onclick="showSidebar()" class="top-menu-bar">
    <i class="fa-solid fa-bars fa-xl"></i>
</span>

                </nav>                             
            </div>
            <div class="header-sidebar">
    <nav>
        <ul>
            <li><span onclick="hideSidebar()">
            <i class="fa-solid fa-xmark"></i>
</span></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="ourservices.php">Services</a></li>
            <li><a href="brands.php">Work</a></li>
            <li><a href="brands.php">Contact us</a></li>
        </ul>
    </nav>
</div>
            <br>
        </header>  
        <script>
    const messages = [
        "Field trip by Kanye West is Trending",
        "New song uploaded on YouTube",
        "Catch our exclusive Glace insights!",
        "Follow us on Instagram for updates"
    ];
    let messageIndex = 0;
    const textElement = document.getElementById("scrolling-text");

    const updateMessage = () => {
        textElement.classList.remove("flip"); // Reset animation
        void textElement.offsetWidth; // Trigger reflow
        messageIndex = (messageIndex + 1) % messages.length;
        textElement.textContent = messages[messageIndex]; // Update message
        textElement.classList.add("flip"); // Trigger flip effect
    };

    setInterval(updateMessage, 3000); // Update message every 5 seconds

function showSidebar() {
    const sidebar = document.querySelector('.header-sidebar');
    sidebar.style.display = 'flex';
}
function hideSidebar(){
    const sidebar = document.querySelector('.header-sidebar');
    sidebar.style.display = 'none';
}
</script>

<!-- HEADER ENDS -->

</body>

</html>
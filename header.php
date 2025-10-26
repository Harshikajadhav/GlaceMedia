<?php 
include('db_connection.php');

$newsData = [];
$sql = "SELECT news_content FROM news";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $newsData[] = $row['news_content'];
    }
}
?>
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
                <p id="scrolling-text">Follow us on Instagram - @glacemedia</p>
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
                    <a class="btn-posnawr" href="contactus.php" id="hideOnMobile">Contact Us<span></span></a> 
                    <span onclick="showSidebar()" class="top-menu-bar">
                    <i class="fa-solid fa-bars fa-xl" id="menu-bar-logo"></i>
</span>

                </nav>                             
            </div>
            <div class="header-sidebar">
    <nav>
        <ul>
            <li><span onclick="hideSidebar()">
            
            <i class="fa-solid fa-xmark fa-2x"></i><br>
</span>
</li>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="ourservices.php">Services</a></li>
            <li><a href="brands.php">Work</a></li>
            <li><a href="contactus.php">Contact us</a></li>
        </ul>
    </nav>
</div>
            <br>
        </header>  
        <script>
const messages = <?php echo json_encode($newsData); ?>;
let messageIndex = 0;
const textElement = document.getElementById("scrolling-text");

const updateMessage = () => {
    textElement.classList.add("flip");

    setTimeout(() => {
        messageIndex = (messageIndex + 1) % messages.length;
        textElement.textContent = messages[messageIndex];
    }, 500);

    setTimeout(() => {
        textElement.classList.remove("flip");
    }, 1000);
};

setInterval(updateMessage, 4000);
    function showSidebar() {
    const sidebar = document.querySelector('.header-sidebar');
    sidebar.style.transform = 'translateX(0%)'; // Slide in
}

function hideSidebar() {
    const sidebar = document.querySelector('.header-sidebar');
    sidebar.style.transform = 'translateX(100%)'; // Slide out
}



(function() {
    const buttons = document.querySelectorAll(".btn-posnawr");
  
    buttons.forEach(button => {
      ["mouseenter", "mouseout"].forEach(evt => {
        button.addEventListener(evt, e => {
          let parentOffset = button.getBoundingClientRect(),
              relX = e.pageX - parentOffset.left,
              relY = e.pageY - parentOffset.top;
  
          const span = button.getElementsByTagName("span");
  
          span[0].style.top = relY + "px";
          span[0].style.left = relX + "px";
        });
      });
    });
  })();








  let lastScrollTop = 0;
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scrolling Down - Hide Header Completely
        header.style.top = '-100%';
    } else {
        // Scrolling Up - Show Header
        header.style.top = '0';
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Ensure positive values only
});


</script>

<!-- HEADER ENDS -->

</body>

</html>
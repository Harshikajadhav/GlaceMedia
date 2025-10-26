<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Glace Media</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <!-- Google Font Links starts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=close" />
</head>
<body>
<?php
include 'header.php';
include('db_connection.php');

// Fetch work data
$conn = new mysqli("localhost", "root", "", "glace");
$result = $conn->query("SELECT * FROM homepage_work");

if (!$result) {
    die("Error fetching data: " . $conn->error);
}
?>
<br>
<!-- Glace closing -->
    <!-- BG VIDEO STARTS -->
     <br><br><br><br> <br><br><br>
    <div class="video-container">
        <video autoplay loop muted class="background-video">
            <source src="videos/header.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <!-- BG VIDEO ENDS -->
<br><br><br>
    <div class="thoughts">
        <p>At Glace Media ,every story is a masterpiece<br> waiting to unfold 
       
    </div>


    <div class="scroller-infinite">
        <ul>
            <li>
                <span class="company">WE DON'T FOLLOW TRENDS ,WE SET THEM # </span>
            </li>
            <li>
                <span class="company">WE DON'T FOLLOW TRENDS ,WE SET THEM # </span>
            </li>
            <li>
                <span class="company">WE DON'T FOLLOW TRENDS ,WE SET THEM # </span>
            </li>
        </ul>
        <ul aria-hidden="true">
            <li>
                <span class="company">WE DON'T FOLLOW TRENDS ,WE SET THEM # </span>
            </li>
            <li>
                <span class="company">WE DON'T FOLLOW TRENDS ,WE SET THEM # </span>
            </li>
            <li>
                <span class="company">WE DON'T FOLLOW TRENDS ,WE SET THEM # </span>
            </li>
        </ul>
    </div>

    <!-- BG VIDEO STARTS -->
    <div class="videoo-containerr">
        <video autoplay loop muted class="backgroundd-videoo">
            <source src="videos/header.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <!-- BG VIDEO ENDS -->


     <!-- About Us Text -->
     <div class="text-container">
      <span class="headline">
        We Craft ideas, design experiences, and <br> power growth through strategy, creativity and collaboration   </span>
      <p class="subline">
        At our core, we connect brands to audiences through bold ideas and smart solutions!<br>
        Driven by creativity, fueled by innovation, and focused on your success.
      </p>
    </div>
  <!-- Interactive Background Particle Container -->
  

    <!-- Carousel starts -->


<div class="carousel-main-ka-bhi-main">
    <div class="carousel-main-main">
        <div class="carousel">
            <!-- list item -->
            <div class="list">
                <?php
                // Loop through result set for main images
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="item">
                        <img src="admin/uploads/<?php echo htmlspecialchars($row['main_img']); ?>" alt="Main Image">
                    </div>
                <?php } ?>
            </div>
            <!-- list thumbnail -->
            <div class="thumbnail">
                <?php
                // Reset result pointer to fetch thumbnails
                $result->data_seek(0); // Reset the result pointer to the beginning
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="item">
                        <img src="admin/uploads/<?php echo htmlspecialchars($row['thumbnail_img']); ?>" alt="Thumbnail Image">
                        <div class="work-content"></div>
                    </div>
                <?php } ?>
            </div>
            <!-- next prev -->
            <div class="arrows">
                <button id="prev" style="padding-left: 20px;">&lt;</button>
                <button id="next" style="padding-right: 20px;">&gt;</button>
            </div>
        </div>
    </div>
</div>

    <!-- Carousel ends -->

   <div class="max-spacer"></div>



    <div class="services-wrapper">
        <div class="list-of-services">
            <div class="service service1">
                <div class="headings">Influencer Marketing</div>
                <div class="services-main-content">
                <div class="service1-desc">Connecting brands with voices that inspire and influence</div><br>
                <div class="service1-desc"><br><br><br><br><br>
                <button class="btnn two">View More <i class="fa-solid fa-arrow-right" style="color: black"></i></button>
                </div>
                </div>
            </div>
            <div class="service service2">
                <div class="headings">Campaign <br>Management</div>
                <div class="services-main-content">
                <div class="service1-desc">Formulating campaigns that don’t just stand out – they stand apart

            </div>
                <div class="service1-desc"><br><br><br><br><br>
                <button class="btnn two">View More <i class="fa-solid fa-arrow-right" style="color: black"></i></button>

                </div>
                
                </div>
            </div>
            <div class="service service3">
                <div class="headings">Videography</div>
                <div class="services-main-content">
                <div class="service1-desc">Creating impactful videos that captivate audiences and elevate your brand, from concept to production.</div>
                <div class="service1-desc"><br><br><br><br><br>
                <button class="btnn two">View More <i class="fa-solid fa-arrow-right" style="color: black"></i></button>
                </div>
                </div>
            </div>
            <div class="service service4">
                <div class="headings">Social Media <br>Marketing</div>
                <div class="services-main-content">
                <div class="service1-desc">Where creativity meets strategy to turn your social media into a brand powerhouse.
                </div>
                <div class="service1-desc"><br><br><br><br><br>
                <button class="btnn two">View More <i class="fa-solid fa-arrow-right" style="color: black"></i></button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-services-main">
    <div class="mobile-services">
        <p>Influencer Marketing</p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel mollitia sint incidunt exercitationem assumenda, vero suscipit itaque earum molestiae facilis est nulla, explicabo fugiat. Sapiente saepe eligendi necessitatibus eveniet velit.</span>
    </div>

    <div class="mobile-services">
        <p>Campaign Management</p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel mollitia sint incidunt exercitationem assumenda, vero suscipit itaque earum molestiae facilis est nulla, explicabo fugiat. Sapiente saepe eligendi necessitatibus eveniet velit.</span>
    </div>

    <div class="mobile-services">
        <p>Videography</p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel mollitia sint incidunt exercitationem assumenda, vero suscipit itaque earum molestiae facilis est nulla, explicabo fugiat. Sapiente saepe eligendi necessitatibus eveniet velit.</span>
    </div>

    <div class="mobile-services">
        <p>Social Media Marketing</p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel mollitia sint incidunt exercitationem assumenda, vero suscipit itaque earum molestiae facilis est nulla, explicabo fugiat. Sapiente saepe eligendi necessitatibus eveniet velit.</span>
    </div>
</div>


    <div class="max-spacer"></div>
    <div class="did-you-know-section">
        <div class="did-you-know">
            <div class="did-header">
                <img class="rotating-icon" src="image/asterisk.png" alt="Asterisk Icon">
                <div class="did-content">DID YOU KNOW ?</div>
            </div>
        </div>
    </div>
<div class="min-spacer" style="height: 30px;"></div>
    <div class="wrapper" style="padding: 0px; margin: 0px">
        <div class="reverse-scroller">
            <ul>
                <li><span class="company">The first television commercial aired in 1941, costing $9. &nbsp;<i class="fa-solid fa-divide fa-2x" style="color: #efb9e2; transform: rotate(-45deg);"></i></span></li>
                <li><span class="company"> Facebook's original name was "Facemash. &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="company"> YouTube's first video was "Me at the zoo" in 2005 &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="company"> The term "influencer" originated in the 1940s. &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="company">  Influencers with 1,000-10,000 followers have higher engagement rates (4.5%) than those with 100,000+ followers (2.4%) &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="company"> The most-watched YouTube video is "Baby Shark Dance" (10 billion views). &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                
                <li><span class="company">  The first social media influencer was likely Cindy Margolis, who gained fame on the internet in the 1990s. &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
               <li><span class="company">. Instagram's original name was "Burbn &nbsp;<i class="fa-solid fa-divide fa-2x"  style="color: #efb9e2; transform: rotate(-45deg);"></i></span></li>
            </ul>
            <ul aria-hidden="true">
            <li><span class="company">The first television commercial aired in 1941, costing $9. &nbsp;<i class="fa-solid fa-divide fa-2x" style="color: #efb9e2; transform: rotate(-45deg);"></i></span></li>
                <li><span class="company"> Facebook's original name was "Facemash. &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="company"> YouTube's first video was "Me at the zoo" in 2005 &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="company"> The term "influencer" originated in the 1940s. &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="company">  Influencers with 1,000-10,000 followers have higher engagement rates (4.5%) than those with 100,000+ followers (2.4%) &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="company"> The most-watched YouTube video is "Baby Shark Dance" (10 billion views). &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
              
                <li><span class="company">  The first social media influencer was likely Cindy Margolis, who gained fame on the internet in the 1990s. &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
               <li><span class="company">. Instagram's original name was "Burbn &nbsp;<i class="fa-solid fa-divide fa-2x"  style="color: #efb9e2; transform: rotate(-45deg);"></i></span></li>
            </ul>
        </div>
        <div class="sscroller-infinite">
        <ul>
                <li><span class="r-company">The first first iPhone commercial was filmed in a single take. &nbsp;<i class="fa-solid fa-plus fa-2x" style="color: #efb9e2; transform: rotate(-45deg);"></i></span></li>
                <li><span class="r-company"> The iconic sitcom "Friends" was originally titled "Insomnia Cafe" &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">Virtual events are projected to grow 25% annually. &nbsp;<i class="fa-solid fa-divide fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company"> Instagram's original filters were named after alcoholic drinks. &nbsp;<i class="fa-solid fa-xmark fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">  Facebook's "Like" button was almost a "Awesome" button. &nbsp;<i class="fa-solid fa-plus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company"> Twitter's character limit was inspired by SMS text messages. &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">Kylie Jenner's Instagram posts can earn up to $1 million each. &nbsp;<i class="fa-solid fa-divide fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">  TikTok's "Renegade" dance challenge generated 1.5 billion views. &nbsp;<i class="fa-solid fa-xmark fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">Charli D'Amelio's TikTok account gained 1 million followers in 24 hours &nbsp;<i class="fa-solid fa-plus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company"> The most-watched YoutTube video is "Baby Shark Dance" (10 billion views) &nbsp;<i class="fa-solid fa-minus fa-2x"  style="color: #efb9e2; transform: rotate(-45deg);"></i></span></li>
            </ul>
            <ul aria-hidden="true">
            <li><span class="r-company">The first first iPhone commercial was filmed in a single take. &nbsp;<i class="fa-solid fa-plus fa-2x" style="color: #efb9e2; transform: rotate(-45deg);"></i></span></li>
                <li><span class="r-company"> The iconic sitcom "Friends" was originally titled "Insomnia Cafe" &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">Virtual events are projected to grow 25% annually. &nbsp;<i class="fa-solid fa-divide fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company"> Instagram's original filters were named after alcoholic drinks. &nbsp;<i class="fa-solid fa-xmark fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">  Facebook's "Like" button was almost a "Awesome" button. &nbsp;<i class="fa-solid fa-plus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company"> Twitter's character limit was inspired by SMS text messages. &nbsp;<i class="fa-solid fa-minus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">Kylie Jenner's Instagram posts can earn up to $1 million each. &nbsp;<i class="fa-solid fa-divide fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">  TikTok's "Renegade" dance challenge generated 1.5 billion views. &nbsp;<i class="fa-solid fa-xmark fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company">Charli D'Amelio's TikTok account gained 1 million followers in 24 hours &nbsp;<i class="fa-solid fa-plus fa-2x" style="color: #a6e753;"></i></span></li>
                <li><span class="r-company"> The most-watched YoutTube video is "Baby Shark Dance" (10 billion views) &nbsp;<i class="fa-solid fa-minus fa-2x"  style="color: #efb9e2; transform: rotate(-45deg);"></i></span></li>
            </ul>
        </div>
    </div>


<div class="max-spacer"></div>

<?php
 include 'footer.php';
 ?>
    <script src="script.js"></script>
</body>

</html>
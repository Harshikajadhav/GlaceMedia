
<html lang="en">

<head>
    <title>Welcome to Glace Media</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <!-- Google Font Links starts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=close" />
    <!-- Google Font Links ends -->
</head>
<br><br>
<style>
    

        /* Desktop Version Styles */
@media (min-width: 801px) {
  .brands-list, .brands-list2 {
    display: block; /* Ensure visibility on larger screens */
  }

  .mobile-work-slider {
    display: none; /* Hide mobile slider on larger screens */
  }
}

/* Mobile Version Styles */
@media (max-width: 800px) {
  .brands-list, .brands-list2 {
    display: none; /* Hide brands-list on smaller screens */
  }

  .mobile-work-slider {
    display: flex; /* Show mobile slider on smaller screens */
    gap: 20px;
    padding: 10px;
    overflow-x: hidden;
    scroll-snap-type: x mandatory;
    white-space: nowrap;
    position: relative;
    margin: 10px 0 10px 10px;
  }

  .img-box {
    flex: 0 0 auto;
    width: 300px;
    height: 450px;
    overflow: hidden;
    border-radius: 30px;
    scroll-snap-align: start;
  }

  .img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}

</style>
<body>
    
<?php 
include 'header.php';
?>
    <br><br><br>
    
<br><br><br>
<div class="brands-list">
    <!-- Row 1 -->
    <div class="brand-list">
        <div class="brand-box" data-image="image/work1/1.jpg"><img src="image/images.jpeg" alt=""></div>
        <div class="brand-box" data-image="image/work1/2.jpg"><img src="image/1.png"></div>
        <div class="brand-box" data-image="image/work1/3.png"><img src="image/1.png"></div>
        <div class="brand-box" data-image="image/work1/4.jpg"><img src="image/1.png"></div>
    </div>

    <!-- Placeholder for Hovered Image -->
    <div class="image-placeholder">
        <img src="" alt="Hovered Image" id="hovered-image">
    </div>
</div>
<br><br>
<div class="brands-list2">
    
    <div class="brand-list2">
        <div class="brand-box2" data-image="image/work1/1.jpg"><img src="image/1.png"></div>
        <div class="brand-box2" data-image="image/work1/2.jpg"><img src="image/1.png"></div>
        <div class="brand-box2" data-image="image/work1/3.png"><img src="image/1.png"></div>
        <div class="brand-box2" data-image="image/work1/4.jpg"><img src="image/1.png"></div>
    </div>

    <div class="image-placeholder2">
        <img src="" alt="Hovered Image" id="hovered-image2">
    </div>
</div>



<!-- MOBILE VERSION STARTS -->
<div class="mobile-work-slider" id="slider">
        <div class="img-box"><img src="image/work1/1.jpg" alt=""></div>
        <div class="img-box"><img src="image/work1/2.jpg" alt=""></div>
        <div class="img-box"><img src="image/work1/3.png" alt=""></div>
        <div class="img-box"><img src="image/work1/4.jpg" alt=""></div>
        <div class="img-box"><img src="image/work1/5.webp" alt=""></div>
        <div class="img-box"><img src="image/work2/1.png" alt=""></div>
    </div>

<!-- MOBILE VERSION ENDS -->





<div class="max-spacer"></div>
<?php
    include 'footer.php';
    ?>
    <script src="script.js"></script>
    <script src="brands.js"></script>


<!-- MOBILE VERSION JS STARTS -->
<script>
        const slider = document.getElementById('slider');

        // Clone all slider content
        const cloneSlider = () => {
            slider.innerHTML += slider.innerHTML; // Duplicate content
        };

        // Infinite scroll logic with animation
        let scrollPosition = 0;
        const scrollSpeed = 1; // Adjust speed

        const infiniteScroll = () => {
            // Smoothly scroll the content
            scrollPosition += scrollSpeed;
            slider.scrollTo({
                left: scrollPosition,
                behavior: "smooth" // Enables smooth scrolling animation
            });

            // Reset scroll position when reaching the duplicate
            if (scrollPosition >= slider.scrollWidth / 2) {
                scrollPosition = 0;
                slider.scrollTo({
                    left: scrollPosition,
                    behavior: "auto" // Instantly reset position
                });
            }

            requestAnimationFrame(infiniteScroll);
        };

        // Initialize slider
        cloneSlider();
        infiniteScroll();
    </script>
<!-- MOBILE VERSION JS ENDS -->
</body>

</html>
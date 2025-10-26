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
<style>
.mobile-work-slider {
    display: flex;
    gap: 20px; /* Adds spacing between items */
    padding: 10px; /* Padding for better spacing */
    overflow: hidden; /* Hides overflow */
    scroll-snap-type: x mandatory; /* Ensures snap scrolling */
    scroll-behavior: smooth; /* Smooth scrolling effect */
    white-space: nowrap; /* Prevents wrapping */
}

.img-box {
    flex: 0 0 auto; /* Prevents shrinking and ensures fixed size */
    width: 300px;
    height: 450px;
    overflow: hidden;
    border-radius: 30px;
    scroll-snap-align: start; /* Ensures each image aligns correctly on scroll */
}

.img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures images fit properly */
}


</style>
<body>
    
<?php 
include 'header.php';
?>
<div class="mobile-work-slider">
    <div class="img-box"><img src="image/work1/1.jpg" alt=""></div>
    
    <div class="img-box"><img src="image/work1/2.jpg" alt=""></div>
    <div class="img-box"><img src="image/work1/3.png" alt=""></div>
    <div class="img-box"><img src="image/work1/4.jpg" alt=""></div>
    <div class="img-box"><img src="image/work1/5.webp" alt=""></div>
    <div class="img-box"><img src="image/work2/1.png" alt=""></div>
    <div class="img-box"><img src="image/work2/2.jpg" alt=""></div>
    <div class="img-box"><img src="image/work2/3.jpg" alt=""></div>
    <div class="img-box"><img src="image/work2/4.jpg" alt=""></div>
    <div class="img-box"><img src="image/work2/5.png" alt=""></div>
    <div class="img-box"><img src="image/work2/5.png" alt=""></div>
    <div class="img-box"><img src="image/work2/5.png" alt=""></div>
</div>
<br><br><br>
<?php
    include 'footer.php';
?>
 <script>
const slider = document.querySelector('.mobile-work-slider');
const imgBoxes = document.querySelectorAll('.img-box');
const imgBoxWidth = imgBoxes[0].offsetWidth + 20; // Image width + gap
let scrollInterval;

// Clone the images for an infinite loop
const sliderChildren = [...imgBoxes];
sliderChildren.forEach((box) => {
    const clone = box.cloneNode(true);
    slider.appendChild(clone);
});

// Start auto-scrolling
function startAutoScroll() {
    scrollInterval = setInterval(() => {
        slider.scrollBy({ left: imgBoxWidth, behavior: 'smooth' });

        // Reset scroll position seamlessly when reaching the end
        if (slider.scrollLeft >= slider.scrollWidth - slider.clientWidth) {
            slider.scrollLeft = 0;
        }
    }, 2000);
}

// Pause scrolling on hover
slider.addEventListener('mouseenter', () => clearInterval(scrollInterval));
slider.addEventListener('mouseleave', startAutoScroll);

// Start scrolling
startAutoScroll();

</script>
</body>

</html>
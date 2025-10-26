<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Glace Media</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
    <!-- Google Font Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@100..900&family=Oswald:wght@200..700&family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=close" />
    <style>
        /* Slider Container */
        .mobile-work-slider {
            display: flex;
            gap: 20px; /* Adds spacing between items */
            padding: 10px; /* Padding for better spacing */
            overflow: hidden; /* Hides overflow */
            white-space: nowrap; /* Prevents wrapping */
            scroll-behavior: smooth; /* Smooth scrolling effect */
            position: relative;
        }

        /* Individual Image Box */
        .img-box {
            flex: 0 0 auto; /* Prevents shrinking and ensures fixed size */
            width: 300px;
            height: 450px;
            overflow: hidden;
            border-radius: 30px;
        }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures images fit properly */
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Slider Section -->
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
    </div>

    <script>
        const slider = document.querySelector('.mobile-work-slider');
        const imgBoxes = document.querySelectorAll('.img-box');
        const imgBoxWidth = imgBoxes[0].offsetWidth + 20; // Image width + gap

        // Clone the images to ensure smooth infinite scrolling
        slider.innerHTML += slider.innerHTML;

        // Continuous Scroll
        let scrollSpeed = 1; // Adjust speed for smoother effect

        function startInfiniteScroll() {
            slider.scrollLeft += scrollSpeed;

            // Seamlessly reset the scroll position
            if (slider.scrollLeft >= slider.scrollWidth / 2) {
                slider.scrollLeft = 0;
            }

            requestAnimationFrame(startInfiniteScroll);
        }

        // Pause on hover
        slider.addEventListener('mouseenter', () => scrollSpeed = 0);
        slider.addEventListener('mouseleave', () => scrollSpeed = 1);

        // Start Infinite Scroll
        startInfiniteScroll();
    </script>
</body>
</html>

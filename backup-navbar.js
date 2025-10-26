document.addEventListener("DOMContentLoaded", () => {
    // Sidebar Toggle
    const toggle = document.getElementById("toggle");
    const navbar = document.getElementById("navbar");

    toggle.addEventListener("click", () => {
        navbar.classList.toggle("open");
        toggle.classList.toggle("open");
    });

    // Text Scrolling
    const messages = [
        "Field trip by Kanye West is Trending",
        "New song uploaded on YouTube",
        "Catch our exclusive Glace insights!",
        "Follow us on Instagram for updates"
    ];
    let messageIndex = 0;
    const textElement = document.getElementById("scrolling-text");

    setInterval(() => {
        messageIndex = (messageIndex + 1) % messages.length;
        textElement.textContent = messages[messageIndex];
    }, 5000);

    // Change background color on hover for sidebar items
    const sidebarItems = navbar.querySelectorAll("p");
    const colors = ["#12a697", "#fde325", "#a6e753", "#efb9e2", "#fe6427", "#000000"];

    sidebarItems.forEach((item) => {
        item.addEventListener("mouseover", () => {
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            item.style.color = randomColor;
        });

        item.addEventListener("mouseout", () => {
            item.style.color = "";
        });
    });

    // Intersection Observer for Second Video
    const videoContainer = document.querySelector('.videoo-containerr');
    const backgroundVideo = document.querySelector('.backgroundd-videoo');
    let videoVisible = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            videoVisible = entry.isIntersecting;
        });
    }, { threshold: 0.6 });

    observer.observe(videoContainer);

    // Scroll Event for Video Margin
    window.addEventListener('scroll', () => {
        let scrollPosition = window.scrollY;

        if (videoVisible) {
            if (scrollPosition > 50) {
                videoContainer.style.margin = '0% 0%';
                backgroundVideo.style.borderRadius = '0';
            } else {
                videoContainer.style.margin = '0% 10%';
                backgroundVideo.style.borderRadius = '40px';
            }
        } else {
            videoContainer.style.margin = '0% 10%';
            backgroundVideo.style.borderRadius = '40px';
        }
    });

    // Smooth Mousemove Scrolling for Services Section
    const wrapper = document.querySelector('.services-wrapper');
    const services = document.querySelector('.list-of-services');
    let targetScroll = 0;
    let currentScroll = 0;

    function smoothScroll() {
        currentScroll += (targetScroll - currentScroll) * 0.1;
        services.style.transform = `translateX(-${currentScroll}px)`;

        if (Math.abs(targetScroll - currentScroll) > 0.5) {
            requestAnimationFrame(smoothScroll);
        }
    }

    wrapper.addEventListener('mouseenter', () => {
        wrapper.addEventListener('mousemove', (e) => {
            const wrapperWidth = wrapper.offsetWidth;
            const mouseX = e.clientX;

            targetScroll = (services.scrollWidth - wrapperWidth) * (mouseX / wrapperWidth);
            requestAnimationFrame(smoothScroll);
        });
    });

    wrapper.addEventListener('mouseleave', () => {
        targetScroll = 0;
        requestAnimationFrame(smoothScroll);
    });

    // Carousel Functionality
    let nextDom = document.getElementById('next');
    let prevDom = document.getElementById('prev');
    let carouselDom = document.querySelector('.carousel');
    let SliderDom = carouselDom.querySelector('.carousel .list');
    let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
    let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');
    let timeDom = document.querySelector('.carousel .time');

    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
    let timeRunning = 3000;
    let timeAutoNext = 7000;

    nextDom.onclick = function () {
        showSlider('next');
    };

    prevDom.onclick = function () {
        showSlider('prev');
    };

    let runTimeOut;
    let runNextAuto = setTimeout(() => {
        next.click();
    }, timeAutoNext);

    function showSlider(type) {
        let SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
        let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');

        if (type === 'next') {
            SliderDom.appendChild(SliderItemsDom[0]);
            thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
            carouselDom.classList.add('next');
        } else {
            SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
            thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
            carouselDom.classList.add('prev');
        }
        clearTimeout(runTimeOut);
        runTimeOut = setTimeout(() => {
            carouselDom.classList.remove('next');
            carouselDom.classList.remove('prev');
        }, timeRunning);

        clearTimeout(runNextAuto);
        runNextAuto = setTimeout(() => {
            next.click();
        }, timeAutoNext);
    }

    // Brands Hover Effect
    function initializeBrandHover(brandBoxes, imagePlaceholder, hoveredImage, brandLists) {
        brandBoxes.forEach((box, index) => {
            const rowIndex = Math.floor(index / 4);

            box.addEventListener('mouseenter', () => {
                const imageSrc = box.getAttribute('data-image');
                hoveredImage.src = imageSrc;
                imagePlaceholder.classList.add('active');
                hoveredImage.classList.add('active');

                if (brandLists[rowIndex + 1]) {
                    brandLists[rowIndex + 1].classList.add('moved-down');
                }
            });

            box.addEventListener('mouseleave', () => {
                imagePlaceholder.classList.remove('active');
                hoveredImage.classList.remove('active');

                if (brandLists[rowIndex + 1]) {
                    brandLists[rowIndex + 1].classList.remove('moved-down');
                }
            });
        });
    }

    const brandBoxes = document.querySelectorAll('.brand-box');
    const imagePlaceholder = document.querySelector('.image-placeholder');
    const hoveredImage = document.getElementById('hovered-image');
    const brandLists = document.querySelectorAll('.brand-list');

    const brandBoxes2 = document.querySelectorAll('.brand-box2');
    const imagePlaceholder2 = document.querySelector('.image-placeholder2');
    const hoveredImage2 = document.getElementById('hovered-image2');
    const brandLists2 = document.querySelectorAll('.brand-list2');

    initializeBrandHover(brandBoxes, imagePlaceholder, hoveredImage, brandLists);
    initializeBrandHover(brandBoxes2, imagePlaceholder2, hoveredImage2, brandLists2);
});
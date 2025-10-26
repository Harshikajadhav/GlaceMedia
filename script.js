document.addEventListener("DOMContentLoaded", () => {
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

let listItems = document.querySelectorAll('.list .item');
let thumbnails = document.querySelectorAll('.thumbnail .item');
let prevButton = document.getElementById('prev');
let nextButton = document.getElementById('next');
let currentIndex = 0;

function showImage(index) {
    listItems.forEach((item, i) => {
        item.classList.toggle('active', i === index);
    });
    thumbnails.forEach((thumbnail, i) => {
        thumbnail.classList.toggle('active', i === index);
    });
    currentIndex = index;
}

thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        showImage(index);
    });
});

prevButton.addEventListener('click', () => {
    let newIndex = (currentIndex - 1 + listItems.length) % listItems.length;
    showImage(newIndex);
});

nextButton.addEventListener('click', () => {
    let newIndex = (currentIndex + 1) % listItems.length;
    showImage(newIndex);
});

// Set the default active image
showImage(0);



// Contact us button
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


  // Select all service items
const serviceItems = document.querySelectorAll('.mobile-services p');

serviceItems.forEach((item) => {
    item.addEventListener('click', () => {
        const parent = item.parentElement;
        parent.classList.toggle('active');
    });
});

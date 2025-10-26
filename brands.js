const brandBoxes = document.querySelectorAll('.brand-box');
const imagePlaceholder = document.querySelector('.image-placeholder');
const hoveredImage = document.getElementById('hovered-image');
const brandLists = document.querySelectorAll('.brand-list');

brandBoxes.forEach((box, index) => {
    const rowIndex = Math.floor(index / 4); // Determine which row we're in

    box.addEventListener('mouseenter', () => {
        const imageSrc = box.getAttribute('data-image');

        // Set the image source and activate smooth effect
        hoveredImage.src = imageSrc;
        imagePlaceholder.classList.add('active');
        hoveredImage.classList.add('active');

        // Move the next row down
        if (brandLists[rowIndex + 1]) {
            brandLists[rowIndex + 1].classList.add('moved-down');
        }
    });

    box.addEventListener('mouseleave', () => {
        // Reset the image and placeholder
        imagePlaceholder.classList.remove('active');
        hoveredImage.classList.remove('active');

        // Reset row position
        if (brandLists[rowIndex + 1]) {
            brandLists[rowIndex + 1].classList.remove('moved-down');
        }
    });
});


const brandBoxes2 = document.querySelectorAll('.brand-box2');
const imagePlaceholder2 = document.querySelector('.image-placeholder2');
const hoveredImage2 = document.getElementById('hovered-image2');
const brandLists2 = document.querySelectorAll('.brand-list2');

brandBoxes2.forEach((box, index) => {
    const rowIndex = Math.floor(index / 4); // Determine which row we're in

    box.addEventListener('mouseenter', () => {
        const imageSrc = box.getAttribute('data-image');

        // Set the image source and activate smooth effect
        hoveredImage2.src = imageSrc;
        imagePlaceholder2.classList.add('active');
        hoveredImage2.classList.add('active');

        // Move the next row down
        if (brandLists2[rowIndex + 1]) {
            brandLists2[rowIndex + 1].classList.add('moved-down');
        }
    });

    box.addEventListener('mouseleave', () => {
        // Reset the image and placeholder
        imagePlaceholder2.classList.remove('active');
        hoveredImage2.classList.remove('active');

        // Reset row position
        if (brandLists2[rowIndex + 1]) {
            brandLists2[rowIndex + 1].classList.remove('moved-down');
        }
    });
});

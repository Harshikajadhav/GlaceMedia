<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About us</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="mobile.css">
        <script src="https://kit.fontawesome.com/2366c91d64.js" crossorigin="anonymous"></script>
        <!-- Google Font Links starts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=close" />
        <!-- Google Font Links ends -->
    </head>

<body>
<?php 
include 'header.php';
?>
<br><br><br><br> <br><br><br>
<!-- ABOUT US CONTENT STARTS -->
 <div class="who-we-are"><img src="image/work1/2.jpg"></div>
 <br>
            <div class="who-we-are-content">
                <p>Who We Are!</p><br>
                <span>At Glacé Media, we help brands creating high-impact campaigns. We create eye-catching content that connect with the correct target audience.<br><br>

Our team of creative experts understands that every brand is unique. That's why we work closely with our clients to develop customised strategies that align with their specific needs and objective.<br><br>

Your Gateway to Gen Z : Glacé helps you speak their language. We're a team of young, tech-savvy individuals who live and breathe digital.</span>
            </div>

            <div class="community-section-divider">
                <div class="join-community">
                    <p>Join our Tribe</p>
                </div>
                <div class="start-something">
                        <span>Lets start something together</span>
                        <button class="btnn two">Get in touch <i class="fa-solid fa-arrow-right" style="color: black"></i></button>
                </div>
            </div>
            <br><br><br>



<div class="cards">
  <div class="card" >
    <div class="card__inner" style="background-color: #a6e753;">
          <div class="card__image-container">
            <img class="card___image" src="image/10.jpg"/>
          </div>
          <div class="card__content">
            <h1 class="card__title" id="glace-story">The Glacé Story,</h1>
            <p class="card__description">
            “Glacé", the French word for "iced", resonates deeply with our brand identity.<br>
Just as ice can take any shape and mold itself to fit any form, our services are designed to be flexible and adaptable to meet your brand value. We mold ourselves to fit your vision, providing tailored solutions that help you achieve your goals.

            </p><br>
            <button class="btnn two" id="card-one-btn">GET IN TOUCH <i class="fa-solid fa-arrow-right" style="color: black"></i></button>
          </div>
    </div>
  </div>
  <div class="card">
    <div class="card__inner" style="background-color:#01d5f2; padding-right: 0px; border-bottom: 10px solid black;" >
      <div class="card__content" id="another_card__content">
        <h1 class="card__title" id="how-we-work-title">How We Work,</h1>
        <p class="card__description" id="desc-how-we-work">
        <b>Our working style is one of a kind, where we:</b><br>
<span class="how-we-work-content">
Dare to Be Different.<br>
Proactive, Adaptable & Modern.<br>
Believe in Slaying the Algorithm. <br>
Spill the tea, sharing knowledge and insights freely.
        </p>
        </span>
        <button class="btnn two" >GET IN TOUCH <i class="fa-solid fa-arrow-right" style="color: black"></i></button>
      </div>
      <div class="card__image-container" style="padding-right: 0;">
        <img class="card___image" id="second_card___image" src="image/9.jpg"/>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card___inner" style="height: 1000px;">
      <div class="founders" style="font-family: 'Open Sans', sans-serif;">
        <div class="team-heading">
          <h1>MEET OUR FOUNDERS</h1><br>
        </div>
        <div class="team-members" style="padding-top: 350px;">
          <!-- Images for Founders -->
          <div class="team-member" id="member1">
            <img src="image/Muskaan.jpg" alt="Founder 1">
            <p class="name">Prekshi Dholakia</p>
            <p class="position">Co-founder & CEO</p>
            <p class="thought">Thought here</p>
          </div>
          <div class="team-member" id="member2">
            <img src="image/Muskaan.jpg" alt="Founder 2">
            <p class="name">Muskaan Kataria</p>
            <p class="position">Co-founder & CMO</p>
            <p class="thought">My mood varies from 'Lover' by Taylor <br>Swift to 'Lover' by Diljit Dosanjh</p>
          </div>
          <div class="team-member" id="member3">
            <img src="image/Muskaan.jpg" alt="Founder 3">
            <p class="name">Asmi Shirsat</p>
            <p class="position">Co-founder & COO</p>
            <p class="thought">Thought here</p>
          </div>
        </div>
        <!-- Navigation Arrows -->
        <div class="navigation">
          <button id="leftArrow" class="arrow">&larr;</button>
          <button id="rightArrow" class="arrow">&rarr;</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    const members = [
      document.getElementById('member1'),
      document.getElementById('member2'),
      document.getElementById('member3'),
    ];

    const leftArrow = document.getElementById('leftArrow');
    const rightArrow = document.getElementById('rightArrow');

    // Initial positions
    let positions = ['left', 'center', 'right'];
    updatePositions();

    function updatePositions() {
members.forEach((member, index) => {
// Remove previous classes and reset animations
member.classList.remove('left', 'center', 'right', 'hide-details');
member.querySelector('p').style.opacity = '0'; // Reset text opacity

// Add the current position class
member.classList.add(positions[index]);

// Hide details for non-center positions
if (positions[index] !== 'center') {
  member.classList.add('hide-details');
} else {
  // Trigger animation for the center member
  setTimeout(() => {
    const texts = member.querySelectorAll('p');
    texts.forEach((text) => (text.style.opacity = '1')); // Make text visible
  }, 300); // Delay to align with the animation
}
});
}


    leftArrow.addEventListener('click', () => {
      // Move the last position to the front
      positions.unshift(positions.pop());
      updatePositions();
    });

    rightArrow.addEventListener('click', () => {
      // Move the first position to the end
      positions.push(positions.shift());
      updatePositions();
    });
  </script>
</div>
<div class="max-spacer"></div>

<?php 
include 'footer.php';
?>
<script src="script.js"></script>
</body>
</html>
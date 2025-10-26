<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About us</title>
        <link rel="stylesheet" href="style.css">
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

<!-- ABOUT US CONTENT STARTS -->
 <div class="who-we-are"><img src="image/work1/2.jpg"></div>
 <br>
            <div class="who-we-are-content">
                <p>Aim for Perfection</p>
                Glace has been creating impact for brands through iconic, culture-changing, value-driving ideas since the company was founded by
            David Ogilvy 75 years ago. It builds on that rich legacy through Borderless Creativity –  innovating at the intersections of its advertising, public relations,
            relationship design, consulting, and health capabilities with experts collaborating seamlessly across over 120 offices in nearly 90 countries.
            </div>

            <div class="community-section-divider">
                <div class="join-community">
                    <p>Join our community</p>
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
            <h1 class="card__title">Not your usual campaigns</h1>
            <p class="card__description">
              we create experiences <br> that stick long after the <br> screen goes dark.
            </p>
            <button class="btnn two">Get in touch <i class="fa-solid fa-arrow-right" style="color: black"></i></button>
          </div>
    </div>
  </div>
  <div class="card">
    <div class="card__inner" style="background-color:#01d5f2; padding-right: 0px; border-bottom: 10px solid black;" >
      <div class="card__content" style="padding: 150px 70px 70px 100px;">
        <h1 class="card__title">Our Team</h1>
        <p class="card__description">
          consists of highly creative & talented meadia <br> professionals, who are here to create the <br> extra-ordinary, and leave a mark! <br> who are here to create the extra-ordinary, <br> and leave a mark! <br>
        </p>
        <button class="btnn two">Get in touch <i class="fa-solid fa-arrow-right" style="color: black"></i></button>
      </div>
      <div class="card__image-container" style="padding-right: 0;">
        <img class="card___image" style="padding-top: 90px;" src="image/9.jpg"/>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card___inner" style="height: 1000px;">
      <div class="founders" style="font-family: 'Open Sans', sans-serif;">
        <div class="team-heading">
          <h1>Meet Our Founders</h1>
        </div><br><br><br><br><br>
        <div class="team-members" style="padding-top: 350px;">
          <!-- Images for Founders -->
          <div class="team-member" id="member1">
            <img src="image/m1.jpg" alt="Founder 1">
            <p class="name">Member 1</p>
            <p class="position">Position here</p>
            <p class="thought">Thought here</p>
          </div>
          <div class="team-member" id="member2">
            <img src="image/m2.jpg" alt="Founder 2">
            <p class="name">Muskaan Kataria</p>
            <p class="position">Co-founder & CMO</p>
            <p class="thought">My mood varies from 'Lover' by Taylor <br>Swift to 'Lover' by Diljit Dosanjh</p>
          </div>
          <div class="team-member" id="member3">
            <img src="image/m3.jpg" alt="Founder 3">
            <p class="name">Member 3</p>
            <p class="position">Position here</p>
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
</body>
</html>
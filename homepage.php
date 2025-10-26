<!DOCTYPE html>
<html>
<head>
  <title>Glace Entry Page</title>

  <style>
    body {
  overflow: hidden; /* Hide scrollbar initially */
  background-color: black;
}

.glace-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  font-size: 10em; 
  font-family: sans-serif; 
}

.homepage {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff; /* Or your desired background color */
}
.hidden {
  opacity: 0; 
  transform: translateY(20px); 
  transition: opacity 0.5s ease, transform 0.5s ease; 
}

.visible {
  opacity: 1;
  transform: translateY(0);
}
  </style>
</head>
<body>

  <div class="glace-container">
    <div class="glace-word">Glace</div>
  </div>

  <div class="homepage" style="display: none;"> 
    </div>

  <script src="script.js"></script>
  <script>
   window.addEventListener('scroll', () => {
  const elements = document.querySelectorAll('.hidden');

  elements.forEach(element => {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    if (rect.top < windowHeight - 100) { // Adjust this value as needed
      element.classList.add('visible');
    }
  });
});
  </script>

</body>
</html>
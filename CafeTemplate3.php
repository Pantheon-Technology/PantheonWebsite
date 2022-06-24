<!DOCTYPE html>
<html>
<head>
<title>Eatery Template 3</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Your restaurant</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Menu</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="Pictures/main.jpeg" alt="food" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge w3-text-white"><b>Business Name</b></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="Pictures/food1.webp" class="w3-round w3-image w3-opacity-min" alt="food" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About your business</h1><br>
      <p class="w3-large">Here would be a good space to tell your customers about your services.</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Menu</h1><br>
      <h4>Item name : <b>£5.00</b></h4>
      <p class="w3-text-grey">Description of product.</p><br>
    
      <h4>Item name : <b>£5.00</b></h4>
      <p class="w3-text-grey">Description of product.</p><br>
    
      <h4>Item name : <b>£5.00</b></h4>
      <p class="w3-text-grey">Description of product.</p><br>
    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="Pictures/Menu.jpeg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <div class ="w3-half">
    <h1>Contact</h1><br>
    <h4>Location:</h4>
    <p class="w3-text-blue-grey w3-large"><i class="fa fa-map w3-hover-opacity"><b> Your business's address</b></i></p>
    <h4>Telephone Number:</h4>
    <p class="w3-text-blue-grey w3-large"><i class="fa fa-phone w3-hover-opacity"><b> 0151 000 0000</b></i></p>
    <h4>Email:</h4>
    <p><a class="w3-text-blue-grey w3-large" href="mailto:pantheontechnology2022@gmail.com"><i class="fa fa-envelope"> - Click to eMail us</a></p></i>
    </div>
    <div class="w3-half">
        <br><br>
    <h2>Social Media:</h2>
    <p><a class="w3-button w3-black w3-block" href="https://www.instagram.com/pantheontechnology/"><i class="fa fa-instagram w3-hover-opacity"> - Instagram</a></p></i>
      <p><a class="w3-button w3-black w3-block" href="https://twitter.com/PantheonTechCo"><i class="fa fa-twitter w3-hover-opacity"> - Twitter</a></p></i>
      <p><a class="w3-button w3-black w3-block" href="https://www.linkedin.com/in/myles-hoult-b19706241/"><i class="fa fa-linkedin w3-hover-opacity"> - Linked In</a></p></i>
    </div>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <a class="w3-button w3-black" href="#home">To the Top!</a>
</footer>

</body>
</html>
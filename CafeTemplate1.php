<!DOCTYPE html>
<html>
<head>
<title>Cafe Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('Pictures/Cafe.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
    <p>The Cafe</p>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">Our Menu</button></p>
    <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black">Contact us</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container w3-black">
    <p class="w3-xxlarge">Opening Times</p>
    <p class="w3-xlarge">Weekdays - 9-5 Weekends - Closed</p>
    <p class="w3-large">Crosby Village</p>
  </div>
</div>

<!-- Menu Modal -->
<div id="menu" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Starters</h1>
    </div>
    <div class="w3-container">
      <h5>Starter 1 <b>£2.50</b></h5>
      <h5>Starter 2 <b>£3.50</b></h5>
      <h5>Starter 3 <b>£3.00</b></h5>
    </div>
    <div class="w3-container w3-black">
      <h1>Main Courses</h1>
    </div>
    <div class="w3-container">
      <h5>Main 1 <b>£8.50</b></h5>
      <h5>Main 2 <b>£5.50</b></h5>
      <h5>Main 3 <b>£4.00</b></h5>
      <h5>Main 4 <b>£6.50</b></h5>
      <h5>Main 5 <b>£5.00</b></h5>
    </div>
    <div class="w3-container w3-black">
      <h1>Desserts</h1>
    </div>
    <div class="w3-container">
      <h5>Cake 1 <b>£2.00</b></h5>
      <h5>Cake 2 <b>£2.00</b></h5>
      <h5>Cake 3 <b>£2.00</b></h5>
      <h5>Cake 4 <b>£2.00</b></h5>
    </div>
    <div class="w3-container w3-black">
      <h1>Drinks</h1>
    </div>
    <div class="w3-container">
      <h5>Tea <b>£2.00</b></h5>
      <h5>Coffee <b>£2.00</b></h5>
      <h5>Orange Juice <b>£2.00</b></h5>
      <h5>Apple Juice <b>£2.00</b></h5>
    </div>
  </div>
  </div>
</div>

<!-- Contact Modal -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact Form</h1>
    </div>
    <div class="w3-container">
      <p><a class="w3-button w3-blue w3-block" href="https://www.instagram.com/pantheontechnology/"><i class="fa fa-instagram w3-hover-opacity"></i>  Instagram</a></p>
      <p><a class="w3-button w3-blue w3-block" href="https://twitter.com/PantheonTechCo"> <i class="fa fa-twitter w3-hover-opacity"></i> Twitter</a></p>
      <p><a class="w3-button w3-blue w3-block" href="https://www.linkedin.com/in/myles-hoult-b19706241/"><i class="fa fa-linkedin w3-hover-opacity"></i> - Linked In</a></p>
      <p><a class="w3-button w3-blue w3-block" href="mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i> - Email</a></p>
      <p><a class="w3-button w3-blue w3-block" href=""><i class="fa fa-phone"></i> Phone number - 0151 000 0000</a></p>
      
    </div>
  </div>
</div>

</body>
</html>
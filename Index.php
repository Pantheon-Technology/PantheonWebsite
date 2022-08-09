<!DOCTYPE html>
<html>
<head>
<title>Pantheon Technology</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="StyleSheet.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Trirong", serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("Pictures/CrosbyBeach.jpeg"); 
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card " id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><img class="w3-image w3-round" src="Pictures/Navbarlogo.png" alt="logo" width="50" height="50"> Pantheon Technology</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#contact" class="w3-bar-item w3-button"> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-blue w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
<img class="w3-image w3-round" src="Pictures/Navbarlogo.png" alt="logo" width="50" height="50">  Pantheon Technology
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min " id="home">
  <div class="w3-display-left" style="padding:48px">
    <span class="w3-jumbo w3-text-black w3-hide-small"><strong>Pantheon Technology</strong></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Pantheon Technology</span><br>
    <span class="w3-xlarge w3-text-black"><b>Create your business' future, today!</b></span>
  </div> 
  <div class="w3-display-bottomleft w3-text-black w3-xlarge" style="padding:12px 24px">
  <p><a href="#about" class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn about Pantheon</a></p>      
  </div>
</header>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="about">
  <div class="w3-row-padding">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large"><b>Pantheon Technology is a Crosby owned business dedicated to enhancing the online presence of fellow Merseyside business owners!</b></p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Web Developement</p>
      <p>Websites can provide your customers with another way to interact with your business. Behind every good business is a great website, request a quote from us today!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Social Media Engagement</p>
      <p>Social media plays a key role in the way business is done today, we can help you boost your business' credibility through social media. We can give your company the boost it needs!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Logo Designs</p>
      <p>Your logo is at the forefront of your business, customers will see your logo and associate your companies characteristics with it! We can assist with that.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Website Maintainance</p>
      <p>Website maintainance is just as cruicial as the design and development! No website will not run as intended if poorly maintained. We can take care of that for you.</p>
    </div>
  </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-padding-64 w3-dark-grey">
  <div class="w3-third">
    <span class="w3-xxlarge">20+</span>
    <br>Successfully completed projects
  </div>
  <div class="w3-third">
    <span class="w3-xxlarge">3+</span>
    <br>Years of experience
  </div>
  <div class="w3-third">
    <span class="w3-xxlarge">1000+</span>
    <br>hours of programming
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:8px 8px" id="work">
  <h3 class="w3-center"><b>OUR WORK</b></h3>

<div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Cafe Template 1</h5>
    <img src="Pictures/CafeTemplate1.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="CafeTemplate1.php">Click to View This Template!</a></p>
  </div>

  <div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Cafe Template 2</h5>
    <img src="Pictures/CafeTemplate2.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="CafeTemplate2.php">Click to View This Template!</a></p>
    <br>
  </div>

  <div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Cafe Template 3</h5>
    <img src="Pictures/CafeTemplate3.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="CafeTemplate3.php">Click to View This Template!</a></p>
    <br>
  </div>

  <div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Portfolio Template 1</h5>
    <img src="Pictures/PortfolioTemplate1.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="PortfolioTemplate1.php">Click to View This Template!</a></p>
  </div>

  <div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Electric Avenue Tattoo</h5>
    <img src="Pictures/ElectricAvenueTattoo.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="http://electricavenuetattoo.co.uk/">Click to View This Template!</a></p>
  </div>

  <div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Startup Business Template 1</h5>
    <img src="Pictures/NewShopTemplate.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="NewShopTemplate.php">Click to View This Template!</a></p>
  </div>

</div>


<div id="contact" class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6 w3-center">
      <h3>Request a quote</h3>
      <p>We're only an email away.</p>
      <h2><a class="w3-margin-right w3-margin-bottom" href="mailto:myles.hoult@pantheontechnology.co.uk/?subject=Enhance my online presence today!">Welcome@PantheonTechnology.co.uk</a></h2>
      </div>
    <div class="w3-col m6">
    <img class="w3-image w3-round-large" src="Pictures/Contact.jpeg" alt="Office" width="700" height="394">
    </div>
  </div>
</div>

</body>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a target="_blank" href="https://www.instagram.com/pantheon.technology/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a target="_blank" href="https://twitter.com/PantheonTechCo"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a target="_blank" href="https://www.linkedin.com/in/myles-hoult-b19706241/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
</footer>
 
<script>
  // Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</html>
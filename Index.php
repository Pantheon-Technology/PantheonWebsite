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
<link rel="icon" href = "/Images/Logo.png">

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
      <a href="#about" class="w3-bar-item w3-button"> ABOUT</a>
      <a href="#work" class="w3-bar-item w3-button"> WORK</a>
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
    <span class="w3-xlarge w3-text-black"><b>Software solutions made accessible.</b></span>
  </div> 
  <div class="w3-display-bottomleft w3-text-black w3-xlarge" style="padding:12px 24px">
  <p><a href="#about" class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn about Pantheon</a></p>      
  </div>
</header>

<!-- ABOUT -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="about">
  <div class="w3-row-padding">
  <h3 class="w3-center">ABOUT OUR BUSINESS</h3>
  <p class="w3-center w3-large"><b>Pantheon Technology is a Merseyside owned software development business dedicated to creating software to enhance the service of fellow Merseyside business owners!</b></p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
  <div class="w3-quarter">
    </br>
    </div>    
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Website Developement</p>
      <p>Websites can provide your customers with another way to interact with your company. It can also offer your customers additional services, such as our <a href="#pricing"> Athena Ecommerce system!</a> that allows you to sell your products online!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Software Development</p>
      <p>We also offer software packages that can increase the efficiency of your day day-to-day operations, such as our <a href="#pricing">File Upload and Download system</a> which allows you to manage your file distribution securely.</p>
    </div>
    <div class="w3-quarter">
      <br>
    </div>   
  </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>Our Services</h3>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-blue"><img src="Pictures/E-CommerceLogoNoBackground.png" style="width:40%"><h4>Using this package you can start <b>selling your products online!</b> This package comes with:</h4></li>
        <li class="w3-padding-16">Design up to <b>8</b> custom pages</li>
        <li class="w3-padding-16">The ability to <b>add, remove, and manage</b> website stock.</li>
        <li class="w3-padding-16">View your customers orders and the order details.</li>
        <li class="w3-padding-16"><b>Free</b> Domain, website data encryption and business email.</li>
        <li class="w3-padding-16">
          <h4> Only </h4>
          <h2 class="w3-wide">£ 50</h2>
          <p><span class="w3-opacity">per month</span></p>
          <p><span>£250 setup</span></p>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a class="w3-button w3-black w3-padding-large" href="mailto:myles.hoult@pantheontechnology.co.uk/?subject=I have an enquiry about the Athena E-Commerce package!">Enquire</a>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-padding-32"><h3>File Upload/Download System</h3><h4>With this service, you can make file transfer between your employees straightforward. This package comes with:</h4></li>
        <li class="w3-padding-16">The ability to <b>upload, view, remove, and manage</b> your files.</li>
        <li class="w3-padding-16">Create and manage accounts.</li>
        <li class="w3-padding-16"><b>Free</b> Domain, website data encryption and business email.</li>
        <li class="w3-padding-16">
          <h4> Only </h4>
          <h2 class="w3-wide">£ 1.30</h2>
          <p><span class="w3-opacity">per user per month</span></p>
          <p><span>£150 setup</span></p>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a class="w3-button w3-black w3-padding-large" href="mailto:myles.hoult@pantheontechnology.co.uk/?subject=I have an enquiry about the File system!">Enquire</a>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-green w3-padding-32"><h3>Website Development</h3><p>Already have a website? No problem, we can make changes to your existing site.</p></li>
        <li class="w3-padding-16">Design consultation</li>
        <li class="w3-padding-16">3 Reviews</li>
        <li class="w3-padding-16">Design implementation</li>
        <li class="w3-light-grey w3-padding-24">
          <a class="w3-button w3-black w3-padding-large" href="mailto:myles.hoult@pantheontechnology.co.uk/?subject=I have an enquiry about website development on my existing site!">Enquire</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="w3-container w3-row w3-center w3-padding-64 w3-white">
  <h1> Trusted By </h1>

  <div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Electric Avenue Tattoo</h5>
    <img src="Pictures/ElectricAvenueTattoo.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="http://electricavenuetattoo.co.uk/" target="_blank">Click to View This Page!</a></p>
  </div>

  <div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Prosperify</h5>
    <img src="Pictures/Prosperify.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="https://www.theprosperifyteam.com/" target="_blank">Click to View This Page!</a></p>
  </div>
  <div class="w3-third" style="padding:16px 16px">
<h5 class="w3-center">Positive Progress Tuition</h5>
    <img src="Pictures/PositiveProgress.jpg" style="width:100%">
    <p><a class="w3-button w3-blue w3-block" href="https://positive-progress.co.uk/" target="_blank">Click to View This Page!</a></p>
  </div>
</div>

<div id="contact" class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6 w3-center">
      <h3>General Enquiries</h3>
      <p>We're only an email away.</p>
      <h2><a class="w3-margin-right w3-margin-bottom" href="mailto:myles.hoult@pantheontechnology.co.uk/?subject=I have an enquiry!">Welcome@PantheonTechnology.co.uk</a></h2>
      </div>
    <div class="w3-col m6">
    <img class="w3-image w3-round-large" src="Pictures/Contact.jpeg" alt="contact" width="700" height="394">
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
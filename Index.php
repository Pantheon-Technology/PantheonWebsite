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
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-gbp"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min " id="home">
  <div class="w3-display-left" style="padding:48px">
    <span class="w3-jumbo w3-text-black w3-hide-small"><strong>Pantheon Technology</strong></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Pantheon Technology</span><br>
    <span class="w3-xlarge w3-text-black"><b>Welcome to the Pantheon. Website packages tailored for your needs!</b></span>
  </div> 
  <div class="w3-display-bottomleft w3-text-black w3-xlarge" style="padding:12px 24px">
  <p><a href="#about" class="w3-button w3-black w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn about Pantheon</a></p>      
  </div>
</header>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="about">
  <div class="w3-row-padding">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large"><b>Pantheon Technology is a Crosby owned business dedicated to enhancing the online presence of fellow Crosby business owners!</b></p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Web Developement</p>
      <p>Behind every good business is a great website. Enhance your business' image today!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>We are passionate at what we do, so you know that we are committed to your needs!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Quality</p>
      <p>Your website reflects your business, a high quality website will entise customers to explore your business!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Free Consultation</p>
      <p>As a local business we know how scary technology can seem, we will provide you with free consultation to get you up and running.</p>
    </div>
  </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-third">
    <span class="w3-xxlarge">20+</span>
    <br>Successfully completed
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



<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h1>PRICE SHEET</h1>
  <p class="w3-large"><b>All</b> packages come with unlimited free consultations along with guidance and support. The fees listed cover the running cost of your website, its domain name and any maintainence required.</p>
  <h4 class="w3-text-blue"><b> All packages can be tailored to best suit your needs! The packages below are designed to give some insight to running costs</h4></b>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-green w3-xlarge w3-padding-32">Silver package</li>
        <p>Suitable for users who wish to use their website as a portfolio for their work, or information for their customers.</p>
        <li class="w3-padding-16"><b>3 days</b> delivery</li>
        <li class="w3-padding-16"><b>SSL</b> certificate</li>
        <li class="w3-padding-16"><b>Hosting</b> provided</li>
        <li class="w3-padding-16"><b>Domain</b> included</li>
        <li class="w3-padding-16"><b>Web</b> maintainence</li>
        <li class="w3-padding-16">Basic <b>SEO</b> setup</li>
        <li class="w3-padding-16">Personlized Email <b>NOT</b> included</li>
        <li class="w3-padding-16"><b>£75</b> setup</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">£ 100</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a class="w3-button w3-blue w3-block" href="mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i> - Enquire by Email</a></p>
        </li>
      </ul>
    </div>
    <div class="w3-half w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Gold package</li>
        <p>Suitable for businesses who wish to add to their sites (such as blogs and pictures). Includes an account creation proccess.</p>
        <li class="w3-padding-16"><b>5 - 7 days</b> delivery</li>
        <li class="w3-padding-16"><b>SSL</b> certificate</li>
        <li class="w3-padding-16"><b>Hosting</b> provided</li>
        <li class="w3-padding-16"><b>Domain</b> included</li>
        <li class="w3-padding-16"><b>Web</b> maintainence</li>
        <li class="w3-padding-16">Detailed <b>SEO</b> setup</li>
        <li class="w3-padding-16">Personlized Email <b>IS</b> included</li>
        <li class="w3-padding-16"><b>£100</b> setup</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">£ 120</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a class="w3-button w3-blue w3-block" href="mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i> - Enquire by Email</a></p>
        </li>
      </ul>
    </div>
  </div>
  <div class="w3-row-padding" style="margin-top:32px">
  <h3>Addon Pricing</h3>
  <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic Modify Token</li>
        <p>The <b>BASIC</b> modify token allows small tweaks to be made to your webpage, ranging from an image change up to a relocation of existing content.</p>
        <li class="w3-padding-16"><b>1 - 3 days</b> delivery</li>  
        <li class="w3-padding-16">
          <h2 class="w3-wide">£ 25</h2>
          <span class="w3-opacity">per token</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a class="w3-button w3-blue w3-block" href="mailto:mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i> - Enquire by Email</a></p>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Standard Modify Token</li>
        <p>The <b>STANDARD</b> modify token allows more complex tweaks to be made to your webpage, such as colour or theme changes!</p>
        <li class="w3-padding-16"><b>3 - 5 days</b> delivery</li>  
        <li class="w3-padding-16">
          <h2 class="w3-wide">£ 50</h2>
          <span class="w3-opacity">per token</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a class="w3-button w3-blue w3-block" href="mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i> - Enquire by Email</a></p>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Analytics</li>
        <p>Shows you a basic view of your website performance, this is available in paper or electronic form. This can be added to your package for as little as £10 per month.</p> 
        <li class="w3-padding-16"><b>1 </b>Per month</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">£ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a class="w3-button w3-blue w3-block" href="mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i> - Enquire by Email</a></p>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Ad campaign</li>
        <p>I will run an advertisement campaign for your business, this will gaurantee your site will gain more visitors.</p> 
        <li class="w3-padding-16">
          <h2 class="w3-wide">Price varies on campaign specifications</h2>
          <span class="w3-opacity"> please get in touch for more info</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a class="w3-button w3-blue w3-block" href="mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i> - Enquire by Email</a></p>
        </li>
      </ul>
    </div>
</div>

</div>


<div id="contact" class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>GET IN TOUCH!</h3>
      <p>If you have any questions, do not hesitate to get in touch using the buttons below!</p>
      <p><a class="w3-button w3-blue w3-block" href="https://www.instagram.com/pantheontechnology/"><i class="fa fa-instagram w3-hover-opacity"></i>  Instagram</a></p>
      <p><a class="w3-button w3-blue w3-block" href="https://twitter.com/PantheonTechCo"> <i class="fa fa-twitter w3-hover-opacity"></i> Twitter</a></p>
      <p><a class="w3-button w3-blue w3-block" href="https://www.linkedin.com/in/myles-hoult-b19706241/"><i class="fa fa-linkedin w3-hover-opacity"></i> - Linked In</a></p>
      <p><a class="w3-button w3-blue w3-block" href="mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i> - Email</a></p>
    </div>
    <div class="w3-col m6">
    <img class="w3-image w3-round-large" src="Pictures/Contact.jpeg" alt="Office" width="700" height="394">
    </div>
  </div>
</div>

<?php 
//echo print_r($_POST);
?>

<?php
 // $message_sent = false;

 // if(isset($_POST["Email"]) && $_POST['Email']!=''){
    //SUBMIT FORM
    // if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
    //CHECK EMAIL FORMAT IS OK
     // $companyName = $_POST['Company'];
     // $userEmail = $_POST['Email'];
     // $subject = $_POST['Subject'];
    //  $message = $_POST['Message'];


    //  $to ="pantheontechnology2022@gmail.com";
      
    //  mail($to, $subject, $message);

    //  $message_sent = true;
  // } //else{
     // $invalid_class_name = "form-invalid";
    //}
 // }
?>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.instagram.com/pantheontechnology/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://twitter.com/PantheonTechCo"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/myles-hoult-b19706241/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <a href="mailto:myles.hoult@pantheontechnology.co.uk"><i class="fa fa-envelope"></i></a>
  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").
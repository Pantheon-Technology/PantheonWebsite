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
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("Pictures/Office1.jpeg"); 
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card " id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">Pantheon Technology</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-gbp"></i> PRICING</a>
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
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min " id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-text-blue w3-hide-small"><strong>Pantheon Technology</strong></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Pantheon Technology</span><br>
    <span class="w3-xlarge w3-text-blue"><b>Welcome to the Pantheon. Website packages suited for you!</b></span>
    <p><a href="#about" class="w3-button w3-blue w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn about Pantheon</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-blue w3-large" style="padding:24px 48px">
    <a href="https://www.instagram.com/pantheontechnology/"><i class="fa fa-instagram w3-hover-opacity">  Instagram</a></i>
      <a href="https://twitter.com/PantheonTechCo"> <i class="fa fa-twitter w3-hover-opacity"> Twitter</a></i>
      <a href="https://www.linkedin.com/in/myles-hoult-b19706241/"><i class="fa fa-linkedin w3-hover-opacity"> - Linked In</a></i>
      <a href="mailto:pantheontechnology2022@gmail.com"><i class="fa fa-envelope"> - Email</a></i>
      
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large"><b>Pantheon Technology aims to enhance the online presence of local businesses through the use of website developement. We will manage your hosting needs and domain name registration! </b></p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Web Developement</p>
      <p>At Pantheon Technology ltd, we specialize in website creation using PHP and MySQL.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>We are passionate at what we do, so you know that we are committed to your needs!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Quality</p>
      <p>Your website reflects your business, a high quality website will attract more customers!</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>If you have any questions or issues, our staff are available to give you assistance.</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Make your presence be known online.</h3>
      <p>In the modern era, it is vital for your business to have an online presence, without one, you will be stuck in the past!</p>
      <P>View our work to discover how you can take your street business to the world.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"></i> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="Pictures/Quality.jpeg" alt="Office" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">Meet the team behind the company!</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-grey">
        <img src="Pictures/profile.png" alt="Myles" style="width:20%">
        <div class="w3-container">
          <h3>Myles Hoult</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Bachelor Graduate from LJMU in Software Engineering, his love for website developement led him to founding this company.</p>
          <p><a class="w3-button w3-light-grey w3-block" href="mailto:pantheontechnology2022@gmail.com"><i class="fa fa-envelope"></i> - Email</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-grey">
        <img src="Pictures/profile.png" alt="James" style="width:20%">
        <div class="w3-container">
          <h3>James Smith</h3>
          <p class="w3-opacity">Developer</p>
          <p>Bachelor Graduate from LJMU in Software Engineering. Myles and James have been working on projects for the last 3 years.</p>
          <p><a class="w3-button w3-light-grey w3-block" href="mailto:pantheontechnology2022@gmail.com"><i class="fa fa-envelope"></i> - Email</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
    <div class="w3-card w3-grey">
        <img src="Pictures/profile.png" alt="Myles" style="width:20%">
        <div class="w3-container">
          <h3>Deirdre Hoult</h3>
          <p class="w3-opacity">Head of Design</p>
          <p>When it comes to the colours, layouts and overall designs of the webpages, Deirdre will always improvem what has been done.</p>
          <p><a class="w3-button w3-light-grey w3-block" href="mailto:pantheontechnology2022@gmail.com"><i class="fa fa-envelope"></i> - Email</a></p>
        </div>
      </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-third">
    <span class="w3-xxlarge">20+</span>
    <br>Projects Done
  </div>
  <div class="w3-third">
    <span class="w3-xxlarge">3+</span>
    <br>Years of experience
  </div>
  <div class="w3-third">
    <span class="w3-xxlarge">1000+</span>
    <br>hours spent programming
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">Some brief examples of past projects</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="Pictures/express-taurant.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="ExpressTaurant">
      <h1>Express-taurant</h1>
      <p> Express-Taurant is a one stop shop for local restaurant and cafes to create their own website from a selection of templates, from here their customers may order food to their table.</p>
      <a class="w3-button w3-round w3-blue" href="https://gitlab.com/myles_hoult/myleshoultdissertation"><i class="fa fa-gitlab"> - GitLab</a></i>
    </div>
    <div class="w3-col l3 m6">
      <img src="Pictures/Cloud-Diagram.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Cloud Computing">
      <h1>Cloud Computing</h1>
      <p>This client requested a series of nodes be created, one node would be elected the leader node, and that node would be responsible for reviving any downed nodes.</p>
      <p>The nodes were collectively used for data analytics</p>
      <a class="w3-button w3-round w3-blue" href="https://gitlab.com/myles_hoult/cloud-computing"><i class="fa fa-gitlab"> - GitLab</a></i>
    </div>
    <div class="w3-col l3 m6">
      <img src="Pictures/Design.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Adobe Design">
      <h1>App design with Adobe XD</h1>
      <p>For this project, the client requested some designs for a weather application they were creating. Using AdobeXD and the specification given, I created multiple linking pages for the client that would showcase how their system would function.</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="Pictures/Recipe.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Recipe sharing">
      <h1>Recipe Sharing website</h1>
      <p>A client requested I create a webpage that could allow chefs to sign up to the website to view, create and favourite recipes, they could also search for recipes by ingredient, cook time, etc.</p>
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="Pictures/ElectricAvenue.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Electric Avenue">
      <h1>Electric Avenue Tattoo</h1>
      <p>The client asked me to create a portfolio for their tattoos so that customers can view his work and request a booking</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="Pictures/data.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Business Database">
      <h1>Local eatery businesses database</h1>
      <p>For this project, Pantheon technology worked with a group of developers to create a system in java that could retrieve any information a user desired from the local eaterys in the areas specified by our client</p>
      <p>Pantheon technology covered all stages of the waterfall model for this project, as well as managing the team behind it.</p>
      <a class="w3-button w3-round w3-blue" href="https://gitlab.com/smity999/2021-5117compcovidiots"><i class="fa fa-gitlab"> - GitLab</a></i>
    </div>
    <div class="w3-col l3 m6">
      <img src="Pictures/CafeTemplate1.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Eatery Template">
      <h1>Cafe Template 1</h1>
      <p>This template has not been used by a customer as of yet, it is currently a work in progress and will be available for use soon!</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="Pictures/CafeTemplate2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Eatery Template">
      <h1>Cafe Template 2</h1>
      <p>This template has not been used by a customer as of yet, it is currently a work in progress and will be available for use soon!</p>
    </div>
  </div>
  <br>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image"></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>Price sheet</h3>
  <p class="w3-large">This pricesheet is currently only serving as a template for future projects.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic Application</li>
        <p>Suitable for users who wish to use their website as a portfolio for their work.</p>
        <li class="w3-padding-16"><b>3 days</b> delivery</li>
        <li class="w3-padding-16"><b>5</b>Webpages</li>
        <li class="w3-padding-16"><b>basic</b>fucntionality</li>
        <li class="w3-padding-16"><b>24/7</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">£ 15</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Standard Applications</li>
        <p>Suitable for users who wish to have a website which can take payments, bookings, etc</p>
        <li class="w3-padding-16"><b>5 days</b> delivery</li>
        <li class="w3-padding-16"><b>8</b> webpages</li>
        <li class="w3-padding-16"><b>Increased</b> functionality</li>
        <li class="w3-padding-16"><b>24/7</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">£ 40</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium Application</li>
        <p>Suitable for larger companies who take payments, recieve reviews, send orders, also includes social media intergration</p>
        <li class="w3-padding-16"><b>7 days</b>delivery</li>
        <li class="w3-padding-16"><b>12</b> pages</li>
        <li class="w3-padding-16"><b>full</b>functionality</li>
        <li class="w3-padding-16"><b>24/7</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">£ 60</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-black w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>


<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>GET IN TOUCH!</h3>
      <p>If you have any questions, do not hesitate to get in touch!</p>
      <p><a class="w3-button w3-blue w3-block" href="https://www.instagram.com/pantheontechnology/"><i class="fa fa-instagram w3-hover-opacity"></i>  Instagram</a></p>
      <p><a class="w3-button w3-blue w3-block" href="https://twitter.com/PantheonTechCo"> <i class="fa fa-twitter w3-hover-opacity"></i> Twitter</a></p>
      <p><a class="w3-button w3-blue w3-block" href="https://www.linkedin.com/in/myles-hoult-b19706241/"><i class="fa fa-linkedin w3-hover-opacity"></i> - Linked In</a></p>
      <p><a class="w3-button w3-blue w3-block" href="mailto:pantheontechnology2022@gmail.com"><i class="fa fa-envelope"></i> - Email</a></p>
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
    <a href="mailto:pantheontechnology2022@gmail.com"><i class="fa fa-envelope"></i></a>
  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>

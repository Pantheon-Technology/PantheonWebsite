<!DOCTYPE html>
<html>
<head>
<title>Electric Avenue Tattoo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image:"Tattoo4.png";
    min-height: 90%;
}
</style>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="Images/Logo.png" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>RECENT WORKS</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">Recent Works</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div  id="main">
  <!-- Header/Home -->
  <header class="bgimg w3-display-container w3-padding-32 w3-center w3-black" id="home">
  <div class="w3-padding">
      <img src="Images/MainImage.jpeg" alt="background" style="width:100% ">
</div>
    <div class="w3-display-middle">
    <h1 class="w3-jumbo"><p><b>Electric</p> <p> Avenue</p></b></h1>
    <p></p>
  </header>

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Recent Works</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="Images/Tattoo1.png" style="width:30%">
        <img src="Images/Tattoo2.png" style="width:30%">
        <img src="Images/Tattoo3.png" style="width:30%">
        <img src="Images/Tattoo8.jpg" style="width:30%">
      </div>

      <div class="w3-half">
        <img src="Images/Tattoo4.png" style="width:30%">
        <img src="Images/Tattoo5.png" style="width:30%">
        <img src="Images/Tattoo6.png" style="width:30%">
        <img src="Images/Tattoo7.png" style="width:30%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Daniel Watkinson</h2>
    <hr style="width:200px" class="w3-opacity">
    <p> - Electric Avenue is a private piercing a tattoo studio that opened in 2022</p>
    <p> - Appointment only</p>
    <p> - Check out the 'Contact Me' section to make an appointment today!</p>
    <h3 class="w3-padding-24 w3-text-light-grey">Opening Hours</h3>  
    <p><span class="w3-large w3-margin-right">MON-SAT - 10AM-6PM</span></p>
    <p><span class="w3-large w3-margin-right">SUN - CLOSED</span></p>
  <!-- End About Section -->
  </div>
  

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Looking for your next tattoo? Get in touch</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> 14 Coronation Rd, Liverpool L23 5RG</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 0151 245 5928</p>
      <p><a href="https://www.instagram.com/electricavenue.tattoo/"><i class="fa fa-instagram fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Instagram Page</p></a>
      <p><a href="https://en-gb.facebook.com/login/"><i class="fa fa-facebook-official fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Facebook Page</a></p>
      <p><a href="mailto:Electricavenue.tattoo@outlook.com"><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Email</a></p>
    </div>

  <!-- End Contact Section -->
  </div>

  <!-- Review section -->
  <div class="w3-padding-64 w3-content w3-text-grey">
  <h2 class="w3-text-light-grey">Reviews</h2>
    <hr style="width:200px" class="w3-opacity">
    <p> Recently got my first tattoo from Dan. Felt very welcomed from the minute I got there and at ease. He is very professional and knows his stuff. The shops immaculate. He gave me loads of aftercare advice before I left. Couldn’t be happier can’t wait for my next one!
    </p>
    <p> - Chris T </p>
    <p> Got 2 beautiful tattoos from Danny today. Definitely recommend, he’s a great tattoo artist made me feel very welcome and comfortable. Studio is very clean and great atmosphere.
        Thank you Danny
    </p>
    <p> - Laurel Maguire </p>
</div>
    <!-- Footer -->
  <footer class="w3-content w3-text-grey w3-xlarge">
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>

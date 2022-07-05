<!DOCTYPE html>
<html>
<head>
<title>Cafe Template 2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("Pictures/cafe.webp");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top w3-black">
  <div class="w3-row w3-padding">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block w3-black">CONTACT</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag w3-black">Open Monday - Friday 8am - 6pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-black" style="font-size:90px">the<br>Cafe</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white w3-large w3-black">Address Here</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
    <p>You may wish to include a brief paragraph about your business, if so, this space can be used for that.</p>
    <img src="Pictures/cafe2.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Opening hours:</strong> Monday to Friday 8am - 6pm.</p>
    <p><strong>Address:</strong> Crosby area</p>
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Item 1 <b> - £5.00</b></h5>
      <p class="w3-text-grey">Description of item 1</p><br>
    
      <h5>Item 2<b> - £5.00</b></h5>
      <p class="w3-text-grey">Description of item 2</p><br>
    
      <h5>Item 3<b> - £5.00</b></h5>
      <p class="w3-text-grey">Description of item 3</p><br>
    
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>Item 1 <b> - £5.00</b></h5>
      <p class="w3-text-grey">Description of item 1</p><br>
    
      <h5>Item 2<b> - £5.00</b></h5>
      <p class="w3-text-grey">Description of item 2</p><br>
    
      <h5>Item 3<b> - £5.00</b></h5>
      <p class="w3-text-grey">Description of item 3</p><br>
    </div>  
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="contact" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Contact Info</span></h5>
  <div class="w3-row-padding">
      <h3>GET IN TOUCH!</h3>
      <p>If you have any questions, do not hesitate to get in touch!</p>
      <p><a class="w3-button w3-blue w3-block" href=""><i class="fa fa-instagram w3-hover-opacity"></i> - Instagram</a></p>
      <p><a class="w3-button w3-blue w3-block" href=""> <i class="fa fa-twitter w3-hover-opacity"></i> - Twitter</a></p>
      <p><a class="w3-button w3-blue w3-block" href=""><i class="fa fa-linkedin w3-hover-opacity"></i> - Linked In</a></p>
      <p><a class="w3-button w3-blue w3-block" href=""><i class="fa fa-envelope"></i> - Email</a></p>
    </div>
  </div>
</div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
<a href="#home" class="w3-button w3-black">Back to the top</a>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Kee Jia Xuan">
	<meta name="description" content="Activity Page - Brew & Go.">
	<meta name="keywords" content="activity, current, past, coming, soon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Brew & Go - Activity Page</title>
	<link rel="stylesheet" href="style.css"> 
</head>

<body>


  <!-- Header -->
  <header class="parallaximage">
    <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
    <h1 class="headertitle">Brew & Go.</h1>
  </header>

 <!-- Sticky Navbar -->
<nav class="main-nav" id="main-navigation">
  <div class="nav-inner">
    <!-- Hamburger Menu -->
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <label for="nav-toggle" class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </label>
    <ul class="nav-links">
      <li><a href="index.html"><img src="images/logob&g.png" alt="Brew & Go Logo" class="logodropdown"></a></li>
      <li class="dropdown">
        <a href="product.html" class="dropbtn">Product Selection</a>
        <ul class="dropdown-content">
          <li><a href="basic1.html#top">Basic Brew</a></li>
          <li><a href="artisan2.html#top">Artisan Brew</a></li>
          <li><a href="non3.html#top">Non-Coffee</a></li>
          <li><a href="hot4.html#top">Hot Coffee</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="activities.html" class="dropbtn">Activities</a>
        <ul class="dropdown-content">
          <li><a href="Pass_activities.html">Past</a></li>
          <li><a href="Current.html">Current</a></li>
          <li><a href="Coming_Soon.html">Coming Soon</a></li>
        </ul>
      </li>
      <li class="dropdown">
	  <a href="joinus.html" class="dropbtn">Join Us</a></li>
	  <ul class="dropdown-content">
		<li><a href="joinusform.html">FORM</a></li>
	</ul>
      <li class="dropdown">
        <a href="enquiry.html" class="dropbtn">Enquiries</a>
        <ul class="dropdown-content">
          <li><a href="enquiry.html">FORM</a></li>
          <li><a href="learnmore.html">FAQ</a></li>
        </ul>
      </li>
      <li><a href="admin.html">Admin View</a></li>
    </ul>
    <div class="right-container">
      <form action="/search" method="get" class="search-bar">
        <input type="text" name="query" placeholder="Search..." />
        <button class="searchbutton" type="submit">Search</button>
      </form>
      <a href="login.html" class="login-icon"><img src="images/login.svg" alt="Brew & Go Logo" class="logodropdown"> </a>
    </div>
  </div>
</nav>
  
  <!-- Main Content -->
  <main class="index-main" id="main-content">

<!-- Carousel Container -->
<article class="activitybg">
	<div class="box_activity">
		<div class="activity_h1"><h1>Activities</h1></div>
	</div>
	
	<div class="activitybg2">
	<!-- Radio Buttons -->
    <input type="radio" name="activity" id="coming" value="Coming">
    <input type="radio" name="activity" id="current" value="Current" checked="checked">
    <input type="radio" name="activity" id="pass" value="Pass">

    <!-- Carousel Wrapper -->
    <div id="carousel">
		<div class="carousel-wrapper">
			<div class="item">
				<a href="Current.html" target="_blank">
					<img src="images/current_img.jpeg" alt="Current Activities">
				</a>
				<h3 class="jx-name">Current Activities</h3>
			</div>
		
			<div class="item">
				<a href="Coming_Soon.html" target="_blank">
					<img src="images/coming_img.jpeg" alt="Coming Soon">
				</a>
				<h3 class="jx-name">Coming Soon</h3>
			</div>
		
			<div class="item">
				<a href="Pass_Activities.html" target="_blank">
					<img src="images/pass_img.jpeg" alt="Past Activities">
				</a>
				<h3 class="jx-name">Past Activities</h3>
			</div>
		</div>
    </div>

    <!-- Navigation -->
    <div class="navigation">
		<label for="coming" class="button"></label>
		<label for="current" class="button"></label>
		<label for="pass" class="button"></label>
    </div>
	</div>
</article>

 <footer class="custom-footer" id="footer-section">
    <div class="footer-section">
      <h4>About Us</h4>
      <ul>
        <li><a href="index.html">Homepage</a></li>
        <li><a href="joinus.html">Join Us</a></li>
		<li><a href="joinusform.html">Job Application</a></li>
        <li><a href="memberregistrationform.html">Membership Form</a></li>
        <li><a href="login.html">Membership Login</a></li>
      </ul>
      <h4>Location</h4>
      <ul>
        <li><a href="https://maps.app.goo.gl/Vxwd9Z1CpmXjLUme7">Onejaya Shopping Complex, Kuching</a></li>
        <li><a href="https://maps.app.goo.gl/H5fonQmqZP8jsLKP8">Plaza Merdeka Level 1, Kuching</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Menu</h4>
      <ul>
        <li><a href="product.html">All Products</a></li>
        <li><a href="basic1.html">Basic Brew</a></li>
        <li><a href="artisan2.html">Artisan Coffee</a></li>
        <li><a href="non3.html">Non-Coffee</a></li>
        <li><a href="hot4.html">Hot Coffee</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Activities</h4>
      <ul>
        <li><a href="activities.html">All Activities</a></li>
        <li><a href="Pass_activities.html">Past Activities</a></li>
        <li><a href="Current.html">Current Activities</a></li>
        <li><a href="Coming_Soon.html">Coming Soon</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Stay Connected</h4>
      <ul>
        <li><a href="aboutus.html">Team</a></li>
        <li><a href="stanton.html">Stanton Choo</a></li>
        <li><a href="angie.html">Angie Yee</a></li>
        <li><a href="jiasin.html">Jia Sin</a></li>
        <li><a href="jiaxuan.html">Jia Xuan</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>Support</h4>
      <ul>
        <li><a href="enquiry.html">Contact Us</a></li>
        <li><a href="learnmore.html">FAQ</a></li>
        <li><a href="https://www.instagram.com/brewngo.coffee/" target="_blank">Instagram</a></li>
        <li><a href="https://www.facebook.com/people/Brew-Go-Coffee/61554234958482/" target="_blank">Facebook</a></li>
      </ul>
    </div>
    <div class="footer-section">
      <h4>More</h4>
      <ul>
        <li><a href="admin.html">Admin Login</a></li>
        <li><a href="acknowledgement.html">Acknowledgement</a></li>
        <li><a href="enhancement.html">Enhancements</a></li>
		<li><a href="https://youtu.be/DgpNC8R5cBI" target="_blank">Video</a></li>
      </ul>
    </div>
    <div class="footer-section copyright">
      <p>© 2025 Brew & Go Coffee. All rights reserved.</p>
      <p>Last updated: April 2025</p>
      <p><a href="mailto:brewngo.coffee@gmail.com">brewngo.coffee@gmail.com</a></p>
    </div>
</footer>

</body>
</html>



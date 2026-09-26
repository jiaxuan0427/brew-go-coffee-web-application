<!DOCTYPE html>

<html lang='en'>
<head>
	<meta charset= 'utf-8'>
	<meta name='author' content='Angie Yee'>
	<meta name='description' content='Membership Register'>
	<meta name='keywords' content='member, membership, register, form'>
	<title>Membership Registration Form</title>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>

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
          <li><a href="Coming_Soon.html">Future</a></li>
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
<body>
 <main class="index-main" id="main-content">
<article class="membershipformarticle">

<form name="registerform" method='post' action="" autocomplete='off' class='registerform'>
<p class='title'><strong>Membership Register Form</strong></p>
<p class='message'>Register a member to receive our updates!</p>

<div class='bigformgroup'>
<div class='formgroup'>
		<div class='name'>
        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Firstname</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="">
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Login ID</span>
    </label>
    <label>
        <input class="input" type="password" placeholder="" required="">
        <span>Password</span>
    </label>
</div>
</div>

<div class='formbutton'>
<button type='submit'>Register</button>
<button type='reset'>Reset</button>
</div>

<p class='signin'>
	Already have an account ?
	<a href='login.html'>Sign in</a>
</p>

</form>
</main>
</article>
<!-- Footer -->
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
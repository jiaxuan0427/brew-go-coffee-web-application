<!DOCTYPE html>

<html lang='en'>

<!-- Description: Join Us Form Page for Brew & Go.-->
<!-- Author: Kee Jia Xuan-->
<!-- Date:  1/4/2025 -->
<!-- Validation: OK 19 April 2025-->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kee Jia Xuan">
    <meta name="description" content="Join Us Form- Brew & Go.">
    <meta name="keywords" content="joinus, form, coffee">
    <title>Brew & Go. - Join Us Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

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

  <main class="index-main" id="main-content">

<body>
<article class="bg_imageform">
	<div class="h1_form"><h1>Fill out the form below, and let’s brew something amazing together!</h1></div>
	
	<form name="joinus" method="post" action="mailto:brewngo.coffee@gmail.com" enctype="text/plain" class="joinus">
	
		<fieldset>
			<legend>Personal Details</legend>
			
			<p>
				<label for ="first_name">First Name </label>
				<input type="text" id="first_name" name="first_name" maxlength="25" pattern="[A-Za-z ]+" required="required">
			</p>
			
			<p>
				<label for ="last_name">Last Name </label>
				<input type="text" id="last_name" name="last_name" maxlength="25" pattern="[A-Za-z ]+" required="required">
			</p>
			
			<p>
				<label for="email">Email Address:</label>
				<input type="email" id="email" name="email" placeholder="name@domain.com" required="required">
			</p>
		</fieldset>
		
		<fieldset>
			<legend>Address</legend>
			
			<p>	
				<label for="street_address">Street Address:</label>
				<input type="text" id="street_address" name="street_address" maxlength="40" required="required">
			</p>
			
			<p>
				<label for="city_town">City/Town:</label>
				<input type="text" id="city_town" name="city_town" maxlength="20" required="required">
			</p>
			
			<p>
				<label for="state">State:</label>
				<select id="state" name="state" required="required">
                    <option value="">Select a state</option>
					<option value="Johor">Johor</option>
					<option value="Kedah">Kedah</option>
					<option value="Kelantan">Kelantan</option>
					<option value="Malacca">Malacca</option>
					<option value="Negeri Sembilan">Negeri Sembilan</option>
					<option value="Pahang">Pahang</option>
					<option value="Penang">Penang</option>
					<option value="Perak">Perak</option>
					<option value="Perlis">Perlis</option>
					<option value="Sabah">Sabah</option>
					<option value="Sarawak">Sarawak</option>
					<option value="Selangor">Selangor</option>
					<option value="Terengganu">Terengganu</option>
					<option value="Kuala Lumpur">Kuala Lumpur</option>
					<option value="Labuan">Labuan</option>
					<option value="Putrajaya">Putrajaya</option>
				</select>
			</p>
			
			<p>
				<label for="postcode">Postcode:</label>
				<input type="text" id="postcode" name="postcode" pattern="\d{5}" placeholder="e.g. 93000" maxlength="5" required="required">
			</p>
		</fieldset>
		
		<fieldset>
			<legend>Contact and Documents</legend>
			
			<p>
				<label for="phone_number">Phone Number:</label>
				<input type="tel" id="phone_number" name="phone_number" maxlength="10" placeholder="(##) ####-####" required="required">
			</p>
			
			<p>
				<label for="cv_upload">CV Upload:</label>
				<input type="file" id="cv_upload" name="cv_upload" accept=".doc, .docx, .pdf" required="required">
			</p>
			
			<p>
				<label for="photo_upload">Photo Upload (must be less than 200kbs):</label>
				<input type="file" id="photo_upload" name="photo_upload" accept="image/*" required="required">
			</p>
		</fieldset>
		
		<div class="submit_reset_button">
			<input type= "submit" value="Submit">
			<input type= "reset" value="Reset Form">
		</div>
	</form>
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


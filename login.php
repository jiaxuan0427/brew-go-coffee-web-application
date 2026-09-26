<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>


<header class="header">
	<a href="index.html"><img src="images/logob&g.png" alt="Brew & Go Logo" class="logo"></a>
	<a href="index.html" class="back-home-btn">Go Back</a>
</header>

<body>
<section class="body-login">
    <form action="#" class="login-form">
        <h1 class="login-title">Login</h1>

        <div class="input-box">
            <i class='bx bxs-user'></i>
            <input type="text" name="username" placeholder="Username" 
                   required maxlength="10" pattern="[A-Za-z]+" title="Only letters allowed, max 10 characters">
        </div>

        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" name="password" placeholder="Password" 
                   required maxlength="25" pattern="[A-Za-z]+" title="Only letters allowed, max 25 characters">
        </div>

        <div class="remember-forgot-box">
            <label for="remember">
                <input type="checkbox" id="remember" name="remember">
                Remember me
            </label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="login-btn">Login</button>

        <p class="register">
            Don't have an account? <a href="memberregistrationform.html">Register</a>
        </p>

    </form>
	</section>
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
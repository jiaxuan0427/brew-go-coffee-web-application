<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Coffee</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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







<main class="index-main">
<body class="body-class">
    <!-- Title Section -->
    <section class="title-section">
        <div class="title-box">
            <h1 id="top">Non-Coffee</h1>
        </div>
    </section>

    <!-- Drinks Section -->
    <section class="drinks">
        <div class="drinks-row">
            <figure class="drink_container">
                <img src="images/non-coffee/Chocolate.jpg" alt="Drink 1">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 15.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 13.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Chocolate</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/non-coffee/Chocolate.jpg" alt="Drink 2">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 15.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 13.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Mint Chocolate</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/non-coffee/Chocolate.jpg" alt="Drink 3">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 15.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 13.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Orange Chocolate</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/non-coffee/yuzu_cheese.jpg" alt="Drink 4">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 15.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 13.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Yuzu Soda</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/non-coffee/strawberry_soda.jpg" alt="Drink 5">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 15.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 13.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Strawberry Soda</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/non-coffee/yuzu_cheese.jpg" alt="Drink 5">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 15.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 13.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Yuzu Cheese</figcaption>
            </figure>


            <figure class="drink_container">
                <img src="images/non-coffee/yuri_matcha.jpg" alt="Drink 6">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 15.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 13.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Yuri Matcha</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/non-coffee/strawberry_matcha.jpg" alt="Drink 7">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 16.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 14.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Strawberry Matcha</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/non-coffee/yuzu_matcha.jpg" alt="Drink 8">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 16.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 14.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Yuzu Matcha</figcaption>
            </figure>

            <figure class="drink_container">
                <img src="images/non-coffee/Houjicha.jpg" alt="Drink 9">
                <div class="caption">
                    <dl>
                        <dt>NP:</dt>
                        <dd>RM 15.90</dd>
                        <dt>MP:</dt>
                        <dd>RM 13.90</dd>
                    </dl>
                </div>
                <figcaption class="drink-name">Houjicha</figcaption>
            </figure>
        </div>

        <!-- "Enjoy Your Favorite Brew" Box -->
        <div class="box-container">
            <h2>Refresh with Our Flavourful Non-Coffee Brews</h2>
            <ol>
                <li>Explore our menu and find your perfect drink.</li>
                <li>Experience the refreshing taste of our non-coffee beverages, expertly blended to offer a delightful alternative for every palate.</li>
                <li>
                    For more treats and deals, do visit our 
                    <span class="example-2">
                      <span class="icon-content">
                        <span class="tooltip">Instagram</span>
                        <a href="https://www.instagram.com/brewngo.coffee" target="_blank" aria-label="Instagram" data-social="instagram">
                          <span class="filled"></span>
                          <i class="fab fa-instagram"></i>
                        </a>
                      </span>
                  
                      <span>or</span>
                  
                      <span class="icon-content">
                        <span class="tooltip">WhatsApp</span>
                        <a href="https://wa.me/601116531886" target="_blank" aria-label="WhatsApp" data-social="whatsapp">
                          <span class="filled"></span>
                          <i class="fab fa-whatsapp"></i>
                        </a>
                      </span>
                  
                      <span>.</span>
                    </span>
                  </li>
            </ol>
        </div>
        
    </section>

    <!-- Bottom Navigation Bar -->
    <aside class="bottom-nav">
        <a href="product.html" class="nav-link">← Back</a>
      
        <a href="#top" class="button back-to-top-btn" aria-label="Back to Top">
          <svg class="svgIcon" viewBox="0 0 384 512">
            <path
              d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
            </path>
          </svg>
        </a>
      
        <a href="hot4.html" class="nav-link">Next →</a>
    </aside>
</main>

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
    

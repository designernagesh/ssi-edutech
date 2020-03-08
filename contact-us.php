<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Sree Sadhguru Innovations</title>
<!--[if IE ]>
	<script src="js/HTML5forIE.js" type="text/javascript"></script>
<![endif]-->
<link rel="stylesheet" href="css/styles.css" />

<!-- Form Validation -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
</head>

<body>
<div class="wrapper">
    <header>
    	<div class="logo"></div>
        
    </header>
    <div class="innerpage-banner-wrapper">
    <nav>
    	<ul>
        	<li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ul>
    </nav>
    <div class="innerpage-banner">
    <h1>Contact Us</h1>
    </div>
            </div>
    <div class="clear"></div>             
    <div class="row">
    <p class="font-md-red" style="text-align:center; margin:20px 0 30px; color:#666666">We appreciate your interest in Sree Sadhguru Innovations Pvt Ltd. Please contact us if you want to knowmore about specific programs, or to make an appointment with us. </p>
    	<div class="col-left">
        	<div class="contact-form">
            <h3 style="text-align:left; margin-bottom:15px;">Send Us a Message</h3>
            <form id="contact" action="contact.php" method="post">
            <input type="text" class="default-value" name="name" placeholder="Name">
            <input type="text" class="default-value" name="email" placeholder="Email">
            <input type="text" class="default-value" name="phone"  placeholder="Phone">
            <select name="subject">
            	<option selected>Subject</option>
                <option value="Robotic Talking Tree">Robotic Talking Tree</option>
				<option value="Science Activity School (SAS)">Science Activity School (SAS)</option>
				<option value="Aero Modeling">Aero Modeling</option>
				<option value="Fine Arts">Fine Arts</option>
				<option value="My Guru">My Guru</option>
            </select>
            <textarea class="default-value" name="msg">Message</textarea>
            
            <input type="submit" value="Submit" name="submit">
                    </form>
                    <script>
		$("#contact").validate();
		</script>    
            </div>
            
        </div>
        <div class="col-right">        	
            <ul class="address">
            	<li><h3>Head Office</h3>
                1B-15, Block 1B, Level 15, <br>
                Plaza Sentral, Jalan Stesen Sentral 5, <br>
                Kuala Lumpur - 50470, Malaysia.<br>
                <span>Phone:</span> +60143602599, +6 03–79718060
                </li>
                <li><h3>Rayala Sathya</h3>
Sri Balaji Towers, Level 4, Unit No: 402 <br>
Near Kassani GR Hotel,  Hi-Tech City, <br>
Madhapur, Hyderabad - 500016, India<br>
<span>Phone:</span> +91 9000002373 +91 7799018143</li>
                <li><h3>Krishna</h3>
105/150 M. 6 Buathong 2 Vill, <br>
Soi 20/4, Talingchan-Suphanburi Rd., <br>
Bangrakpatthana, Bangbuathong, <br>
Nonthaburi, Thailand - 11110<br>
<span>Phone:</span> +66988403422</li>
                <li><h3>Surya Kiran</h3>
420 North Bridge Road,<br>
#05-03 North Bridge Centre,<br>
Singapore - 188727<br>
<span>Phone:</span> +65 8322 1323</li>
                
<li><h3>Vinod</h3>
1800 Stokes street,<br>
San Jose, California - 95126<br>
United States.</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    
</div>

<footer>
	<h3>Follow Us</h3>
    <ul class="social-icon">
    	<li><a href="#" class="twitter"></a></li>
        <li><a href="#" class="facebook"></a></li>
        <li><a href="#" class="linkedin"></a></li>
        <li><a href="#" class="googleplus"></a></li>
        <li><a href="#" class="youtube"></a></li>
    </ul>
        <div class="clear"></div>
          <a href="index.html">Home</a> | <a href="about-us.html">About Us</a> | <a href="services.html">Services</a> | <a href="products.html">Products</a> | <a href="gallery.html">Gallery</a> | <a href="contact-us.html">Contact Us</a> |  <a href="privacy-policy.html">Privacy Policy</a>
            <p class="copyright">&copy; 2015 www.ssiedutech.com</p>
</footer>
</body>
</html>

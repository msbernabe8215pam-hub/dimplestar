<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<style>
.submit{
	width:140px;
	padding:10px;
}
.submit:hover{
	background:#ECBD2F;
	border-radius:5px;
}
/* Contact Form Styling */
#contactright {
    background: #f5f5f5; /* light gray background */
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    max-width: 400px;
    margin: 20px auto; /* centers form */
}

#contactright h3 {
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    color: #333;
    margin-bottom: 20px;
}

.contactform {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.contactform:focus {
    border-color: #ECBD2F;
    box-shadow: 0 0 8px rgba(236,189,47,0.4);
    outline: none;
}

label {
    font-weight: bold;
    font-size: 14px;
    color: #555;
}

.submit {
    width: 100%;
    padding: 12px;
    background-color: #228C22;
    border: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.submit:hover {
    background-color: #d9a52b;
}

#contactright p {
    margin: 0 0 10px 0;
}

</style>

</head>
<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="images/logo.png" class="logo" alt="Dimple Star Transport" /></a></h1>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
            <li><a href="terminal.php">Terminals</a></li>
			<li><a href="routeschedule.php">Routes / Schedules</a></li>
            <li class="current"><a href="contact.php">Contact</a></li>
			<li><a href="book.php">Book Now</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div style="margin:0 auto; padding:30px 20px 20px 20px; width:820px;">	
					<div class="login">
						<div id="right">
							<?php
								session_start();
								if(isset($_SESSION['email'])){
									$email = $_SESSION['email'];
									echo "Welcome,". $email. "!";
									echo "<a href='logout.php'>Logout</a>";
								}
								if(empty($email)){
									echo "<a href='signlog.php'></a>.";
								}?>
						</div>	
					</div>
					<div id="right">
						<h3><?php include_once("php_includes/date_time.php"); ?></h3>
					</div>
					<br><br><br><h1 style="text-align: center;">CONTACT US</h1><br>
				<div id="contactright">
					<h3>Message Form</h3>
					<form class="validate" action="messageexec.php" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: aaron@gwaps.com" type="text" name="email" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="submit" id="submit-button" type="submit" name="Submit" value="Submit" />
                        </p>
                    </form>
				</div>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    
<div id="footer">
	<a href="index.php"><img src="images/footer-logo.jpg" alt="Dimple Star Transport" /></a>
	<p>&copy;Dimple Star Transport<br /></p>
</div>

</div>
</body>
</html>
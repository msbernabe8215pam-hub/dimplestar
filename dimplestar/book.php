<!DOCTYPE html>
<?php
	include 'php_includes/connection.php';
	include 'php_includes/book.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dimple Star Transport</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<style>

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
            <li><a href="contact.php">Contact</a></li>
			<li class="current"><a href="book.php">Book Now</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer2">
			<div style="margin:0 auto; padding:30px 20px 20px 20px; width:820px;">	
					<div class="login">
						<!-- <div id="right">
							<?php
								session_start();
								if(isset($_SESSION['email'])){
									$email = $_SESSION['email'];
									echo "Welcome,". $email. "!";
									echo "<a href='logout.php'>Logout</a>";
								}
								if(empty($email)){
									echo "<a href='signlog.php'></a>.";
								}
								?>
						</div> -->	
					</div>
					<div id="right">
						<h3><?php include_once("php_includes/date_time.php"); ?></h3>
					</div><br><br><br>
		
<style>
  form.booking-form {
    max-width: 400px;
    margin: 20px auto;
    background: #f7f7f7;
    padding: 20px 25px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgb(0 0 0 / 0.1);
    font-family: Arial, sans-serif;
  }
  form.booking-form h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }
  .form-row {
    display: flex;
    flex-direction: column;
    margin-bottom: 15px;
  }
  .form-row label {
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
  }
  form.booking-form input[type="text"],
  form.booking-form input[type="number"],
  form.booking-form input[type="date"],
  form.booking-form select {
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
  }
  .radio-group {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .radio-group label {
    font-weight: normal;
    color: #555;
  }
  form.booking-form input[type="submit"] {
    width: 100%;
    padding: 12px 0;
    background-color: #007bff;
    border: none;
    border-radius: 6px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  form.booking-form input[type="submit"]:hover {
    background-color: #0056b3;
  }
  input[disabled] {
    background-color: #e9ecef;
  }
</style>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="booking-form">
  <h1>BOOK NOW!</h1>
  <div class="radio-group">
    <label><input type="radio" name="way" value="2" onclick="document.getElementById('datepick2').disabled=false"> Two Way</label>
    <label><input type="radio" name="way" value="1" onclick="document.getElementById('datepick2').disabled=true" checked> One Way</label>
  </div>
  <div class="form-row">
    <label for="origin">Origin:</label>
    <select name="Origin" id="origin" required>
      <option value="">Select</option>
      <option>San Lazaro</option>
      <option>Espana</option>
      <option>Alabang</option>
      <option>Cabuyao</option>
      <option>Naujan</option>
      <option>Victoria</option>
      <option>Pinamalayan</option>
      <option>Gloria</option>
      <option>Bongabong</option>
      <option>Roxas</option>
      <option>Mansalay</option>
      <option>Bulalacao</option>
      <option>Magsaysay</option>
      <option>San Jose</option>
      <option>Pola</option>
      <option>Soccoro</option>
    </select>
  </div>
  <div class="form-row">
    <label for="destination">Destination:</label>
    <select name="Destination" id="destination" required>
      <option value="">Select</option>
      <option>San Lazaro</option>
      <option>Espana</option>
      <option>Alabang</option>
      <option>Cabuyao</option>
      <option>Naujan</option>
      <option>Victoria</option>
      <option>Pinamalayan</option>
      <option>Gloria</option>
      <option>Bongabong</option>
      <option>Roxas</option>
      <option>Mansalay</option>
      <option>Bulalacao</option>
      <option>Magsaysay</option>
      <option>San Jose</option>
      <option>Pola</option>
      <option>Soccoro</option>
    </select>
  </div>
  <div class="form-row">
    <label for="no_of_pass">Number of Passengers:</label>
    <input type="number" id="no_of_pass" name="no_of_pass" min="1" required />
  </div>
  <div class="form-row">
    <label for="datepick1">Departure:</label>
    <input type="date" id="datepick1" name="Departure" required />
  </div>
  <div class="form-row">
    <label for="datepick2">Return:</label>
    <input type="date" id="datepick2" name="Return" disabled />
  </div>
  <div class="form-row">
    <label for="bustype">Bus Type:</label>
    <select name="bustype" id="bustype" required>
      <option value="">Select</option>
      <option>Air Conditioned</option>
      <option>Ordinary</option>
    </select>
  </div>
  <input type="submit" name="submit" id="submit" value="Submit">
</form>
<script>
  document.querySelectorAll('input[name="way"]').forEach(radio => {
    radio.addEventListener('change', () => {
      document.getElementById('datepick2').disabled = (radio.value === '1');
    });
  });
</script>
				</div>
				<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
		<div id="footer">
			<a href="index.php"><img src="images/footer-logo.jpg" alt="Dimple Star Transport" /></a>
			<p>&copy;Dimple Star Transport<br /></p>
		</div>
    </div>
</body>
		<style type="text/css">
			.calendar {
				font-family: 'Trebuchet MS', Tahoma, Verdana, Arial, sans-serif;
				font-size: 0.9em;
				background-color: #EEE;
				color: #333;
				border: 1px solid #DDD;
				-moz-border-radius: 4px;
				-webkit-border-radius: 4px;
				border-radius: 4px;
				padding: 1.2em;
				width: 11em;
			}
			
			.calendar .months {
				background-color: #F6AF3A;
				border: 1px solid #E78F08;
				-moz-border-radius: 4px;
				-webkit-border-radius: 4px;
				border-radius: 4px;
				color: #FFF;
				padding: 0.2em;
				text-align: center;
			}
			
			.calendar .prev-month,
			.calendar .next-month {
				padding: 0;
			}
			
			.calendar .prev-month {
				float: left;
			}
			
			.calendar .next-month {
				float: right;
			}
			
			.calendar .current-month {
				margin: 0 auto;
			}
			
			.calendar .months .prev-month,
			.calendar .months .next-month {
				color: #FFF;
				text-decoration: none;
				padding: 0 0.4em;
				-moz-border-radius: 4px;
				-webkit-border-radius: 4px;
				border-radius: 4px;
				cursor: pointer;
			}
			
			.calendar .months .prev-month:hover,
			.calendar .months .next-month:hover {
				background-color: #FDF5CE;
				color: #C77405;
			}
			
			.calendar table {
				border-collapse: collapse;
				padding: 0;
				font-size: 0.8em;
				width: 70%;
			}
			
			.calendar th {
				text-align: center;
			}
			
			.calendar td {
				text-align: right;
				padding: 1px;
				width: 14.3%;
			}
			
			.calendar td span {
				display: block;
				color: #1C94C4;
				background-color: #F6F6F6;
				border: 1px solid #CCC;
				text-decoration: none;
				padding: 0.2em;
				cursor: pointer;
			}
			
			.calendar td span:hover {
				color: #C77405;
				background-color: #FDF5CE;
				border: 1px solid #FBCB09;
			}
			
			.calendar td.today span {
				background-color: #FFF0A5;
				border: 1px solid #FED22F;
				color: #363636;
			}
		</style>


<script type="text/javascript" src="js/datepickr.js"></script>
		<script type="text/javascript">
						
			new datepickr('datepick1', {
				'dateFormat': '20y-m-d'
			});
            
            new datepickr('datepick2', {
				'dateFormat': '20y-m-d'
			});
			
			
		</script>
</html>
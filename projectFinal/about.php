<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkingsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

session_start();
$Name=$_SESSION['name'];
$AccountNumber=$_SESSION['accountnumber'];
$sql="SELECT * FROM vehicle where AcctNum=$AccountNumber ";
$res=mysqli_query($conn,$sql);




?>


<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Parking System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	
</head>
<body>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="logintest.php">Log Out</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="profile.php">Home</a></li>       
            <li><a href="about.php">About</a></li>
            
            <li><a href="#contact" data-toggle="modal">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div class="container">
    	<div class="page-header">
    		<h1>About Us</h1>
    	</div>
    	<div class="row">
    		<div class="col-sm-8">
                <p>Our parking system is similar to other systems that require user authentication through a card scan before entry is permitted, however, our system is more convenient than any other system as it does not require you to stop for very long or lower your window and reach out to a machine to validate your card. As well, our system dynamically provides a fee depending on duration of parking, rather than a static fee as is normally the case with a parking pass.</P>

    			<p><br>Our parking system is a next-generation parking system that uses microcontrollers, RFID technology, and a laser detection system to manage admission and exit of a parking lot. Our system allows you to enter and exit the parking lot without the need to scan your card, or even stop for more than a second. When you approach the entrance to a lot, a polling laser detection system will scan for the presence of your vehicle, and a long-range RFID scanner will also poll for a valid tag in its vicinity.</p><br>
                
                <p>Once your vehicle is detected by our parking system, and the RFID reader scans your tag, it will check the RFID tag against the central database. If you are registered in our system, then the database will search to check your blacklist status, and whether or not you are entering the correct lot to which you are assigned in order to allow entry if you are not blacklisted and at the correct lot, but deny entry if you are blacklisted (which can be set manually if the user has committed some offence against the administrator of the parking system) or at the wrong lot.</p><br>
                <p>A log is taken of the time entry if entry is permitted. While if entry is denied, then a log is taken of the time of attempted (but denied) entry. Upon exit, the same process is repeated, however, the event indicating time of exit will also include a balance change; a value determined relative to the time between the entry and exit of the lot. This balance change will be added to your account balance to be paid.</p>
          
    		</div>    
    				<div class="thumbnail">
    					<img src="http://www.thestar.com/content/dam/thestar/life/homes/2013/04/25/toronto_condo_parking_spaces_can_fetch_60k/parking.jpg" alt="Parking Image">
    				</div>	
    		</div>

<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>© 2015 Data Managment.</p>
    		</div>
    		<div class="navbar-text pull-right">
    			<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
    			<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
    			<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
    		</div>
    	</div>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <div class="modal fade" id="contact" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<form class="form-horizontal" role="form">
    				<div class="modal-header">
    					<h4>Contact<h4>
	    			</div>
	    			<div class="modal-body">
    					<div class="form-group">
    						<label for="contact-name" class="col-sm-2 control-label">Name</label>
    						<div class="col-sm-10">
    							<input type="text" class="form-control" id="contact-name" placeholder="First & Last Name">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-email" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
    							<input type="email" class="form-control" id="contact-email" placeholder="example@domain.com">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-message" class="col-sm-2 control-label">Message</label>
    						<div class="col-sm-10">
    							<textarea class="form-control" rows="4"></textarea>
    						</div>
    					</div>
	    			</div>
	    			<div class="modal-footer">
    					<a class="btn btn-default" data-dismiss="modal">Close</a>
    					<button type="submit" class="btn btn-primary">Send</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



















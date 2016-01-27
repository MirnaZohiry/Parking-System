
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
    
        <title>Vehicle Information</title>
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
    		<h1>Vehicle Information</h1>
    	</div>
    	<div class="row">
    		<div class="col-sm-8">
    			<div class="thumbnail">
    				<img src="http://www.gmfleet.com/content/dam/gmfleet/global/master/nscwebsite/en/Home/Vehicle_Overview/Cadillac/01_images/2014-cadillac-professional-product-overview-livery-limo-funeral-mh-960x510-1.jpg" alt="Black List">
    				
    			</div>
    			<p>Our Project is designed to track your daily parking fees and your blacklist status</p>
         
          <div>
            <br><p><strong>Provided Features: </strong></p>
            <ul>
            <li><a href="balance.php">Check Balance</a></li>
            <li><a href="blacklist.php">Blacklist Status</a></li>
            <li><a href="vehicle.php">Vehicle Information</a></li>
            <li><a href="user.php">User Information</a></li>
            </ul>
          </div>
          
    		</div>
<div class="col-sm-4">
    			
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<h3 class="panel-title">User</h3>
    				</div>
    				<div class="panel-body bg-grey text-center">
    					<img src="https://cdn0.iconfinder.com/data/icons/online-education-collection-1-2/32/user_staff_person_man_profile_boss_circle-128.png" alt="Image" class="img-circle">
    					<h4><?php echo $Name;?></h4>
    				</div>	
    			</div>
    			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Vehicle Information</h3>
					</div>
					<table class="table table-bordered table-striped">
						<tbody>
							<tr>
								<td>ID</td>
								<td><?php echo $AccountNumber; ?></td>
							</tr>
							<tr>
								<td>Plate Number and Model Make</td>
								<td><?php
                                $count=0;
									if ($res->num_rows > 0) {
   
											    // output data of each row
											    while($row = $res->fetch_assoc()) { 
											    $PlateNo=$row['PlateNo'];
											    $ModelMake=$row['ModelMake'];
                                                $count++;
											    echo $count.". ".$PlateNo."  "; 
                                                echo $ModelMake."<br>"; 


											    }
											} else {
											    echo "0 results";
}





								?></td>
							</tr>	
							
							
						</tbody>
					</table>
				</div>
<div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register New Car </h3>
                    </div>
                    <div class="panel-body bg-grey text-center">
                        <form action="vehicleregistration.php" method="post" id="form3">
                            <input type="text" name="plateno" placeholder="Plate Number">
                             <input type="text" name="modelmake" placeholder="Model Make">
                        </form>
                        <form action="vehicleregistration.php" method="post" id="form3">
                             <button type="submit" form="form3" value="submit"  name="registervehicle">Submit
            </button>
                        </form> 
                       
                    </div>  
                </div>


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



















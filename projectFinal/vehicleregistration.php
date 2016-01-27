<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkingsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_POST['registervehicle'])) {
	
	session_start();

	
	$Name=$_SESSION['name'];
	$AccountNumber=$_SESSION['accountnumber'];
	$plateNo=$_POST['plateno'];
	$ModelMake=$_POST['modelmake'];


	
	$sql2="INSERT INTO vehicle (PlateNo,ModelMake,AcctNum) 
	Values ('$plateNo','$ModelMake', $AccountNumber )";

if (mysqli_query($conn, $sql2)) {
    echo "New record created successfully";
     echo "<script> window.location.assign('vehicle.php'); </script>";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
}



mysqli_close($conn);?>







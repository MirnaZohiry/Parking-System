<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkingsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_POST['register'])) {
	
	session_start();
	$AccountNumber=$_POST['accountnumber'];
	$Name=$_POST['name'];
	$phoneNumber=$_POST['phoneno'];
	$LotNo=$_POST['lotno'];
	$plateNo=$_POST['plateno'];

	
	$sql2="INSERT INTO _user (AccountNumber,Name,PhoneNo,LotNo) 
	Values ($AccountNumber,'$Name','$phoneNumber',$LotNo)";

if (mysqli_query($conn, $sql2)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}




$sql="INSERT INTO vehicle (PlateNo,AcctNum) 
	Values ('$plateNo',$AccountNumber)";
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
     
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}





$sql3="INSERT INTO BLACKLIST (AcctNo,State) 
	Values ('$AccountNumber',1)";
	if (mysqli_query($conn, $sql3)) {
    echo "New record created successfully";
     echo "<script> window.location.assign('logintest.php'); </script>";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);








?>
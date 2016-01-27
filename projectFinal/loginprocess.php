<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkingsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);



if (isset($_POST['login'])) {
	
	session_start();
	$Name=$_POST['name'];
	$AccountNumber=$_POST['accountnumber'];
	$_SESSION['name'] = $Name;
	$_SESSION['accountnumber'] = $AccountNumber;




$sql="SELECT * FROM _user WHERE 
Name='".$Name."' AND AccountNumber='".$AccountNumber."' LIMIT 1";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)==1) {
echo "You have successfully logged in.";
 echo "<script> window.location.assign('profile.php'); </script>";
exit();




}
else{echo "Invalid login, try again";
exit();
}





}




mysqli_close($conn);
?>
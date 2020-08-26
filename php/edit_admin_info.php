<?php 
include'connection.php';
session_start();
$id = $_SESSION['id'];
if (isset($_POST['submit'])) {
	$uname = $_POST['uname'];
	$name = $_POST['name'];
	$Qualification = $_POST['Qualification'];
	$CNIC = $_POST['CNIC'];
	$dob = $_POST['dob'];
	$b_group = $_POST['b_group'];
	$email = $_POST['email'];
	$Contact = $_POST['Contact'];
	$address = $_POST['address'];
	$sql = "UPDATE admin_login SET user_name='$uname',name='$name',qualification='$Qualification',nic='$CNIC',dob='$dob',b_group='$b_group',email='$email',contact='$Contact',
        address='$address '  WHERE user_name='$id'";

	if (mysqli_query($conn, $sql)) {
		header('location:admin_profile.php');
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
}	


 ?>
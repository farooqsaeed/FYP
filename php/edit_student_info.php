<?php 
include'connection.php';
session_start();
$id = $_SESSION['stu_id'];
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$fname = $_POST['fname'];
	$class = $_POST['class'];
	$Department = $_POST['Department'];
	$room_no = $_POST['room_no'];
	$dob = $_POST['dob'];
	$cnic = $_POST['cnic'];
	$b_group = $_POST['b_group'];
	$email = $_POST['email'];
	$cell_no = $_POST['cell_no'];
	$address = $_POST['address'];
	$sql = "UPDATE student_login SET stu_name='$name',father_name='$fname',class='$class',department='$Department',room_no='$room_no',dob='$dob',cnic='$cnic',
        b_group='$b_group',email='$email',cell_no='$cell_no',address='$address ' WHERE id='$id'";

	if (mysqli_query($conn, $sql)) {
		header('location:profile.php');
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
}	


 ?>
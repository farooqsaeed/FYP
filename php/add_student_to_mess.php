<?php 
include'connection.php';
if (isset($_POST['submit'])) {
	$cnic = $_POST['nic'];
	$name = $_POST['name'];
	$Department = $_POST['Department'];
	$sql = "INSERT INTO mess_member (nic_no,name,department) VALUES  ('$cnic','$name','$Department')";
	if (mysqli_query($conn, $sql)) {
    header('location:dues_display.php');
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

 ?>
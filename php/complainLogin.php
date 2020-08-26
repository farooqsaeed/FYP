<?php 
include'connection.php';
session_start(); 
$stu_id = $_POST['id'];
$password = $_POST['password'];
$sql = "SELECT  *FROM student_login WHERE ID='$stu_id' AND password ='$password' ";
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);
if ($total==1) {
	//$_SESSION['stu_id']=$stu_id;
	header('location:complain_form.php');
}
else {
	echo "login failed";
}

?>
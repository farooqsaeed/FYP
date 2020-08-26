<?php 
include'connection.php';
session_start();
 $room_no=$_SESSION['r_no'];
 $seat_no=$_SESSION['s_no'];
if (isset($_POST['submit'])) {
	$status = $_POST['status'];
	$Student_ID = $_POST['Student_ID'];
	$Student_Name = $_POST['Student_Name'];
	$Department = $_POST['Department'];
	$class = $_POST['class'];
	$query = mysqli_query($conn, "SELECT * FROM room_details WHERE ID='".$Student_ID."'");
			if(mysqli_num_rows($query) > 0){

			    ?>
			    <script type="text/javascript">
			    	alert("Room has alerdy Alloted to this Student");
			    	window.location.href="rooms_details.php";
			    </script>
			    <?php
			}
	else {		
	$sql = "UPDATE room_details SET status='$status',ID='$Student_ID',student_name='$Student_Name',department='$Department',class='$class' WHERE room_no='$room_no' AND seat_no='$seat_no'";

	if (mysqli_query($conn, $sql)) {
		header('location:rooms_details.php');
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
}	
}
 ?>
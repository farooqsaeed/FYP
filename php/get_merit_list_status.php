<?php 
include'connection.php';
if (isset($_POST['submit'])) {
	$First = $_POST['First'];
	$Second = $_POST['Second'];
	$Third = $_POST['Third'];
	$forth = $_POST['forth'];
	$sql = "UPDATE  merit_list_status SET first_merit_list ='$First',second_merit_list='$Second',third_merit_list='$Third'";

if (mysqli_query($conn, $sql)) {
	        ?>
			<script type="text/javascript">
			alert("State Changed Successfuly");
			window.location.href = "admission_adminSide.php";
			</script>
            <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

 ?>
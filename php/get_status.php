<?php 
include'connection.php';
if (isset($_POST['submit'])) {
	$state = $_POST['state'];
	$sql = "UPDATE  form_status SET status ='$state'";

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
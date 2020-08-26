<?php 
include'connection.php';
if (isset($_POST['submit'])) {
	$forth = $_POST['forth'];
	$sql = "UPDATE  merit_list_status SET mess_pdf ='$forth'";

if (mysqli_query($conn, $sql)) {
	        ?>
			<script type="text/javascript">
			alert("State Changed Successfuly");
			window.location.href = "mess_dues_display.php";
			</script>
            <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

 ?>
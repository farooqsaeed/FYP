<?php 
include'connection.php';
if (isset($_POST['submit'])) {
	$no=$_POST['seat'];

$sql = "UPDATE no_of_seat SET  seats='$no' ";
if (mysqli_query($conn, $sql)) {
    ?>
    <script type="text/javascript">
    	alert("Seats Seted Successfuly");
    	window.location.href="admission_adminSide.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

 ?>
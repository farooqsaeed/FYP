<?php 
include'connection.php';
if (isset($_POST['submit'])) {
	$start_date = $_POST['strat_date'];
	$close_date = $_POST['Close_date'];
	$first_date = $_POST['first_meritlist_date'];
	$second_date = $_POST['second_meritlist_date'];
	$third_date = $_POST['third_meritlist_date'];
	$sql = "UPDATE admission_schedule SET start_date='$start_date',close_date='$close_date',first_date='$first_date',second_date='	$second_date',third_date='$third_date' WHERE id=1";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    	?>
			<script type="text/javascript">
			alert("State Changed Successfuly");
			window.location.href = "admission_adminSide.php";
			</script>
            <?php
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
 ?>
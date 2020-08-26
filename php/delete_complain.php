<?php 
include'connection.php';
           $dlt = $_GET['delete'];
			// sql to delete a record
			$sql = "DELETE FROM complian WHERE student_id='$dlt' ";

			if (mysqli_query($conn, $sql)) {
			    echo "Record deleted successfully";
			    header('location:complain_display.php');
			} else {
			    echo "Error deleting record: " . mysqli_error($conn);
			}
 ?>
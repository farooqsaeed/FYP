<?php 
include'connection.php';
           $dlt = $_GET['del'];
			// sql to delete a record
			$sql = "DELETE FROM third_merit_list WHERE roll_no='$dlt'";

			if (mysqli_query($conn, $sql)) {
			    echo "Record deleted successfully";
			    header('location:meritlist_view.php');
			} else {
			    echo "Error deleting record: " . mysqli_error($conn);
			}
 ?>
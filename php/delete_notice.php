<?php 
include'connection.php';
           $dlt = $_GET['delete'];
			// sql to delete a record
			$sql = "DELETE FROM notice WHERE id='$dlt'";

			if (mysqli_query($conn, $sql)) {
			    header('location:display_notice.php');
			} else {
			    echo "Error deleting record: " . mysqli_error($conn);
			}
 ?>
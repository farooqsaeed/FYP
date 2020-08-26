<?php 
include'connection.php';
           $r_no = $_GET['r_no'];
           $s_no = $_GET['s_no'];
			// sql to delete a record
          
           $sql = "UPDATE room_details SET status='VACANT',ID='',student_name='',department='',class='' WHERE room_no='$r_no' AND seat_no='$s_no'";
			if (mysqli_query($conn, $sql)) {
				    //echo "deleted successfuly";
			    	header('location:rooms_details.php');
			    
			} else {
			    echo "Error deleting record: " . mysqli_error($conn);
			}
 ?>
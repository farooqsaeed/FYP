<?php  
include'connection.php';
$sql = "SELECT *FROM  merit_list_status";
$result = mysqli_query($conn, $sql);
if ($result) {
       $row = mysqli_fetch_assoc($result);
        $status =  $row['second_merit_list'];
        if ($status=='publish') {
        	header('location:second_merit_list_pdf.php');
        }
        else{
        	echo "date will be announced";
        }
   }
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}   
 ?>
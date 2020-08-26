<?php  
include'connection.php';
$sql = "SELECT *FROM  merit_list_status";
$result = mysqli_query($conn, $sql);
if ($result) {
       $row = mysqli_fetch_assoc($result);
        $status =  $row['third_merit_list'];
        if ($status=='publish') {
        	header('location:third_merit_list.php');
        }
        else{
        	echo "date will be announced";
        }
   }
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}   
 ?>
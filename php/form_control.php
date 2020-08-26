<?php  
include'connection.php';
$sql = "SELECT *FROM  form_status";
$result = mysqli_query($conn, $sql);
if ($result) {
       $row = mysqli_fetch_assoc($result);
        $status =  $row['status'];
        if ($status=='Enable') {
        	header('location:../admission_form.php');
        }
        else{
        	echo "admission has been closed";
        }
   }
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}   
 ?>
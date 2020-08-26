<?php 
include'connection.php';
  $sql = "SELECT mess_pdf FROM  merit_list_status";
    $result=mysqli_query($conn, $sql);

if ( $result) {
       $row=mysqli_fetch_assoc($result);
       $status=$row['mess_pdf'];
       if ($status=='publish') {
       	header('location:pdf1.php');
       }
       else{
       	echo "page not avalible";
       }
            
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


 ?>
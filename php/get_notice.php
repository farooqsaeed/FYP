<?php 
include'connection.php';
if (isset($_POST['submit'])) {
$title =$_POST['title'];
$Description =$_POST['Description'];
$Notice =$_POST['Notice'];
$sql = "INSERT INTO notice (title,Description, notice_date,actual_notice)
	VALUES ('$title',NOW(),'$Notice')";
    $qury =mysqli_query($conn, $sql);
    
    if ($qury) {
        header('location:display_notice.php');
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
 ?>
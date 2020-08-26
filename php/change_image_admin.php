<?php 
include'connection.php';
session_start();
$id = $_SESSION['id'];
if (isset($_POST['submit'])) {
	$image = $_FILES['image']['name'];
    $target = "image/".basename($image);
 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		
  	}else{
  		echo  "Failed to upload image";
  	}
}
$sql = "UPDATE admin_login SET pic_source=' $target'  
        WHERE user_name='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
	header('location:admin_profile.php');}
	else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

 ?>
<?php 
include'connection.php';
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
}
$sql = "INSERT INTO admitted_student (ID,student_name) VALUES ('$id','$name')";
$result = mysqli_query($conn, $sql);
if ($result) {
       echo "Student added Successfuly"."<a href='admission_adminSide.php'>OK</a>";
   }
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}   

 ?>
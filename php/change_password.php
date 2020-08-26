<?php 
include'connection.php';
session_start();
$id = $_SESSION['stu_id'];
if (isset($_POST['submit'])) {
  $current =$_POST['current_password'];
  $new = $_POST['new_password'];
  $sql = "SELECT password FROM student_login 
        WHERE ID='$id'";
  $result = mysqli_query($conn, $sql);
if ($result) {
  $row = mysqli_fetch_assoc($result);
  $password =  $row['password'];
     }
if ($current==$password) {
       $sql = "UPDATE student_login SET password ='$new'  
        WHERE ID='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          //echo "password changed successfuly"."<br>";
          
        }
     }
     header('location:../index.php');     
}
?>
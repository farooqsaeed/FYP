<?php 
include'connection.php';
session_start();
$id = $_SESSION['id'];
if (isset($_POST['submit'])) {
  $current =$_POST['current_password'];
  $new = $_POST['new_password'];
  $sql = "SELECT password FROM admin_login 
        WHERE user_name='$id'";
  $result = mysqli_query($conn, $sql);
if ($result) {
  $row = mysqli_fetch_assoc($result);
  $password =  $row['password'];
     }
if ($current==$password) {
       $sql = "UPDATE admin_login SET password ='$new'  
        WHERE user_name='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          //echo "password changed successfuly"."<br>";
          
        }
     }
     header('location:admin_login.php');     
}
?>
<?php
include'connection.php';
if (isset($_POST['submit'])) {
 	$id =$_POST['id'];
    $email =$_POST['email'];
    $question =$_POST['question'];
    $answer =$_POST['answer'];
     $sql = "SELECT security_question,security_answer,email FROM student_login WHERE ID='$id'";
     $result=mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
        $question1 =  $row['security_question'];
        $answer1 =  $row['security_answer'];
        $email1 =  $row['email'];
    if ($question==$question1 AND $answer== $answer1 AND $email==$email1) {
        	header('location:get_forget_password.php');
        }
      else {
      	 ?>
      	 <script type="text/javascript">
      	 	alert("You have entered wrong information");
      	 	window.location.href="../index.php";
      	 </script>
      	 <?php
      }      
 } 
 ?>
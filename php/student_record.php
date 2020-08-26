<?php
include'connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
 $sql = "SELECT  *FROM admitted_student WHERE ID='$id' AND student_name ='$name'";
$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);
if ($total==1) {
 $id = $_POST['id'];
$password = $_POST['password'];
$question = $_POST['Question'];
$answer = $_POST['Answer'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$class = $_POST['class'];
$department = $_POST['department'];
$session = $_POST['session'];
$room_no = $_POST['room_no'];
$dob = $_POST['dob'];
$cnic = $_POST['cnic'];
$b_group = $_POST['b_group'];
$email = $_POST['email'];
$cell_no = $_POST['cell_no'];
$address = $_POST['address'];
$image = $_FILES['image']['name'];
$target = "image/".basename($image);
 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      
    }else{
      echo  "Failed to upload image";
    }
$sql = "INSERT INTO student_login (ID, password,security_question,security_answer,stu_name,father_name,class,department,session,room_no,dob,cnic,b_group,email,cell_no,address,pic_source) VALUES ('$id', '$password','$question','$answer','$name','$father_name','$class','$department','$session','$room_no','$dob','$cnic','$b_group','$email','$cell_no','$address','$target')";
    // execute query
    if (mysqli_query($conn, $sql)){
      ?>
      <script type="text/javascript">
      alert("Registration Completed successfully");
      window.location.href = "../index.php";
      </script>
      <?php
      //echo "Registration Completed successfully"."<br>";
      //echo "Click Here to login to your profile"."<a href='../index.php'>Login</a>"."<br>";
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } 
}
else {
      ?>
      <script type="text/javascript">
      alert("You are not admitted student");
      window.location.href = "../index.php";
      </script>
      <?php
  //echo "You are not admitted student";
}   
 ?>
 <!DOCTYPE html>
<html>
<head>	
<title></title>
</head>
<body>
<?php include'dash_board_menu.php'; ?> 
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <!-- Right -->
    <h2>First Merit List</h2>
    <table class="table table-bordered">
	<thead>
 	<tr>
 	<th>Roll No</th>
 	<th>Name</th>
 	<th>Father Name</th>
 	<th>Department</th>
 	<th>Class</th>
 	<th>Semester/Year</th>
 	<th>Marks</th>
 	<th>Qouta</th>
 	<th>Delete</th>
 	</tr>
 	</thead>
<?php 
include'connection.php';

			$sql = "SELECT * FROM merit_list";
			$result = mysqli_query($conn, $sql);
               
			//if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			   
			        while($row = mysqli_fetch_assoc($result)) {
                     $roll_no =$row["roll_no"];
                     $stu_name =$row["student_name"];
                     $father_name =$row["father_name"];
                     $department =$row["department"];
                     $class =$row["class"];
                     $semester =$row["semester"];
                     $marks =$row["marks"];
                     $qouta =$row["qouta"];  
			        
			   

			 
			//else {echo "0 results";}
 ?>
    <tbody>
 	<tr>
 		<td><?php echo  $roll_no; ?></td>
 		<td><?php echo  $stu_name; ?></td>
 		<td><?php echo  $father_name; ?></td>
 		<td><?php echo  $department; ?></td>
 		<td><?php echo  $class; ?></td>
 		<td><?php echo  $semester; ?></td>
 		<td><?php echo  $marks; ?></td>
 		<td><?php echo  $qouta ?></td>
 		<td><a href="delete.php?del=<?php echo $roll_no; ?>">Delete</a></td>
 	<?php } ?> 
 	</tr>
 	</tbody>
 </table>
 <h2>Second Merit List</h2>
    <table class="table table-bordered">
  <thead>
  <tr>
  <th>Roll No</th>
  <th>Name</th>
  <th>Father Name</th>
  <th>Department</th>
  <th>Class</th>
  <th>Semester/Year</th>
  <th>Marks</th>
  <th>Qouta</th>
  <th>Delete</th>
  </tr>
  </thead>
<?php 
include'connection.php';

      $sql = "SELECT * FROM second_merit_list";
      $result = mysqli_query($conn, $sql);
               
      //if (mysqli_num_rows($result) > 0) {
          // output data of each row
         
              while($row = mysqli_fetch_assoc($result)) {
                     $roll_no =$row["roll_no"];
                     $stu_name =$row["student_name"];
                     $father_name =$row["father_name"];
                     $department =$row["department"];
                     $class =$row["class"];
                     $semester =$row["semester"];
                     $marks =$row["marks"];
                     $qouta =$row["qouta"];  
 ?>
    <tbody>
  <tr>
    <td><?php echo  $roll_no; ?></td>
    <td><?php echo  $stu_name; ?></td>
    <td><?php echo  $father_name; ?></td>
    <td><?php echo  $department; ?></td>
    <td><?php echo  $class; ?></td>
    <td><?php echo  $semester; ?></td>
    <td><?php echo  $marks; ?></td>
    <td><?php echo  $qouta ?></td>
    <td><a href="delete1.php?del=<?php echo $roll_no; ?>">Delete</a></td>
  <?php } ?> 
  </tr>
  </tbody>
 </table>
 <h2>Third Merit List</h2>
    <table class="table table-bordered">
  <thead>
  <tr>
  <th>Roll No</th>
  <th>Name</th>
  <th>Father Name</th>
  <th>Department</th>
  <th>Class</th>
  <th>Semester/Year</th>
  <th>Marks</th>
  <th>Qouta</th>
  <th>Delete</th>
  </tr>
  </thead>
<?php 
include'connection.php';

      $sql = "SELECT * FROM third_merit_list";
      $result = mysqli_query($conn, $sql);
               
      //if (mysqli_num_rows($result) > 0) {
          // output data of each row
         
              while($row = mysqli_fetch_assoc($result)) {
                     $roll_no =$row["roll_no"];
                     $stu_name =$row["student_name"];
                     $father_name =$row["father_name"];
                     $department =$row["department"];
                     $class =$row["class"];
                     $semester =$row["semester"];
                     $marks =$row["marks"];
                     $qouta =$row["qouta"];  
              
         

       
      //else {echo "0 results";}
 ?>
    <tbody>
  <tr>
    <td><?php echo  $roll_no; ?></td>
    <td><?php echo  $stu_name; ?></td>
    <td><?php echo  $father_name; ?></td>
    <td><?php echo  $department; ?></td>
    <td><?php echo  $class; ?></td>
    <td><?php echo  $semester; ?></td>
    <td><?php echo  $marks; ?></td>
    <td><?php echo  $qouta ?></td>
    <td><a href="delete2.php?del=<?php echo $roll_no; ?>">Delete</a></td>
  <?php } ?> 
  </tr>
  </tbody>
 </table>   
</div>
</body>
</html>

 

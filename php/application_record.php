<!DOCTYPE html>
<html>
<head>
          <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
          <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
          <!------ Include the above in your HEAD tag ---------->

          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
           <script src='https://kit.fontawesome.com/a076d05399.js'></script>
           <style type="text/css">
           	.btn{width: 25%; height: 100px;}
           </style>
	<title></title>
</head>
<body>
<?php include'dash_board_menu.php'; ?>
    <div class="col-lg-8">
    	<table class="table table-striped">
  <thead>
  <tr>
  <th>Roll No</th>
  <th>Name</th>
  <th>Father Name</th>
  <th>Department</th>
  <th>Class</th>
  <th>Semester/Year</th>
  </tr>
  </thead>
<?php 
include'connection.php';

      $sql = "SELECT roll_no,student_name,father_name,department,class,semester FROM admission_data";
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
                   ?>
                     <tbody>
                    <tr>
                      <td><?php echo  $roll_no; ?></td>
                      <td><?php echo  $stu_name; ?></td>
                      <td><?php echo  $father_name; ?></td>
                      <td><?php echo  $department; ?></td>
                      <td><?php echo  $class; ?></td>
                      <td><?php echo  $semester; ?></td>
                    <?php } ?> 
                    </tr>
                    </tbody>
                   </table>
    </div>
</body>
</html>
<?php 
session_start();
$f_id=$_SESSION['f_id'];
 ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<a href="mess_dues_display.php" class="btn btn-lg btn-success">Go To DashBord</a>
<h1 class="text-center">Faculity Mess Record</h1>
    <table class="table table-striped">
	<tbody>
 	<tr>
 	<th>ID</th>
 	<th>Name</th>
 	<th>Department</th>
 	<th>Attendance</th>
 	<th>Per Day</th>
   <th>Dues</th>
 	<th>Total Dues</th>
 	<th>Received</th>
 	<th>Balance</th>
 	<th>Add Record</th>
 	<th>Payment</th>
 	</tr>
 	</tbody>
<?php 
include'connection.php';

			$sql = "SELECT nic_no,name,department,Attd,per_day,dues,total_dues,Received,Balance FROM mess_member WHERE nic_no='$f_id'";
			$result = mysqli_query($conn, $sql);
               
			//if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			   
			        while($row = mysqli_fetch_assoc($result)) {
                     $id =$row["nic_no"];
                     $name =$row["name"];
                     $department =$row["department"];
                     $Attd =$row["Attd"];
                     $per_day =$row["per_day"];
                     $duse =$row["dues"];
                     $total_dues =$row["total_dues"];
                     $Received =$row["Received"];
                     $Balance =$row["Balance"];
			        
 ?>
   <tbody>
 	<tr>
 		<td><?php echo $id; ?></td>
 		<td><?php echo  $name; ?></td>
 		<td><?php echo  $department; ?></td>
 		<td><?php echo   $Attd; ?></td>
 		<td><?php echo   $per_day; ?></td>
 		<td><?php echo   $duse; ?></td>
 		<td><?php echo   $total_dues; ?></td>
 		<td><?php echo   $Received; ?></td>
 		<td><?php echo   $Balance; ?></td>
 		<td>
 		<a href="add_record6.php?id=<?php echo $id; ?>" class="btn btn-success">Add Record</a>
 		</td>
 		<td><a href="payment12.php?id=<?php echo $id; ?>" class="btn btn-success">Payment</a></td>
 	<?php } ?> 
 	</tr>
 	</tbody>
 </table>
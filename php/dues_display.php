<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
    #btnn{

        margin-top: 20px;
        margin-left: 250px;
    }
</style>
</head>
<body>
<?php include'dash_board_menu.php'; ?>
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
	<div id="btnn">
	 <a href="add_student.php" class="btn btn-warning">Add Faculity Member</a>
     <a href="mess_dues_pdf.php" class="btn btn-warning">Print Mess Dues Report</a>
     <a href="fee_per_day.php" class="btn btn-warning">Add Per Day</a>
     <a href="search1.php" class="btn btn-warning">Search</a>
     </div><br>
    <!-- Right -->
    <h1>Hostel Student Mess Record</h1>
    <table class="table table-striped" id="myTable">
	<tbody>
 	<tr>
 	<th>ID</th>
 	<th>Name</th>
 	<th>Room No</th>
 	<th>Mess Status</th>
 	<th>Attedance</th>
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

			$sql = "SELECT * FROM mess_dues";
			$result = mysqli_query($conn, $sql);
               
			//if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			   
			        while($row = mysqli_fetch_assoc($result)) {
                     $id =$row["ID"];
                     $name =$row["name"];
                     $room_no =$row["room_no"];
                     $mess_status =$row["mess_status"];
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
 		<td><?php echo  $room_no; ?></td>
 		<td><?php echo  $mess_status; ?></td>
 		<td><?php echo   $Attd; ?></td>
 		<td><?php echo   $per_day; ?></td>
 		<td><?php echo   $duse; ?></td>
 		<td><?php echo   $total_dues; ?></td>
 		<td id="received"><?php echo   $Received; ?></td>
 		<td><?php echo   $Balance; ?></td>
 		<td>
 		<a href="add_record.php?id=<?php echo $id; ?>" class="btn btn-success">Add Record</a>
 		</td>
 		<td><a href="payment.php?id=<?php echo $id; ?>" class="btn btn-success">Payment</a></td>
 	<?php } ?> 
 	</tr>
 	</tbody>
 </table>
 <h1>Faculity Member Mess Dues Record</h1>
    <table class="table table-striped">
	<tbody>
 	<tr>
    <th>ID</th>
 	<th>Name</th>
 	<th>Department</th>
 	<th>Attedance</th>
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

			$sql = "SELECT * FROM mess_member";
			$result = mysqli_query($conn, $sql);
               
			//if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			   
			        while($row = mysqli_fetch_assoc($result)) {
                     $nic_no =$row["nic_no"];
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
        <td><?php echo  $nic_no; ?></td>
 		<td><?php echo  $name; ?></td>
 		<td><?php echo  $department; ?></td>
 		<td><?php echo  $Attd; ?></td>
 		<td><?php echo  $per_day; ?></td>
 		<td><?php echo  $duse; ?></td>
 		<td><?php echo  $total_dues; ?></td>
 		<td><?php echo  $Received; ?></td>
 		<td><?php echo  $Balance; ?></td>
 		<td>
 		<a href="add_record1.php?id=<?php echo $nic_no; ?>" class="btn btn-success">Add Record</a>
 		</td>
 		<td><a href="payment1.php?id=<?php echo $nic_no; ?>" class="btn btn-success">Payment</a></td>
 	<?php } ?> 
 	</tr>
 	</tbody>
 </table>
</div>
</body>
</html>
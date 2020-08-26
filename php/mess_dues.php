 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="container">
<h3>Mess Dues</h3>
<table class="table table-striped">
	<thead>
 	<tr>
 	<th>ID</th>
 	<th>Name</th>
 	<th>Room No</th>
 	<th>Attendance</th>
 	<th>Per Day</th>
 	<th>Dues</th>
 	<th>Balance</th>
 	<th>Total Dues</th>
 	</tr>
 	</thead>
<?php 
include'connection.php';

			$sql = "SELECT * FROM mess_dues";
			$result = mysqli_query($conn, $sql);
               
			//if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			   
			        while($row = mysqli_fetch_assoc($result)) {
                     $ID =$row["ID"];
                     $name =$row["name"];
                     $room_no =$row["room_no"];
                     $Attd =$row["Attd"];
                     $per_day =$row["per_day"];
                     $dues =$row["dues"];
                     $Balance =$row["Balance"];
                     $total_dues =$row["total_dues"]; 
			        
			   

			 
			//else {echo "0 results";}
 ?>
   <tbody>
 	<tr>
 		<td><?php echo  $ID; ?></td>
 		<td><?php echo  $name; ?></td>
 		<td><?php echo  $room_no; ?></td>
 		<td><?php echo  $Attd; ?></td>
 		<td><?php echo  $per_day; ?></td>
 		<td><?php echo  $dues; ?></td>
 		<td><?php echo  $Balance; ?></td>
 		<td><?php echo  $total_dues; ?></td>
 	<?php } ?> 
 	</tr>
 	</tbody>
 </table>
 <a href="../mess.php" class="btn btn-success">Back</a>
</div>
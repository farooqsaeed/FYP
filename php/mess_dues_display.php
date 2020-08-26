<?php
include'connection.php';
session_start(); 
$_SESSION['stu_id'];
if ($_SESSION['stu_id']=='') {
	echo "string";
	header('location:../index.php');
	die();
	}
    $sql = "SELECT mess_pdf FROM  merit_list_status";
    $result=mysqli_query($conn, $sql);

if ( $result) {
       $row=mysqli_fetch_assoc($result);
       $status=$row['mess_pdf'];
            
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}    	                
?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
<style type="text/css">
    #conn{
  height: 70px;
}
#lognn{
    color: white;
    font-weight:bold;
    text-decoration: none;
}
#adminnn{
    color: green;
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
}
p{
   font-weight: bold;
   font-size: 20px; 
}
.row{
    padding-top: 20px;
}
#batnn{
    margin-top: 20px;
}
</style>
<title></title>
</head>
<body>
    <div id="conn" class="container-fluid bg-warning sticky-top">
    <div class="row">
        <div class="col-lg-4">
            <p class="text-white">New Hostel Management System</p> 
        </div>
        <div class="col-lg-4 text-right">
        </div>
        <div class="col-lg-2 text-right text-white">
            <a href=""><?php echo $_SESSION['stu_id']."Online"; ?></a> 
        </div>
        <div class="col-lg-2 text-left text-white">
        <a id="lognn" href="food_monitor_logout.php"><i class="fa fa-sign-out"></i> Logout</a> 
        </div>
    </div>
</div> 
<div class="container-fluid">
<div class="col-lg-12 col-md-10 col-sm-12 col-xs-12">
	<div id="batnn">
	 <a href="add_student.php" class="btn btn-warning">Add Faculity Member</a>
     <a href="mess_dues_pdf.php" class="btn btn-warning">Print Mess Dues Report</a>
     <a href="add_record_for_moniter.php" class="btn btn-warning">Add Per Day</a>
     <a href="search.php" class="btn btn-warning">Search</a>
     <div style="float: right;">
     <form style="margin-top: 5px;" action="mess_pdf_status.php" method="POST" >
      <p>Mess Dues Report Status:<b style="background-color: yellow; color: red"><?php  echo $status; ?></b></p>   
     <select style="width: 100px; border: 2px solid green; " name="forth"><option>publish</option>
        <option>unpublish</option></select>
     <input type="submit" name="submit" value="submit">
     </form>
     </div>   
     </div>
    <!-- Right -->
    <h1>Hostel Student Mess Record</h1>
    <table class="table table-striped">
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
 		<td><?php echo   $Received; ?></td>
 		<td><?php echo   $Balance; ?></td>
 		<td>
 		<a href="add_record2.php?id=<?php echo $id; ?>" class="btn btn-success">Add Record</a>
 		</td>
 		<td><a href="payment2.php?id=<?php echo $id; ?>" class="btn btn-success">Payment</a></td>
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
 		<a href="add_record_new.php?id=<?php echo $nic_no; ?>" class="btn btn-success">Add Record</a>
 		</td>
 		<td><a href="payment_new.php?id=<?php echo $nic_no; ?>" class="btn btn-success">Payment</a></td>
 	<?php } ?> 
 	</tr>
 	</tbody>
 </table>
</div>
</body>
</html>

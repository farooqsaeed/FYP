<?php 
include'connection.php';
session_start();
$id = $_SESSION['stu_id'];
$sql = "SELECT ID,stu_name,father_name,class,department,session,room_no,dob,cnic,
        b_group,email,cell_no,address,pic_source FROM student_login 
        WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
        $row = mysqli_fetch_assoc($result);
        $id =  $row['ID'];
        $name =  $row['stu_name'];
        $F_Name =  $row['father_name'];
        $class =  $row['class'];
        $department =  $row['department'];
        $session =  $row['session'];
        $room_no =  $row['room_no'];
        $dob =  $row['dob'];
        $cnic =  $row['cnic'];
        $b_group =  $row['b_group'];
        $email =  $row['email'];
        $cell_no =  $row['cell_no'];
        $address =  $row['address'];
        $pic =  $row['pic_source']; 
       	
}
 ?>
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
.crad{
	border-radius: 10px;
}
.container-fluid{
	padding-top: 5px;
	background-color: #00FFFF;
}		
p
{
  margin:0;
  padding:0;
  font-weight: bold;
}
.btn{
	margin: 5px;
	width: 100%;
	font-weight: bold;
}
.card-subtitle{
	margin: 0px;
}
.card-title{
	margin: 0px;
}
#h1{
	font-weight: bold;
}
</style>
<div class="container-fluid vh-100">
	<div class="row">
		<div class="col-lg-2"></div>
	<div class="col-lg-8 col-sm-12">
	<div class="card">
		<div class="card-title bg-success text-center text-warning"><h1>Student Profile</h1></div>
		<div class="card-subtitle bg-light text-center">
		<img class="mx-auto d-block rounded-circle" src="<?php echo $pic; ?>" width="100px" height="100px">
			<h3 class="text-info"><?php echo $name; ?></h3>
		</div>
		<div class="card-body">
			<div class="row">
			<div class="text-left col-lg-4">
				 <a href="edit_profile.php" class="btn btn-success">Change Info</a><br>
				 <a href="upload_new_image.php" class="btn btn-success">Change Profile Picture</a><br>
				 <a href="new_password.php" class="btn btn-success">Change Password</a><br>
				 <a href="view_mess_dues.php" class="btn btn-success">Mess Dues</a><br>
				 <a href="student_logout.php" class="btn btn-success">LogOut</a>
			</div>
			<div class="col-lg-8">
			<table class="table-sm table-striped">
				<tbody>
					<tr>
						<td id="h1">ID:</td>
						<td><?php echo $id; ?></td>
					</tr>
					<tr>
						<td id="h1">Father Name:</td>
						<td><?php echo $F_Name; ?></td>
					</tr>
					<tr>
						<td id="h1">Class:</td>
						<td><?php echo $class; ?></td>
					</tr>
					<tr>
						<td id="h1">Department:</td>
						<td><?php echo  $department; ?></td>
					</tr>
					<tr>
						<td id="h1">Session:</td>
						<td><?php echo  $session; ?></td>
					</tr>
					<tr>
						<td id="h1">Room No:</td>
						<td><?php echo  $room_no; ?></td>
					</tr>
					<tr>
						<td id="h1">Date of Birth:</td>
						<td><?php echo $dob; ?></td>
					</tr>
					<tr>
						<td id="h1">CNIC:</td>
						<td><?php echo $cnic; ?></td>
					</tr>
					<tr>
						<td id="h1">Blood Group:</td>
						<td><?php echo $b_group; ?></td>
					</tr>
					<tr>
						<td id="h1">Contact:</td>
						<td><?php echo $cell_no; ?></td>
					</tr>
					<tr>
						<td id="h1">Email:</td>
						<td><?php echo $email; ?></td>
					</tr>
					<tr>
						<td id="h1">Address:</td>
						<td><?php echo $address; ?></td>
					</tr>
				</tbody>
				</table>	
			 </div>
			</div>
		  </div>
		</div>
		<div class="card-footer bg-success"></div>
	</div>
	<div class="col-lg-2"></div>
  </div>
</div>	 
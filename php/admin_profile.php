<?php 
include'connection.php';
session_start();
$id = $_SESSION['id'];
$sql = "SELECT user_name,name,qualification,nic,dob,b_group,email,contact,
        address,pic_source FROM admin_login 
        WHERE user_name='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
        $row = mysqli_fetch_assoc($result);
        $user_name =  $row['user_name'];
        $name =  $row['name'];
        $qualification =  $row['qualification'];
        $nic =  $row['nic'];
        $dob =  $row['dob'];
        $b_group =  $row['b_group'];
        $email =  $row['email'];
        $contact =  $row['contact'];
        $address =  $row['address'];
        $pic_source =  $row['pic_source'];
        
}
$_SESSION['user']=$user_name;
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
	padding-top: 40px;
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
		<div class="card-title bg-success text-center text-warning"><h1>Admin Profile</h1></div>
		<div class="card-subtitle bg-light text-center">
		<img class="mx-auto d-block rounded-circle" src="<?php echo $pic_source; ?>" width="100px" height="100px">
			<h3 class="text-info"><?php echo $name; ?></h3>
		</div>
		<div class="card-body">
			<div class="row">
			<div class="text-left col-lg-4">
				 <a href="edit_admin_profile.php" class="btn btn-success">Change Info</a><br>
				 <a href="upload_new_image_admin.php" class="btn btn-success">Change Profile Picture</a><br>
				 <a href="new_password_admin.php" class="btn btn-success">Change Password</a><br><br><br>
				 <a href="dash_board_menu.php" class="btn btn-success">Previous</a><br>
			</div>
			<div class="col-lg-8">
			<table class="table-sm table-striped">
				<tbody>
					<tr>
						<td id="h1">Name:</td>
						<td><?php echo $name; ?></td>
					</tr>
					<tr>
						<td id="h1">Qualification:</td>
						<td><?php echo $qualification; ?></td>
					</tr>
					<tr>
						<td id="h1">CNIC:</td>
						<td><?php echo $nic; ?></td>
					</tr>
					<tr>
						<td id="h1">Date of Birth:</td>
						<td><?php echo  $dob; ?></td>
					</tr>
					<tr>
						<td id="h1">Blood Group:</td>
						<td><?php echo  $b_group; ?></td>
					</tr>
					<tr>
						<td id="h1">Email:</td>
						<td><?php echo $email; ?></td>
					</tr>
					<tr>
						<td id="h1">Contact No:</td>
						<td><?php echo $contact; ?></td>
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
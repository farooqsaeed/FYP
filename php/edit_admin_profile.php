<?php  
include'connection.php';
session_start();
$id = $_SESSION['id'];
$sql = "SELECT user_name,name,qualification,nic,dob,b_group,email,contact,
        address FROM admin_login 
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
.form-inline{
	padding-top: 20px;
}
.container-fluid{
	padding-top: 20px;
	background-color: #00FFFF;
}		
p
{
  margin:0;
  padding:0;
  font-weight: bold;
}
.card-subtitle{
	margin: 0px;
}
.card-title{
	margin: 0px;
}
</style>
<div class="container-fluid vh-100">
	<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8 col-sm-12">
	<div class="card">
	<div class="card-title bg-success text-center">
		<h1>Change Profile Information</h1>
	</div>	
	<div class="card-body bg-light">
	<form class="form" action="edit_admin_info.php" method="POST">
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">User Name*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $user_name; ?>" name="uname">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Name*</span>
		    	</div>
		    	 <input type="text" class="form-control" value="<?php echo  $name; ?>" name="name">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Qualification*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo  $qualification; ?>" name="Qualification">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">CNIC*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $nic; ?>" name="CNIC">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Date of Birth*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo   $dob; ?>" name="dob">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Blood Group*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php  echo $b_group; ?>" name="b_group">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Email*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $email; ?>" name="email">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Contact*</span>
		    	</div>
		    	 <input type="text" class="form-control" value="<?php echo $contact; ?>" name="Contact">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Address*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $address; ?>" name="address">&nbsp &nbsp
		    </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
    </div>
    </div>
<div class="col-lg-2"></div>
</div>
</div>	 
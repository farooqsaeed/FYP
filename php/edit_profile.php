<?php  
include'connection.php';
session_start();
$id = $_SESSION['stu_id'];
$sql = "SELECT stu_name,father_name,class,department,room_no,dob,cnic,
        b_group,email,cell_no,address FROM student_login 
        WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
        $row = mysqli_fetch_assoc($result);
        $name =  $row['stu_name'];
        $F_Name =  $row['father_name'];
        $class =  $row['class'];
        $department =  $row['department'];
        $room_no =  $row['room_no'];
        $dob =  $row['dob'];
        $cnic =  $row['cnic'];
        $b_group =  $row['b_group'];
        $email =  $row['email'];
        $cell_no =  $row['cell_no'];
        $address =  $row['address']; 
       	
}
 ?>
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
	<form class="form" action="edit_student_info.php" method="POST">
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Name*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $name; ?>" name="name">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Father Name*</span>
		    	</div>
		    	 <input type="text" class="form-control" value="<?php echo $F_Name; ?>" name="fname">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Class*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $class ?>" name="class">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Department*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $department; ?>" name="Department">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Room No*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $room_no; ?>" name="room_no">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Date Of Birth*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php  echo $dob; ?>" name="dob">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">CNIC*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $cnic; ?>" name="cnic">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Blood Group*</span>
		    	</div>
		    	 <input type="text" class="form-control" value="<?php echo $b_group; ?>" name="b_group">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Email*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $email; ?>" name="email">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Contact*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $cell_no; ?>" name="cell_no">&nbsp &nbsp
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Address*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $address;  ?>" name="address">
		    </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
    </div>
    </div>
<div class="col-lg-2"></div>
</div>
</div>	 
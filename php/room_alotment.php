<?php  
include'connection.php';
 $room_no =$_GET["r_no"];
 $seat_no =$_GET['s_no'];
 session_start();
 $_SESSION['r_no']=$room_no;
 $_SESSION['s_no']=$seat_no;
$sql = "SELECT status,ID,student_name,department,class FROM room_details WHERE room_no='$room_no' AND seat_no='$seat_no ' ";
$result = mysqli_query($conn, $sql);
if ($result) {
        $row = mysqli_fetch_assoc($result);
        $status =  $row['status'];
        $student_id =  $row['ID'];
        $student_name =  $row['student_name'];
        $department =  $row['department'];
        $class =  $row['class']; 
       	
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
		<h1>Rooms Allotment</h1>
	</div>	
	<div class="card-body bg-light">
	<form class="form" action="allot_room.php" method="POST">
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">STATUS*</span>
		    	</div>
		    	<select type="text" class="form-control" value="<?php echo $status; ?>" name="status"><option>VACANT</option><option>FULL</option></select>
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Student_ID*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $student_id; ?>" name="Student_ID">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Student Name*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $student_name; ?>" name="Student_Name">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Department*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $department;  ?>" name="Department">
		    </div>
		    <div class="form-group input-group col-sm-12">
		    	<div class="input-group-prepend">
		    		<span class="input-group-text">Class*</span>
		    	</div>
		    	<input type="text" class="form-control" value="<?php echo $class; ?>" name="class">
		    </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
    </div>
    </div>
<div class="col-lg-2"></div>
</div>
</div>	 
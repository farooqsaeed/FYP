<?php
include'connection.php';
session_start(); 
$id = $_SESSION['id'];
if ($_SESSION['id']=='') {
  header('location:wrong.php');
}
$sql = "SELECT user_name,pic_source FROM admin_login 
        WHERE user_name='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
        $row = mysqli_fetch_assoc($result);
        $user_name =  $row['user_name'];
        $pic_source =  $row['pic_source'];
        
}        
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
           <style type="text/css">
				.navbar-inverse
{
    background:#00796B;
    border-bottom-color: #004D40;
}
.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-brand,.navbar-inverse .navbar-nav>.dropdown>a .caret
{
    color: #fff;
}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus,
.navbar-nav>li>.dropdown-menu
{
    background:#4DB6AC;
}
.nav-pills>li>a,
{
    color: #303F9F;
}

.nav>li>a:hover, .nav>li>a:focus
{
    background-color: #EEEEEE;
}
img {
  border-radius: 50%;
}
p{
   font-weight: bold;
   font-size: 20px; 
}
#log{
    color: white;
    font-weight:bold;
    text-decoration: none;
}
#admin{
    color: green;
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
}
.container-fluid{
  height: 70px;
}
.row{
    padding-top: 20px;
}
</style>
<title></title>
</head>
<body>
<div class="container-fluid bg-warning">
    <div class="row">
        <div class="col-lg-4">
           <p class="text-white">New Hostel Managment System</p> 
        </div>
        <div class="col-lg-4 text-right">
        </div>
        <div class="col-lg-2 text-right text-white">
           <a id="admin" href="admin_profile.php">Admin Online</a> 
        </div>
        <div class="col-lg-2 text-left text-white">
        <a id="log" href="admin_logout.php"><i class="fa fa-sign-out"></i> Logout</a> 
        </div>
    </div>
</div>  
<!--<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="navbar">
                <a class="navbar-brand" href="dash_board_menu.php">
                New Hostel Managment System</a>
            </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="navbar">
                <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="admin_profile.php"><img class="mx-auto d-block rounded-circle" src="<?php echo $pic_source; ?>" width="20px" height="20px">&nbsp Admin</a>
                </li>    
                <li><a href="admin_logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
     -->

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
        <!--<li class="nav-header"></li>-->
        <li><a href="student_data.php"><i class="fa fa-fw fa-bar-chart-o"></i>&nbsp Students Details</a></li>
        <li><a href="admission_adminSide.php"><i class="fa fa-fw fa-table"></i>&nbsp Admissions</a></li>
        <li><a href="complain_display.php"><i class="fa fa-fw fa-edit"></i>&nbsp Complains</a></li>
        <li><a href="notice.php"><i class="fa fa-fw fa-desktop"></i>&nbsp Notice Board</a></li>
        <li><a href="rooms_details.php"><i class="fa fa-fw fa-wrench"></i>&nbsp Room Details</a></li>
        <li><a href="dues_display.php"><i class="fa fa-fw fa-arrows-v"></i>&nbsp Mess Dues</a></li>
    </ul>
</div><!-- /span-3 -->
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <!-- Right -->
    <table class="table table-striped">
	<tbody>
 	<tr>
 	<th>ROOM_NO</th>
 	<th>SEAT_NO</th>
 	<th>STATUS</th>
 	<th>STUDENT_ID</th>
 	<th>STUDENT_NAME</th>
 	<th>DEPARTMENT</th>
 	<th>CLASS</th>
 	<th>ADD</th>
 	<th>DELETE</th>
 	</tr>
 	</tbody>
<?php 
include'connection.php';

			$sql = "SELECT * FROM room_details";
			$result = mysqli_query($conn, $sql);
               
			//if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			   
			        while($row = mysqli_fetch_assoc($result)) {
                     $room_no =$row["room_no"];
                     $seat_no =$row["seat_no"];
                     $status =$row["status"];
                     $student_id =$row["ID"];
                     $student_name =$row["student_name"];
                     $department =$row["department"];
                     $class =$row["class"];
			        
			   

			 
			//else {echo "0 results";}
 ?>
   <tbody>
 	<tr>
 		<td><?php echo $room_no; ?></td>
 		<td><?php echo  $seat_no; ?></td>
 		<td><?php echo   $status; ?></td>
 		<td><?php echo   $student_id; ?></td>
 		<td><?php echo  $student_name; ?></td>
 		<td><?php echo  $department; ?></td>
 		<td><?php echo  $class; ?></td>
 		<td><a href="room_alotment.php?r_no=<?php echo $room_no; ?> &s_no=<?php echo $seat_no; ?>">Add</a></td>
 		<td><a href="delete_room.php?r_no=<?php echo $room_no; ?> &s_no=<?php echo $seat_no; ?>">Delete</a></td>
 	<?php } ?> 
 	</tr>
 	</tbody>
 </table>
</div>
</body>
</html>

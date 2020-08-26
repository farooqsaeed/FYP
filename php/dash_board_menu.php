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
<head><!-- Latest compiled and minified CSS -->
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
ul {
  list-style-type: none;
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
#side_bar{
	margin-top: 5px;
}
</style>
        <title></title>
</head>
<body>
<div class="container-fluid bg-warning sticky-top">
    <div class="row">
        <div class="col-lg-4">
            <p class="text-white">New Hostel Management System</p> 
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
<div id="side_bar" class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

    <ul class="nav nav-pills nav-stacked"  style="border-right:1px solid black">
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
</div>
</body>
</html>
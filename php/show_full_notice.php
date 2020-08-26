<?php 
include'connection.php';
$id = $_GET['id'];
$sql = "SELECT id,title,notice_date,actual_notice FROM notice WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id =$row["id"];
$title =$row["title"];
$notice_date =$row["notice_date"];
$actual_notice =$row["actual_notice"];

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.container-fluid{
    background-color: lightgrey;
  }
</style>
<div class="container-fluid vh-100">
	<div class="row">
		<div class="col-lg-2 col-sm-12">
			<a href="../news.php" type="button" class="btn btn-success">Go Back</a>
		</div>
		<div class="col-lg-8 col-sm-12">
			<div class="card">
				<div class="card-title text-center"><h1>Notice</h1></div>
			</div>
			<div class="card-body">
			<h5 class="text-right">Date:<?php echo  $notice_date ?></h5>
				<h3 style="text-decoration: underline;" class="text-center"><?php echo  $title ?></h3><br>
				<p><?php echo  $actual_notice ?></p>
			</div>
		</div>
		<div class="col-lg-2 col-sm-12"></div>
	</div>
</div>
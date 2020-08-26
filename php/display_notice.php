<!DOCTYPE html>
<html>
<head>	
<title></title>
</head>
<body>
<?php include'dash_board_menu.php'; ?>
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <!-- Right -->
    <table class="table table-striped">
	<tbody>
 	<tr>
 	<th>NOTICE_ID</th>
 	<th>NOTICE_TITLE</th>
 	<th>NOTICE_DATE</th>
 	<th>NOTICE_TOPIC</th>
 	<th>DELETE</th>
 	</tr>
 	</tbody>
<?php 
include'connection.php';

			$sql = "SELECT * FROM notice";
			$result = mysqli_query($conn, $sql);
               			   
			      while($row = mysqli_fetch_assoc($result)) {
                     $id =$row["id"];
                     $title =$row["title"];
                     $notice_date =$row["notice_date"];
                     $actual_notice =$row["actual_notice"];
			        
 ?>
   <tbody>
 	<tr>
 		<td><?php echo $id; ?></td>
 		<td><?php echo  $title; ?></td>
 		<td><?php echo  $notice_date; ?></td>
 		<td><?php echo   $actual_notice; ?></td>
 		<td><a href="delete_notice.php?delete=<?php echo $id; ?>">Delete</a></td>
 	<?php } ?> 
 	</tr>
 	</tbody>
 </table>
</div>
</body>
</html>

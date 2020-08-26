<?php 
      include'connection.php'; 
			$sql = "SELECT * FROM form_status";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				$row = mysqli_fetch_assoc($result);
			    $stat= $row['status'];
			}
			else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
      $sql = "SELECT * FROM no_of_seat";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $row = mysqli_fetch_assoc($result);
          $seat= $row['seats'];
      }
      else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
      $sql = "SELECT * FROM merit_list_status";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $row = mysqli_fetch_assoc($result);
          $First = $row['first_merit_list'];
          $Second = $row['second_merit_list'];
          $Third = $row['third_merit_list'];
      }
      else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }      
			 
?>
<!DOCTYPE html>
<html>
<head>
	

			<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
			<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			<!------ Include the above in your HEAD tag ---------->

			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
           <style type="text/css">
           	.btn{width: 25%; height: 100px; margin:5px;}
           	select{
           		   -webkit-appearance: none;
				   -moz-appearance: none;
				   appearance: none;       /* Remove default arrow */
				   width: 100px;
				   height: 30px;
				   text-align: center;
				   background-color: green;
				   color: white;
				   font-weight: bold;
				   border-radius: 5px;
				   text-align-last:center;
           	}
           	form{
           		margin-top: 10px;
           	}
           	h4{
           		color: red;
           	}
           </style>
	<title></title>
</head>
<body>
<?php include'dash_board_menu.php'; ?>
<div class="row">
  <!--<div class="col-lg-3"></div>-->
  <div class="col-lg-12">
    <a href="meritlist_form.php" class="btn btn-success btn-lg" role="button"><span><i class='far fa-file-alt' style='font-size:36px'></i></span> <br/>Genarate Meritlist</a>
    <a href="meritlist_view.php" class="btn btn-warning btn-lg" role="button"><span><i class='far fa-folder-open' style='font-size:36px'></i></span> <br/>View Meritlist</a>
    <a href="application_record.php" class="btn btn-primary btn-lg" role="button"><span><i class='far fa-file-alt' style='font-size:36px'></i></span> <br/>Applicents Info</a><br>
    <a href="admit_student.php" class="btn btn-primary btn-lg" role="button"><span><i class='far fa-file-alt' style='margin: 10px; font-size:36px'></i></span> <br/>Add Student</a>
     <a href="add_admission_date.php" class="btn btn-primary btn-lg" role="button"><span><i class='far fa-file-alt' style='margin: 10px; font-size:36px'></i></span> <br/>Add Admission Schedule</a>
     <a href="" class="btn btn-primary btn-lg" role="button"><span><h5>Admission Form Status</h5></span><h4><?php echo $stat; ?></h4>
     </a>
      <a href="delete_student_form.php" class="btn btn-primary btn-lg" role="button"><span><h3>Delete Students</h3></span>
     </a>
      <a href="" class="btn btn-primary btn-lg" role="button"><span><h5>Avaliable Seats</h5></span><h4><?php echo    $seat; ?></h4>
     </a>
     <a href="meritlst_status.php" class="btn btn-primary btn-lg" role="button"><span><h3>Publsh MeritList</h3></span>
     </a>
     <a href="" class="btn btn-primary btn-lg" role="button"><span>
      <h6>First MeritList:<?php echo $First; ?></h6>
      <h6>First MeritList:<?php echo $Second; ?></h6>
      <h6>First MeritList:<?php echo $Third; ?></h6></span>
     </a>
    <form action="get_status.php" method="POST">
  Enable/Disable Admission Form:<select name="state">
                 <option>Enable</option>
                 <option>Disable</option>
                 </select>
                 <input type="submit" name="submit" value="submit"> 
    </form>
    <form action="set_seat.php" method="POST">
  Enter No Of Avaliable Seats:<input type="number" name="seat">
                 <input type="submit" name="submit" value="submit"> 
    </form>                    
  </div>
</div>
</body>
</html>
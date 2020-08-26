<?php 
include'connection.php';
session_start();
$id = $_SESSION['stu_id'];
$sql = "SELECT ID,name,room_no,Attd,per_day,dues,total_dues,Received,Balance FROM mess_dues WHERE ID='$id'";
  $result = mysqli_query($conn, $sql);
  if ( $result) {
    $row = mysqli_fetch_assoc($result);
        $id =  $row['ID'];
        $name =  $row['name'];
        $room_no =  $row['room_no'];
        $Attd =  $row['Attd'];
        $per_day =  $row['per_day'];
        $dues =  $row['dues'];
        $total_dues =  $row['total_dues'];
        $Recevied =  $row['Received'];
        $Balance =  $row['Balance'];
  }
   else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .container-fluid{
    background-color:;
  }
 .row{
    padding-top: 150px;
  }
</style>
<div class="container-fluid vh-100">
  <div class="row">
    <div class="col-lg-3 col-sm-12">
      <a href="profile.php" class="btn btn-success">Profile</a>
    </div>
    <div class="col-lg-6 col-sm-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Room No</td>
            <td>Attendance</td>
            <td>Per Day</td>
            <td>Dues</td>
            <td>Total Dues</td>
            <td>Recevied</td>
            <td>Balance</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $room_no; ?></td>
            <td><?php echo $Attd; ?></td>
            <td><?php echo $per_day; ?></td>
            <td><?php echo $dues; ?></td>
            <td><?php echo $total_dues; ?></td>
            <td><?php echo $Recevied; ?></td>
            <td><?php echo $Balance; ?></td>
          </tr>
        </tbody>
      </table>  
    </div>
    <div class="col-lg-3 col-sm-12"></div>
  </div>
</div>   


              
<?php 
include'connection.php';
$stu_id =$_POST['stu_id'];
$stu_name =$_POST['stu_name'];
$depratment =$_POST['depratment'];
$room_no =$_POST['room_no'];
$subject =$_POST['subject'];
$sql = "INSERT INTO complian (student_id, student_name,department,room_no,complaints,c_date)
	VALUES ('$stu_id','$stu_name','$depratment','$room_no','$subject',NOW())";
    $qury =mysqli_query($conn, $sql);
    
    if ($qury) {
    	?>
    	<script type="text/javascript">
    		alert("complian submiited successfully");
    		window.location.href="../complain_login.php";
    	</script>
    	<?php
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


 ?>
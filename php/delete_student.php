<?php 
include'connection.php';
if (isset($_GET['Submit'])) {
$dlt = $_GET['id'];
	  $sqlinfo = "SELECT ID,stu_name,father_name,class,department,session,room_no,cell_no FROM student_login WHERE ID='$dlt'";
	  $sqlmess = "SELECT Balance FROM mess_dues WHERE ID='$dlt'";
     $info=mysqli_query($conn, $sqlinfo);
     $row1 = mysqli_fetch_assoc($info);
        $id =  $row1['ID'];
        $name =  $row1['stu_name'];
        $F_Name =  $row1['father_name'];
        $class =  $row1['class'];
        $department = $row1['department'];
        $session =  $row1['session'];
        $room_no =  $row1['room_no'];
        $cell_no =  $row1['cell_no']; 
     $mess=mysqli_query($conn, $sqlmess);
     $row2 = mysqli_fetch_assoc($mess);
     $dues=  $row2['Balance']; 
     $store = "INSERT INTO old_student_data (ID,session,student_name,father_name,room_no,department,class,dues,cell_no) VALUES ('$id',' $session','$name','$F_Name','$room_no','$department',' $class','$dues','$cell_no')";
     mysqli_query($conn, $store);

		$sql1 = "DELETE FROM student_login WHERE ID='$dlt'";
		$sql2 = "DELETE FROM admitted_student WHERE ID='$dlt'";
		$sql3 = "DELETE FROM mess_dues WHERE ID='$dlt'";

			if (mysqli_query($conn, $sql1) AND mysqli_query($conn, $sql2) AND mysqli_query($conn, $sql3)) {
				$sql = "UPDATE room_details SET status='VACANT',ID='',student_name='',department='',class='' WHERE ID='$dlt'";
			    if (mysqli_query($conn, $sql)) {
				   ?>
				   <script type="text/javascript">
				   	alert("Student Deledted Successfuly");
				   	window.location.href="admission_adminSide.php";
				   </script>
				   <?php
			    }  
			} 
			else {
			    echo "Error deleting record: " . mysqli_error($conn);
			}	
}
 ?>
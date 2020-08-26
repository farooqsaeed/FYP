<?php
include'connection.php';
     $roll_no = $_POST['roll_no'];
     $class = $_POST['class'];
     $semister = $_POST['semister'];
	 $department = $_POST['department'];
	 $student_name = $_POST['student_name'];
	 $student_cell = $_POST['student_cell'];
	 $father_name = $_POST['father_name'];
	 $father_cell = $_POST['father_cell'];
	 $student_nic = $_POST['student_nic'];
	 $domicile = $_POST['domicile'];
	 $qouta = $_POST['qouta'];
	 $present_address = $_POST['present_address'];
	 $prmanent_address = $_POST['prmanent_address'];
	 $examination1 = $_POST['examination'];
	 $year1 = $_POST['year1'];
	 $total1 = $_POST['total1'];
	 $obt1 = $_POST['obt1'];
	 $grade1 = $_POST['grade1'];
	 $sbj1 = $_POST['sbj1'];
	 $institute1 = $_POST['institute1'];
	 $examination2 = $_POST['examination2'];
	 $year2 = $_POST['year2'];
	 $total2 = $_POST['total2'];
	 $obt2 = $_POST['obt2'];
	 $grade2 = $_POST['grade2'];
	 $subj2 = $_POST['subj2'];
	 $institute2 = $_POST['institute2'];
	 $examination3 = $_POST['examination3'];
	 $year3 = $_POST['year3'];
	 $total3 = $_POST['total3'];
	 $obt3 = $_POST['obt3'];
	 $grade3 = $_POST['grade3'];
	 $sbj3 = $_POST['sbj3'];
	 $institute3 = $_POST['institute3'];
$sql = "INSERT INTO admission_data (roll_no, class, semester,department,student_name,student_cell,father_name,father_cell,student_nic,domicile,qouta,present_address,permanent_address,
examination1,ssc_year,ssc_total_mrks,ssc_obt_mrks,ssc_grade,ssc_subject,ssc_institue,examination2,hssc_year,hssc_total_mrks,hssc_obt_mrks,hssc_grade,hssc_subject,hssc_institue,examination3,bachlor_year,bachlor_total_mrks,bachlor_obt_mrks,bachlor_grade,
bachlor_subject,bachlor_institue)
VALUES ('$roll_no', '$class', '$semister','$department','$student_name','$student_cell','$father_name','$father_cell','$student_nic','$domicile','$qouta','$present_address','$prmanent_address','$examination1','$year1',' $total1','$obt1','$grade1','$sbj1','$institute1','$examination2','$year2',' $total2','$obt2','$grade2','$subj2','$institute2','$examination3','$year3','$total3','$obt3','$grade3','$sbj3','$institute3')";
if (mysqli_query($conn, $sql)) {
	//echo "Form submitted successfuly"."<a style='text-decoration: none;' href='../admission_form.php'>OK</a>";
	?>
	<script>
		alert('admission form submitted successfuly!');
		window.location.href="../admission_form.php";
	</script><?php
}
else {
    echo "Error: ".$sql. "<br>" . mysqli_error($conn);
} 
?>
<!--<a style="text-decoration: none;" href="../admission_form.php">Back to Form</a>-->
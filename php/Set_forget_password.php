<?php  
include'connection.php';
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$new = $_POST['new_password'];
	$conform = $_POST['conform_password'];
    if ($new==$conform) {
    	$sql = "UPDATE student_login SET password='$new' WHERE ID ='$id'";
    	if (mysqli_query($conn,$sql)) {
    		?>
    		<script type="text/javascript">
    			alert("password changed successfuly");
    			window.location.href="../index.php";
    		</script>
    		<?php
    	}
    }
}

?>
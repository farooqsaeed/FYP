<?php 
include'connection.php';
	session_start(); 
	$stu_id = $_POST['ID'];
	$password = $_POST['password'];
	$sql1 = "SELECT ID FROM food_monitor";
	$result = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($result);
	$id = $row['ID'];
	$admin_sql = "SELECT user_name FROM admin_login";
	$admin_result = mysqli_query($conn, $admin_sql);
	$row = mysqli_fetch_assoc($admin_result);
	$user_name = $row['user_name'];
	if ($stu_id==$id) {
	$sql = "SELECT * FROM food_monitor WHERE ID='$stu_id' AND password ='$password' ";
	$result = mysqli_query($conn, $sql);
	$total = mysqli_num_rows($result);
	if ($total==1) {
		$_SESSION['stu_id']=$stu_id;
		header('location:mess_dues_display.php');
	}
	else {
		?>
		<script type="text/javascript">
		    alert("You are not food_monitor");
			window.location.href="../index.php";
		</script>
		<?php
	}	
	}
	elseif ($stu_id==$user_name) {
		    $sql = "SELECT  *FROM admin_login WHERE user_name='$stu_id' AND password ='$password' ";
			$result = mysqli_query($conn, $sql);
			$total = mysqli_num_rows($result);
			if ($total==1) {
				$_SESSION['id']=$stu_id;
				header('location:dash_board_menu.php');
			}
			else {
				?>
				<script type="text/javascript">
				    alert("login failed");
					window.location.href="../index.php";
				</script>
				<?php
			}
	}
	else {
	$sql = "SELECT * FROM student_login WHERE ID='$stu_id' AND password ='$password' ";
	$result = mysqli_query($conn, $sql);
	$total = mysqli_num_rows($result);
	if ($total==1) {
		$_SESSION['stu_id']=$stu_id;
		header('location:profile.php');
	}
	else {
		?>
		<script type="text/javascript">
		    alert("login failed");
			window.location.href="../index.php";
		</script>
		<?php
	}
	}	

?>
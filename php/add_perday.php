<?php 
include'connection.php';
$fee =$_POST['fee'];
$sql = "UPDATE  mess_dues,mess_member SET mess_dues.per_day='$fee',mess_member.per_day='$fee'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    ?>
    <script type="text/javascript">
    	alert("New record created successfully");
    	window.location.href="dues_display.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 ?>
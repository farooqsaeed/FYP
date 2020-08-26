<?php 
include'connection.php';
 //$id=$_GET['id'];
//session_start();
//$id= $_SESSION["id"];
if (isset($_POST['submit'])) {
	$amount =$_POST['amount'];
    $id =$_POST['id'];
    //$r_amount = $_POST['r_amount'];
	$sql = "SELECT total_dues,Received FROM mess_dues WHERE ID ='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $balance =$row['total_dues'];
    $received = $row['Received'];
    $amount2 = $received+$amount;
    $received2 = $balance-$amount2;
    $sql = "UPDATE mess_dues SET Received='$amount2',Balance='$received2' WHERE ID='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {

    	header('location:mess_dues_display.php');
    }
     else {
    echo "Error updating record: " . mysqli_error($conn);
    }
}
session_unset();

 ?>
<?php 
include'connection.php';
if (isset($_POST['submit'])) {
	$amount =$_POST['amount'];
    $id =$_POST['id'];
    //$r_amount = $_POST['r_amount'];
	$sql = "SELECT total_dues,Received FROM mess_member WHERE nic_no ='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $balance =$row['total_dues'];
    $received = $row['Received'];
    $amount2 = $received+$amount;
    $received2 = $balance-$amount2;
    $sql = "UPDATE mess_member SET Received='$amount2',Balance='$received2' WHERE nic_no='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    	header('location:search_faculit_by_name.php');
    }
     else {
    echo "Error updating record: " . mysqli_error($conn);
    }
}
session_unset();

 ?>
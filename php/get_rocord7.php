<?php 
include'connection.php';
if (isset($_POST['Submit'])) {
    $no_attd =$_POST['no_attd'];
    $id =$_POST['id'];
    $sql = "SELECT per_day,Balance  FROM mess_member WHERE nic_no ='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $per_day =$row['per_day'];
    $balance =$row['Balance'];
    $dues = $no_attd*$per_day;
    $t_dues = $dues+ $balance;
    $sql = "UPDATE mess_member SET Attd='$no_attd',dues='$dues', total_dues='$t_dues',Received =0,Balance=0 WHERE nic_no='$id'";
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
<?php 
include'connection.php';
session_start();
if (isset($_POST['Submit'])) {
	 $cateogry=$_POST['category'];
	 $searchBy=$_POST['searchBy'];
	 $search=$_POST['search'];
	if ($cateogry=='student') {
	      if ($searchBy=='Search_By_Id'){
              $_SESSION['id']=$search;
	     header('location:search_by_id1.php');
          }
          if ($searchBy=='Search_By_Name') {
          		$_SESSION['name']=$search;
	 header('location:search_by_name1.php');
          	}
          if ($searchBy=='Search_By_Room_No') {
          			$_SESSION['room_no']=$search;
	 header('location:search_by_room_no1.php');
	}
  }
  else{
  	 if ($searchBy=='Search_By_Id') {
  	 	$_SESSION['f_id']=$search;
	 header('location:search_faculit_by_id1.php');
  	 }
  	 if ($searchBy=='Search_By_Name') {
  	 	$_SESSION['f_name']=$search;
	 header('location:search_faculit_by_name1.php');
  	 }
  }		
}
 ?>
 
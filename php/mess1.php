<?php
include'connection.php';
$sql = "SELECT nic_no,name,department,Attd,per_day,dues,total_dues,Balance FROM mess_member";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				
			
                  
			        while($row = mysqli_fetch_assoc($result)) {
                     $id =$row["nic_no"];
                     $name =$row["name"];
                     $room_no =$row["department"];
                     $Attd =$row["Attd"];
                     $per_day =$row["per_day"];
                     $duse =$row["dues"];
                     $total_dues =$row["total_dues"];
                     $Balance =$row["Balance"];
      $sql = "INSERT INTO view_dues (ID,name,room_no,Attd,per_day,dues,balance,total_dues)
      VALUES ('$id','$name','$room_no','$Attd','$per_day','$duse',' $Balance', '$total_dues')";
      $query=mysqli_query($conn, $sql);
    }
} 
if ($query) {
$sql = "SELECT ID,name,room_no,Attd,per_day,dues,total_dues,Balance FROM mess_dues";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				
			
                  
			        while($row = mysqli_fetch_assoc($result)) {
                     $id =$row["ID"];
                     $name =$row["name"];
                     $room_no =$row["room_no"];
                     $Attd =$row["Attd"];
                     $per_day =$row["per_day"];
                     $duse =$row["dues"];
                     $total_dues =$row["total_dues"];
                     $Balance =$row["Balance"];
      $sql = "INSERT INTO view_dues (ID,name,room_no,Attd,per_day,dues,balance,total_dues)
      VALUES ('$id','$name','$room_no','$Attd','$per_day','$duse',' $Balance', '$total_dues')";
      $query=mysqli_query($conn, $sql);
    }
}    	
    	
 if ($query) {
    		//header('location:')
    	}   	

}
    else {
    	echo "not ok";
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 ?>
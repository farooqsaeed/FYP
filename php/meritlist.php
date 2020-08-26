<?php 
include'dash_board_menu.php';
include'connection.php';
$sql1="SELECT * FROM merit_list";
$result1 = mysqli_query($conn,$sql1);
$rows1 = mysqli_num_rows($result1);
$sql2="SELECT * FROM second_merit_list";
$result2 = mysqli_query($conn,$sql2);
$rows2 = mysqli_num_rows($result2);
$sql3="SELECT * FROM third_merit_list";
$result3 = mysqli_query($conn,$sql3);
$rows3 = mysqli_num_rows($result3);
 $total =$rows1+$rows2+$rows3;
$seat="SELECT seats FROM no_of_seat";
$row = mysqli_query($conn,$seat);
$no_seat=mysqli_fetch_assoc($row);
 $no=$no_seat['seats'];
if ( $total>= $no) {
     ?>
     <script type="text/javascript">
       alert("You exceds from limit");
       window.location.href="meritlist_form.php";
     </script>
     <?php
}
else {
       $value1 = $_POST['department'];
       $value2 = $_POST['no_of_stu'];
       $value3 = $_POST['class'];
       $value4 = $_POST['qouta'];
       $value5 = $_POST['no'];
if ($value5=='First') {
   if ($value3=='BS(1st)') {
         $sql = "SELECT roll_no, student_name, father_name, department ,class ,semester,hssc_obt_mrks,qouta FROM admission_data WHERE qouta='$value4' 
      AND  department='$value1' ORDER BY hssc_obt_mrks DESC LIMIT $value2";
      $result = mysqli_query($conn, $sql);
if ($result) {
          while($row = mysqli_fetch_assoc($result)) {
               $name1 = $row['roll_no'];
               $name2 = $row['student_name'];
               $name3 = $row['father_name'];
               $name4 = $row['department'];
               $name5 = $row['class'];
               $name6 = $row['semester'];
               $name7 = $row['hssc_obt_mrks'];
               $name8 = $row['qouta'];
               //echo $name1.$name2.$name3.$name4.$name5.$name6.$name7."<br>";
            $sql = "INSERT INTO merit_list (roll_no, student_name, father_name,department,class,semester,marks,qouta)
            VALUES ('$name1', '$name2', '$name3' ,'$name4' , '$name5' , '$name6' , '$name7' ,'$name8')";
            $qury1 =mysqli_query($conn, $sql);
            }
         }
     if ($qury1) {
            echo "New record added successfully"."<a href='meritlist_form.php'>Add more record</a";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
     }

 else {
    $sql = "SELECT roll_no, student_name, father_name, department ,class ,semester,bachlor_obt_mrks,qouta FROM admission_data WHERE qouta='$value4' 
  AND  department='$value1' ORDER BY bachlor_obt_mrks DESC LIMIT $value2";
$result = mysqli_query($conn, $sql);
if ($result) {
  while($row = mysqli_fetch_assoc($result)) {
       $name1 = $row['roll_no'];
       $name2 = $row['student_name'];
       $name3 = $row['father_name'];
       $name4 = $row['department'];
       $name5 = $row['class'];
       $name6 = $row['semester'];
       $name7 = $row['bachlor_obt_mrks'];
       $name8 = $row['qouta'];
       //echo $name1.$name2.$name3.$name4.$name5.$name6.$name7."<br>";
    $sql = "INSERT INTO merit_list (roll_no, student_name, father_name,department,class,semester,marks,qouta)
    VALUES ('$name1', '$name2', '$name3' ,'$name4' , '$name5' , '$name6' , '$name7' ,'$name8')";
   $query= mysqli_query($conn, $sql);
    }
   }
   if ($query) {
            echo "New record added successfully"."<a href='meritlist_form.php'>Add more record</a";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }     
    
 
 
 }
         
       }
if ($value5=='Second') {
  if ($value3=='BS(1st)') {
         $sql = "SELECT roll_no, student_name, father_name, department ,class ,semester,hssc_obt_mrks,qouta FROM admission_data WHERE qouta='$value4' 
      AND  department='$value1' ORDER BY hssc_obt_mrks DESC LIMIT $value2";
      $result = mysqli_query($conn, $sql);
if ($result) {
          while($row = mysqli_fetch_assoc($result)) {
               $name1 = $row['roll_no'];
               $name2 = $row['student_name'];
               $name3 = $row['father_name'];
               $name4 = $row['department'];
               $name5 = $row['class'];
               $name6 = $row['semester'];
               $name7 = $row['hssc_obt_mrks'];
               $name8 = $row['qouta'];
               //echo $name1.$name2.$name3.$name4.$name5.$name6.$name7."<br>";
            $sql = "INSERT INTO second_merit_list (roll_no, student_name, father_name,department,class,semester,marks,qouta)
            VALUES ('$name1', '$name2', '$name3' ,'$name4' , '$name5' , '$name6' , '$name7' ,'$name8')";
            $qury1 =mysqli_query($conn, $sql);
            }
         }
     if ($qury1) {
            echo "New record added successfully"."<a href='meritlist_form.php'>Add more record</a";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
     }

 else {
    $sql = "SELECT roll_no, student_name, father_name, department ,class ,semester,bachlor_obt_mrks,qouta FROM admission_data WHERE qouta='$value4' 
  AND  department='$value1' ORDER BY bachlor_obt_mrks DESC LIMIT $value2";
$result = mysqli_query($conn, $sql);
if ($result) {
  while($row = mysqli_fetch_assoc($result)) {
       $name1 = $row['roll_no'];
       $name2 = $row['student_name'];
       $name3 = $row['father_name'];
       $name4 = $row['department'];
       $name5 = $row['class'];
       $name6 = $row['semester'];
       $name7 = $row['bachlor_obt_mrks'];
       $name8 = $row['qouta'];
       //echo $name1.$name2.$name3.$name4.$name5.$name6.$name7."<br>";
    $sql = "INSERT INTO second_merit_list (roll_no, student_name, father_name,department,class,semester,marks,qouta)
    VALUES ('$name1', '$name2', '$name3' ,'$name4' , '$name5' , '$name6' , '$name7' ,'$name8')";
   $query= mysqli_query($conn, $sql);
    }
   }
   if ($query) {
            echo "New record added successfully"."<a href='meritlist_form.php'>Add more record</a";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }     
    
 
 
 }
         
}
if ($value5=='Third') {
  if ($value3=='BS(1st)') {
         $sql = "SELECT roll_no, student_name, father_name, department ,class ,semester,hssc_obt_mrks,qouta FROM admission_data WHERE qouta='$value4' 
      AND  department='$value1' ORDER BY hssc_obt_mrks DESC LIMIT $value2";
      $result = mysqli_query($conn, $sql);
if ($result) {
          while($row = mysqli_fetch_assoc($result)) {
               $name1 = $row['roll_no'];
               $name2 = $row['student_name'];
               $name3 = $row['father_name'];
               $name4 = $row['department'];
               $name5 = $row['class'];
               $name6 = $row['semester'];
               $name7 = $row['hssc_obt_mrks'];
               $name8 = $row['qouta'];
               //echo $name1.$name2.$name3.$name4.$name5.$name6.$name7."<br>";
            $sql = "INSERT INTO third_merit_list (roll_no, student_name, father_name,department,class,semester,marks,qouta)
            VALUES ('$name1', '$name2', '$name3' ,'$name4' , '$name5' , '$name6' , '$name7' ,'$name8')";
            $qury1 =mysqli_query($conn, $sql);
            }
         }
     if ($qury1) {
            echo "New record added successfully"."<a href='meritlist_form.php'>Add more record</a";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
     }

 else {
    $sql = "SELECT roll_no, student_name, father_name, department ,class ,semester,bachlor_obt_mrks,qouta FROM admission_data WHERE qouta='$value4' 
  AND  department='$value1' ORDER BY bachlor_obt_mrks DESC LIMIT $value2";
$result = mysqli_query($conn, $sql);
if ($result) {
  while($row = mysqli_fetch_assoc($result)) {
       $name1 = $row['roll_no'];
       $name2 = $row['student_name'];
       $name3 = $row['father_name'];
       $name4 = $row['department'];
       $name5 = $row['class'];
       $name6 = $row['semester'];
       $name7 = $row['bachlor_obt_mrks'];
       $name8 = $row['qouta'];
       //echo $name1.$name2.$name3.$name4.$name5.$name6.$name7."<br>";
    $sql = "INSERT INTO third_merit_list (roll_no, student_name, father_name,department,class,semester,marks,qouta)
    VALUES ('$name1', '$name2', '$name3' ,'$name4' , '$name5' , '$name6' , '$name7' ,'$name8')";
   $query= mysqli_query($conn, $sql);
    }
   }
   if ($query) {
            echo "New record added successfully"."<a href='meritlist_form.php'>Add more record</a";
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }     
    
 
 
 }
         
  
}
               
    }              
 ?>
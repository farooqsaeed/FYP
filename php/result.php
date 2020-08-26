<?php

$con = mysqli_connect("localhost","root","","hostel");

?>

<html>
    <head>
        <title>school id</title>
        <script language="javascript">
        function printpage()
            {
                window.print();
            }
        </script>
    </head>
   <style>
   #card{
	   float:left;
	   width:360px;
	   height:230px;
	   margin:5px;
	   border:1px solid black;
	   background-image: url("image/id.jpg");
	   background-repeat: no-repeat;
	   background-size: 360px 230px;
	   -webkit-print-color-adjust: exact;
   }
   #c_left{
	   margin-top:85px;
	   margin-left:10px;
	   float:left;
	   width:80px;
	   height:120px;
   }
   #c_box{
	  width:80px; 
	  height:20px;
	  padding:0px;

   }
  #c_right{
	   
	   margin-left:115px;
	   width:300px;
	   height:250px;
	   margin-top: 80px;

   }
   td{
	   font-size:10px;
   }
   #dates{
   	font-size: 12px;
   	margin-top: 10px;
   }
   </style>
   <?php

       $i=0;
		$get_costumers="select*from student_login order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			
			$img = $row_costumers['pic_source'];
			$st_name = $row_costumers['stu_name'];
			$f_name = $row_costumers['father_name'];
			$class = $row_costumers['class'];
			$session = $row_costumers['session'];
			$department = $row_costumers['department'];
			$b_group = $row_costumers['b_group'];
			$room_no = $row_costumers['room_no'];
			$i++;
			
			
			
			
		
		?>
   
   
   
     <body>
	 <div id="card">
	  <div id="c_left">
	  <img src="<?php echo $img; ?>"width="80px"height="90px"style="border:1px solid black;"><br>
	  <div id="c_box">
	  <img src="image/sign.jpg" width="90px"height="30px">
	  </div>
	  </div>
	  <div id="c_right">
	  <table style="margin-top:20px;">
	  <tr>
	  <td><b style="color: blue;">Name</b></td><td>: <?php echo $st_name; ?></td>
	  </tr>
	  <tr>
	  <td><b style="color: blue;">Father's Name</b></td><td>: <?php echo $f_name; ?></td>
	  </tr>
	  <tr>
	  <td><b style="color: blue;">Class</b></td><td>: <?php echo $class; ?></td>
	  </tr>
	  <tr>
	  <td><b style="color: blue;">Department</b></td><td>: <?php echo $department; ?></td>
	  </tr>
	  <tr>
	  <td><b style="color: blue;">Session</b></td><td>: <?php echo $session; ?></td>
	  </tr>
	  <tr>
	  <td><b style="color: blue;">Room No</b></td><td>: <?php echo $room_no; ?></td>
	  </tr>
	  <tr>
	  <td><b style="color: blue;">Blood Group</b></td><td>: <?php echo $b_group; ?></td>
	  </tr>
	  <tr>
	  <td><b style="color: blue;">Guardian Cell</b></td><td>: <?php echo "03405849528"; ?></td>
	  </tr>
	  
	  
	  
	  </table>
	  <div id="dates">
	  <tr>
	  <td><b style="color: blue;">Issus Date</b></td><td>: <?php echo "15/11/2020"; ?></td>
	  <td><b style="color: blue;">Valid Upto</b></td><td>: <?php echo "15/11/2020"; ?></td>
	  </tr>
	  </div>
	  </div>
	 </div>
	 <?php } ?>
	 	
	 </body>
   </head>
</html   
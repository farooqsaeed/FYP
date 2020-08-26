<!DOCTYPE html>
<html>
<head>
	<title>Admission Form</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" type="text/css" href="css/style_new1.css">
<link rel="stylesheet" type="text/css" href="css/admission_form.css">
<script type="text/javascript" src="js/formValidation.js"></script>
</head>
<body>
<!--navbar start -->
<nav class="navbar navbar-expand-md navbar-dark bg-light sticky-top">
  <!-- Brand -->
  <a class="navbar-brand bg-white" href="index.php" class="animated infinite slideInDown delay-2s"> 
    <span style='color:#86bc42'>NeW</span>
    <span style='color:#222222'>Hostel</span>
    <span style='color:#D9504E'> GpGc No1</span> </a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item">
        <a id="a1" class="nav-link" href="index.php"><i class="fa fa-home"></i>Home</a>
      </li>
      <li class="nav-item">
        <a id="a1" class="nav-link" href="admission.php">Admission</a>
      </li>
      <li class="nav-item">
        <a id="a1" class="nav-link" href="complain_login.php">Complain cell</a>
      </li>
      <li class="nav-item">
        <a id="a1" class="nav-link" href="news.php">Notice Board</a>
      </li>
      <li class="nav-item">
        <a id="a1" class="nav-link" href="mess.php">Mess</a>
      </li>
      <li class="nav-item">
        <a id="a1" class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a id="a1" class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<!--navbar end-->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="note">
			<h1>Admission Form</h1>
		    </div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
          <div class="alert alert-info" role="alert" mt-3>Personal Info </div>    
           <!--personal info start here -->
			<form onsubmit="return validateForm()" action="php/form_data.php" method="POST" enctype="multipart/form-data">
				           <div class="form-group input-group col-sm-12">
                         <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                    </div>
                        <input id="roll" name="roll_no" class="form-control" placeholder="Roll No" type="text">
                        &nbsp &nbsp  <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-book-open'></i></span>
                    </div>
                       <select id="class" name="class" class="form-control">
                       <option>BS(1st)</option>
                       <option>MA</option>
                       <option>MSc</option></select>
                   </div>
                    <div class="form-group input-group col-sm-12">
                      <div class="input-group-prepend">
                    <span class="input-group-text">@</i> </span>
                    </div>
                        <input id="semister" name="semister" class="form-control" placeholder="Semister" type="text">
                          &nbsp &nbsp  <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-book-open'></i></span>
                    </div>
                        <select id="department" name="department" class="form-control">
                                    <option>Botany</option>
                                    <option>Computer Science</option>
                                    <option>Chemistry</option>
                                    <option>Economics</option>
                                    <option>English</option>
                                    <option>Geography&GIS</option>
                                    <option>HPE</option>
                                    <option>History</option>
                                    <option>Islamic Studies</option>
                                    <option>Mathematics</option>
                                    <option>Physics</option>
                                    <option>Pak Study</option>
                                    <option>Political Science</option>
                                    <option>Urdu</option>  
                                    </select>
                   </div> 
                   <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text"> <i class="fa fa-user-circle"></i></span>
		                </div>
                        <input id="stu_name" name="student_name" class="form-control" placeholder="Student Name" type="text">
                        &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text">
                      <i class="fa fa-phone-square"></i>
                    </span>
		                </div>
                        <input id="stu_cell" name="student_cell" class="form-control" placeholder="Student Phone No" type="tel">
                   </div>
                    <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text"> <i class="fa fa-user-circle"></i> </span>
		                </div>
                        <input id="f_name" name="father_name" class="form-control" placeholder="Father Name" type="text">
                        &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text"> <i class="fa fa-phone-square"></i> </span>
		                </div>
                        <input id="f_cell" name="father_cell" class="form-control" placeholder="Father Phone No" type="tel">
                   </div>
                     <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
		                </div>
                        <input id="stu_nic" name="student_nic" class="form-control" placeholder="Student CNIC No" type="text">
                        &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text"><i class='fas fa-city'></i></span>
		                </div>
                        <input id="domicile" name="domicile" class="form-control" placeholder="Domicile" type="text">
                       &nbsp <div class="input-group-prepend">
                    <span class="input-group-text">@</i></span>
                    </div>
                    <select name="qouta"><option>Local</option><option>Non-Local</option></select>    
                   </div>
                    <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text"> <i class='fas fa-address-card'></i> </span>
		                </div>
                        <input id="p_add" name="present_address" class="form-control" placeholder="Present Address" type="text">
                   </div>
                    <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text"> <i class='fas fa-address-card'></i> </span>
		                </div>
                        <input id="pm_add" name="prmanent_address" class="form-control" placeholder="Prmanent Address" type="text">
                   </div>        <!--personal info end here -->
                   <div class="alert alert-info" role="alert" ml="auto">Academic Information</div>
                  
                   <div class="form-group input-group col-sm-12">
    	                Examination Passed:<select id="opt1" name="examination">
    	                	              <option>SSC</option>
    	                	              <option>HSSC</option>
    	                	              <option>BA/BSc</option> 
    	                                  </select>
                          &nbsp &nbsp  <div class="input-group-prepend">
		                 <span class="input-group-text">@</span>
		                </div>
                        <input id="year1" name="year1" class="form-control" placeholder="Year" type="number" required>
                   </div>
                    <div class="form-group input-group col-sm-12">
    	                
                        <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="total1" name="total1" class="form-control" placeholder="Total Marks" type="number" required>
                         &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="obt1" name="obt1" class="form-control" placeholder="Obtaind Marks" type="number" required> 
                   </div>
                   <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="grade1" name="grade1" class="form-control" placeholder="Division/Grade" type="text" required>
                          &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="sbj1" name="sbj1" class="form-control" placeholder="Subject" type="text" required>
                   </div>
                   <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="institute1" name="institute1" class="form-control" placeholder="Institute From where Examination Passed" type="text" required>
                   </div>
                   <div class="form-group input-group col-sm-12">
                      Examination Passed:
                      <select id="opt2" name="examination2">
    	                <option>SSC</option>
    	                <option>HSSC</option>
    	                <option>BA/BSc</option> 
    	                  </select>
                          &nbsp &nbsp  <div class="input-group-prepend">
		                 <span class="input-group-text">@</span>
		                </div>
                        <input id="year2" name="year2" class="form-control" placeholder="Year" type="number" required>
                   </div>
                    <div class="form-group input-group col-sm-12">
    	                
                        <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="total2" name="total2" class="form-control" placeholder="Total Marks" type="number" required>
                         &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="obt2" name="obt2" class="form-control" placeholder="Obtaind Marks" type="number" required>
                   </div>
                   <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="grade2" name="grade2" class="form-control" placeholder="Division/Grade" type="text" required>
                        &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="subj2" name="subj2" class="form-control" placeholder="Subject" type="text" required>
                   </div>
                   <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="institute2" name="institute2" class="form-control" placeholder="Institute From where Examination Passed" type="text" required>
                   </div>
                   <div class="form-group input-group col-sm-12">
    	                Examination Passed:<select id="opt3" name="examination3">
    	                	              <option>SSC</option>
    	                	              <option>HSSC</option>
    	                	              <option>BA/BSc</option> 
    	                                  </select>
                          &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text">@</span>
		                </div>
                        <input id="year3" name="year3" class="form-control" placeholder="Year" type="number">
                   </div>
                    <div class="form-group input-group col-sm-12">
    	                
                        <div class="input-group-prepend">
		                <span class="input-group-text">@</span> 
		                </div>
                        <input id="total3" name="total3" class="form-control" placeholder="Total Marks" type="number">
                         &nbsp &nbsp  <div class="input-group-prepend">
		                <span class="input-group-text">@</span> 
		                </div>
                        <input id="obt3" name="obt3" class="form-control" placeholder="Obtaind Marks" type="number">
                   </div>
                   <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                 <span class="input-group-text">@</span> 
		                </div>
                        <input id="grade3" name="grade3" class="form-control" placeholder="Division/Grade" type="text">
                        &nbsp &nbsp  <div class="input-group-prepend">
		                 <span class="input-group-text">@</span> 
		                </div>
                        <input id="sbj3" name="sbj3" class="form-control" placeholder="Subject" type="text">
                   </div>
                   <div class="form-group input-group col-sm-12">
    	                <div class="input-group-prepend">
		                 <span class="input-group-text">@</span> 
		                </div>
                        <input id="institute3" name="institute3" class="form-control" placeholder="Institute From where Examination Passed" type="text">
                   </div>
                   &nbsp &nbsp<input type="submit" name="submit" value="Submit Form">
			          </form>
	</div>
	</div>
	 <div class="row text-center bg-4 bg-dark pt-2">  <!--footer start here -->
    	     <div class="col-lg-12 col-md-12 col-sm-12 text-center">
    		<p style="padding-top: 20px; color: white;">New Hostel GpGc No:1 Abbottabad</p>
    	</div> <!--footer end here -->
    </div>
</div>
</body>
</html>
<script type="text/javascript">
  
  function validateForm() {
  var name1=document.getElementById("stu_name").value;
  var name2=document.getElementById("stu_cell").value;
  var name3=document.getElementById("f_name").value;
  var name4=document.getElementById("f_cell").value;
  var name5=document.getElementById("g_name").value;
  var name6=document.getElementById("g_cell").value;
  var name7=document.getElementById("stu_nic").value;
  var name8=document.getElementById("domicile").value;
  var name9=document.getElementById("p_add").value;
  var name10=document.getElementById("pm_add").value;
  var name11=document.getElementById("department").value;
  var name12=document.getElementById("semister").value;
  var name13=document.getElementById("roll").value;
  if (name1 == "" || name2 == "" || name3 == "" || name4 == "" || name5 == "" || name6 == "" ||
    name7 == "" || name8 == "" || name9 == "" || name10 == "" || name11 == "" || name12 == "" ||
    name13 == "" ) {
      alert("must fill all the fields");
      return false;
  }
 
  var year1=document.getElementById("year1").value;
  var year2=document.getElementById("year2").value;
   if (year1==year2 || year2==year1) {
    alert("Correct session years..");
    return false;
  }
   var opt1=document.getElementById("opt1").value;
   var opt2=document.getElementById("opt2").value;
   if (opt1==opt2 || opt2==opt1) {
    alert("All degree Title are same..");
     return false;
     }
} 
</script>
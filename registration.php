<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_new1.css">
<style type="text/css">
  <style>
* {
  box-sizing: border-box;
}
input[type=number]{
   width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</style>    
</head>
<body>
	
	<!--navbar start -->
<nav class="navbar navbar-expand-md bg-light navbar-dark sticky-top">
  <!-- Brand -->
            <a id="Brand" class="navbar-brand" href="#">  
  	          <span style='color:#86bc42'>NeW</span>
              <span style='color:#00CED1'>Hostel</span>
              <span style='color:#D9504E'> GPGC NO-1</span>
            </a>

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
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mb-5">Student Registeration Form</h2>
            <div class="row">
    <div class="col-md-6 mx-auto">
       <div class="card border-secondary">
            <div class="card-header">
                <h3 class="mb-0 my-2">Sign Up</h3>
                </div>
      <div class="card-body">
          <form class="form"  enctype="multipart/form-data" action="php/student_record.php" method="POST">
                <div class="form-group">
                  <label for="ID">ID</label>
                    <input type="text" name="id" class="form-control" placeholder="ID" required="">
                     </div>
                     <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control"  placeholder="password" required="">
                      </div>
                      <div class="form-group">
                      <label for="Questions">Security Questions</label>
                      <select name="Question" class="form-control" required="">
                        <option>What is the name of your first school?</option>
                        <option>What is your favorite movie?</option>
                        <option>What street did you grow up on?
                        </option>
                        <option>When is your anniversary?</option>
                        <option>What is your favorite color?</option>
                        <option>What is the name of your first grade teacher?</option>
                        <option>Which is your favorite web browser?
                        </option>
                        <option>what is your favorite website</option>
                        <option>what is your favorite forum</option>
                        <option>what is your favorite online platform
                        </option>
                      </select>
                      </div>
                      <div class="form-group">
                      <label for="Answer">Answer</label>
                      <input type="text" name="Answer" class="form-control"  placeholder="Security Answer" required="">
                      </div>
                      <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control"  placeholder="Name"  required="">
                      </div>
                      <div class="form-group">
                      <label for="Father_name">Father Name</label>
                      <input type="text" name="father_name" class="form-control" placeholder="Father name" required="">
                      </div>
                      <div class="form-group">
                      <label for="class">Class</label>
                      <input type="text" name="class" class="form-control" placeholder="Class" required="">
                      </div>
                      <div class="form-group">
                      <label for="Department">Department</label>
                      <select name="department" class="form-control" required="">
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
                      <div class="form-group">
                      <label for="Session">Session</label>
                      <input type="text" name="session" class="form-control" placeholder="Session" required="">
                      </div>
                      <div class="form-group">
                      <label for="Room_no">Room No</label>
                      <select name="room_no" class="form-control" required=""><option>1</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option></select>
                      </div>
                      <div class="form-group">
                      <label for="date of birth">Date of Birth</label>
                      <input type="Date" name="dob" class="form-control" placeholder="Date of Birth" required="">
                      </div>
                      <div class="form-group">
                      <label for="CNIC">CNIC No</label>
                      <input type="text" name="cnic" class="form-control" placeholder="CNIC No" required="" maxlength="15">
                      </div>
                      <div class="form-group">
                      <label for="Blood_Group">Blood Group</label>
                      <input type="text" name="b_group" class="form-control" placeholder="Blood Group" required="">
                      </div>
                      <div class="form-group">
                      <label for="Email">Email</label>
                      <input type="Email" name="email" class="form-control" placeholder="Email" required="">
                      </div>
                      <div class="form-group">
                      <label for="Contact_no">Guardian Cell</label>
                      <input type="text" name="cell_no" class="form-control" placeholder="Contact No" required=""  maxlength="11">
                      </div>
                      <div class="form-group">
                      <label for="Address">Address</label>
                      <input type="text" name="address" class="form-control" placeholder="Address" required="">
                      </div>
                       Upload Picture:
                      <input type="file" name="image">
                      <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-success btn-lg float-right">Register</button>
                      </div>
                </form>
          </div>
      </div>
  </div>
</div>
            <!--/row-->
</div>
        <!--/col-->
</div>
    <!--/row-->
</div>
<!--/container-->

<!--footer start-->
    <div class="row text-center bg-4">
    	<div class="col-lg-12 col-md-12 col-sm-12 text-center">
    		<p style="padding-top: 20px; color: white;">New Hostel GpGc No:1 Abbottabad</p>
    	</div>	
    </div>
</div>    
</body>
</html>
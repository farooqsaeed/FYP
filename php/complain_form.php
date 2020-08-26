<!DOCTYPE html>
<html>
<head>
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
<link rel="stylesheet" type="text/css" href="../css/style_new1.css">
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
h1{
  color: blue;
  font-weight: bold;
  background-color: deepskyblue;
  height: 100px;
  padding-top: 20px;
  border-radius: 5px;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<!--navbar start -->
<!--<nav class="navbar navbar-expand-md navbar-dark bg-light sticky-top">
            <a id="Brand" class="navbar-brand" href="#">  
              <span style='color:#86bc42'>NeW</span>
              <span style='color:#00CED1'>Hostel</span>
              <span style='color:#D9504E'> GPGC NO-1</span>
            </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item">
        <a id="a1" class="nav-link" href="index.php"><i class="fa fa-home"></i>Home</a>
      </li>
      <li class="nav-item">
        <a id="a1" class="nav-link" href="admission.php">Admission</a>
      </li>
      <li class="nav-item">
        <a id="a1" class="nav-link" href="complain_form.php">Complain cell</a>
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
</nav>-->
<!--navbar end-->
<!--main body end here-->
<div class="container-fluid">
  <h1 class="text-center">Complain Form</h1>
<div class="container">
  <form action="get_complain.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname">Student ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="stu_id" placeholder="Student ID..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Student Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="stu_name" placeholder="Student Name..">
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="lname">Deprartment</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="depratment" placeholder="Deprartment..">
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="lname">Room No</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="room_no" placeholder="Room No..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">complain</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>
<!--main body end here-->
<div class="row text-center bg-4">  <!--footer start here -->
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <p style="padding-top: 20px; color: white;">New Hostel GpGc No:1 Abbottabad</p>
      </div>                           <!--footer end here -->
</div>
</div>
</body>
</body>
</html>
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
<link rel="stylesheet" type="text/css" href="css/style_new1.css">
<style type="text/css">
	#i1{
		margin: 3px;
	}
  #About{
    background-color: light;
    border-radius: 5px;
  }
  #a3:hover{
     background-color: inherit;
  }
  #logbtn{
    color: green;
    font-size: 15px;
  }
  #logbtn:hover{
    text-decoration: none;
    background-color: inherit;
  }
</style>  
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
<!--main body start here-->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/hostel1.jpg" width="100%" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="img/hostel2.jpg" width="100%" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="img/hostel3.jpg" width="100%" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a id="a3" class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a id="a3" class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="container-fluid">                    
<div class="row">
  <div id="About" class="col-lg-8 col-md-8 col-sm-8 text-center">
  <div ></div>
           <div id="pg" class="jumbotron">
            <p id="text_top">Welcome To New Hostel GPGC NO-1 ATD</p>
            <hr>
            <!-- <h5>About Hostel</h5> -->
            <p class = "text-justify text-capitalize"> 
              New Hostel Is best Best Luxurious residence In The City Of Abbottabad. New Hostel Have Facilities 
              Includes 24 Hours Generator Backup,Internet Wifi,Laundry,Clean Rooms,New Mattress,Separate Cupboard with Lock,Filtering Drinking Water Cooler,Tv Lounge,Daily Newpaper,Neat And Clean Kitchen and Best Security.
              All These Facilities With Quality Makes New Hostel Best In Abbottabad City.We Have Proffessional Cook Who makes Sure The Quality And Teste Of Food,A Helper Who Serve For Meal And Laundry Services,Sweaper To Clean The Surroundding All Time And Security Guard To Provide The Best Possible Security.
               </p>
            </div>
</div>            <!--main body end here-->
<div class="col-lg-4 col-md-4 col-sm-4"> <!--news section -->
    <div class="card">
      <div class="card-title text-center bg-dark text-white"><h3>Login</h3></div>
      <div class="card-body">
        <form class="form-signin" action="php/student_login.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input id="i1" type="text" name="ID" class="form-control" placeholder="ID">
                <br>
                <input id="i1" type="password" name="password" class="form-control" placeholder="Password" required><br>
                <input type="submit" name="submit" class="btn btn-primary" value="SignIn">
                 <br>
                 <a id="logbtn" href="php/forget.php">Forgot Password?</a>
                 Don't Have Account?<a id="logbtn" href="registration.php">SignUp</a>
            </form>
      </div>
    </div>
  </div>
        <footer class="container-fluid bg-4 text-center" style="background-color: ">
          <p>New Hostel GpGc No:1 Abbottabad</p> 
        </footer>
<!--footer end-->
</div>
</body>
</html> 

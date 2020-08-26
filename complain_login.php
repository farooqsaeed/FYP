<!DOCTYPE html>
<html>
<head>
	<title>Complain LogIn</title>
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
<link rel="stylesheet" type="text/css" href="css/login_form2.css">
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
  <div class="note1">
      <h1 class="animated bounce infinite">For Complain Please LogIn</h1>
        </div>
<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12">
		 <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="img/avatar.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="php/complainLogin.php">
                <input type="text" name="id" class="form-control" placeholder="ID" required>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
	</div>	
</div>
<div class="row text-center sticky-buttom bg-4">  <!--footer start here -->
    	<div class="col-lg-12 col-md-12 col-sm-12 text-center">
    		<p style="padding-top: 20px; color: white;">New Hostel GpGc No:1 Abbottabad</p>
    	</div>                           <!--footer end here -->
    </div>
</div>
</body>
</html>
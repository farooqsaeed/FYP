<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style type="text/css">
body{
        
        margin: 0px;
        padding: 0px;
        background-color:#999999;
    }
#a2{
  color: #FFA500;
  text-decoration: none;
  background-color: inherit;
  font-weight: bold;
  font-size: 30px;
  font-family: "Times New Roman", Times, serif;
}
#hh{
  background-color: inherit;
} 
/* #a2:hover{
  background-color: inherit;
}    */
 #heading{
  border-radius: 5px;
  font-weight: bold;
 } 
 .note1
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
  	border: 1px solid;
	
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
<div class="container-fluid">
<div class="note1">
			<h1>Notice Board</h1>
        </div>
        
     <div class="row mt-2">   <!--left side menu start-->
     <div class="col-lg-3 col-md-3 col-sm-12">
     </div>            <!--left side menu end-->
     
     <div class="col-lg-6 col-md-3 col-sm-12 jumbotron">
     <marquee behavior="" direction="up" scrolldelay="300" onmouseover="this.stop()" onmouseout="this.start()">
     <?php 
       include'php/connection.php';
      $sql = "SELECT * FROM notice";
      $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)) {
           $id =$row["id"];
           $title =$row["title"];
           $Description =$row["Description"];
           $notice_date =$row["notice_date"]; ?>
    <h6 id="a2"><?php echo  $title; ?></h6><a id="hh" href="php/show_full_notice.php?id=<?php echo $id; ?>"><?php echo  $Description; ?></a>
    <p>Date:<?php echo  $notice_date; ?></p>
    <br>
<?php } 
?> 
</marquee>
 </div>
 
    <!-- ....footer...... -->
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
     <footer class="container-fluid bg-4 text-center">
          <p style="color: white;">New Hostel GpGc No:1 Abbottabad</p> 
     </footer>
  </div>
</div>
</body>
</html>
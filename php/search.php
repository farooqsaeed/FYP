<?php 
//$id = $_GET['id'];
//session_start();
//$_SESSION["id"] = $id;
 ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .container-fluid{
    background-color: #00FFFF;
  }
 .row{
    padding-top: 150px;
  }
  input{
    
  }
</style>
<div class="container-fluid vh-100">
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-title text-center bg-success text-white"><h1>Search  Record</h1></div>
        <div class="card-body">
          <form  action="search_record.php" method="POST">
          <div class="form-group input-group ">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Select Category</span>
                    </div>
                     <select class="form-control" name="category"><option>Faculity</option>
                     <option>student</option></select>
          </div>
          <div class="form-group input-group ">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Select Category</span>
                    </div>
                     <select class="form-control" name="searchBy"><option>Search_By_Id</option>
                     <option>Search_By_Name</option>
                     <option>Search_By_Room_No</option></select>
          </div>
          <div class="form-group input-group ">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Search</span>
                    </div>
                     <input type="text" class="form-control" name="search" placeholder="Search Record">
          </div>
          <input type="Submit" name="Submit" value="Submit">
         
           </form>
        </div>
      </div>
    </div>
    <div class="col-lg-4"></div>
  </div>
</div>   


              
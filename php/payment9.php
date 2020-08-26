<?php 
$id = $_GET['id'];
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
        <div class="card-title text-center bg-success text-white"><h1>Mess Payment</h1></div>
        <div class="card-body">
          <form  action="get_payment9.php" method="POST">
          <div class="form-group input-group ">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Amount</span>
                    </div>
                     <input type="number" class="form-control" name="amount" placeholder="Enter Amount">
          </div>
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="submit" name="submit" value="Submit">
           </form>
        </div>
      </div>
    </div>
    <div class="col-lg-4"></div>
  </div>
</div>   


              
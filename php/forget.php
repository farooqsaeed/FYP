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
    padding-top: 50px;
  }
  input{
    
  }
</style>
<div class="container-fluid vh-100">
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-title text-center bg-success text-white"><h1>Forget Password</h1></div>
        <div class="card-body">
          <form  action="forget_password.php" method="POST">
          <div class="form-group">
                    <label>Enter Your ID</label>
                     <input type="text" class="form-control" name="id" placeholder="ID">
          </div>
          <div class="form-group">
                    <label>Enter Your Email</label>
                     <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
                      <label for="Answer">Select Your Security Question</label>
                      <select name="question" class="form-control" required="">
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
                    <label for="Answer">Enter Your Security Answer</label>
                     <input type="text" class="form-control" name="answer" placeholder="Department">
          </div>
         <input type="submit" name="submit" value="Submit">
           </form>
        </div>
      </div>
    </div>
    <div class="col-lg-4"></div>
  </div>
</div>   


              
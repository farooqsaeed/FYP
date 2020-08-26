<?php
include'dash_board_menu.php';?>
<div class="row">
	<div class="col-lg-4 col-sm-12"></div>
	<div class="col-lg-8 col-sm-12">
		<div class="container">
    <form class="well form-horizontal" action="insert_admission_date.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Add Admission Schedule</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Start Date:</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon">@</span>
  <input  name="strat_date" placeholder="" class="form-control"  type="Date">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Close Date:</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon">@</span>
  <input name="Close_date" placeholder="" class="form-control"  type="Date">
    </div>
  </div>
</div>

  
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">1st MeritList Date</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon">@</span>
  <input  name="first_meritlist_date" placeholder="" class="form-control"  type="Date">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >2nd MeritList Date</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon">@</span>
  <input name="second_meritlist_date" placeholder="" class="form-control"  type="Date">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >3rd MeritList Date</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon">@</span>
  <input name="third_meritlist_date" placeholder="" class="form-control"  type="Date">
    </div>
  </div>
</div>
</fieldset>
<input align="center" type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg text-center">
</form>
</div>
</div><!-- /.container -->
</div>
</div>
  
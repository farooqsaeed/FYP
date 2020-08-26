<?php include'dash_board_menu.php'; ?>
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
---- Include the above in your HEAD tag ----------
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-7">
		<form action="get_merit_list_status.php" method="POST">
			<div class="form-group">
                    <lable>Publis First MeritList</lable>
                    <select  class="form-control" name="First">
                    	<option>publish</option>
                        <option>unpublish</option>
                    </select> 
            </div>
            <div class="form-group">
                    <label class="input-group-text">Publis Second MeritList</label>
                    <select  class="form-control" name="Second">
                    	<option>publish</option>
                        <option>unpublish</option>
                    </select> 
            </div>
            <div class="form-group">
                    <label>Publis Third MeritList</label>
                    <select  class="form-control" name="Third">
                    	<option>publish</option>
                        <option>unpublish</option>
                    </select> 
            </div>
            <div class="form-group">
            <input type="submit" name="submit" value="submit">
            </div>
		</form>
	</div>
	<div class="col-lg-3"></div>
</div>
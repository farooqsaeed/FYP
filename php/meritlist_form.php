<!DOCTYPE html>
<html>
<head>
           <style type="text/css">
            h2{
                font-weight: bold;
                color: lightgreen;
            }
           </style>
	<title></title>
</head>
<body>
<?php include'dash_board_menu.php'; ?>
    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                         <div class="col-lg-6 jumbotron col-sm-12">
                            <form action="meritlist.php" method="POST">
                                <h2 class="text-center">Merit List Generation Form</h2>
                                    Department:
                                    <select name="department">
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
                                    </select><br>
                                
                                    No of Students:
                                    <input type="number" name="no_of_stu"  placeholder="No of Students"><br>
                                
                                
                                    Class:
                                    <select name="class">
                                    <option>BS(1st)</option>
                                    <option>MA/MSc</option></select><br>
                               
                               
                                    Qouta:
		                            <select name="qouta">
		    	                    <option>Local</option>
		    	                    <option>Non-Local</option></select><br>
                                
                    
                                    Select MeritList No:
                                    <select name="no">
                                    <option>First</option>
                                    <option>Second</option>
                                    <option>Third</option>
                                    </select><br>
                                    <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                            </div>
                            <div class="col-lg-3"></div>
                    </div>
        </div>
</body>
</html>

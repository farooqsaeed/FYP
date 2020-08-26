<?php 
include'connection.php';
//include connection file 
$sql = "SELECT name,room_no,Attd,per_day,dues,total_dues,Balance FROM mess_dues";
			$result = mysqli_query($conn, $sql);
               
			//if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			   
			        while($row = mysqli_fetch_assoc($result)) {
                     $name =$row["name"];
                     $room_no =$row["room_no"];
                     $Attd =$row["Attd"];
                     $per_day =$row["per_day"];
                     $duse =$row["dues"];
                     $total_dues =$row["total_dues"];
                     $Balance =$row["Balance"];
      $sql = "INSERT INTO view_dues (name,room_no,Attd,per_day,dues,balance,total_dues)
      VALUES ($name','$room_no','$Attd','$per_day','$duse',' $Balance', $total_dues')";
      mysqli_query($conn, $sql);
}
include_once('pdf/fpdf.php');
Class dbObj{
/* Database connection start */
var $dbhost = "localhost";
var $username = "root";
var $password = "";
var $dbname = "hostel";
var $conn;
function getConnstring() {
$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else {
$this->conn = $con;
}
return $this->conn;
}
}

class PDF extends FPDF
{
	
// Page header
function Header()
{
	 $month='Dec 2020';
    // Logo
    //$this->Image('',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(0,10,'Mess dues New Hostel For Month of'." ".$month);
    //$this->Cell(0,10,'Mess Dues');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('S_No'=>'S.No','name'=> 'Name', 'room_no'=> 'Room No','Attd'=> 'Attendnce','per_day'=> 'Per Day','dues'=> 'Dues','balance'=> 'Balance','total_dues'=> 'Total Dues');

$result = mysqli_query($connString, "SELECT S_No,name, room_no, Attd,per_day,dues,balance,total_dues FROM view_dues") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM view_dues");

$pdf = new PDF();

$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);
foreach($header as $heading) {	
$pdf->Cell(22,9,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',8);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(22,9,$column,1);
}
$pdf->Output();

 ?>
<?php 
include'connection.php';
//include connection file 
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
     $month='dec 2020';
    // Logo
    //$this->Image('',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell(0,10,'Third Merit List'.$month);
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
$display_heading = array('roll_no'=>'Roll No', 'student_name'=> 'Name', 'father_name'=> 'Father Name','department'=> 'Department','class'=> 'Class','semester'=> 'Semester','marks'=> 'Marks','qouta'=> 'Qouta');

$result = mysqli_query($connString, "SELECT roll_no, student_name, father_name, department,class,semester,marks,qouta FROM third_merit_list") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM third_merit_list");

$pdf = new PDF();

$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);
foreach($header as $heading) {  
$pdf->Cell(24,8,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','B',6);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(24,8,$column,1);
}
$pdf->Output();

 ?>
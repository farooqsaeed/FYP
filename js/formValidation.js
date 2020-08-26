
	function validateForm() {
  var name1=document.getElementById("stu_name").value;
  var name2=document.getElementById("stu_cell").value;
  var name3=document.getElementById("f_name").value;
  var name4=document.getElementById("f_cell").value;
  var name5=document.getElementById("g_name").value;
  var name6=document.getElementById("g_cell").value;
  var name7=document.getElementById("stu_nic").value;
  var name8=document.getElementById("domicile").value;
  var name9=document.getElementById("p_add").value;
  var name10=document.getElementById("pm_add").value;
  var name11=document.getElementById("department").value;
  var name12=document.getElementById("semister").value;
  var name13=document.getElementById("roll").value;
  if (name1 == "" || name2 == "" || name3 == "" || name4 == "" || name5 == "" || name6 == "" ||
    name7 == "" || name8 == "" || name9 == "" || name10 == "" || name11 == "" || name12 == "" ||
    name13 == "" ) {
  	  alert("must fill all the fields");
  	  return false;
  }
 
  var year1=document.getElementById("year1").value;
  var year2=document.getElementById("year2").value;
   if (year1==year2 || year2==year1) {
    alert("Correct session years..");
    return false;
  }
   var opt1=document.getElementById("opt1").value;
   var opt2=document.getElementById("opt2").value;
   if (opt1==opt2 || opt2==opt1) {
    alert("All degree Title are same..");
     return false;
     }
}   
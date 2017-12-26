<?php
$city=$_GET['city'];
$c1=array('IIT Roorkee','College of Engineering Roorkee(COER)','Quantam Institute of Technology');
$c2=array('Graphic Era University(GEU)','UPES','Dehradun Institute of Technology(DIT)');
$c3=array('Lovely Professional University(LPU)','Punjab Engineering College (PEC)','Chandigarh University(CU)','Thapar University');

if($city=="Roorkee")
{
	foreach($c1 as $c)
	echo "<option>$c</option>";
}
else if($city=="Dehradun")
{
	foreach($c2 as $c)
	echo "<option>$c</option>";
}
else if($city=="Chandigarh")
{
	foreach($c3 as $c)
	echo "<option>$c</option>";
}
else{
	echo "<option>First Select City</option>";
}
?>
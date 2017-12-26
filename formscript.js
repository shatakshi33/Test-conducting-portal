function fetchCollege(str)
{
	var req=new XMLHttpRequest();
	req.open("get","http://localhost/BRM/college.php?city="+str,true);
	req.send();
	req.onreadystatechange=function(){
		if(req.readyState==4&&req.status==200)
		{
			document.getElementById("college").innerHTML=req.responseText;
		}
	};
}
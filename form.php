<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="formstyle.css" />
<script src="formscript.js"></script>
</head>
<body>
<div id="form-div">
<h1>Proceeding Form</h1>
<form action="index.php" method="post">

	<div>
	  <label>Name</label>
	  <input type="text" name="username" />
	</div>
	
	<div>
	  <label>Select City</label>
	  <select onchange="fetchCollege(this.value)">
		 <option>Select City</option>
	     <option>Roorkee</option>
		 <option>Dehradun</option>
		 <option>Chandigarh</option> 
	  </select>
	</div>
	
	<div>
	  <label>Select College</label>
	  <select id="college">
		 <option>First Select City</option>
	  </select>
	</div>
	
	<div>
	<input type="submit" value="submit" />
	</div>
	
</form>	
</div>
</body>
</html>
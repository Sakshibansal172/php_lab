<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cv_style.css">
	<title></title>
</head>
<body>
<form   action="cv_new.php" method="POST">
	<div>
		<input class="a3" type="text" name="name" height="50%" width="50%" placeholder="Name" required><br><br>
		<hr>
		<img align="right"  src="image.png" id="img" height="200px;">
		
		<em><u>Address Correspondence</u></em><br><br>
		<input class="a1" type="text" name="address" placeholder="Enter your address" ><br><br>
		<input class="a2" type="number" name="age" placeholder="Age"><br><br>
		<input class="a2" type="number" name="contact" placeholder="Enter your contact number" required><br><br>
		<input class="a2" type="text" name="email" placeholder="abc@gmail.com" autocomplete="off" required><br><br>
		<h3 align="right">ADD PHOTO (JPG/GIF/PNG)</h3>
		<div align="right"><input id="i1" type="file" name="image" align="right"></div>
	</div>
	<hr>
	<em><u>Career Objective</u></em><br>

	<textarea name="career_obj" rows="5" cols="50" placeholder="Add a summary with your professional skills and experience,to help a company get a bref idea about you." required></textarea>
	<hr>
	<hr>
	<em><u>Personal Details</u></em>
	<table>
	<tr><th>Date of Birth </th><td>:</td><td><input type="date" name="date" required></td></tr>
	<tr><th>Father's Name</th><td>:</td><td><input type="text" name="fname"></td></tr>
	<tr><th>Mother's Name</th></th><td>:</td><td><input type="text" name="mname"></td></tr>
	<tr><th>Category</th><td>:</td><td><input type="text" name="category"></td></tr>
	<tr><th>Gender</th><td>:</td><td><input type="radio" name="Gender" value="male">Male<br><input type="radio" name="Gender" value="female">Female<br><input type="radio" name="Gender" value="other">other</td></tr>
	<tr><th>Nationality</th><td>:</td><td><input type="text" name="Nationality"></td></tr>
	<tr><th>Home Town</th><td>:</td><td><input type="text" name="Home"></td></tr>
	<hr>
</table>
<br><br>
	<em><u>Eductaion</u></em>
	<table>
	<tr>
		<th>Grade/<br>Degree</th>
		<th>Board</th>
		<th>School/<br>College</th>
		<th>GPA/percentage</th>
	</tr>
	<tr>
		<td><input type="text" name="grade" value="X" readonly></td>
		<td><input type="text" name="board_1"></td>
		<td><input type="text" name="school_1"></td>
		<td><input type="decimal" name="gpa1"></td>
	</tr>
	<tr>
		<td><input type="text" name="grade1" value="XII" readonly></td>
		<td><input type="text" name="board_2"></td>
		<td><input type="text" name="school_2" ></td>
		<td><input type="decimal" name="gpa2"></td>
	</tr>
	<tr>
		<td><input type="text" name="grade2" placeholder="undergraduate"></td>
		<td><input type="text" name="board_3"></td>
		<td><input type="text" name="school_3" ></td>
		<td><input type="decimal" name="gpa3"></td>
	</tr>
	<tr>
		<td><input type="text" name="grade3" placeholder="postgraduate"></td>
		<td><input type="text" name="board_4"></td>
		<td><input type="text" name="school_4" ></td>
		<td><input type="decimal" name="gpa4"></td>
	</tr>
	</table> 
	<br>
	<br>
	<em><u>Work Experience</u></em>
	<table>
	<tr><th>Date</th><td>:</td><td> <input type="varchar" name="ex_date" placeholder="e.g. 03/2013 - 09/2018"></td></tr>
	<tr><th>Employer</th><td>:</td><td><input type="text" name="employer"></td></tr>
	<tr><th>Description</th><td>:</td><td><textarea rows="2" cols="70" placeholder="Give a brief about your previous employment" name="desc"></textarea></td></tr>
	</table>
	<br>
	<br>
	<em><u>Achievements</u></em><br>
	
	<textarea name="achievement" rows="5" cols="50"></textarea><br>

	<em><u>Additional Skills</u></em></b>
	<ol><li><input type="text" name="skill"></li>
		<li><input type="text" name="skill1"></li>
		<li><input type="text" name="skill2"></li>
		<li><input type="text" name="skill3"></li>
		<li><input type="text" name="skill4"></li>
		<li><input type="text" name="skill5"></li></ol>
		<br><br>
	<em><u>References</u></em><br>
	<textarea name="refer" rows="3" cols="40"></textarea><br><br>

		<input type="submit" name="submit">





	
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Employee details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<center><h2>Employee Details</h2></center>
<table class="center">
	<form action="new.php" method="post" enctype="multipart/form-data">
	  <tr>
	    <td>Enter your Name :</td>
	    <td><input type="text" name="name" required /></td>
  	</tr>

  	<tr>
	    <td>Enter your Mobile Number :</td>
	    <td><input type="text" name="phone" required /></td>
  	</tr>

  	<tr>
	    <td>Enter your Email :</td>
	    <td><input type="email" name="email" required /></td>
  	</tr>

  	<tr>
	    <td>Enter your Age : </td>
	    <td><input type="text" name="age" required /></td>
  	</tr>

  	<tr>
	    <td>Experience(in years) : </td>
	    <td><input type="text" name="experience" required /></td>
  	</tr>

  	<tr>
    <td>Choose your Skills :</td>
    <td>
      <input type="checkbox" name="skills[]" value="html">HTML 
      <input type="checkbox" name="skills[]" value="css">CSS 
      <input type="checkbox" name="skills[]" value="javascript">Javascript 
      <input type="checkbox" name="skills[]" value="php">PHP 
      <input type="checkbox" name="skills[]" value="android">Android 
    </td>
    </tr>

    <tr>
    <td>Choose your Resume : </td>
    <td><input type="file" name="resume" required />
      <input type="hidden" name="size" value="67108864"/></td>
    </tr>

    <tr>
    <td><button type="submit" name="submit" value="submit">Submit</button></td>
    </tr>
</form>
</table>
</body>
</html>
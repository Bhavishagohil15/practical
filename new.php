<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','jobapp');


//submit action
if(isset($_REQUEST["submit"]))
{
	// get the post records
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$experience = $_POST['experience'];
	$skills = implode(",",$_POST['skills']);

	$resume=$_FILES["resume"]["name"];
	$tmp_name=$_FILES["resume"]["tmp_name"];
	$path="uploads/".$resume;
	$file1=explode(".",$resume);
	$ext=$file1[1];
	$allowed=array("docx","pdf","zip");
 		if(in_array($ext,$allowed))
 		{
 			move_uploaded_file($tmp_name,$path);
 			mysqli_query($con,"INSERT INTO employeedetails(name,phone,email,age,experience,skills,resume) VALUES('$name','$phone','$email','$age','$experience','$skills','$resume')"); 
          	header('location: wel.php');
		}
        else 
        {
            echo "Failed.";
        }
}
mysqli_close($con);
?>

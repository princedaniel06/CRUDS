<?php
	include "configure.php";

	if(isset($_POST['submit'])){
             $instructor_ID = $_POST['instructor_ID'];
	     $name = $_POST['name'];
	     $dept_name = $_POST['dept_name'];
	     $salary = $_POST['salary'];
	

	$sql = "INSERT INTO instructor (instructor_ID, name, dept_name, salary) VALUES ('$instructor_ID', '$name', '$dept_name', '$salary')";

	$result = $conn->query($sql);

	if($result == TRUE){
	echo "New record created successfully!!!";
	}
	else{
	echo "ERROR!!!".$sql."<br>". $conn->error;
	}
	$conn->close();
}	
?>
<!DOCTYPE html>
<html>
<body>
<h2> User Create Form </h2>
<form action="" method="POST">
        <fieldset>
        <legend> Personal Information: </legend>

        <br></br>

        Instructor ID:<br>
        <input type="text" name="instructor_ID">
        </br>
        Name:<br>
        <input type="text" name="name" >
        </br>
        Department Name:<br>
        <input type="text" name="dept_name">
        </br>
        Salary:<br>
        <input type="text" name="salary">
        </br> 
        <br></br>
        <input type="submit" name="submit" value="submit">
        </fieldset>
</form>
</body>
</html>

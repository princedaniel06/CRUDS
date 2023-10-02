<?php
    include "configure.php";

    if(isset($_POST['update'])){
        $instructor_ID = $_POST['instructor_ID'];
        $name = $_POST['name'];
        $dept_name = $_POST['dept_name'];
        $salary = $_POST['salary'];

        $sql = "UPDATE instructor SET instructor_ID='$instructor_ID', name='$name', dept_name='$dept_name', salary='$salary' WHERE instructor_ID='$instructor_ID'";

        $result = $conn->query($sql);

    if($result == TRUE){
            echo "Updated record successfully!!!";
        }
        else{
            echo "ERROR!!!". $conn->error;
        }
    }

    if(isset($_GET['instructor_ID'])){
        $instructor_ID = $_GET['instructor_ID'];
        $sql = "SELECT * FROM 'instructor' WHERE 'instructor_ID'='$instructorID'";
        $result = $conn->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
         
			  $instructor_ID = $row['instructor_ID'];  
			  $name = $row['name']; 
			  $dept_name = $row['dept_name']; 
			  $salary = $row['salary']; 
            }

            

        
        }

    }
?>
<!DOCTYPE html>
<html>
<body>
        <h2> User Update Form </h2>
        <form action="" method="POST">
        <fieldset>
        <legend> Personal Information: </legend>
     
        Instructor ID:<br>
        <input type="text" name="instructor_ID">
        
</br>
        Name:<br>
        <input type="text" name="name">
        
</br>
        Department Name:<br>
        <input type="text" name="dept_name">
</br>
        Salary:<br>
        <input type="text" name="salary">
</br>
        <input type="submit" value="update" name="update"
        </fieldset>
        </form>
</body>
</html>

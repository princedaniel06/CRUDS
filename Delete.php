<?php
    include "configure.php";


    if(isset($_POST['delete'])){
        $instructor_ID = $_POST['instructor_ID'];
    

 

       
      
      // sql to delete a record
      $sql = "DELETE FROM instructor WHERE instructor_ID='$instructor_ID'";
      
      if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();
  
    }
   

?>




<!DOCTYPE html>
<html>
<body>
        <h2> User Delete Form </h2>
        <form action="" method="POST">
        <fieldset>
        <legend> Personal Information: </legend>
     
        Instructor ID:<br>
        <input type="text" name="instructor_ID">
        
</br>
 

        <input type="submit" value="delete" name="delete"
        </fieldset>
        </form>
</body>
</html>
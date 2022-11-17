<?php
    $course_id = $_POST['course_id'];
    $couse_name = $_POST['couse_name'];
    $no_of_days_of_course = $_POST['no_of_days_of_course'];

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        $stmt = "UPDATE courses SET  couse_name='$couse_name' , no_of_days_of_course='$no_of_days_of_course' WHERE course_id='$course_id' ";
        
        if ($conn->query($stmt) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
          
          $conn->close();
          header("adminpage.php");
        
    }
?>
<?php
    $course_id = $_POST['course_id'];
   

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        $stmt2="DELETE FROM courses WHERE course_id='$course_id' ";
        $stmt2_result=$conn->query($stmt2);
        echo "<center>course deleted successfully..<center>";
        $conn->close();
        
    }
?>
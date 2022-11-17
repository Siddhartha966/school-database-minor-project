<?php
    $department_id = $_POST['department_id'];
    $department_name = $_POST['department_name'];

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        $stmt = "UPDATE department SET  department_name='$department_name'  WHERE department_id='$department_id' ";
        
        if ($conn->query($stmt) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
          
          $conn->close();
          header("adminpage.php");
        
    }
?>
<?php
    $department_id = $_POST['department_id'];
    $department_name = $_POST['department_name'];
   

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into department(department_id, department_name)
            values(? , ?)");
        $stmt->bind_param("ss",$department_id, $department_name);
        $stmt->execute();
        echo "<center>department added successfully..<center>";
        header("adminpage.php");
        $stmt->close();
        $conn->close();
        
    }
?>
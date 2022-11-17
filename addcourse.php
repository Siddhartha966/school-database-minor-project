<?php
    $course_id = $_POST['course_id'];
    $couse_name = $_POST['couse_name'];
    $no_of_days_of_course = $_POST['no_of_days_of_course'];
    $faculty_id = $_POST['faculty_id'];

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into courses(course_id, couse_name, no_of_days_of_course, faculty_id)
            values(? , ?, ?, ?)");
        $stmt->bind_param("ssis",$course_id, $couse_name, $no_of_days_of_course, $faculty_id);
        $stmt->execute();
        echo "<center>course added successfully..<center>";
        header("adminpage.php");
        $stmt->close();
        $conn->close();
        
    }
?>
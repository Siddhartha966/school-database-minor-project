<?php
    $student_roll_number = $_POST['student_roll_number'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $class = $_POST['class'];
    $student_password = $_POST['student_password'];
    $student_position = $_POST['student_position'];
    $academicyear = $_POST['academicyear'];
    $mothername = $_POST['mothername'];
    $fathername = $_POST['fathername'];
    $address = $_POST['address'];

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into student(student_roll_number, firstname, lastname, gender, age,class, student_password, student_position, academicyear, mothername, fathername, address)
            values(? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssiississs",$student_roll_number, $firstname, $lastname, $gender, $age, $class, $student_password, $student_position, $academicyear, $mothername, $fathername, $address );
        $stmt->execute();
        echo "<center>registration successfully..<center>";
        $stmt->close();
        $conn->close();
    }
?>
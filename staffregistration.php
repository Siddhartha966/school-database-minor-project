<?php
    $staff_id = $_POST['staff_id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $staff_type = $_POST['staff_type'];
    $supervising_position = $_POST['supervising_position'];
    $current_salary = $_POST['current_salary'];
    $faculty_id = $_POST['faculty_id'];
    $years_of_experience = $_POST['years_of_experience'];
    $working_hours_per_day = $_POST['working_hours_per_day'];
    $nts_id = $_POST['nts_id'];
    $role = $_POST['role'];
    

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into staff(staff_id, name, password, address, gender,age, staff_type, supervising_position, current_salary)
            values(? , ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssissi",$staff_id, $name, $password, $address, $gender, $age, $staff_type, $supervising_position, $current_salary );
        $stmt->execute();
        $stmt->close();
        
        
        $stmt = $conn->prepare("insert into faculty(faculty_id, years_of_experience, working_hours_per_day)
            values(? , ?, ?)");
        $stmt->bind_param("sii", $faculty_id, $years_of_experience, $working_hours_per_day);
        $stmt->execute();
        $stmt->close();
        
        
        $stmt = $conn->prepare("insert into nts(nts_id,role)
            values(? , ?)");
        $stmt->bind_param("ss",$nts_id,$role );
        $stmt->execute();
        $stmt->close();
        echo "<center>registration successful..<center>";
    }
?>
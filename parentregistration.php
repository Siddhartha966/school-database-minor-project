<?php
    $Student_roll_number = $_POST['Student_roll_number'];
    $parentname = $_POST['parentname'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $profession = $_POST['profession'];
    $primary_contact_no = $_POST['primary_contact_no'];
    $secondary_contact_no = $_POST['secondary_contact_no'];
    

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into parent(Student_roll_number, parentname, password, address, profession,primary_contact_no, secondary_contact_no)
            values(? , ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss",$Student_roll_number, $parentname, $password, $address, $profession, $primary_contact_no, $secondary_contact_no  );
        $stmt->execute();
        echo "registration successfully..";
        $stmt->close();
        $conn->close();
    }
?>
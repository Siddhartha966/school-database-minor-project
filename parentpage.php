<?php      
    global $Student_roll_number;
    $Student_roll_number = $_POST['Student_roll_number'];
    $password = $_POST['password'];

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        
        $stmt2="SELECT *FROM student WHERE Student_roll_number = '$Student_roll_number'";
        $stmt2_result=$conn->query($stmt2);
        $data2 = $stmt2_result->fetch_assoc();

        $stmt3=" SELECT *FROM courses WHERE course_id=(SELECT course_id FROM enrolled WHERE Student_roll_number = '$Student_roll_number')";
        $stmt3_result =$conn->query($stmt3);

        $stmt5="SELECT exam.exam_date,result.exam_name,result.marks_obtained,exam.total_marks FROM result INNER JOIN exam ON result.exam_name=exam.exam_name AND Student_roll_number = '$Student_roll_number'";
        $stmt5_result= $conn->query($stmt5);

        $stmt="SELECT * FROM parent WHERE Student_roll_number = '$Student_roll_number' && password = '$password'";
    
        $stmt_result=$conn->query($stmt);
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] == $password){

            }

        }else{
            header("location:parentloginpage.html");
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parent dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body style="overflow-x: hidden;">
    <style>
        body{
                background: url("images/image-03.jpg") no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height:100%;
        }
        .header {
            background-color: #151313;
            color: #F9D342;
            padding: 1vw;
            margin-top: -1vw;
            margin-left: -1vw;
            margin-right: -1vw;
            font-family: 'Montserrat', sans-serif;
        }
        .topnav {
            background-color: #333;
            overflow: hidden;
            border-radius: 0.7vw;
            background-image: linear-gradient(to right,#2b2923, #333);
        }

        .topnav a {
            float:left;
            color:#F9D342;
            text-align: center;
            padding: 1.2vw 1.6vw;
            text-decoration: none;
            font-size: 1.4vw;
        }
        .topnav a:hover {
        background-color:#F9D342;
        color:#151313;
        }
        .topnav a.active {
        background-color:#F9D342;
        color:#292826;
        }
        
        .style1 {
        background-color: #151313;
        color: #F9D342;
        font-size: 1.4vw;
        padding: 1.5vw;
        margin-top: -1vw;
        margin-left: -1vw;
        margin-right: -1vw;
        margin-bottom: -1vw;
        font-family: 'Montserrat', sans-serif;
        }
        
        .stylingcourses {
            background-color: #F9D342;
            color: #292826;
            padding: 1vw;
            border-radius: 0.5vw;
            display: inline-block;
            box-shadow: 0 8px 16px 0 rgba(43, 40, 1, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            cursor: default;
        }
        .stylingcourses:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.697), 0 17px 50px 0 rgba(0,0,0,0.49);
        }
        .stylingfooter {
            background-color: rgba(0, 0, 0, 0.449);
            padding: 15px;
            font-weight: 200;
            padding-top: 30px;
            margin:-10px;
            color: goldenrod;            
        }
        hr {
            background-color: goldenrod;
            border-color: goldenrod;
        }
        td {
            text-align: center;
            padding:1vw;
            width: 33.33%;
        }
        .style2 {
            background-color: #F9D342;
            color: #292826;
            border-color: #151313;
        }
        .style3 {
            background-color: #151313;
            color:#F9D342;
            border-color: #F9D342;
            width: 25%;
            text-align: center;
        }

    </style>
    <header>
        <div class="header">
            <h2 style="text-align: center;">SCHOOL DATABASE</h2>
            <nav>
                <div class="topnav">
                  <a class="active" href="index.html" target="_blank">Home</a>
                  
                  <a href="index.html" style="float: right;background-color: #F9D342;color: #292826;border-radius: 0.8vw;box-shadow: 0 8px 16px 0 rgba(43, 40, 1, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                  ">log out</a>
                </div>
              </nav>
        </div>
    </header>
    <main> 
        <div style="padding: 8vw;">
           <br/> 
        </div>
        <div class="style1">
            <div >
                <h3>MY INFO:</h3>
                <br/>
                <table style="width: 100%;">
                    <tr>
                        <td>Student's ID: <p style="color: green;display:inline-block"> <?php echo $data['Student_roll_number']; ?> </p> </td>
                        <td>Student's Name: <p style="color: green;display:inline-block"> <?php echo $data2['firstname']; ?> </p> </td>
                        <td>Student's class: <p style="color: green;display:inline-block"> <?php echo $data2['class']; ?> </p></td>
                    </tr>
                    <tr>
                        <td>Name: <p style="color: green;display:inline-block"> <?php echo $data['parentname']; ?> </p> </td>
                        <td>Profession: <p style="color: green;display:inline-block"> <?php echo $data['profession']; ?> </p> </td>
                    </tr>
                        <td>Primary contact no.: <p style="color: green;display:inline-block"> <?php echo $data['primary_contact_no']; ?> </td>
                        <td>Secondary contact no.: <p style="color: green;display:inline-block"> <?php echo $data['secondary_contact_no']; ?> </td>
                </table>
            </div >
            <br/>
            <h3>STUDENT'S PERFORMANCE</h3>
            <div class="style1">
                <p>Student position in school: <?php echo $data2['student_position']; ?></p>
                <p>Student enrolled courses:</p>
                <br/>
                <?php
                 
                 while($data3=$stmt3_result->fetch_assoc())
                 {
                ?>
                
                <div class="stylingcourses"><?php echo $data3['couse_name'] ?> </div>
                <?php
                 }
                ?>
                <br/>
                <br/>
                <p>Student's result sheet:</p>
                <br/>
                <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">Exam date</th>
                            <th class="style2" >Exam name</th>
                            <th class="style2" >Marks Obtained </th>
                            <th class="style2" >Total marks</th>
                        </tr>
                        
                        <?php
                            
                            while($data5=$stmt5_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data5['exam_date'];?></td>
                            <td class="style3" ><?php echo $data5['exam_name'];?></td>
                            <td class="style3" ><?php echo $data5['marks_obtained'];?></td>
                            <td class="style3" ><?php echo $data5['total_marks'];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
                </div>

            </div>
            <p style="text-align: center;">This information is only for maintaining transparency between the school and the parents.</p>
            
        </div>
        
    </main>
    <footer class="style1">
        <div class="stylingfooter" style="font-family:Verdana, Geneva, Tahoma, sans-serif" >
            
            <table style="width: 100%;"> 
                <tr>
                <th ><a href="index.html" target="_blank" style="color: goldenrod;"> Homepage</a></th>
                  <th><a href="courses.php" target="_blank" style="color: goldenrod;">Courses</a></th>
                  <th><a href="departments.php" target="_blank" style="color: goldenrod;">Departments</a></th>
                  <th><a href="library.php" target="_blank" style="color: goldenrod;">E-Library</a></th>
                  <th><a href="infrastructure.php" target="_blank" style="color: goldenrod;">Infrastructure</a></th>
                  <th><a href="transportation.html" target="_blank" style="color: goldenrod;">Transportation</a></th>
                  <th><a href="partnerships.php" target="_blank" style="color: goldenrod;"> Partnerships</a></th>
                </tr>
            </table>
            <hr/>
            <br/>
            <table style="width: 100%;font-size: 1.3vw;">
                <tr>
                    <th style="font-size: 1.7vw;">About</th>
                    <th style="font-size: 1.7vw;">Contact Us</th>
                </tr>
                <tr>
                    <td style="padding-left:1vw;padding-right: 1vw;text-align: center;">
                        The world today is a global village and people are its citizens. As boundaries of location, people and time cease to exist, it is of utmost importance that we move with the times.we have created a unique blend of world-class curricula, contemporary teaching methodologies, and equal focus on intellectual, physical and personality development, resulting future leaders who are ready to take on the world.
                    </td>
                    <td style="text-align: center;"><br/>our contact details:<p>+91-7842658149, cse210001081@iiti.ac.in</p>+91-7287964278, cse210001017@iiti.ac.in<p></p></td>
                </tr>
            </table>
            <br/>
        </div>
    </footer>
</body>
</html>
<?php      
    global $staff_id;
    $staff_id = $_POST['staff_id'];
    $password = $_POST['password'];

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        
        $stmt2="SELECT*FROM faculty WHERE faculty_id = '$staff_id'";
        $stmt2_result=$conn->query($stmt2);
        $data2 = $stmt2_result->fetch_assoc();

        $stmt3="SELECT couse_name FROM courses WHERE course_id =(SELECT course_id FROM teaching WHERE faculty_id = '$staff_id')";
        $stmt3_result=$conn->query($stmt3);

        $stmt4="SELECT department_name FROM department WHERE department_id= (  SELECT department_id FROM belongingto WHERE course_id =(SELECT course_id FROM teaching WHERE faculty_id = '$staff_id'))";
        $stmt4_result=$conn->query($stmt4);

        $stmt="SELECT * FROM staff WHERE staff_id = '$staff_id' && password = '$password'";
    
        $stmt_result=$conn->query($stmt);
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] == $password){

            }

        }else{
            header("location:staffloginpage.html");
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faculty dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
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
        padding: 15px;
        margin-top: -10px;
        margin-left: -10px;
        margin-right: -10px;
        font-family: 'Montserrat', sans-serif; 
        }
        .topnav {
        background-color: #333;
        overflow: hidden;
        border-radius: 10px;
        }

        .topnav a {
        float: left;
        color:#F9D342;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
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
        font-size: 20px;
        padding: 15px;
        margin-top: -10px;
        margin-left: -10px;
        margin-right: -10px;
        margin-bottom: -10px;
        font-family: 'Montserrat', sans-serif;
        }
        .stylingcourses {
            background-color: #F9D342;
            color: #292826;
            padding: 10px;
            border-radius: 5px;
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
            padding:20px;
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
                  
                  <a href="index.html" style="float: right;background-color: #F9D342;color: #292826;border-radius: 10px;box-shadow: 0 8px 16px 0 rgba(43, 40, 1, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                  ">log out</a>
                </div>
              </nav>
        </div>
    </header>
    <main> 
        <div style="padding: 100px;">
           <br/> 
        </div>
        <div class="style1">
            <div >
                <h3>MY INFO:</h3>
                <br/>
                <table style="width: 100%;">
                    <tr>
                        <td>faculty ID: <p style="color: green;display:inline-block"> <?php echo $data['staff_id']; ?> </p> </td>
                        <td>Name: <p style="color: green;display:inline-block"> <?php echo $data['name']; ?></p> </td>
                        <td>Supervising position: <p style="color: green;display:inline-block"> <?php echo $data['supervising_position']; ?></p> </td>
                    </tr>
                    <tr>
                        <td>Age: <p style="color: green;display:inline-block"> <?php echo $data['age']; ?> </p></td>
                        <td>Gender: <p style="color: green;display:inline-block"> <?php echo $data['gender']; ?> </p></td>
                        <td>Current Salary Plan: <p style="color: green;display:inline-block"> <?php echo $data['current_salary']; ?></p> </td>
                    </tr>
                        <td>Working Hours: <p style="color: green;display:inline-block"> <?php echo $data2['working_hours_per_day']; ?></p></td>
                        <td>Years of Experince: <p style="color: green;display:inline-block"> <?php echo $data2['years_of_experience']; ?></p></td>
                </table>
            </div >
            <br/>
            <h3>ALLOTED COURSES:</h3>
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
            <h3>BELONGING DEPARTMENTS:</h3>
            <?php
                 
                 while($data4=$stmt4_result->fetch_assoc())
                 {
                ?>
                
                <div class="stylingcourses"><?php echo $data4['department_name'] ?> </div>
                <?php
                 }
                ?>
                <br/>
                <br/>
            
            
            <p style="text-align: center;">This information is only for maintaining transparency between the school and the faculty.</p>
            
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
            <table style="width: 100%;font-size: 17px;">
                <tr>
                    <th style="font-size: 20px;">About</th>
                    <th style="font-size: 20px;">Contact Us</th>
                </tr>
                <tr>
                    <td style="padding-left:100px;padding-right: 100px;text-align: center;">
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
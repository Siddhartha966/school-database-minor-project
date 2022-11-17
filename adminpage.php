<?php      
    global $admin_id;
    $admin_id = $_POST['admin_id'];
    $password = $_POST['password'];

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        
        $stmt2="SELECT *FROM student";
        $stmt2_result=$conn->query($stmt2);

        $stmt3="SELECT *FROM library";
        $stmt3_result=$conn->query($stmt3);

        $stmt4="SELECT *FROM infrasructure";
        $stmt4_result=$conn->query($stmt4);

        $stmt5="SELECT *FROM eas";
        $stmt5_result=$conn->query($stmt5);

        $stmt6="SELECT staff.staff_id,staff.name,staff.address,staff.gender,staff.age,staff.supervising_position,nts.role,staff.current_salary FROM staff INNER JOIN nts WHERE staff.staff_id=nts.nts_id";
        $stmt6_result=$conn->query($stmt6);

        $stmt7="SELECT staff.staff_id,staff.name,staff.address,staff.gender,staff.age,staff.supervising_position,faculty.years_of_experience,faculty.working_hours_per_day,staff.current_salary FROM staff INNER JOIN faculty WHERE staff.staff_id=faculty.faculty_id";
        $stmt7_result=$conn->query($stmt7);

        $stmt8="SELECT *FROM transactions";
        $stmt8_result=$conn->query($stmt8);

        $stmt9="SELECT *FROM courses";
        $stmt9_result=$conn->query($stmt9);

        $stmt10="SELECT *FROM department";
        $stmt10_result=$conn->query($stmt10);

        $stmt="SELECT * FROM admin WHERE admin_id = '$admin_id' && password = '$password'";

        $stmt_result=$conn->query($stmt);
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] == $password){

            }

        }else{
            header("location:adminloginpage.html");
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
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

        .stylelabel{
            margin-left: 20px;
            display: inline-block;
            margin-bottom: 30px;
            
        }
        .styleinput {
            border: #F9D342;
            border-radius: 5px;
            vertical-align: middle;
            height: 20px;
            font-family: 'Rajdhani', sans-serif;
            background: cornsilk;
            width: 170px;
        }
        input[type="password"] {
        font-family: caption;
        }
        input[type="text"]{
            font-size: 17px;
            font-weight: 600;
        }
        .submit-button {
      
        border-radius: 7px;
        padding: 10px 32px;
        border:2px;
        cursor: pointer;
        position: relative;
        text-align: center;
        border-color: #F9D342;
        font-size: 17px;
        font-weight: 600;
        background-color: #F9D342;
        color: #292826;
        font-family: 'Montserrat', sans-serif;
        box-shadow: 0 8px 16px 0 rgba(43, 40, 1, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .submit-button:hover{
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.697), 0 17px 50px 0 rgba(0,0,0,0.55);

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
                        <td>Admin ID: <p style="color: green;display:inline-block"> <?php echo $data['admin_id']; ?> </p></td>
                        <td>Name: <p style="color: green;display:inline-block"> <?php echo $data['name']; ?> </p></td>
                        <td>Work Division: <p style="color: green;display:inline-block"> <?php echo $data['work_division']; ?> </p></td>
                    </tr>
                    <tr>
                        <td>Age: <p style="color: green;display:inline-block"> <?php echo $data['age']; ?> </p></td>
                        <td>Gender: <p style="color: green;display:inline-block"> <?php echo $data['gender']; ?> </p></td>
                        <td>Supervising position: <p style="color: green;display:inline-block"> <?php echo $data['supervising_position']; ?> </p></td>
                    </tr>
                        <td>Working time: <p style="color: green;display:inline-block"> <?php echo $data['working_time']; ?> </p></td>
                        <td>Current salary plan: <p style="color: green;display:inline-block"> <?php echo $data['salary']; ?> </p></td>
                </table>
            </div >
            <br/>
            <h3>Student Information:(no edit access granted)</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">Student roll no.</th>
                            <th class="style2" >Firstname</th>
                            <th class="style2" >Lastname</th>
                            <th class="style2" >Academic year</th>
                            <th class="style2" >Class</th>
                            <th class="style2" >Gender</th>
                            <th class="style2" >Age</th>
                            <th class="style2" >Student Position</th>
                            <th class="style2" >Mother Name</th>
                            <th class="style2" >Father Name</th>
                            <th class="style2" >Address</th>
                        </tr>
                        
                        <?php
                            
                            while($data2=$stmt2_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data2['student_roll_number'];?></td>
                            <td class="style3" ><?php echo $data2['firstname'];?></td>
                            <td class="style3" ><?php echo $data2['lastname'];?></td>
                            <td class="style3" ><?php echo $data2['academicyear'];?></td>
                            <td class="style3" ><?php echo $data2['class'];?></td>
                            <td class="style3" ><?php echo $data2['gender'];?></td>
                            <td class="style3" ><?php echo $data2['age'];?></td>
                            <td class="style3" ><?php echo $data2['student_position'];?></td>
                            <td class="style3" ><?php echo $data2['mothername'];?></td>
                            <td class="style3" ><?php echo $data2['fathername'];?></td>
                            <td class="style3" ><?php echo $data2['address'];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div> 
            <br/>
            <br/>
            <br/>
            
            <h3>Library Information:(no edit access granted)</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">ISBN NO.</th>
                            <th class="style2" >no. of copies</th>
                            <th class="style2" >Book Status</th>
                            <th class="style2" >Publication Year</th>
                            <th class="style2" >Author Name</th>
                            <th class="style2" >Book Name</th>
                            
                        </tr>
                        
                        <?php
                            
                            while($data3=$stmt3_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data3['isbn_no'];?></td>
                            <td class="style3" ><?php echo $data3['no_of_copies'];?></td>
                            <td class="style3" ><?php echo $data3['book_status'];?></td>
                            <td class="style3" ><?php echo $data3['publication_year'];?></td>
                            <td class="style3" ><?php echo $data3['author_name'];?></td>
                            <td class="style3" ><?php echo $data3['book_name'];?></td>
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div> 
            <br/>
            <br/>            
            <br/>
            <h3>Infrastructure Information:(no edit access granted)</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">BLOCK NO.</th>
                            <th class="style2" >area of block</th>
                            <th class="style2" >Block Status</th>
                            <th class="style2" >Block Name</th>
                            <th class="style2" >Resources</th>
                            <th class="style2" >Damage Management</th>
                            
                        </tr>
                        
                        <?php
                            
                            while($data4=$stmt4_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data4['block_no'];?></td>
                            <td class="style3" ><?php echo $data4['area_of_block'];?></td>
                            <td class="style3" ><?php echo $data4['block_status'];?></td>
                            <td class="style3" ><?php echo $data4['block_name'];?></td>
                            <td class="style3" ><?php echo $data4['resources'];?></td>
                            <td class="style3" ><?php echo $data4['damage_management'];?></td>
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div> 
            <br/>
            <br/>            
            <br/>
            <h3>Partnerships, External affairs & Suppliers Information:(no edit access granted)</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">Admin-id dealing EAS</th>
                            <th class="style2" >Year of Partnership</th>
                            <th class="style2" >Activity involved</th>
                            <th class="style2" >Partner Name</th>
                            
                            
                        </tr>
                        
                        <?php
                            
                            while($data5=$stmt5_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data5['admin_id'];?></td>
                            <td class="style3" ><?php echo $data5['years_of_patnership'];?></td>
                            <td class="style3" ><?php echo $data5['activity_involved'];?></td>
                            <td class="style3" ><?php echo $data5['external_affaries_name'];?></td>
                            
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div> 
            
            <br/>
            <br/>            
            <br/>
            <h3>NTS Information:(no edit access granted)</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">NTS-id</th>
                            <th class="style2" >Name</th>
                            <th class="style2" >Supervising position</th>
                            <th class="style2" >gender</th>
                            <th class="style2" >age</th>
                            <th class="style2" >address</th>
                            <th class="style2" >salary</th>
                            <th class="style2" >role</th>
                            
                        </tr>
                        
                        <?php
                            
                            while($data6=$stmt6_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data6['staff_id'];?></td>
                            <td class="style3" ><?php echo $data6['name'];?></td>
                            <td class="style3" ><?php echo $data6['supervising_position'];?></td>
                            <td class="style3" ><?php echo $data6['gender'];?></td>
                            <td class="style3" ><?php echo $data6['age'];?></td>
                            <td class="style3" ><?php echo $data6['address'];?></td>
                            <td class="style3" ><?php echo $data6['current_salary'];?></td>
                            <td class="style3" ><?php echo $data6['role'];?></td>
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div>
            <br/>
            <br/>            
            <br/>
            <h3>Faculty Information:(no edit access granted)</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">faculty-id</th>
                            <th class="style2" >Name</th>
                            <th class="style2" >Supervising position</th>
                            <th class="style2" >gender</th>
                            <th class="style2" >age</th>
                            <th class="style2" >address</th>
                            <th class="style2" >salary</th>
                            <th class="style2" >years of experience</th>
                            <th class="style2" >working hours(per day)</th>
                            
                        </tr>
                        
                        <?php
                            
                            while($data7=$stmt7_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data7['staff_id'];?></td>
                            <td class="style3" ><?php echo $data7['name'];?></td>
                            <td class="style3" ><?php echo $data7['supervising_position'];?></td>
                            <td class="style3" ><?php echo $data7['gender'];?></td>
                            <td class="style3" ><?php echo $data7['age'];?></td>
                            <td class="style3" ><?php echo $data7['address'];?></td>
                            <td class="style3" ><?php echo $data7['current_salary'];?></td>
                            <td class="style3" ><?php echo $data7['years_of_experience'];?></td>
                            <td class="style3" ><?php echo $data7['working_hours_per_day'];?></td>

                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div>
            <br/>
            <br/>            
            <br/>
            <h3>Institute Transactions Information:(no edit access granted)</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">Transactions-ID</th>
                            <th class="style2" >amount</th>
                            <th class="style2" >debited account</th>
                            <th class="style2" >credited account</th>
                            <th class="style2" >date of Transaction</th>
                            
                            
                        </tr>
                        
                        <?php
                            
                            while($data8=$stmt8_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data8['transaction_id'];?></td>
                            <td class="style3" ><?php echo $data8['amount'];?></td>
                            <td class="style3" ><?php echo $data8['debited_account'];?></td>
                            <td class="style3" ><?php echo $data8['credited_account'];?></td>
                            <td class="style3" ><?php echo $data8['date_of_transaction'];?></td>
                            
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div> 
            <br/>
            <br/>            
            <br/>
            <h3>Courses Information:</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">Course ID</th>
                            <th class="style2" >Course name</th>
                            <th class="style2" >No. of days of course</th>
                            <th class="style2" >course coordinator-ID</th>
                            
                            
                        </tr>
                        
                        <?php
                            
                            while($data9=$stmt9_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data9['course_id'];?></td>
                            <td class="style3" ><?php echo $data9['couse_name'];?></td>
                            <td class="style3" ><?php echo $data9['no_of_days_of_course'];?></td>
                            <td class="style3" ><?php echo $data9['faculty_id'];?></td>
                            
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div>
        
            <br/>            
            <br/>
            <form action="addcourse.php" method="post">
                <p><u>add course:</u></p>
                <label for="course_id" class="stylelabel">course-id:</label>
                <input type="text" id="course_id" name="course_id" class="styleinput"/><br/>
                <label for="couse_name" class="stylelabel">course-name:</label>
                <input type="text" id="couse_name" name="couse_name" class="styleinput"/><br/>
                <label for="no_of_days_of_course" class="stylelabel">no. of days of course:</label>
                <input type="number" id="no_of_days_of_course" name="no_of_days_of_course" class="styleinput"/><br/>
                <label for="faculty_id" class="stylelabel">course co-ordinator-id:</label>
                <input type="text" id="faculty_id" name="faculty_id" class="styleinput"/><br/>
                <input type="submit" class="submit-button" value="add course"/><br/>
            
            </form>
            <br/>
            <form action="updatecourse.php" method="post">
                <p><u>update course:</u></p>
                <label for="course_id" class="stylelabel">course-id:</label>
                <input type="text" id="course_id" name="course_id" class="styleinput"/><br/>
                <label for="couse_name" class="stylelabel">course-name:</label>
                <input type="text" id="couse_name" name="couse_name" class="styleinput"/><br/>
                <label for="no_of_days_of_course" class="stylelabel">no. of days of course:</label>
                <input type="number" id="no_of_days_of_course" name="no_of_days_of_course" class="styleinput"/><br/>
                <input type="submit" class="submit-button" value="update course"/><br/>
            
            </form>
            <br/>
            <form action="deletecourse.php" method="post">
                <p><u>delete course:</u></p>
                <label for="course_id" class="stylelabel">course-id:</label>
                <input type="text" id="course_id" name="course_id" class="styleinput"/><br/>
                <input type="submit" class="submit-button" value="delete course"/><br/>
            </form>
            <br/>
            <br/>
            <h3>Departments Information:</h3>
            <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">Department ID</th>
                            <th class="style2" >department name</th>
            
                        </tr>
                        
                        <?php
                            
                            while($data10=$stmt10_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data10['department_id'];?></td>
                            <td class="style3" ><?php echo $data10['department_name'];?></td>
                            
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
            </div>
            
            <br/>            
            <br/>
            <form action="adddepartment.php" method="post">
                <p><u>add department:</u></p>
                <label for="department_id" class="stylelabel">department-id:</label>
                <input type="text" id="department_id" name="department_id" class="styleinput"/><br/>
                <label for="department_name" class="stylelabel">department-name:</label>
                <input type="text" id="department_name" name="department_name" class="styleinput"/><br/>
                <input type="submit" class="submit-button" value="add department"/><br/>
            </form>
            <br/>
            <form action="updatedepartment.php" method="post">
                <p><u>update department:</u></p>
                <label for="department_id" class="stylelabel">department-id:</label>
                <input type="text" id="department_id" name="department_id" class="styleinput"/><br/>
                <label for="department_name" class="stylelabel">department-name:</label>
                <input type="text" id="department_name" name="department_name" class="styleinput"/><br/>
                <input type="submit" class="submit-button" value="update department"/><br/>
            </form>
            <br/>
            <form action="deletedepartment.php" method="post">
                <p><u>delete department:</u></p>
                <label for="department_id" class="stylelabel">department-id:</label>
                <input type="text" id="department_id" name="department_id" class="styleinput"/><br/>
                <input type="submit" class="submit-button" value="delete department"/><br/>
            </form>
            <br/>
            <br/>
            <br/>
            <br/>
            
        </div>
        
    </main>
    <footer class="style1">
        <div class="stylingfooter" style="font-family:Verdana, Geneva, Tahoma, sans-serif" >
            
            <table style="width: 100%;"> 
                <tr>
                <th><a href="index.html" target="_blank" style="color: goldenrod;"> Homepage</a></th>
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
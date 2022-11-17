<?php      

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        

        $stmt="SELECT * FROM courses ";
        $stmt_result=$conn->query($stmt);
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courses</title>
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
        }
        .cardstyle {
            background-color: #292826;
            border-radius: 7px;
            color: #F9D342;
            box-shadow: 0 8px 16px 0 rgba(43, 40, 1, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .cardstyle:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.697), 0 17px 50px 0 rgba(0,0,0,0.49);
        }
        
    </style>
    <header>
        <div class="header">
            <h2 style="text-align: center;">SCHOOL DATABASE</h2>
            <nav>
                <div class="topnav">
                    <a class="active" href="index.html">Home</a>
                    <a href="courses.php" target="_blank">Courses</a>
                    <a href="departments.php" target="_blank">Departments</a>
                    <a href="library.php" target="_blank">E-Library</a>
                    <a href="studentloginpage.html" target="_blank">Students</a>
                    <a href="infrastructure.php" target="_blank">Infrastructure</a>
                    <a href="transportation.html" target="_blank">Transportation</a>
                    <a href="partnerships.php" target="_blank">Partnerships & Dealings</a>
           
                  <a href="loginpage.html" style="float: right;background-color: #F9D342;color: #292826;border-radius: 10px;box-shadow: 0 8px 16px 0 rgba(43, 40, 1, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                  ">log in</a>
                </div>
              </nav>
        </div>
    </header>
    <main> 
        <div style="padding: 100px;">
           <br/> 
        </div>
        <div class="style1" style="text-align: center;">
            <h3>COURSES</h3>
            <hr/>
            <p style="padding: 50px;">Courses from the diplomas to the professional ones are available in this prestigious organisation. Almost all master courses in all domains and also graduation courses are available. Any student who would like to pursue their career one step ahead always has the option open to them. While some high school subjects are required, others can be selected. Finally being given more of a choice in what a student studies can be freeing, but also overwhelming.</p>
            <hr/>

            <br/>
        <br/>
        <br/>
        </div>
        <div class="style1" style="text-align: center;font-weight:900;">
        <h3>AVAILABLE COURSES:</h3>
            <?php
                    
                    while($data=$stmt_result->fetch_assoc())
                    {
                    ?>
                    
                    <span class="stylingcourses" style="background-color: #292826 ;color:#F9D342;border-radius:25%;">
                    <table style="margin: 10px;">
                        <tr>
                            <td style="padding: 10px;" >COURSE ID: <p style="color: green;display:inline-block;"> <?php echo $data['course_id'] ?></p></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;" >COURSE NAME: <p style="color: green;display:inline-block;"> <?php echo $data['couse_name'] ?></p> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;" >COURSE TIME(DAYS): <p style="color: green;display:inline-block;"> <?php echo $data['no_of_days_of_course'] ?></p> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;" >COURSE CO-ORDINATOR ID: <p style="color: green;display:inline-block;"> <?php echo $data['faculty_id'] ?></p> </td>
                        </tr>
                    </table> 
                    </span>
                    <?php
                    }
                    ?>

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
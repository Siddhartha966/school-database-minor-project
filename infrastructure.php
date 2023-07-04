<?php      

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        

        $stmt="SELECT * FROM infrasructure ";
        $stmt_result=$conn->query($stmt);

        
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>infrastructure</title>
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
            padding: 1.2vw 1.2vw;
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
            padding:2vw;
        }
        
        .infrastructurecards1 {
            border-radius: 0.8vw;
            height: 32vw;
            margin: 3%;
            padding: 1vw;
            background-image: url("https://c1.wallpaperflare.com/preview/999/43/579/architecture-yellow-building-infrastructure.jpg");
            background-size: 100%;
        } 
        .infrastructurecards2 {
            border-radius: 0.8vw;
            height: 32vw;
            margin: 3%;
            padding: 1vw;
            background-image: url("https://epe.brightspotcdn.com/53/66/b17323e84e668e02e25d5b4a7a93/teacher-students-classroom.jpg");
            background-size: 100%;
        }
        .infrastructurecards3 {
            border-radius: 0.8vw;
            height: 32vw;
            margin: 3%;
            padding: 1vw;
            background-image: url("https://bloximages.newyork1.vip.townnews.com/herald-dispatch.com/content/tncms/assets/v3/editorial/1/bf/1bf1ac67-71bf-5042-b8f8-b8f324eed102/5621af62bac7d.hires.jpg");
            background-size:100%;
        } 

        .innerboxstyle {
            width: 50%;
            background-color: #292826;
            height: 90%;
            border-radius: 0.8vw;
            padding: 1.5vw;
            vertical-align: middle;
            box-shadow: 0 8px 16px 0 rgba(43, 40, 1, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }  
        .innerboxstyle:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.697), 0 17px 50px 0 rgba(0,0,0,0.70); 
            transition: 0.4s;
        }
        .style2 {
            background-color: #F9D342;
            color: #292826;
            border-color: #151313;
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
                    
                  <a href="loginpage.html" style="float: right;background-color: #F9D342;color: #292826;border-radius: 0.8vw;box-shadow: 0 8px 16px 0 rgba(43, 40, 1, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                  ">log in</a>
                </div>
              </nav>
        </div>
    </header>
    <main> 
        <div style="padding: 8vw;">
           <br/> 
        </div>
        <div class="style1" style="text-align: center;">
            <br/>
            <h3>INFRASTRUCTURE</h3>
            <br/>
            <div class="infrastructurecards1" >
                <div class="innerboxstyle"><br/><br/><br/>Achieving equity means that all schools should be safe from natural disasters
                    or any other outside concerns and should have all of the spaces, furniture, and
                    equipment needed to deliver the curriculum in an effective way. Conversely,
                    inequity means a lack of or insufficient bathroom facilities, inadequate separation between boys and girls, long or dangerous walking distances to school</div>
            </div>
            <br/>
            <div class="infrastructurecards2" >
                <div class="innerboxstyle" style="float: right;"><br/><br/>Classrooms are the place where students spend most of their time in a traditional school setting. Parents need to see classroom facilities and interiors carefully. Comfortable benches to sit, accurate students-teachers- space ratio is a must. Don’t expect a quality education from a student stuffed class. Students cannot focus unless they sit in a comfortable and spacious classroom. Check the conditions of walls and blackboard. A holistic development requires a good ambience to focus. Imperfect interiors can ruin your child’s mood to study and perform better in academics.</div>
            </div>
            <br/>
            <div class="infrastructurecards3">
                <div class="innerboxstyle"><br/><br/>Many schools talk about Physical Development but don’t have space to conduct Physical activities for students. Well, even if they manage to conduct indoor activities, having a Play area for students is a critical need for a school. Children are active and growing individuals. They require different physical activities and sports to develop mentally and physically. Choosing a school without Play Area/ Sports Area is not advisable. It stops your child’s from performing activities and thus creates a hurdle in their overall development. We provide the best playground facilities to ensure all-round development of child </div>
            </div>
        </div>
        
        <div class="style1">
                <br/>
                <h3 class="style1">BLOCK DIVISIONS AND INFRASTRUCTURE OF THE CAMPUS:</h3>
                <br/>
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">BLOCK NO.</th>
                            <th class="style2" >BLOCK NAME</th>
                            <th class="style2" >AREA OF THE BLOCK</th>
                        </tr>
                        
                        <?php
                            
                            while($data=$stmt_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data['block_no'];?></td>
                            <td class="style3" ><?php echo $data['block_name'];?></td>
                            <td class="style3" ><?php echo $data['area_of_block'];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
                    <br/>
                    <br/>
                </div>
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
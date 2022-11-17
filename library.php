<?php      

    //database connection
    $conn = new mysqli('localhost','root','','school');
    if($conn->connect_error){
        die('Connection Failed  :'.$conn->connect_error);
    }else{
        

        $stmt="SELECT * FROM library ";
        $stmt_result=$conn->query($stmt);

        $stmt2="SELECT courses.couse_name,materials.isbn_no FROM materials INNER JOIN courses ON materials.course_id=courses.course_id ";
        $stmt2_result=$conn->query($stmt2);
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-library </title>
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
            <h3>LIBRARY</h3>
            <hr/>
            <p style="padding: 50px;">Libraries have always been a crucial part of the learning process. One can describe the library as a centrally organized set consisting of resources that include an entire spectrum of different types of media (text, video, hypermedia) as well as human services. When we think about libraries, the first thing that comes to mind is the physical components such as space, equipment, storage, racks full of books and other academic material.
                No one can deny the role reading play in the life of students. Since digitization has taken over most of the components in school learning and higher education, learning through digital libraries is not a thing of the past anymore. The decline in visits to conventional libraries suggests that students prefer to access information and read content without visiting a library in person.
            </p>
            <hr/>

            <br/>
        <br/>
        </div>
        <div class="style1" style="font-weight:900; text-align: center;">
        <h3>LIBRARY E-BOOKS:</h3>
        <br/>
            <?php
                    
                    while($data=$stmt_result->fetch_assoc())
                    {
                    ?>
                    
                    <span class="stylingcourses" style="background-color: #292826 ;color:#F9D342;border-radius:25%;">
                    <table style="margin: 10px;">
                        <tr>
                            <td style="padding: 10px;" >ISBN NUMBER: <p style="color: green;display:inline-block;"> <?php echo $data['isbn_no'] ?></p></td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;" >BOOK NAME: <p style="color: green;display:inline-block;"> <?php echo $data['book_name'] ?></p> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;" >AUTHOR NAME: <p style="color: green;display:inline-block;"> <?php echo $data['author_name'] ?></p> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;" >PUBLICATION YEAR: <p style="color: green;display:inline-block;"> <?php echo $data['publication_year'] ?></p> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;" >BOOK STATUS: <p style="color: red;display:inline-block;"> <?php echo $data['book_status'] ?></p> </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;" >NUMBER OF COPIES: <p style="color: green;display:inline-block;"> <?php echo $data['no_of_copies'] ?></p> </td>
                        </tr>
                    </table> 
                    </span>
                    <?php
                    }
                    ?>

        </div>  
        <div class="style1" style="font-weight:900;">
        <h3>COURSE RELATED BOOKS:</h3>
        <br/>
        <div class="style1">
                    <table style="width: 100%;">
                        <tr style="width: 100%;">
                            <th class="style2">COURSE NAME</th>
                            <th class="style2" >RELATED BOOK ISBN no.</th>
                            
                        </tr>
                        
                        <?php
                            
                            while($data2=$stmt2_result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="style3" ><?php echo $data2['couse_name'];?></td>
                            <td class="style3" ><?php echo $data2['isbn_no'];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <hr/>
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
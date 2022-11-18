<?php

                  $sname= "localhost";
                  $unmae= "root";
                  $password = "";
                  $db_name = "teacherlogin";
                  $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                  $sel = "SELECT * FROM logininfo";
                  $querry = mysqli_query($conn , $sel);
                  $result = mysqli_fetch_assoc($querry);
               
    ?>


<?php


$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "studentinfo";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
              
              $user_id = $_GET['id'];

              if(isset($_POST['update'])){
                    $std_id = $_POST['user_id'];

                    $IP1 = $_POST['IP1'];
                    $IP2 = $_POST['IP2'];
                    $IPTotal = $_POST['IPT'];
                    
                    
                    $SE1 = $_POST['SE1'];
                    $SE2 = $_POST['SE2'];
                    $SETotal = $_POST['SETA'];
                    
                    $ADMT1 = $_POST['ADMT1'];
                    $ADMT2 = $_POST['ADMT2'];
                    $ADMTTotal = $_POST['ADMTT'];
                    
                    $CNS1 = $_POST['CNS1'];
                    $CNS2 = $_POST['CNS2'];
                    $CNSTotal  =$_POST['CNST'];

                    $EEB1 = $_POST['EEB1'];
                    $EEB2 = $_POST['EEB2'];
                    $EEBTotal = $_POST['EEBT'];
                    
                    $Total1 =  $IP1+ $SE1+$ADM11+$CNS1+$EEB1 ;
                    $Total2 = $IP2+ $SE2+$ADMt2+$CNS2+$EEB2 ;
                    $Average = ($Total1+$Total2)/2;
   
                           $sql = "INSERT INTO `studentmarks`(`Student_id`, `IP1`, `IP2`, `IPT`, `SE1`, `SE2`, `SETA`, `ADMT1`, `ADMT2`, `ADMTT`, `CNS1`, `CNS2`, `CNST`, `EEB1`, `EEB2`, `EEBT`, `TOTAL1`, `TOTAL2`, `Average`)
                            VALUES ('$std_id','$IP1','$IP2','$IPTotal','$SE1','$SE2','$SETotal','$ADMT1','$ADMT2','$ADMTTotal','$CNS1','$CNS2','$CNSTotal','$EEB1','$EEB2','$EEBTotal','$Total1','$Total2','$Average')";
                            $run_query =  mysqli_query($conn ,$sql);
                            if($run_query){
                            
                              header("location:teacher_student_marks_List.php");
                            } 
                            else{
                            echo "fail";
                            }

                      
                                
                       }
                      
                  

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Marks Dashboard </title>
  <link rel="stylesheet" href="css/DashBoard.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
        <ul>
            <li><a href="#" class="logo">
            <img src="./pic/logo.jpg">
            <span class="nav-item"> 
            <?php  echo $result['UserName'].".";?>
              </span>
            </a></li>
            <li><a href="teacher_DashBoard.php">
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Student List</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Message</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a></li>
            <li><a href="teacherupdateattendance.php">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Attendance</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a></li>

            <li><a href="#" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
         </ul>
        </nav>

        <section class="main">
      <div class="main-top">
        <h1>Marks</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
         </div>

      
           <section class="main">

      
        <form action="test2.php" method="post" class="book-form" enctype = "multipart/form-data">

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>Update Marks Here... </h1><br>
                          <input type = "hidden" name = "user_id" value="<?=$user_id?>">
                          
                        <br><br>



                <table>
            <tr>
              
                
                <th>Sr No</th>
                <th>Subject Name</th>
                <th> INTERNAL EXAMINATION 1</th>
                <th>INTERNAL EXAMINATION 1</th>
                <th>TOTAL MARKS </th>
            </tr>
        


           <tr>
            <tr>
                <th>1</th>
                <th>Internet Programing</th>
                <th><input type = "text" name = "IP1"></th>                
                <th><input type = "text" name = "IP2"></th>
                <th><input type = "text" name = "IPT"></th>

                
            </tr>
            <tr>


            <tr>
                <th>2</th>
                <th>Software Enginering</th>
                
                <th><input type = "text" name = "SE1"></th>
                <th><input type = "text" name = "SE2"></th>
                <th><input type = "text" name = "SETA"></th>

                
                <th> </th>
            </tr>
            <tr>
                <tr>
                <th>3</th>
                <th>Advance DataBase Management </th>
                
                <th><input type = "text" name = "ADMT1"></th>
                <th><input type = "text" name = "ADMT2"></th>
                <th><input type = "text" name = "ADMTT"></th>

                
            </tr>
            <tr>
                <tr>
                <th>4</th>
                <th>Computer Network Security</th>
                <th><input type = "text" name = "CNS1"></th>
               <th><input type = "text" name = "CNS2"></th>
               <th><input type = "text" name = "CNST"></th>

            </tr>
            <tr>
                <tr>
                <th>5</th>
                <th>Enterpernurship And Enterprunal Bussiness</th>
                <th><input type = "text" name = "EEB1"></th>
                <th><input type = "text" name = "EEB2"></th>
                <th><input type = "text" name = "EEBT"></th>

                <th></th>
            </tr>
            <tr>
            </tr>
        

            <tr>
                <tr>
                <th></th>
                <th>Total</th>
                <th><input type = "text" name = "TOTAL1"></th>
                <th><input type = "text" name = "TOTAL2"></th>
                <th><input type = "text" name = "Average"></th>



              </tr> <br>

                </table>

                  <input type="submit" value="Update" name = "update" >

            <style>

              input[type=submit] {
                              width: 100%;
                              background-color: #4CAF50;
                              color: white;
                              padding: 14px 20px;
                              margin: 8px 0;
                              border: none;
                              border-radius: 4px;
                              cursor: pointer;
                            }
                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    padding: 8px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }

                tr:hover {
                    background-color: green;
                    }
            </style>



        </section>
        </form>

         
        
</body>
</html>
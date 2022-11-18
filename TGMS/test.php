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

                    $IPTotal = $_POST['IPT'];
                    $IPAttend = $_POST['IPA'];
                    $SETotal  = $_POST['SETA'];
                    $SEAttend = $_POST['SETA'];
                    $ADMTTotal = $_POST['ADMTT'];
                    $ADMTAttend=$_POST['ADMTA'];
                    $CNSTotal = $_POST['CNST'];
                    $CNSAttend =$_POST['CNSA'];
                    $EEBTotal = $_POST['EEBT'];
                    $EEBAttend = $_POST['EEBA'];
                    $TotalC =  $IPTotal+ $SETotal+$ADMTTotal+$CNSTotal+$EEBTotal ;
                    $TotalAttend = $IPAttend+$SEAttend+$ADMTAttend+$CNSAttend+$EEBAttend;
   
                           $sql = "INSERT INTO `studentattendance`(`Student_id`, `IPT`, `IPA`, `SETA`, `SEA`, `ADMTT`, `ADMTA`, `CNST`, `CNSA`, `EEBT`, `EEBA`, `Total_C`, `Total_A`) VALUES
                            ('$std_id','$IPTotal','$IPAttend','$SETotal','$SEAttend','$ADMTTotal','$ADMTAttend','$CNSTotal','$CNSAttend','$EEBTotal','$EEBAttend','$TotalC','$TotalAttend')";
                            $run_query =  mysqli_query($conn ,$sql);
                            if($run_query){
                             session_unset();
                             session_destroy();
                              header("location:teacherupdateattendance.php");
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
  <title>Attendance Dashboard </title>
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
            <?php  echo $reult['UserName'].".";?>
              </span>
            </a></li>
            <li><a href="teacher_DashBoard.php">
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Student List</span>
            </a></li>
            <li><a href="teacherupdateattendance.php">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Attendance</span>
            </a></li>
            <li><a href="teacher_student_marks_List.php">
              <i class="fas fa-database"></i>
              <span class="nav-item">Marks List</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Documents</span></span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a></li>

            <li><a href="logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
         </ul>
        </nav>

        <section class="main">
      <div class="main-top">
        <h1>Attendance</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
         </div>
           <section class="main">

      
        <form action="test.php" method="post" class="book-form" enctype = "multipart/form-data">

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>View Your Attendance Here.. </h1><br>
                          <input type = "hidden" name = "user_id" value="<?=$user_id?>">
                          
                        <br><br>



              <table>
            <tr>
                
                <th>Sr No</th>
                <th>Subject Name</th>
                <th> No Of Lecture Conducted</th>
                <th> No Of Lecture Attended</th>
            </tr>
            <tr></tr>
            <tr>
            <tr>
                <th>1</th>
                <th>Internet Programing</th>
                <th><input type = "text" name = "IPT"> </th>                
                <th><input type = "text" name = "IPA"> </th>
                
            </tr>
            <tr>


            <tr>
                <th>2</th>
                <th>Software Enginering</th>
                
                <th><input type = "text" name = "SET"> </th>
                <th><input type = "text" name = "SETA"> </th>
                
                <th> </th>
            </tr>
            <tr>
                <tr>
                <th>3</th>
                <th>Advance DataBase Management </th>
                
                <th><input type = "text" name = "ADMTT"> </th>
                <th><input type = "text" name = "ADMTA"> </th>
                
            </tr>
            <tr>
                <tr>
                <th>4</th>
                <th>Computer Network Security</th>
                <th><input type = "text" name = "CNST"> </th>
               <th><input type = "text" name = "CNSA"> </th>
            </tr>
            <tr>
                <tr>
                <th>5</th>
                <th>Enterpernurship And Enterprunal Bussiness</th>
                <th><input type = "text" name = "EEBT"> </th>
                <th><input type = "text" name = "EEBA"> </th>
                <th></th>
            </tr>
            <tr>
            </tr>
        

            <tr>
                <tr>
                <th></th>
                <th>Total</th>
                <th><input type = "text" name = "TOTALT"> </th>
                <th><input type = "text" name = "TOTALA"> </th>


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
<?php

                  $sname= "localhost";
                  $unmae= "root";
                  $password = "";
                  $db_name = "teacherlogin";
                  $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                  $sel = "SELECT * FROM logininfo";
                  $querry = mysqli_query($conn , $sel);
                  $reult = mysqli_fetch_assoc($querry);
                 
               
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
            <li><a href="teacher_Document_list.php">
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
        <h1>Marks</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
         </div>

      
           <section class="main">

         
            <?php
               $sname= "localhost";
                  $unmae= "root";
                  $password = "";
                  $db_name = "studentinfo";
                  $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                 if(isset($_GET['id'])){
                  $user_id = $_GET['id'];
                   $sel = "SELECT *  FROM studentmarks  WHERE Student_id = '$user_id'";
                    $querry = mysqli_query($conn , $sel);
                    if(mysqli_num_rows($querry) > 0){
                    foreach($querry as $user){
                      ?>
                        <form action="updatemarks.php" method="POST" class="book-form" enctype = "multipart/form-data">

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>Update Marks Here.. </h1><br>
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
                <th><input type = "text" name = "IP1"> <?=$user['IP1']?> </th>                
                <th><input type = "text" name = "IP2"> <?=$user['IP2']?></th>
                <th><input type = "text" name = "IPT"> <?=$user['IPT']?></th>

                
            </tr>
            <tr>


            <tr>
                <th>2</th>
                <th>Software Enginering</th>
                
                <th><input type = "text" name = "SE1" Value = "<?=$user['SE1']?>"></th>
                <th><input type = "text" name = "SE2"><?=$user['SE2']?></th>
                <th><input type = "text" name = "SETA"><?=$user['SETA']?></th>

                
                <th> </th>
            </tr>
            <tr>
                <tr>
                <th>3</th>
                <th>Advance DataBase Management </th>
                
                <th><input type = "text" name = "ADMT1"><?=$user['ADMT1']?> </th>
                <th><input type = "text" name = "ADMT2"><?=$user['ADMT2']?></th>
                <th><input type = "text" name = "ADMTT"><?=$user['ADMTT']?></th>

                
            </tr>
            <tr>
                <tr>
                <th>4</th>
                <th>Computer Network Security</th>
                <th><input type = "text" name = "CNS1"> <?=$user['CNS1']?></th>
               <th><input type = "text" name = "CNS2"> <?=$user['CNS2']?></th>
               <th><input type = "text" name = "CNST"> <?=$user['CNST']?></th>

            </tr>
            <tr>
                <tr>
                <th>5</th>
                <th>Enterpernurship And Enterprunal Bussiness</th>
                <th><input type = "text" name = "EEB1"><?=$user['EEB1']?></th>
                <th><input type = "text" name = "EEB2"> <?=$user['EEB2']?></th>
                <th><input type = "text" name = "EEBT"> <?=$user['EEBT']?></th>

                <th></th>
            </tr>
            <tr>
            </tr>
        

            <tr>
                <tr>
                <th></th>
                <th>Total</th>
                <th><input type = "text" name = "TOTAL1"><?=$user['TOTAL1']?></th>
                <th><input type = "text" name = "TOTAL2"> <?=$user['TOTAL2']?></th>
                <th><input type = "text" name = "Average"> <?=$user['Average']?></th>



              </tr> <br>

                      
                      <?php
                    }
                  }
                  else{

                    header("location:test2.php?id=$user_id");


                    ?>
                       <?php

                 }


                 }
                 
              ?>
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
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
  <title>Attendance Dashboard | By Code Info</title>
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
            <li><a href="teacher_student_marks_List.php">
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
        <?php

          $sname= "localhost";
          $unmae= "root";
          $password = "";
          $db_name = "studentinfo";
          $conn = mysqli_connect($sname, $unmae, $password, $db_name);
          $array =array();


          $q  = "SELECT * FROM signinfo ";
          $querry_run = mysqli_query($conn, $q);
          while($result = mysqli_fetch_assoc($querry_run)){      
                   
            ?>
              <div class="card">
              <?php echo '<img src = "'.$result['Simage'].'">'?>
          <h4><?php echo $result['Sname'];?> </h4>
          <p><?php echo $result['SUname'];?></p>
          <p><?php echo $result['SAddNo'];?></p>
          
          <button><a href = "TeacherViewProfile.php?id=<?= $result['id']?>">Profile</a></button>
        </div>
        <?php
        
          }

            ?>
      
      </div>

      <section class="attendance">
        
    </section>
  </div>

</body>
</html>

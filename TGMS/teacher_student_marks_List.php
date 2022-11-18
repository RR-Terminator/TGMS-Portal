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
  <title>Marks DashBoard </title>
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
        <h1>Marks </h1>
        <i class="fas fa-user-cog"></i>
      </div>
      
        <form action="teacherupdateattendance.php" method="post" class="book-form" >

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>Select Student Here.. </h1><br>
                          <p> <p>

                          <table>

                          <tr>
                    
                            <th>Sr No</th>
                            <th>Student Name</th>
                            <th>Addmission Number</th>
                            <th>UserName</th>
                            <th> Action </th>
                        </tr>

                        <?php 

                          $sname= "localhost";
                           $unmae= "root";
                            $password = "";
                            $db_name = "studentinfo";
                            $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                            $sel = "SELECT * FROM signinfo";
                            $querry = mysqli_query($conn , $sel);
                            if(mysqli_num_rows($querry) > 0){
                              foreach($querry  as $row){
                                
                                
                                ?>

                                 <tr>

                            <th><?= $row['id'] ?></th>
                    
                            <th><?= $row['Sname'] ?></th>
                            <th><?= $row['SAddNo'] ?></th>
                            <th><?= $row['SUname'] ?></th>
                                           
                            <th> <a href = "teacherupdatemarks.php?id=<?= $row['id']?>"><input type="submit" value="Submit"></a></th>
                        </tr>

                                <?php
                              }



                            }
                            else{
                              echo "No Data found";
                            }
                        ?>



                           

             
                <tr>

  </tr>

  <style>
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
  </div>

</body>
</html>
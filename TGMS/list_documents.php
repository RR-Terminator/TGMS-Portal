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
        <h1>Upload Certificates</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
      
      </div>        

            <section class="attendance">
                        <div class="attendance-list">
                          <h1>Upload Your Certificates Here </h1><br>

                          <table>

                          <tr>
                    
                            <th>Sr No</th>
                            <th>Certficate / Internship Title </Title></th>
                            <th>Certficate / Internship Description</th>
                            <th>File Name</th>
                            <th> Action </th>
                        </tr>



            <?php

                $sname = "localhost";
                $unmae = "root";
                $password = "";
                $db_name = "studentinfo";
                $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                          
                $user_id = $_GET['id'];
                 $users = "SELECT * FROM  uploaddocs  WHERE std_id = '$user_id'";
                 $user_run = mysqli_query($conn, $users);

                if(mysqli_num_rows($user_run)> 0){

                foreach($user_run as $user){
                    $_SESSION['file_name']=$user['file_name'];
                    ?>

                   
                                           <tr>
                                           <th><?php echo $user['id'];?> </th>
                                            <th><?php echo $user['C_title'];?></th>
                                            <th><?php echo $user['C_des']?></th>
                                            <th><?php echo $user['file_name'];?></th>
                                    
                                          
                                            <th><a href = "View_docs.php?id=<?=$user['id']?>"><input type="submit" value="View"></a> </th> 
                                          </tr>
          
                    <?php

             }
            }
            else{

                echo "<h1>NO Record Found</h1>";
            }
                          
          ?>
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
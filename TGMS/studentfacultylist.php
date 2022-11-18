<?php
session_start();
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "studentinfo";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);


function getId($username){
    $sname = "localhost";
    $unmae = "root";
    $password = "";
    $db_name = "studentinfo";
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    $sel = "select id from  signinfo  where SUname = '$username'";
    $querry = mysqli_query($conn,$sel);
    while($r =  mysqli_fetch_assoc($querry)){
      return $r['id'];
    }
  }

  function getUsersData($id){
        $sname= "localhost";
        $unmae= "root";
        $password = "";
        $db_name = "studentinfo";
        $conn = mysqli_connect($sname, $unmae, $password, $db_name);
        $array =array();
        $q  = "SELECT * FROM signinfo WHERE id = '$id'";
        $querry_run = mysqli_query($conn, $q);
        while($result = mysqli_fetch_array($querry_run))
        {
            $array['id'] = $result['id'];
            $array['Sname'] =$result['Sname'];
            $array['SAddNo'] = $result['SAddNo'];
            $array['SUname'] = $result['SUname'];
            $array['Simage'] = $result['Simage'];
        }
        return $array;
    }

     if(isset($_SESSION['user_name'])){
    $usersData = getUsersData(getId($_SESSION['user_name']));
  }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>View Faculty</title>
  <link rel="stylesheet" href="css/DashBoard.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="StudentProfile.php" class="logo">
         <?php echo '<img src = "'.$usersData['Simage'].'">'?>
        <span class="nav-item"> 
        <?php  echo $_SESSION['user_name'].".";?>
          </span>
        </a></li>
        <li><a href="StudentProfile.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="stddocupload.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Upload Documents</span>
        </a></li>
        <li><a href="std_view_docs.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">View Documents</span>
        </a></li>
        <li><a href="std_Attendance.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
          <li><a href="stdviewmarks.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">View Performance</span>
        </a></li>
         <li><a href="studentfacultylist.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">View Faculty</span>
        </a></li>

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>View your faculty</h1>
        <i class="fas fa-user-cog"></i>
      </div>

      <div class="users">
      <?php

          $sname= "localhost";
          $unmae= "root";
          $password = "";
          $db_name = "teacherlogin";
          $conn = mysqli_connect($sname, $unmae, $password, $db_name);
          $array =array();


          $q  = "SELECT * FROM logininfo ";
          $querry_run = mysqli_query($conn, $q);
          while($result = mysqli_fetch_assoc($querry_run)){      
                   
            ?>
              <div class="card">
              <?php echo '<img src = "'.$result['profile_p'].'">'?>
          <h4><?php echo $result['teacher_name'];?> </h4>
          <p><?php echo $result['subject_name'];?></p>

        </div>
        <?php
        
          }

            ?>
      
      </div>


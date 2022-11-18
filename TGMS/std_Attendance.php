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
  <title>Attendance</title>
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
        <h1>Attendance </h1>
        <i class="fas fa-user-cog"></i>
      </div>
      
        <form action="stddocupload.php" method="post" class="book-form" enctype = "multipart/form-data">

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>View Your Attendance Here.. </h1><br>
                          <p> <p>

                          <table>
  <tr>
    <th> </th>
    <th>Sr No</th>
    <th>Subject Name</th>
    <th> No Of Lecture Conducted</th>
    <th> No Of Lecture Attended</th>

  </tr>
 <tr>

 <?php
                          
                           $user_id = $usersData['id'];
                 $users = "SELECT * FROM  studentattendance  WHERE Student_id = '$user_id'";
                 $user_run = mysqli_query($conn, $users);

                if(mysqli_num_rows($user_run)> 0){

                foreach($user_run as $user){
                    
                    ?>
            <tr>
                <th>1</th>
                <th>Internet Programing</th>
                <th><?=$user['IPT']?><th>
                <th><?=$user['IPA']?><th>
                
            </tr>
            <tr>


            <tr>
                <th>2</th>
                <th>Software Enginering</th>
                <th><?=$user['SETA']?><th>
                <th><?=$user['SEA']?><th>
                
               
                
                <th> </th>
            </tr>
            <tr>
                <tr>
                <th>3</th>
                <th>Advance DataBase Management </th>
                <th><?=$user['ADMTT']?><th>
                <th><?=$user['ADMTA']?><th>
                
                <th></th>               
            </tr>
            <tr>
                <tr>
                <th>4</th>
                <th>Computer Network Security</th>
                <th><?=$user['CNST']?><th>
                <th><?=$user['CNSA']?><th>
                
            </tr>
            <tr>
                <tr>
                <th>5</th>
                <th>Enterpernurship And Enterprunal Bussiness</th>
                <th><?=$user['EEBT']?><th>
                <th><?=$user['EEBA']?><th>
                <th></th>
            </tr>
            <tr>
            </tr>
        

            <tr>
                <tr>
                <th></th>
                <th>Total</th>
                <th><?=$user['Total_C']?><th>
                <th><?=$user['Total_A']?><th>
               


              </tr> <br>
                        <?php

             }
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
                   
    </section>
        </form>
  </div>

</body>
</html>
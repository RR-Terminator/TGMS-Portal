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
  <title>View Certificates</title>
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
                          
                           $user_id = $usersData['id'];
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
</div>
</section>
</body>
</html>

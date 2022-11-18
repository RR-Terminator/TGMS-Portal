<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Create Teacher</title>
  <link rel="stylesheet" href="css/DashBoard.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
   integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
         <img src = "images\admin.png">
        <span class="nav-item"> 
        <h3>Admin</h3>
          </span>
        </a></li>
        <li><a href="adminteacherProfile.php">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Add Teacher Profile</span>
        </a>
      </li>
        <li>
          <a href = "AdminteacherList.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">View Teacher List</span>
        </a>
      </li>
        <li><a href="adminstudentlist.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">Student List</span>
        </a></li>
        <li><a href="admincontact.php">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Contact us Details</span>
        </a></li>
       

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
      <section class="main">
      <div class="main-top">
        <h1>Add Profile</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
         </div>
           <section class="main">

           

    

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>View Teacher List </h1><br>


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
          
         
        </div>
        <?php
        
          }

            ?>
      
      </div>
        </section>
        </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact us page</title>
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
        <h1>View Reviews</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
         </div>
           <section class="main">

           

    

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>Review List </h1><br>

                          <table>

                          <tr>
                    
                            <th>Sr No</th>
                            <th>Addmission Number</th>
                            <th>Department</th>
                            <th>Name</th>
                            <th> Email </th>
                            <th> phone </th>
                            <th> Academicyear </th>
                            <th> Review </th> 

                        </tr>


                         <?php 

                          $sname= "localhost";
                           $unmae= "root";
                            $password = "";
                            $db_name = "teacherlogin";
                            $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                            $sel = "SELECT * FROM `contact us` ";
                            $querry = mysqli_query($conn , $sel);
                            if(mysqli_num_rows($querry) > 0){
                              foreach($querry  as $row){
                                
                                
                                ?>

                                 <tr>

                            <th><?= $row['srno'] ?></th>
                            <th><?= $row['Addno'] ?></th>
                            <th><?= $row['Dept'] ?></th>
                            <th><?= $row['Name'] ?></th>
                            <th><?= $row['email'] ?></th>
                            <th><?= $row['phone'] ?></th>
                            <th><?= $row['Academicyear']?></th>
                            <th><?= $row['Desscription'] ?></th>
                        </tr>

                                <?php
                              }



                            }
                            else{
                              echo "No Data found";
                            }
                        ?>


</table>
</section>

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
        background-color: lightblue;
        }
  </style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance </title>
  <link rel="stylesheet" href="css/DashBoard.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
        <ul>

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
        <h1>Your Details</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <?php
      $sname= "localhost";
      $unmae= "root";
      $password = "";
      $db_name = "studentinfo";
      $conn = mysqli_connect($sname, $unmae, $password, $db_name);

      if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $users = "SELECT * FROM  signinfo WHERE id = '$user_id'";
        $user_run = mysqli_query($conn, $users);

        if(mysqli_num_rows($user_run)> 0){

          foreach($user_run as $user){

            ?>

                  <div class="container">
                    <div class="main-body">
                          <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                              <div class="card">
                                <div class="card-body">
                                  <div class="d-flex flex-column align-items-center text-center">
                                  <?php echo '<img src = "'.$user['Simage'].'">'?>
                                    <div class="mt-3">
                                    <h6 class="mb-0">Name</h6>
                                      <h4> <?php echo $user['Sname'].$user['FatherName'];?> </h4>
                                      <p class="text-secondary mb-1"> </p>
                                    </div>

                                    <div class="mt-3">
                                    <h6 class="mb-0">Admission Number</h6>
                                      <h4> <?php echo $user['SAddNo']?> </h4>
                                      <p class="text-secondary mb-1"> </p>
                                    </div>




                                    <div class="mt-3">
                                    <h6 class="mb-0">Father Name</h6>
                                      <h4> <?php echo $user['FatherName'];?> </h4>
                                      <p class="text-secondary mb-1"> </p>
                                    </div>


                                    <div class="mt-3">
                                    <h6 class="mb-0">Mother Name</h6>
                                      <h4> <?php echo $user['MotherName'];?> </h4>
                                      <p class="text-secondary mb-1"> </p>
                                    </div>


                                    <div class="mt-3">
                                    <h4 class="mb-0">Contact Details</h4>
                                      
                                    </div>

                                    <div class="mt-3">
                                    <h6 class="mb-0"> Father Phone</h6>
                                      <h4> <?php echo $user['FatherPhone'];?> </h4>
                                      <p class="text-secondary mb-1"> </p>
                                    </div>

                                    <div class="mt-3">
                                    <h6 class="mb-0"> Mother Phone</h6>
                                      <h4> <?php echo $user['MotherPhone'];?> </h4>
                                      <p class="text-secondary mb-1"> </p>
                                    </div>

                                    <div class="mt-3">
                                    <h6 class="mb-0"> Address</h6>
                                      <h4> <?php echo $user['Saddress'];?> </h4>
                                      <p class="text-secondary mb-1"> </p>
                                    </div>

                                    <div class="inputBox">
                                        <tr>
                                          <span>QUALIFICATION DETAILS </span>
                                            
                                          <td>
                                          <table>
                                            
                                          <tr>
                                          <td align="center"><b>Sl.No.</b></td>
                                          <td align="center"><b>Examination</b></td>
                                          <td align="center"><b>Board</b></td>
                                          <td align="center"><b>Percentage</b></td>
                                          <td align="center"><b>Year of Passing</b></td>
                                          </tr>
                                            
                                          <tr>
                                          <td>1</td>
                                          <td>Class X</td>
                                          <td><?php echo $user['sscboard'];?></td>
                                          <td><?php echo $user['sscmarks'];?></td>
                                          <td><?php echo $user['sscyear'];?></td>
                                          </tr>
                                            
                                          <tr>
                                          <td>2</td>
                                          <td>Class XII</td>
                                          <td><?php echo $user['hscborad'];?></td>
                                          <td><?php echo $user['hscmarks'];?></td>
                                          <td><?php echo $user['hscyear'];?></td>
                                          </tr>
                                            
                                          <tr>
                                          <td>3</td>
                                          <td>FE</td>
                                          <td><?php echo $user['fe'];?></td>
                                          <td><?php echo $user['femarks'];?></td>
                                          <td><?php echo $user['feyear'];?></td>
                                          </tr>
                                            
                                          <tr>
                                          <td>4</td>
                                          <td>SE</td>
                                          <td><?php echo $user['se'];?></td>
                                          <td><?php echo $user['semarks'];?></td>
                                          <td><?php echo $user['seyear'];?></td>
                                          </tr>                                
                                          <tr>
                                              <td>4</td>
                                              <td>TE</td>
                                              <td><?php echo $user['te'];?></td>
                                              <td><?php echo $user['temarks'];?></td>
                                              <td><?php echo $user['teyear'];?></td>
                                              </tr>
                                          <tr>

                                          <tr>
                                              <td>5</td>
                                              <td>BE</td>
                                              <td><?php echo $user['be'];?></td>
                                              <td><?php echo $user['bemarks'];?></td>
                                              <td><?php echo $user['beyear'];?></td>
                                              </tr>
                                        </tr>
                          </div>
                          </div>
                
                        </div>
                    </div>
                  </section>     
                  </div>

                  <?php
                  
                }

              }
            
            }
            ?>
</body>
</html>
  <script src="js/script.js"></script>
  </body>
</html>
<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "studentinfo";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(isset($_GET['id'])){
  $user_id = $_GET['id'];
  $users = "SELECT * FROM  signinfo WHERE id = '$user_id'";
  $user_run = mysqli_query($conn, $users);

  if(mysqli_num_rows($user_run)> 0){

    foreach($user_run as $user){
      
    }

  }
 
}
?>

  








 
  







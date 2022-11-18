<?php
    session_start();
    $sname= "localhost";
    $unmae= "root";
    $password = "";
    $db_name = "studentinfo";
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

    $sel = "SELECT * FROM signinfo ";
    $querry = mysqli_query($conn , $sel);
    $result = mysqli_fetch_assoc($querry);

    $username = $_SESSION['user_name'];

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
    while($result = mysqli_fetch_array($querry_run)){

        $array['id'] = $result['id'];
        $array['Sname'] =$result['Sname'];
        $array['SAddNo'] = $result['SAddNo'];
        $array['SUname'] = $result['SUname'];
        $array['Semail'] = $result['Semail'];
        $array['FatherName'] = $result['FatherName'];
        $array['FatherEmail'] = $result['FatherEmail'];
        $array['FatherPhone'] = $result['FatherPhone'];
        $array['MotherName'] = $result['MotherName'];
        $array['MotherEmail'] = $result['MotherEmail'];
        $array['MotherPhone'] = $result['MotherPhone'];
        $array['cademicyear'] = $result['Academicyear'];
        $array['Saddress'] = $result['Saddress'];
        $array['Simage'] = $result['Simage'];
        $array['sscboard'] = $result['sscboard'];
        $array['sscmarks'] = $result['sscmarks'];
        $array['sscyear'] = $result['sscyear'];
        $array['hscborad'] = $result['hscborad'];
        $array['hscmarks'] = $result['hscmarks'];
        $array['hscyear'] = $result['hscyear'];
        $array['fe'] = $result['fe'];
        $array['femarks'] = $result['femarks'];
        $array['feyear'] = $result['feyear'];
        $array['se'] = $result['se'];
        $array['semarks'] = $result['semarks'];
        $array['seyear'] = $result['seyear'];
        $array['te'] = $result['te'];
        $array['temarks'] = $result['temarks'];
        $array['teyear'] = $result['teyear'];
        $array['be'] = $result['be'];
        $array['bemarks'] = $result['bemarks'];
        $array['beyear'] = $result['beyear'];
  }
    return $array;


   }

  

  if(isset($_SESSION['user_name'])){
    $usersData = getUsersData(getId($_SESSION['user_name']));

  }

  $_SESSION['S_image']= $usersData['Simage'];



?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Profile</title>
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
        <h1>Your Details</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="container">
        <div class="main-body">
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <table>
                        <tr>
                      <th> <div class="w3-card">

                              <?php echo '<img src = "'.$usersData['Simage'].'"  Width = "300" Height = "300">'?>
                                    
                              </div></th>
                              <style>
                            .w3-card{
                              width:30%;
                            }
                            .w3-card:hover{
                              box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)
                            }
                       </style>
                        <th><div class="mt-3">
                        <h6 class="mb-0">Name</h6>
                          <h4> <?php echo $usersData['Sname'].$usersData['FatherName'];?> </h4>
                          <p class="text-secondary mb-1"> </p>
                        </div></th> <br>
                        <th> </th>
                      
                      
                       <th> <div class="mt-3">
                        <h6 class="mb-0">Admission Number</h6>
                          <h4> <?php echo $usersData['SAddNo']?> </h4>
                          <p class="text-secondary mb-1"> </p>
                        </div><th>
                      </tr>




                        <div class="mt-3">
                        <h6 class="mb-0">Father Name</h6>
                          <h4> <?php echo $usersData['FatherName'];?> </h4>
                          <p class="text-secondary mb-1"> </p>
                        </div>


                        <div class="mt-3">
                        <h6 class="mb-0">Mother Name</h6>
                          <h4> <?php echo $usersData['MotherName'];?> </h4>
                          <p class="text-secondary mb-1"> </p>
                        </div>


                        <div class="mt-3">
                        <h4 class="mb-0">Contact Details</h4>
                          
                        </div>

                        <div class="mt-3">
                        <h6 class="mb-0"> Father Phone</h6>
                          <h4> <?php echo $usersData['FatherPhone'];?> </h4>
                          <p class="text-secondary mb-1"> </p>
                        </div>

                        <div class="mt-3">
                        <h6 class="mb-0"> Mother Phone</h6>
                          <h4> <?php echo $usersData['MotherPhone'];?> </h4>
                          <p class="text-secondary mb-1"> </p>
                        </div>

                        <div class="mt-3">
                        <h6 class="mb-0"> Address</h6>
                          <h4> <?php echo $usersData['Saddress'];?> </h4>
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
                              <td><?php echo $usersData['sscboard'];?></td>
                              <td><?php echo $usersData['sscmarks'];?></td>
                              <td><?php echo $usersData['sscyear'];?></td>
                              </tr>
                                
                              <tr>
                              <td>2</td>
                              <td>Class XII</td>
                              <td><?php echo $usersData['hscborad'];?></td>
                              <td><?php echo $usersData['hscmarks'];?></td>
                              <td><?php echo $usersData['hscyear'];?></td>
                              </tr>
                                
                              <tr>
                              <td>3</td>
                              <td>FE</td>
                              <td><?php echo $usersData['fe'];?></td>
                              <td><?php echo $usersData['femarks'];?></td>
                              <td><?php echo $usersData['feyear'];?></td>
                              </tr>
                                
                              <tr>
                              <td>4</td>
                              <td>SE</td>
                              <td><?php echo $usersData['se'];?></td>
                              <td><?php echo $usersData['semarks'];?></td>
                              <td><?php echo $usersData['seyear'];?></td>
                              </tr>

                              
                                
                              <tr>
                                  <td>4</td>
                                  <td>TE</td>
                                  <td><?php echo $usersData['te'];?></td>
                                  <td><?php echo $usersData['temarks'];?></td>
                                  <td><?php echo $usersData['teyear'];?></td>
                                  </tr>
                              <tr>

                              <tr>
                                  <td>5</td>
                                  <td>BE</td>
                                  <td><?php echo $usersData['be'];?></td>
                                  <td><?php echo $usersData['bemarks'];?></td>
                                  <td><?php echo $usersData['beyear'];?></td>
                                  </tr>
                            </tr>
                        



                                      
                    
    
                
    
    
    
                </div>
              </div>
    
            </div>
        </div>

       </section>

     
  </div>

</body>
</html>





  


  <script src="js/script.js"></script>
  </body>
</html>
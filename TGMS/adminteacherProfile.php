<?php
    session_start();
    $sname= "localhost";
                  $unmae= "root";
                  $password = "";
                  $db_name = "teacherlogin";
                  $conn = mysqli_connect($sname, $unmae, $password, $db_name);

                  if(isset($_POST['upload'])){
                    $uesrname = $_POST['username'];
                    $teacher_name = $_POST['teachername'];
                    $Password = $_POST['password'];
                    $assign_subject =$_POST['subject'];
                    $files = $_FILES['file'];

                   $pass=md5($Password); 

                    $filename = $files['name'];
                    $fileerror = $files['error'];
                    $filetmp = $files['tmp_name'];

                    $fileext = explode('.',$filename);
                    $filecheck = strtolower(end($fileext));

                    $fileextsorted = array('png','jpg','jpeg');

                    if(in_array($filecheck,$fileextsorted)){

                          $destinationfile = 'Teacher Profile/'.$filename;
                          move_uploaded_file($filetmp,$destinationfile);

                        $sql_querry= " INSERT INTO `logininfo`( `UserName`, `teacher_name`, `subject_name`, `Password`, `profile_p`) 
                                                      VALUES ('$uesrname','$teacher_name','$assign_subject','$pass','$destinationfile')";

                                                      $result = mysqli_query($conn,$sql_querry);

                                                      if($result)
                                                              {
                                                                header("location:adminPage.php");
                                                              }
                                                              else{
                                                                echo "Fail";
                                                              }





                  }
                }

?>

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

      
        <form action="adminteacherProfile.php" method="post" class="book-form" enctype = "multipart/form-data">

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>Add Teacher Profile Here.. </h1><br>

                            <div class="form-group">
              <label for="exampleInputEmail1">Enter UserName Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder=" Enter Username name" name = "username">
              
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Enter Teacher Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder=" Enter Teacher name" name = "teachername">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Assign Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" 
              name= "password">
            </div>
           
              <div class="form-group">
              <label for="exampleInputEmail1">Assign Subject  </label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Subject" name = "subject">
              
            </div>

                <div class="form-group">
              <label for="exampleInputEmail1">upload Profile </label>
              <input type="file" placeholder="upload your photo" name="file" id="file">
              
            </div>
  <button type="submit" class="btn btn-primary" name = "upload">Submit</button>



</form>
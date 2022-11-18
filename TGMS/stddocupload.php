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
  if(isset($_POST['upload']))
  {
      $Cetificate_Subject = $_POST['CName'];
      $Certificate_description = mysqli_real_escape_string($conn,$_POST['description']);
      $std_id = $usersData['id']; 
      
      $files = $_FILES['file'];
      $filename = $files['name'];
      $fileerror = $files['error'];
      $filetmp = $files['tmp_name'];

      $fileext = explode('.',$filename);
      $filecheck = strtolower(end($fileext));

      $fileextsorted = array('png','jpg','jpeg','pdf');
      if(in_array($filecheck,$fileextsorted)){

         $destinationfile = 'Student_Uploads/'.$filename;
         move_uploaded_file($filetmp,$destinationfile);

        $sql="INSERT INTO uploaddocs (`std_id`,`C_title`, `C_des`, `file_name`) VALUES 
        ('$std_id','$Cetificate_Subject','$Certificate_description','$destinationfile')";
        $result = mysqli_query($conn,$sql);    
      if($result)
            {
              header("location:std_view_docs.php");
            }  
      else{
          header("location:stddocupload.php");
        }
      }
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Upload Certificates</title>
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
      
        <form action="stddocupload.php" method="post" class="book-form" enctype = "multipart/form-data">

                      <section class="attendance">
                        <div class="attendance-list">
                          <h1>Upload Your Certificates Here </h1><br>
                          <p> <p>

                       


                            <style>
                              .btn {
                                border: 2px solid gray;
                                color: gray;
                                background-color: white;
                                padding: 8px 20px;
                                border-radius: 8px;
                                font-size: 20px;
                                font-weight: bold;
                              }


                              .upload-btn-wrapper input[type=file] {
                                font-size: 100px;
                                position: absolute;
                                left: 0;
                                top: 0;
                                opacity: 0;
                              }
                              input[type=submit] {
                              width: 100%;
                              background-color: #4CAF50;
                              color: white;
                              padding: 14px 20px;
                              margin: 8px 0;
                              border: none;
                              border-radius: 4px;
                              cursor: pointer;
                            }
                            input[type=text], select {
                                width: 100%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                              }
                            </style>
                    <label for="fname">COURSE / INTERNSHIP NAME</label>
                    <input type="text" id="fname" name="CName" placeholder="Course / InternShip name..">

                    <label for="lname">Decription of the Course </label>
                    <input type="text" id="lname" name="description" placeholder="how many days does it was going on">

                    <label for="SEM">IN WHICH SEMESTER YOU HAVE COMPLETED</label>
                    <select id="SEM" name="SEM">
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option><br>
                      
                    </select>
                    <p> <p><br>

                    
                  


                <div class="mb-3">
                  <label for="formFile" class="form-label"> CHOOSE FILE </label>
                  <input class="btn" type="file" id="formFile" name = "file">
                </div>  
                </div>
                        <p><p><br>
                    <input type="submit" value="Submit" name = "upload">
                  </div>
                        
                    </section>
        </form>
  </div>

</body>
</html>
<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "studentinfo";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);



if(isset($_POST['send'])){
   $StudentName = $_POST['Sname'];
   $AddNo = mysqli_real_escape_string($conn,$_POST['Addmission']);
   $UserName = mysqli_real_escape_string($conn,$_POST['UName']);
   $Email = mysqli_real_escape_string($conn,$_POST['Email']);
   $Password = mysqli_real_escape_string($conn,$_POST['Password']);
   $CPassword = mysqli_real_escape_string($conn,$_POST['CPassword']);
   $Fathername = $_POST['Fname']; 
   $Fatheremail = $_POST['Femail']; 
   $Fatherphone = $_POST['Fphone'];
   $Mothername = $_POST['Mname']; 
   $Motheremail = $_POST['Memail']; 
   $Motherphone = $_POST['Mphone'];
   $aacc = $_POST['arrivals'];
   $address = $_POST['address'];
   $files = $_FILES['file'];
   
   $sscb = $_POST['SSCBoard'];
   $sscm = $_POST['SSCMarks'];
   $sscy = $_POST['SSCYear'];


   $hscb = $_POST['HSCBoard'];
   $hscm = $_POST['HSCMarks'];
   $hscy = $_POST['HSCYear'];

   $fe = $_POST['FE'];
   $fema = $_POST['FEMarks'];
   $feye = $_POST['FEYear'];


   $se = $_POST['SE'];
   $sema = $_POST['SEMarks'];
   $seye = $_POST['SEYear'];

   $te = $_POST['TE'];
   $tema = $_POST['TEMarks'];
   $teye = $_POST['TEYear'];

   $be = $_POST['BE'];
   $bema = $_POST['BEMarks'];
   $beye = $_POST['BEYear'];


   if(empty($Fathername) ||empty($Fatherphone) || empty($Motherphone) || empty($Mothername) || empty($aacc) 
      ||empty($address)){

         echo "xxx";
          }
   else{

      if($Password!=$CPassword)
      {
          echo ' Password Not Matched ';
      }


     else{
      $pass=md5($Password);
      $filename = $files['name'];
      $fileerror = $files['error'];
      $filetmp = $files['tmp_name'];

      $fileext = explode('.',$filename);
      $filecheck = strtolower(end($fileext));

      $fileextsorted = array('png','jpg','jpeg');
      if(in_array($filecheck,$fileextsorted)){

         $destinationfile = 'Student Image/'.$filename;
         move_uploaded_file($filetmp,$destinationfile);

         $sql= "INSERT INTO signinfo (Sname,SAddNo,SUname,Semail,Spassword,FatherName, FatherEmail, FatherPhone, 
         MotherName, MotherEmail, MotherPhone, Academicyear, Saddress,Simage, `sscboard`, `sscmarks`, `sscyear`,
          `hscborad`, `hscmarks`, `hscyear`, `fe`, `femarks`, `feyear`, `se`, `semarks`, `seyear`, `te`, `temarks`,
           `teyear`, `be`, `bemarks`, `beyear`)	
          
      values ('$StudentName','$AddNo','$UserName','$Email','$pass','$Fathername','$Fatheremail','$Fatherphone', '$Mothername',
      '$Motheremail','$Motherphone','$aacc','$address','$destinationfile','$sscb','$sscm','$sscy','$hscb','$hscm','$hscy','$fe '
      ,'$fema','$feye','$se','$sema','$seye','$te','$tema','$teye','$be',' $bema ','$beye')";
      $result = mysqli_query($conn,$sql);

      



      if($result)
            {
               header("location:std_login.php");
            }
      }
     }
   }
}
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>signin</title>

      <!-- swiper css link  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style.css">

   </head>
   <body>
      
   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">TGMS</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="contact.php">contact us</a>
         <a href="signin.php">Sign in</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>Sign-in Form</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">
   <h1 class="heading-title">Register Yourself...</h1>


      <form action="std_info.php" method="post" class="book-form" enctype = "multipart/form-data">
      <div class="flex">
      <div class="inputBox">
               <span>Enter Your Name</span>
               <input type="text" placeholder="enter your Name" name="Sname">
            </div>
         <div class="inputBox">
               <span>Admission no:</span>
               <input type="text" placeholder="enter your admission no." name="Addmission">
            </div>
            <div class="inputBox">
               <span>Username</span>
               <input type="text" placeholder="enter your UserName" name="UName">
            </div>

            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="Email">
            </div>

            <div class="inputBox">               
               <span>Password : </span>
               <input type="password" placeholder="enter your Password" name="Password">
            </div>

            <div class="inputBox">               
               <span>Conform your password:</span>
               <input type="password" placeholder="enter your Password" name="CPassword">
            </div>
           
           
        
         

            <div class="inputBox">               
               <span>Father Name :</span>
               <input type="text" placeholder="Enter your name Father Name" name="Fname">
            </div>
            <div class="inputBox">
               <span>Father email :</span>
               <input type="email" placeholder="Enter your Father Email" name="Femail">
            </div>
            <div class="inputBox">
               <span>Father Phone :</span>
               <input type="text" placeholder="Enter Father Phone No:-" name="Fphone">
            </div>   
            
            <div class="inputBox">               
               <span>Mother Name :</span>
               <input type="text" placeholder="Enter your name Mother Name" name="Mname">
            </div>
            <div class="inputBox">
               <span>Mother email :</span>
               <input type="email" placeholder="Enter your Mother Email" name="Memail">
            </div>
            <div class="inputBox">
               <span>Mother Phone :</span>
               <input type="text" placeholder="Enter Mother Phone No:-" name="Mphone">
            </div>
            
            <div class="inputBox">
               <span>academic year :</span>
               <input type="date" name="arrivals">
            </div>
            
            
            <div class="inputBox">
               <span> Address:</span>
               <input type="address" placeholder="enter your new Address" name="address">
</div>        

<div class="inputBox">
               <span> Update photo :</span>
               <input type="file" placeholder="upload your photo" name="file" id="file">
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
   <td><input type="text" maxlength="30" name = "SSCBoard"/></td>
   <td><input type="text" maxlength="30" name="SSCMarks"/></td>
   <td><input type="text" maxlength="30" name = "SSCYear"/></td>
   </tr>
    
   <tr>
   <td>2</td>
   <td>Class XII</td>
   <td><input type="text" maxlength="30" name = "HSCBoard" /></td>
   <td><input type="text" maxlength="30" name="HSCMarks"/></td>
   <td><input type="text" maxlength="30" name = "HSCYear"/></td>
   </tr>
    
   <tr>
   <td>3</td>
   <td>FE</td>
   <td><input type="text"  maxlength="30"      name = "FE"/></td>
   <td><input type="text"  maxlength="30" name = "FEMarks"/></td>
   <td><input type="text"  maxlength="30"name ="FEYear" /></td>
   </tr>
    
   <tr>
   <td>4</td>
   <td>SE</td>
   <td><input type="text"  maxlength="30" name =  "SE"/></td>
   <td><input type="text"  maxlength="30" name = "SEMarks"/></td>
   <td><input type="text"  maxlength="30" name = "SEYear"></td>
   </tr>

   
    
   <tr>
      <td>4</td>
      <td>TE</td>
      <td><input type="text" maxlength="30" Name = "TE"/></td>
      <td><input type="text" maxlength="30" name="TEMarks"/></td>
      <td><input type="text" maxlength="30" name="TEYear"/></td>
      </tr>
   <tr>

   <tr>
      <td>5</td>
      <td>BE</td>
      <td><input type="text"  maxlength="30" name = "BE"/></td>
      <td><input type="text"  maxlength="30" name="BEMarks"/></td>
      <td><input type="text"  maxlength="30" name = "BEYear"/></td>
      </tr>
</tr>



   <td></td>
   <td></td>
   <td align="center">(10 char max)</td>
   <td align="center">(upto 2 decimal)</td>
   </tr>
   </table>
    
   </td>
   </tr>
</div>
    
   <div class="inputBox">
      <span>Upload Certificate :</span>
      <input type="file" placeholder="upload your certificate" name="phone">
   </div> 
   





         </div>

         <input type="submit" value="submit" class="btn" name="send">

      </form>


   </section>

   <!-- booking section ends -->

















   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.html"> <i class="fas fa-angle-right"></i> contact us</a>
            <a href="book.html"> <i class="fas fa-angle-right"></i> login</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> PHCET@mes.ac.in </a>
            <a href="#"> <i class="fas fa-map"></i> Rasayani, india - 400104 </a>
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>TGMS PORTAL</span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   </body>
   </html>

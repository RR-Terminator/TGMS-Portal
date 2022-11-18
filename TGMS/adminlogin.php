<?php
session_start();
   $sname= "localhost";
   $unmae= "root";
   $password = "";
   $db_name = "Teacherlogin";
   $conn = mysqli_connect($sname, $unmae, $password, $db_name);
   if(isset($_POST['send'])){
      $uname = $_POST['UserName'];
      $pass = $_POST['Password'];
      $query = "SELECT * FROM `adminlogin` WHERE uname='$uname'";
      $result = mysqli_query($conn, $query);

      if($row = mysqli_fetch_assoc($result)){
         $db_password = $row['Password'];
         if($pass == $db_password){
            header("location:adminPage.php");
         }
         else{
            echo "wrong";
         }
      }
      else{
         echo "fail";
      }
   }
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Login</title>

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
         <a href="signin.php">Sign in </a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      
   </div>

   <!-- booking section starts  -->

   <section class="booking">
   <h1 class="heading-title">Admin login!</h1>

      <form action="adminlogin.php" method="post" class="book-form">

         <div class="flex">
            
         
            <div class="inputBox">
               <span>Username</span>
               <input type="text" required placeholder="Enter Your Username....." name="UserName" >
            </div>

            <div class="inputBox">               
               <span>password;</span>
               <input type="password" placeholder="Enter Your Password" name="Password" required>
            </div>
            
    
            
           
         </div>


  
 
       <input type="submit" value="login" class="btn" name="send" > 

           
         
         </div>


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

      <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>
   </section>
  <!-- footer section ends -->
   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   </body>
   </html>
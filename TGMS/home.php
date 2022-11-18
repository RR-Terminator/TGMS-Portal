<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>home</title>

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
         <a href="contact.php">Contact Us</a>
         <a href="signin.php">Sign in </a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/bg.jpg) no-repeat">
               <div class="content">
                  <span id = "author"> </span>
                  <h5 id = "quote"> </h5>
                  <a href="package.html" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/bg1.jpg) no-repeat">
               <div class="content">
                  <span>Choose the right theme for education </span>
                  <h3>An investment in knowledge pays the best intrest</h3>
                  <a href="package.html" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/bg2.jpg) no-repeat">
               <div class="content">
                  <span>It's never too late to study</span>
                  <h3>take your first step to knowledge with us</h3>
                  <a href="package.html" class="btn">discover more</a>
               </div>
            </div>
            
         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- home section ends -->


    <!-- home packages section starts  -->

    <section class="home-packages">


<div class="box-container">

   <div class="box">
      <div class="image">
         <img src="images\teacher_pic.jpg" alt="">
      </div>
      <div class="content">
         <h3>Teachers Section</h3>
         <a href="teacher_login.php" class="btn">Login</a>
      </div>
   </div>

   
   
   <div class="box">
      <div class="image">
         <img src="images/student_pic.jpg" alt="">
      </div>
      <div class="content">
         <h3>Student Section</h3>
         <a href="std_login.php" class="btn">login</a>
      </div>
   </div>

</div>


</section>

<!-- home packages section ends -->




   <!-- services section starts  -->

  <section class="services">
         <h1 class="heading-title"> Students portal </h1>
   
         <div class="box-container">


            <div class="box"><a  href="std_login.php">
                  <img src="images/icon-2.png" alt="">
                  <h3 >view a Profile</h3>
                  </a>
            </div>
   
            <div class="box"><a  href="std_login.php">
               <img src="images/icon-1.png" alt="">
               <h3>Update student information</h3>
               </a>
            </div>
   
            <div class="box"> <a  href="std_login.php">
               <img src="images/icon-2.png" alt="">
               <h3 >view academic Calender</h3>
            </a>            
            </div>

            <div class="box">
              
               <img src="images/icon-4.png" alt="std_login.php">
               <h3> Upload certificates</h3>
               </a>
            </div>
                <div class="box"> <a href="std_login.php">
               <img src="images/icon-3.png" alt="">
               <h3>View Uploaded Certificates</h3>
               </a>
            </div>
   
            <div class="box">  <a href="std_login.php">
               <img src="images/icon-5.png" alt="">
               <h3>view academic performance</h3>
            </a>
            </div>
   
        
   
            <div class="box"><a  href="https://meet.google.com/">
               <img src="images/icon-6.png" alt="">
               <h3>Meet</h3>

            </a>
            </div>
   
           
   
         </div>
   
   
      </section>

   <!-- services section ends -->

   <!-- home about section starts  -->

   <section class="home-about">

      <div class="image">
         <img src="images/clg1.jpg" alt="">
      </div>

      <div class="content">
         <h3>Vision</h3>
         <p>Pillai HOC College of Engineering and Technology will admit, 
            educate and train for engineering graduation, a diverse population of students who
             are academically prepared to benefit from the Institute
             infrastructure and experience to become responsible professionals in a technical arena. 
             It will further attract, develop and retain, dedicated, excellent teachers, scholars and 
             professionals from diverse backgrounds whose work give them visibility beyond 
             the classroom
             and who are committed to making a significa
             nt difference in the lives of their students and the community.</p>
             <a href="about.html" class="btn">read more</a>
      </div>
</section>
<section class="home-about">
      <div class="image">
         <img src="images/clg2.jpg" alt="">
      </div>

      <div class="content">
         <h3>Mission</h3>
         <p>To Develop Professional Engineers
             With Respect For The Environment, And Make 
             Them Responsible Citizens In Technical Development Both From An 
             Indian And Global Perspective, And This Objective Is Fulfilled Through Quality Education, 
             Practical Training And Interaction With Industries And Social Organizations.
            </p><a href="about.html" class="btn">read more</a>
      </div>
   </section>

   <!-- home about section ends -->
   
   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> contact us</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> Login</a>
         </div>

  

         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> PHCET@.mes.ac.in </a>
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

      <div class="credit"> created by <span>TGMS Portal</span> | all rights reserved! </div>
   </section>
   <!-- footer section ends -->
 <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>
   </body>
   </html>
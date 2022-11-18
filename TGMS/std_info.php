<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "studentinfo";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);
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
   $Motherphone = $_POST['Mphone'] ;
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
               header("location:std_login.php");;
            }
      }
     }
   }
}
?>
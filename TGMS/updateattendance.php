<?php

            $sname= "localhost";
            $unmae= "root";
            $password = "";
            $db_name = "studentinfo";
            $conn = mysqli_connect($sname, $unmae, $password, $db_name);
               
              
              
              if(isset($_POST['update'])){
                    $std_id = $_POST['user_id'];
                    $IPTotal = $_POST['IPT'];
                    $IPAttend = $_POST['IPA'];
                    $SETotal  = $_POST['SETA'];
                    $SEAttend = $_POST['SETA'];
                    $ADMTTotal = $_POST['ADMTT'];
                    $ADMTAttend=$_POST['ADMTA'];
                    $CNSTotal = $_POST['CNST'];
                    $CNSAttend =$_POST['CNSA'];
                    $EEBTotal = $_POST['EEBT'];
                    $EEBAttend = $_POST['EEBA'];
                    $TotalC =  $IPTotal+ $SETotal + $ADMTTotal + $CNSTotal + $EEBTotal ;
                    $TotalAttend = $IPAttend+$SEAttend+$ADMTAttend+$CNSAttend+$EEBAttend;

             
   
                           $sql = "UPDATE studentattendance SET `IPT`='$IPTotal',`IPA`='$IPAttend',`SETA`='$SETotal',`SEA`='$SEAttend',`ADMTT`='$ADMTTotal',
                           `ADMTA`='$ADMTAttend',`CNST`='$CNSTotal',`CNSA`='$CNSAttend',`EEBT`='$EEBTotal',`EEBA`='$EEBAttend',
                           `Total_C`='$TotalC',`Total_A`='$TotalAttend' WHERE Student_id = '$std_id'";
                            $run_query =  mysqli_query($conn ,$sql);
                            if($run_query){
                                header("location:teacherupdateattendance.php");
                            } 
                            else{
                            echo "fail";
                            }
     
                       }
              
                      
                  

?>
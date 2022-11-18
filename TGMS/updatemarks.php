<?php

            $sname= "localhost";
            $unmae= "root";
            $password = "";
            $db_name = "studentinfo";
            $conn = mysqli_connect($sname, $unmae, $password, $db_name);
               
              
              
              if(isset($_POST['update'])){
                    $std_id = $_POST['user_id'];

                    $IP1 = $_POST['IP1'];
                    $IP2 = $_POST['IP2'];
                    $IPTotal = $_POST['IPT'];
                    
                    
                    $SE1 = $_POST['SE1'];
                    $SE2 = $_POST['SE2'];
                    $SETotal  = $_POST['SETA'];
                    
                    $ADMT1 = $_POST['ADMT1'];
                    $ADMT2 = $_POST['ADMT2'];
                    $ADMTTotal = $_POST['ADMTT'];
                    
                    $CNS1 = $_POST['CNS1'];
                    $CNS2 = $_POST['CNS2'];
                    $CNSTotal = $_POST['CNST'];

                    $EEB1 = $_POST['EEB1'];
                    $EEB2 = $_POST['EEB2'];
                    $EEBTotal = $_POST['EEBT'];
                    
                    $Total1 =  $IP1+ $SE1+$ADMT1+$CNS1+$EEB1 ;
                    $Total2 = $IP2+ $SE2+$ADMT2+$CNS2+$EEB2 ;
                    $Average = ($Total1+$Total2)/2;
   
             
   
                           $sql = "UPDATE `studentmarks` SET `Student_id`='$std_id',`IP1`='$IP1',`IP2`='$IP2',
                           `IPT`='$IPTotal',`SE1`='$SE1',`SE2`='$SE2',`SETA`='$SETotal',`ADMT1`='$ADMT1',
                           `ADMT2`='$ADMT2',`ADMTT`='$ADMTTotal',`CNS1`='$CNS1',`CNS2`='$CNS2',`CNST`='$CNSTotal',`EEB1`='$EEB1',
                           `EEB2`='$EEB2',`EEBT`='$EEBTotal',`TOTAL1`='$Total1',`TOTAL2`='$Total2',`Average`='$Average' 
                            WHERE Student_id = '$std_id'";
                            $run_query =  mysqli_query($conn ,$sql);
                            if($run_query){
                                header("location:teacher_student_marks_List.php");
                            } 
                            else{
                            echo "fail";
                            }
     
                       }
              
                      
                  

?>
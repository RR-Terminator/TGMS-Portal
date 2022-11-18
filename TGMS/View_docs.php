<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
       session_start();

                $sname = "localhost";
                $unmae = "root";
                $password = "";
                $db_name = "studentinfo";
                $conn = mysqli_connect($sname, $unmae, $password, $db_name);
                if(isset($_GET['id'])){
                   $file = $_GET['id'];

                   $sql = "SELECT * FROM `uploaddocs` WHERE id = '$file'";
                   $sql_run =mysqli_query($conn , $sql);
                   $result = mysqli_fetch_assoc($sql_run);
                   if($result){
                    $fileread= $result['file_name'];
                    header("Content-type: application/pdf");
                    header('Content-Dispostion: inline;fliename="'.$fileread.'"');
                    header('Content-Transfer-Encoding: binary');
                    @readfile($fileread);
                   }
                    
                }
                    

                    ?>

    </div>

    <embed type="application/pdf" src="/Student_Uploads/<?php echo $result['file_name'];?>" width="900" height="500">

  </body>
</html>

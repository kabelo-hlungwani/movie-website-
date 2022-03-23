<?php

session_start();

$conn=mysqli_connect("localhost","root","","moviedb");

$id=$_GET['edt'];

   
     
    $sql2="DELETE FROM film WHERE movie_id= '$id'";


    
    $result2=mysqli_query($conn,$sql2);



    if (!$result2) {
    	echo "db access denied ".mysqli_error();
    }else{
      echo '<script>alert("Movie permanetly deleted.");window.location = "bin.php";</script>';
      exit;
  }
  

?>
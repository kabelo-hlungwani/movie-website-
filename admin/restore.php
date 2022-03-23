
    <?php
    include 'connect.php';
      
      // Check connection
      if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
       session_start();
       $email=$_SESSION['email'];
       $id=$_SESSION['admin_id'];
      
       $idd=$_GET['edt'];
  
  
  
  
  
    
  $command="UPDATE  film
   SET 
   bin='0'
   WHERE movie_id='$idd'";
  
  
  
  $edit=mysqli_query($conn,$command);
    
  
  if($edit){
  mysqli_close($conn);
  
       
  echo '<script>alert("Movie Restored.");window.location = "bin.php";</script>';
  
  exit;
  
  }
  else
  {
      echo mysqli_error();
  
  }
  
  
  
  ?>




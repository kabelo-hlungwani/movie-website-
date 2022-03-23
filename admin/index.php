<!DOCTYPE html>
<html lang="en">
<?php
 
 include 'connect.php'; 

if(isset($_POST['email']) && isset($_POST['password'])){
 //Assign

$email=$_POST['email'];
$password=md5($_POST['password']);
session_start();

//check record


$query="select * from admin where email='$email'";



$result=mysqli_query($conn,$query) or die(mysqli_error($conn));


$row=mysqli_fetch_array($result);


if($row !== null && strtolower($row['email'])==strtolower($email) && $row['password']==$password)
{


   
    $_SESSION['email']=$row['email'];
    $email=$_SESSION['email'];
    $_SESSION['admin_id']=$row['admin_id'];
    $id=$_SESSION['admin_id'];
   
    
echo '<script>window.location = "dash.php";</script>';  
    

}else
{


echo '<script>alert("Wrong login credentials provided.");window.location = "index.php";</script>';  
 exit;

}

}

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title><link rel="icon" href="assets/img/mw.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<script>

    
        function validateForm() 
        {
        var uerror=document.getElementById("uerror");
        var perror=document.getElementById("perror");
        

    

        
        if(document.forms["form"]["email"].value=="" && document.forms["form"]["password"].value=="")
        {
        
        uerror.innerHTML="<span style='color:var(--yellow);,font-family: Alata, sans-serif;''>"+" email address required *</span>"
        perror.innerHTML="<span style='color:var(--yellow);,font-family: Alata, sans-serif;''>"+" password required *</span>"
       
        
        return false;
        
        }
        else
        {



        if(document.forms["form"]["email"].value=="")
        {
        
        uerror.innerHTML="<span style='color:var(--yellow);,font-family: Alata, sans-serif''>"+" email address required *</span>"
        
        return false;
        
        }else
        {
         
            uerror.innerHTML="";

        }
  
        
        if(document.forms["form"]["password"].value=="")
        {
        
        perror.innerHTML="<span style='color:var(--yellow);,font-family: Alata, sans-serif''>"+" password required *</span>"
        
        return false;
        
        }
        else
        {

            perror.innerHTML="";


        }

//
    
        }
        
        }
        </script>
<body style="background: url(&quot;assets/img/pad.png&quot;);">
    <div class="login-card" style="border-radius: 0px;border: 0.8px solid var(--yellow);background: url(&quot;assets/img/pad.png&quot;);font-family: Alata, sans-serif;"><img class="profile-img-card" src="assets/img/pngwing.com.png" style="filter: contrast(200%) hue-rotate(360deg) invert(100%);">
        <p class="profile-name-card" style="color: rgb(255,255,255);font-family: Alata, sans-serif;font-weight: 400;font-size: 30px;">Admin Login</p>
        <form class="form-signin" action="" name="form" onsubmit="return validateForm();" method="post"><span class="reauth-email"> </span>
            <input class="form-control" type="email" id="email" name="email"  placeholder="Email address" autofocus="" style="background: url(&quot;assets/img/pad.png&quot;);border-color: var(--yellow);color: var(--yellow);"><span id="uerror"></span>
            <input class="form-control" type="password" id="password" name="password" placeholder="Password" style="background: url(&quot;assets/img/pad.png&quot;);border-color: var(--yellow);color: var(--yellow);"><span id="perror"></span>
             <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" style="background: url(&quot;assets/img/pad.png&quot;), var(--yellow);font-weight: 400;border: 0.8px solid var(--yellow) ;">Sign in</button>
        </form><a class="forgot-password" href="email-check.php" style="border-color: rgb(255,255,255);color: rgb(255,255,255);">Forgot your password?</a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
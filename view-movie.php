<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mzansi Wood</title><link rel="icon" href="assets/img/mw.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/--mp---Testimonials-Slider.css">
    <link rel="stylesheet" href="assets/css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Boostrap-Tabs.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Payment-Form.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Cookie-Banner-1.css">
    <link rel="stylesheet" href="assets/css/Cookie-Banner.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/material-menu.css">
    <link rel="stylesheet" href="assets/css/ml-video-1.css">
    <link rel="stylesheet" href="assets/css/ml-video.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/NavBar-Notifications-Panel-1.css">
    <link rel="stylesheet" href="assets/css/NavBar-Notifications-Panel.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Scroll-To-Top-1.css">
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/Search-Input-responsive.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Slider-laptop-1.css">
    <link rel="stylesheet" href="assets/css/Slider-laptop.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slider-7.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slider-9.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9-1.css">
    <link rel="stylesheet" href="assets/css/Testimonial-Slider-9.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive.css">
</head>
<?php
    include 'connect.php';
 
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     


    ?>

<?PHP
              
            $id=$_GET['edt'];

               

                              

              $query="SELECT * from film,admin where  film.movie_id='$id'";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
              
              
              if ($rows>0) {
                
                ?>
<body style="background: url(&quot;assets/img/pad.png&quot;);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: url(&quot;assets/img/pad.png&quot;), #17171a;">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);font-family: Alata, sans-serif;"><span style="color: var(--yellow);font-family: Aladin, cursive;"></span><span style="color: var(--white);font-family: Alata, sans-serif;font-weight: 400;">Mzansi</span><span style="color: var(--yellow);font-family: Aladin, cursive;font-weight: 400;"><span style="text-decoration: underline;">Wood</span></span></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: url(&quot;assets/img/pad.png&quot;), #141414;border-radius: 0px;border-top-width: 0px;border-top-color: rgb(0,0,0);border-right-color: rgba(27,22,22,0.3);border-bottom-color: rgba(27,22,22,0.3);border-left-color: rgba(27,22,22,0.3);"><span class="sr-only">Toggle navigation</span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none" style="color: var(--yellow);font-size: 25px;">

                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H16C16.5523 6 17 6.44772 17 7C17 7.55228 16.5523 8 16 8H4C3.44772 8 3 7.55228 3 7Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 13C3 12.4477 3.44772 12 4 12H16C16.5523 12 17 12.4477 17 13C17 13.5523 16.5523 14 16 14H4C3.44772 14 3 13.5523 3 13Z" fill="currentColor"></path>
                </svg></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="font-family: Alata, sans-serif;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php" style="color: rgb(255,255,255);">Home</a></li>
                    <li class="nav-item"><a class="nav-link " href="movie-list.php" style="color: var(--white);">Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="donate.php" style="color: var(--white);">Donate</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<?php
                    while ($rows=mysqli_fetch_array($result)) {
                  ?>
    <h1 style="font-family: Alata, sans-serif;color: rgb(255,255,255);font-size: 30px;text-align: center;">Movies&nbsp;<i class="fas fa-film" style="font-size: 20px;"></i></h1>
    <p style="font-family: Alata, sans-serif;text-align: center;color: var(--yellow);font-size: 14px;">Enjoy local movies or Stories&nbsp;<span style="color: rgb(255,22,7);"><span style="text-decoration: underline;">Stream&nbsp;</span><i class="fas fa-play-circle" style="color: #e41025;"></i></span>&nbsp; OR&nbsp;<span style="color: #2595ae;"><span style="text-decoration: underline;">Download&nbsp;</span><i class="fas fa-cloud-download-alt" style="color: #2595ae;"></i></span></p>
    <div class="container" style="font-family: Alata, sans-serif;border-top: 0.8px solid var(--gray-dark) ;">
        <h1 class="my-4" style="font-size: 12px;color: rgb(255,255,255);"><a href="movie-list.php" style="color: rgb(255,255,255);font-size: 14px;">Movie</a><span> / </span><span style="color: var(--yellow);font-size: 14px;"><?php echo $rows['title'] ?> (<?php echo $rows['year']?>)<br></span><br></h1>
        <div class="row">
            <div class="embed-responsive embed-responsive-4by3">
            <div class="embed-responsive-item" style="text-align: center;"><video controlsList="nodownload" controls autoplay="" ><source src="movies/<?php echo $rows['file'] ?>" type="video/mp4" ></video></div>
            </div>
            <div class="col-md-4">
                <h3 class="my-3" style="color: var(--yellow);font-size: 20px;">Movie Description</h3>
                <p style="color: rgb(255,255,255);font-size: 13px;"><?php echo $rows['description'] ?><br></p>
                <h3 class="my-3" style="color: var(--yellow);font-size: 20px;">Movie Details</h3>
                <ul class="list-unstyled">
                    <li style="color: rgb(255,255,255);font-size: 13px;">Director : <?php echo $rows['director'] ?></li>
                    <li style="color: rgb(255,255,255);font-size: 13px;">Actors : <?php echo $rows['actor'] ?></li>
                    <li style="color: rgb(255,255,255);font-size: 13px;">Genre :&nbsp;<span style="color: var(--yellow);"><?php echo $rows['genre'] ?><br></span></li>
                    <li style="color: rgb(255,255,255);font-size: 13px;">Year :&nbsp;<span style="color: var(--yellow);"><?php echo $rows['year'] ?><br></span></li>
                    <li style="color: rgb(255,255,255);font-size: 13px;"><i class="fa fa-user" style="color: var(--yellow);"></i>&nbsp;Posted By :&nbsp;<span style="color: var(--yellow);"><?php echo $rows['name'].' '.$rows['surname'] ?><br></span></li>
                </ul>
            </div>
        </div>
		       <?php
                  
                }
                ?>

<?php
              }else{
                ?>
                
                <?php
              } ?>



<?PHP
              
                 

              $query1="SELECT * from film where movie_id !='$id'and bin='0' ORDER BY title ASC";
              $result1=mysqli_query($conn,$query1);
              
              $row=mysqli_num_rows($result1);
              
             
              
              if ($row>0) {
                
                ?>
                
        <h3 class="my-4" style="color: rgb(255,255,255);border-bottom: 0.8px solid #313437 ;">Recently Added Movies<br></h3>
        <div class="row">
            
            <div class="col">
                <ul class="list-inline" style="color: var(--yellow);">
                <?php
                    while ($row=mysqli_fetch_array($result1)) {
                  ?>
                    <li class="list-inline-item"><a href="view-movie.php?edt=<?php echo $row['movie_id'] ?>" style="color: var(--yellow);"><?php echo $row['title'].' '.$row['year']?></a></li>
                    <?php
                  
                }
                ?>

<?php
              }else{
                ?>
                
                <?php
              } ?>
    </div>
                </ul>
            </div>
        </div>
       
    <div class="container">
        <nav class="navbar navbar-light navbar-expand navigation-clean" style="background: url(&quot;assets/img/pad.png&quot;);">
            <div class="container"><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        </nav>
    </div>
    <footer class="footer-basic" style="font-family: Alata, sans-serif;background: url(&quot;assets/img/pad.png&quot;);border-top-width: 0.8px;border-top-style: solid;">
        <p class="copyright" style="color: rgb(255,255,255);font-size: 16px;">Mzansi<span style="font-family: Aladin, cursive;color: var(--yellow);">Wood</span>&nbsp;© <?php  echo date('Y'); ?></p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/--mp---Testimonials-Slider.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
    <script src="assets/js/Cookie-Banner.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="assets/js/ml-video.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Slider-laptop.js"></script>
    <script src="assets/js/Testimonial-Slider-9.js"></script>
</body>

</html>
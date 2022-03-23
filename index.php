<!DOCTYPE html>
<html lang="en">
<?php

include 'connect.php';



if(isset($_POST['add']))
{
    

$email=$_POST['email'];

   

$query="select * from subscriber";



$result=mysqli_query($conn,$query) or die(mysqli_error($conn));


$row=mysqli_fetch_array($result);

if(strtolower($row['email']))
{

    echo '<script>alert(" Already subscribed to our Platform.");window.location = "index.php.php";</script>';
exit;

}else
{

$command="
INSERT INTO subscriber(email) 
            VALUES ('$email')";



$edit=mysqli_query($conn,$command);  


if($edit){
mysqli_close($conn);

echo '<script>alert("Thanks for subscribing to Our Platform.");window.location = "index.php";</script>';

exit;

}


}



}


?>
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
</head>

<body style="background: url(&quot;assets/img/pad.png&quot;);">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: url(&quot;assets/img/pad.png&quot;), #17171a;">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);font-family: Alata, sans-serif;"><span style="color: var(--yellow);font-family: Aladin, cursive;"></span><span style="color: var(--white);font-family: Alata, sans-serif;font-weight: 400;">Mzansi</span><span style="color: var(--yellow);font-family: Aladin, cursive;font-weight: 400;"><span style="text-decoration: underline;">Wood</span></span></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: url(&quot;assets/img/pad.png&quot;), #141414;border-radius: 0px;border-top-width: 0px;border-top-color: rgb(0,0,0);border-right-color: rgba(27,22,22,0.3);border-bottom-color: rgba(27,22,22,0.3);border-left-color: rgba(27,22,22,0.3);"><span class="sr-only">Toggle navigation</span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none" style="color: var(--yellow);font-size: 25px;">

                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H16C16.5523 6 17 6.44772 17 7C17 7.55228 16.5523 8 16 8H4C3.44772 8 3 7.55228 3 7Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 13C3 12.4477 3.44772 12 4 12H16C16.5523 12 17 12.4477 17 13C17 13.5523 16.5523 14 16 14H4C3.44772 14 3 13.5523 3 13Z" fill="currentColor"></path>
                </svg></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="font-family: Alata, sans-serif;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: rgb(255,255,255);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="movie-list.php" style="color: var(--white);">Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="donate.php" style="color: var(--white);">Donate</a></li>
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#subscribe" style="border-radius: 0px;background: var(--yellow);">Subscribe Now!</a></span>
            </div>
        </div>
    </nav>
    <div style="height: 500px;background: url(&quot;assets/img/pic.png&quot;) center / cover no-repeat;opacity: 1;filter: blur(0px);"></div>
    <section id="subscribe" class="newsletter-subscribe" style="background: url(&quot;assets/img/pad.png&quot;), var(--gray-dark);font-family: Alata, sans-serif;border-top: 0.8px solid var(--dark) ;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);font-weight: 400;font-size: 30px;">Subscribe for more new Movies</h2>
                <p class="text-center" style="color: var(--yellow);">Subscribe to our pages, and We will keep you in touch of trending movies.</p>
            </div>
            <form class="form-inline" method="post">
                <div class="form-group"><input class="border rounded-0 form-control" type="email" name="email" placeholder="Provide Your Email" style="border-radius: 0px;border-left-width: 0px;border-top-left-radius: 0px;border-top-right-radius: 0px;border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;" required=""></div>
                <div class="form-group"><button class="btn text-capitalize" type="submit" name="add" style="background: var(--yellow);color: rgb(255,255,255);border-radius: 0px;font-weight: 400;font-size: 16px;">Subscribe </button></div>
            </form>
        </div>
    </section>
    <div class="container" style="background: url(&quot;assets/img/pad.png&quot;);">
        <div class="jumbotron" id="about" style="margin-bottom: 0px;border-radius: 0px;background: url(&quot;assets/img/pad.png&quot;), #141414;color: rgb(33, 37, 41);border-top: 0.8px solid var(--dark) ;">
            <h1 style="color: rgb(255,255,255);text-align: center;font-size: 30px;">About Mzansi Wood</h1>
            <hr class="modern-form__hr" style="color: var(--yellow);background: var(--yellow);border-top-width: 0.8px;border-top-color: var(--yellow);">
            <h1 style="font-size: 20px;color: var(--yellow);text-align: center;"><span style="text-decoration: underline;">Mzansi</span><span style="color: var(--yellow);font-family: Aladin, cursive;">Wood</span></h1>
            <p style="font-family: Alata, sans-serif;color: rgb(255,255,255);"><span style="color: var(--yellow);">Mzansi Wood</span>&nbsp;is designed to satisfy your desires for all local of movies. This&nbsp;site has a huge list of film which are spread evenly into various categories like Action, Horror, Adventure, Fantasies, Musicals, Biography, Drama, Comedy and much more. This collection includes Films released years ago and those that are recent. With the present day technology, you could pass time watching on various kinds of gadgets like personal computer, Android smart phones and devices, TV or gaming box or consoles all with internet connection.<br><br>Our <span style="color: var(--yellow);">Mzansi Wood</span>&nbsp;Site does not just offer attractive collection of tv-shows but it also streams them easily with the inbuilt player that ensures high quality pictures and sounds. Our Site is the only that offers free VIP quality streaming which can be accessed at any time of the day and from various locations and platforms.<br></p>
            <p style="font-family: Alata, sans-serif;color: rgb(255,255,255);">Finding and locating a free streaming website with nice features is already a hard job to do.&nbsp;<span style="color: var(--yellow);">Mzansi Wood</span>&nbsp;allows for easy and effortless navigation as the features are displayed in a way that even a toddler will understand and be able to browse through. The categories are on one side of the webpage while the inbuilt web video player that streams is just seen below immediately a user clicks on any of the movies.<br><br>Users can also request for more&nbsp;<span style="color: var(--yellow);">Free Local Movies Online</span>&nbsp;based on categories and this is allowed under the user-request feature. What's more? Enjoy the amazing opportunity of watching great movies on soap2day that excites and give you the perfect relaxation.<br></p>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron" id="contact" style="margin-bottom: 0px;border-radius: 0px;font-family: Alata, sans-serif;background: url(&quot;assets/img/pad.png&quot;);border-top: 0.8px solid var(--dark);padding-bottom: 0px;">
            <div class="container shadow-none modern-form" style="background: url(&quot;assets/img/pad.png&quot;);padding-top: 0px;">
                <h1 style="font-weight: 400;text-align: center;color: var(--white);font-size: 30px;">Share your views about the page</h1>
                <p style="text-align: center;color: var(--yellow);font-size: 20px;">Contact Us&nbsp;</p>
                <div class="text-center">
                    <h4 style="color: var(--white);font-size: 28px;font-weight: 400;">Our Social Links</h4>
                </div>
                <hr class="modern-form__hr" style="color: var(--yellow);background: var(--yellow);border-top-width: 0.8px;border-top-color: var(--yellow);">
                <div class="modern-form__form-container" style="padding-top: 0px;">
                    <form>
                        <div class="form-row">
                            <div class="col" style="text-align: center;">
                                <p style="color: rgb(255,255,255);"><i class="fab fa-whatsapp" style="color: #20e300;font-size: 20px;"></i>&nbsp;Leave your comment on WhatsApp&nbsp;&nbsp;<a href="#" style="color: rgb(23,179,6);">Click Here!</a></p>
                                <p style="color: rgb(255,255,255);"><i class="fab fa-facebook-f" style="font-size: 20px;color: #004fc6;"></i>&nbsp;Follow us on Facebook&nbsp;&nbsp;<a href="#" style="color: rgb(12,82,220);">Click Here!</a></p>
                                <p style="color: rgb(255,255,255);"><i class="fab fa-twitter" style="font-size: 20px;color: rgb(33,215,227);"></i>&nbsp;Follow us on Twitter&nbsp;<a href="#" style="color: rgb(33,215,227);">Click Here!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-basic" style="font-family: Alata, sans-serif;background: url(&quot;assets/img/pad.png&quot;);border-top: 0.8px solid var(--dark) ;">
        <ul class="list-inline" style="font-size: 16px;">
            
        </ul>
        <p class="copyright" style="color: rgb(255,255,255);font-size: 16px;">Mzansi<span style="font-family: Aladin, cursive;color: var(--yellow);">Wood</span>&nbsp;© 2021</p>
    </footer><a href="#top">
        <div id="scroll-to-top" style="background: var(--yellow);"><i class="icon ion-ios-arrow-up"></i></div>
    </a>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/--mp---Testimonials-Slider.js"></script>
    <script src="assets/js/Bootstrap-4---Payment-Form.js"></script>
    <script src="assets/js/Cookie-Banner.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Slider-laptop.js"></script>
    <script src="assets/js/Testimonial-Slider-9.js"></script>
</body>

</html>
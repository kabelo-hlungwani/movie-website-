<!DOCTYPE html>
<html>
    <?php
    include 'connect.php';
 
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     
      if(!isset($_SESSION)) 
      { 
          session_start(); 
          $email=$_SESSION['email'];
          $id=$_SESSION['admin_id'];
      }

      $qry="SELECT count(movie_id) as movies from film";

      $res=mysqli_query($conn,$qry);
    
      $data=mysqli_fetch_array($res);

      $cmd="SELECT count(genre) as comedy from film where genre='Comedy'";

      $fetch=mysqli_query($conn,$cmd);
    
      $line=mysqli_fetch_array($fetch);

      $cmd1="SELECT count(genre) as drama from film where genre='Drama'";

      $fetch1=mysqli_query($conn,$cmd1);
    
      $line1=mysqli_fetch_array($fetch1);

      $cmd2="SELECT count(genre) as romance from film where genre='Romance'";

      $fetch2=mysqli_query($conn,$cmd2);
    
      $line2=mysqli_fetch_array($fetch2);

      $cmd3="SELECT count(genre) as horror from film where genre='Horror'";

      $fetch3=mysqli_query($conn,$cmd3);
    
      $line3=mysqli_fetch_array($fetch3);

      $cmd4="SELECT count(genre) as action from film where genre='Action'";

      $fetch4=mysqli_query($conn,$cmd4);
    
      $line4=mysqli_fetch_array($fetch4);
      //Bin

  $cmd5="SELECT count(movie_id) as del from film where bin='1'";

      $fetch5=mysqli_query($conn,$cmd5);
    
      $line5=mysqli_fetch_array($fetch5);
      //sub
  $cmd6="SELECT count(subscriber_id) as sub from subscriber";

      $fetch6=mysqli_query($conn,$cmd6);
    
      $line6=mysqli_fetch_array($fetch6);





    ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Movies - MzansiWood</title><link rel="icon" href="assets/img/mw.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Drag-Drop-File-Input-Upload.css">
    <link rel="stylesheet" href="assets/css/Pretty-Login-Form.css">
    <link rel="stylesheet" href="assets/css/Table-with-search-1-1.css">
    <link rel="stylesheet" href="assets/css/Table-with-search-1.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled-2.css">
    <link rel="stylesheet" href="assets/css/untitled-3.css">
    <link rel="stylesheet" href="assets/css/untitled-4.css">
    <link rel="stylesheet" href="assets/css/untitled-5.css">
    <link rel="stylesheet" href="assets/css/untitled-6.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>
<?PHP
              
             

               

                              

              $query="SELECT * from admin where email='$email'";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             
              
              if ($rows>0) {
                
                ?>
<body>
    <div id="wrapper">
    <?php
                    while ($rows=mysqli_fetch_array($result)) {
                  ?>
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--orange);font-family: Alata, sans-serif;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-film"></i></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-weight: 600;">MZANSIMOVIES</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="dash.php"><i class="fas fa-tachometer-alt"></i><span style="font-weight: 4;font-size: 16px;">Dashboard</span></a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="table.php?edt=<?php echo $rows['admin_id'] ?>" style="font-size: 16px;"><i class="fas fa-table"></i><span style="font-weight: 4;">Movies</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="bin.php?edt=<?php echo $rows['admin_id'] ?>" style="font-size: 16px;"><i class="fa fa-trash-o"></i><span style="font-weight: 4;">Recycling Bin</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="subscribers.php?edt=<?php echo $rows['admin_id'] ?>" style="font-size: 16px;"><i class="fa fa-user"></i><span style="font-weight: 4;">Subscribers</span></a></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="background: url(&quot;assets/img/pad.png&quot;);">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top" style="background: url(&quot;assets/img/pad.png&quot;);">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars" style="color: rgb(255,255,255);"></i></button>
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-size: 16px;font-family: Alata, sans-serif;"> <?php echo $rows['name'].' '.$rows['surname']  ?></span><img class="border rounded-circle img-profile" src="assets/img/avatar_2x.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.php?edt=<?php echo $rows['admin_id'] ?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" style="font-family: Alata, sans-serif;">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0" style="color: rgb(255,255,255);">Dashboard</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span style="color: var(--gray-dark);">All movies</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="color: var(--gray-dark);"><?php echo $data['movies']; ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-film fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span style="color: var(--gray-dark);">Action movies</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="color: var(--gray-dark);"><?php echo $line4['action'] ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-film fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span style="color: var(--gray-dark);">comedy movies</span></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span style="color: var(--gray-dark);"><?php echo $line['comedy'] ?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-film fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span style="color: var(--gray-dark);">drama</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="color: var(--gray-dark);"><?php echo $line1['drama']?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-film fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span style="color: var(--gray-dark);">Romance</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="color: var(--gray-dark);"><?php echo $line2['romance'] ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-film fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span style="color: var(--gray-dark);">Horror</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="color: var(--gray-dark);"><?php echo $line3['horror'] ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-film fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span style="color: var(--gray-dark);">Subscribers</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="color: var(--gray-dark);"><?php echo $line6['sub'] ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span style="color: var(--gray-dark);">Recycling Bin</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="color: var(--gray-dark);"><?php echo $line5['del'] ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-trash-restore fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                  
                }
                ?>

<?php
              }else{
                ?>
                <h3>No record(s)</h3>
                <?php
              } ?>
            <footer class="bg-white sticky-footer" style="background: url(&quot;assets/img/pad.png&quot;);">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span style="font-size: 13.8px;color: rgb(255,255,255);font-family: Alata, sans-serif;">Copyright © MzansiMovies <?php echo date('Y') ?></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Table-with-search-1.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
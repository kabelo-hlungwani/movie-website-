<!DOCTYPE html>
<html>

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

  
  
  $qry=mysqli_query($conn,"select * from admin WHERE admin_id='$id'");
  $data=mysqli_fetch_array($qry);
  
  
  if(isset($_POST['name']) && isset($_POST['surname'])&& isset($_POST['email']))
  {
  
      
      
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $email=$_POST['email'];
  
  
    
  $command="UPDATE  admin
   SET 
   name='$name',surname='$surname',email='$email'
   WHERE admin_id='$id'";
  
  
  
  $edit=mysqli_query($conn,$command);
    
  
  if($edit){
  mysqli_close($conn);
  
       
  echo '<script>alert("Information successfully saved.");window.location = "dash.php";</script>';
  
  exit;
  
  }
  else
  {
      echo mysqli_error();
  
  }
  }
  
  
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

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--orange);font-family: Alata, sans-serif;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-film"></i></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-weight: 600;">MZANSIMOVIES</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="dash.php"><i class="fas fa-tachometer-alt"></i><span style="font-weight: 4;font-size: 16px;">Dashboard</span></a></li>
                  
                    <li class="nav-item"><a class="nav-link" href="table.php" style="font-size: 16px;"><i class="fas fa-table"></i><span style="font-weight: 4;">Movies</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="bin.php" style="font-size: 16px;"><i class="fa fa-trash-o"></i><span style="font-weight: 4;">Recycling Bin</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="subscribers.php?edt=<?php echo $data['admin_id'] ?>" style="font-size: 16px;"><i class="fa fa-user"></i><span style="font-weight: 4;">Subscribers</span></a></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="font-family: Alata, sans-serif;background: url(&quot;assets/img/pad.png&quot;);">
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-size: 16px;font-family: Alata, sans-serif;"> <?php echo $data['name'].' '.$data['surname'] ?></span><img class="border rounded-circle img-profile" src="assets/img/avatar_2x.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.php?edt=<?php echo $data['admin_id'] ?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4" style="color: rgb(255,255,255);">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="m-0 font-weight-bold" style="background: var(--white);color: var(--gray-dark);font-weight: 4;">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="post">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="username" style="color: var(--gray-dark);font-weight: 3;">Id<br></label>
                                                        <input class="form-control" type="text" id="adminid" placeholder="Admin id" name="adminid" value="<?php echo $data['admin_id']?>"  readonly=""></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email" style="color: var(--gray-dark);font-weight: 3;"><strong>Email Address</strong></label>
                                                        <input class="form-control" type="email" id="email" value="<?php echo $data['email']?>" name="email" readonly=""></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name" style="font-weight: 3;"><strong>First Name</strong></label>
                                                        <input class="form-control" type="text" id="name" required="" value="<?php echo $data['name']?>"  name="name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name" style="font-weight: 3;"><strong>Last Name</strong></label>
                                                        <input class="form-control" type="text" id="surname" required="" value="<?php echo $data['surname']?>"  name="surname"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-sm" type="submit" style="background: url(&quot;assets/img/pad.png&quot;);color: rgb(255,255,255);">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer" style="background: url(&quot;assets/img/pad.png&quot;);">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span style="font-size: 19.8px;color: rgb(255,255,255);font-family: Alata, sans-serif;">Copyright © Brand 2021</span></div>
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
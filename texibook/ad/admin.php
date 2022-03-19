<?php 
session_start();
if(!isset($_SESSION['phone'])){
    header('loaction:index.php');
}else{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PLATEAU CAB | Home</title>
  <!-- MDB icon -->
  <link rel="icon" href="lg.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
  <div class="container">

        <div class="row">
            <div class="col-md-12 mb-3 mt-2">
                <h3 class="font-weight-bold">PLATEAU CAB ADMINISTRATIVE DASHBOARD</h3>
            </div>
        </div>    
  </div>
<hr class="my-1" />
  <main>
    
    <div class="container-fluid">
    
    <div class="row">

        <div class="col-md-2" style="border-right: 1px solid grey; height:400px">
            <a href="admin.php?page=bookings" style="border-radius:19px;" class="btn btn-sm btn-black">View Bookings</a>
            <a href="admin.php?page=history" style="border-radius:19px;" class="btn btn-sm btn-black">Booking History</a>
            <a href="admin.php?page=texis"  style="border-radius:19px;" class="btn btn-sm btn-black">My Texi's</a>
            <a href="admin.php?page=feedback"  style="border-radius:19px;" class="btn btn-sm btn-black">Feedback</a>
            <!--<a href="admin.php?page=profile" style="border-radius:19px;" class="btn btn-sm btn-black">Profile</a>-->
            <a href="admin.php?page=logout" style="border-radius:19px;" class="btn btn-sm btn-danger">Logout</a>
        </div>

            <div class="col-md-10">
                <?php
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        include($page.'.php');
                    }else{
                        include('bookings.php');
                    }
                

                ?>
            </div>
    </div>
    
    </div>
  
  </main>



 <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script src="https://use.fontawesome.com/c576d0c8cc.js"></script>
    </body>
</html>
<?php  } ?>











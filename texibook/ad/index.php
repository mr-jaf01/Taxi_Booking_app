<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Texify | Home</title>
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
      


      <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <center><h4 class="font-weight-bold">PLATEAU CAB <small>Admin Login</small></h4></center>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <center>
                        <?php 
                        
                            if(isset($_POST['login'])){
                                include('db/connect_db.php');
                                $username = $_POST['user'];
                                $password = $_POST['password'];

                                $query = "SELECT * FROM admin WHERE username='$username'";
                                $run_query = mysqli_query($conn, $query);
                                while($admindata = mysqli_fetch_assoc($run_query)){
                                    $dbusername = $admindata['username'];
                                    $dbpassword = $admindata['password'];
                                    $dbphone = $admindata['adphone'];
                                }
                                if($username == $dbusername){
                                    if($password == $dbpassword){

                                        header('location: admin.php');
                                        $_SESSION['phone'] = $dbphone;

                                    }else{
                                        ?>
                                        <p style="width:300px" class="alert alert-danger">Incorrect Password</p>
                                    <?php 
                                    }
                                }else{
                                    ?>
                                        <p  style="width:300px" class="alert alert-danger">Incorrect Username</p>
                                    <?php
                                }
                               
                            }
                        
                        
                        ?>
                    </center>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="" method="POST" >
                       <div class="form-group">
                         <label for="user">Username</label>
                         <input type="text" class="form-control" required name="user" id="user" placeholder="Username">
                       </div>

                       <div class="form-group">
                         <label for="pass">Paasword</label>
                         <input type="password" class="form-control" required name="password" id="pass" placeholder="Password">
                       </div>
                     <button style="border-radius:19px;" name="login" class="btn btn-black">Login</button>

                    </form>
                </div>
            </div>
      </div>

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
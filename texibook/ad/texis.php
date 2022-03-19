<div class="row">
    <div class="col-md-12">
        <h6 class="font-weight-bold">My Texi's</h6>
    </div>
</div>
<hr class="my-1" />

<div class="row justify-content-center">
    <div class="col-md-6">
        <h4>Adding New Texi Info</h4>

        <div>
            <?php 
            include('db/connect_db.php');
                if(isset($_POST['save'])){
                    $drivername = $_POST['drivername'];
                    $driverphone = $_POST['driverphone'];

                    $saveinfo = "INSERT IGNORE INTO texis(drivername,phone,status)
                    VALUE('$drivername','$driverphone','Available')";
                    $run_save = mysqli_query($conn,$saveinfo);
                    if($run_save){
                        ?>
                            <p class="alert alert-success">Record Save Successfully</p>
                        <?php
                    }else{
                        ?>
                            <p class="alert alert-danger">Unable to Save Record</p>
                        <?php
                    }
                }
            ?>
        </div>
        <form action="" method="POST">
            <input type="text" name="drivername" class="form-control" placeholder="Enter Driver Name" />
            <br>
            <input type="text" name="driverphone" class="form-control" placeholder="Enter Driver Phone" />
            <br>
            <button name="save" class="btn btn-black"> Save Info</button>
        </form>
    </div>
</div>
<div class="row ">
    <div class="col-md-6">
        <p>
                <a href="admin.php?page=viewtexis">View Drivers and Texi's Info</a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <h6 class="font-weight-bold">Assign Texi</h6>
    <a href="admin.php">
    <i class="fas fa-arrow-left"></i>
    </a>
    </div>
</div>
<hr class="my-1" />
<?php 
include('db/connect_db.php');
$bookid = $_GET['bookid'];
$getbooking = "SELECT * FROM booking WHERE bookid='$bookid'";
$run = mysqli_query($conn, $getbooking);
while($bookdata = mysqli_fetch_assoc($run)){
        $bookid = $bookdata['bookid'];
        $name = $bookdata['name'];
        $email = $bookdata['email'];
        $phone = $bookdata['phone'];
        $frompickup = $bookdata['pickfrom'];
        $todestination = $bookdata['dropto'];
        $pickdate = $bookdata['pickdate'];
        $picktime = $bookdata['picktime'];
        $status = $bookdata['status'];
}

?>
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <h5>Allocating Texi to Ticket</h5>
    </div>
</div>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <?php
            if(isset($_POST['submit'])){
                $bid = $_POST['bookid'];
                $driver = $_POST['availabletexi'];
                
                $update = "UPDATE `booking` SET `status` = 'assigned', `texid` = '$driver' WHERE `booking`.`bookid` = '$bid'";
                $run_update = mysqli_query($conn, $update);
                if($run_update){
                    $update_driver = "UPDATE `texis` SET `status` = 'not available' WHERE `texis`.`texid` = '$driver'";
                    if(mysqli_query($conn, $update_driver)){
                        ?>
                        <p class="alert alert-success">Texi Driver Assigned Successfully</p>
                        <?php
                    }else{
                        echo 'driver status not update';
                    }


                }else{
                    ?>
                    <p class="alert alert-danger">Can Not assign texi</p>
                    <?php
                }
                
            }
        ?>
    </div>
</div>

<div class="row justify-content-center mt-5">
    <div class="col-md-6">
       <div class="">
            <p>Booking ID : <?php echo $bookid ?></p>
            <p>Phone : <?php echo $phone ?></p>
            <p>From : <?php echo $frompickup ?></p>
            <p>To : <?php echo $todestination ?></p>
       </div>
    <hr class="my-1"/>
       <div class="">
            <form action="" method="POST" >
                <p class="font-weight-bold">Select Available Driver</p>
                <select class="form-control" name="availabletexi">
                <option value="texi 1">Select Driver</option>
                <?php 
                    $texi = "SELECT * FROM texis WHERE status='Available'";
                    $run_texi = mysqli_query($conn, $texi);
                    while($texidata = mysqli_fetch_assoc($run_texi)){
                           
                        ?>
                            <option value=<?php echo $texidata['texid'] ?>> <?php echo $texidata['drivername'] ?> </option>
                        <?php
                    }
                
                ?>
                </select>

                <input type="hidden"  name="bookid" value="<?php echo $bookid ?>" />
                
                <br>
                <button name="submit" class="btn  btn-black">Submit</button>
            </form>
       </div>
    </div>
</div>
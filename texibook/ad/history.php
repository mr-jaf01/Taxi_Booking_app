<div class="row">
    <div class="col-md-12">
        <h6 class="font-weight-bold">Booking History</h6>
    </div>
</div>
<hr class="my-1" />

<div class="row" style="height:500px; overflow:auto">
<div class="col-md-12">
<table class="table ">
        
            <tr>
                <td class="font-weight-bold">BookID</td>
                <td class="font-weight-bold">Name</td>
                <td class="font-weight-bold">Email</td>
                <td class="font-weight-bold">Phone</td>
                <td class="font-weight-bold">Pick From</td>
                <td class="font-weight-bold">To Destination</td>
                <td class="font-weight-bold">Date</td>
                <td class="font-weight-bold">Time</td>
                <td class="font-weight-bold">Status</td>
                <td class="font-weight-bold">Texi ID</td>
            </tr>
        
        <?php 
        include('db/connect_db.php');
        $query = "SELECT * FROM booking WHERE status != 'New' ORDER BY bookid DESC";
        $run_query = mysqli_query($conn, $query);
        while($bookingdata = mysqli_fetch_assoc($run_query)){
            ?>
            
            <tr>
            
                <td><?php echo $bookingdata['bookid'] ?></td>
                <td><?php echo $bookingdata['name'] ?></td>
                <td><?php echo $bookingdata['email'] ?></td>
                <td><?php echo $bookingdata['phone'] ?></td>
                <td><?php echo $bookingdata['pickfrom'] ?></td>
                <td><?php echo $bookingdata['dropto'] ?></td>
                <td><?php echo $bookingdata['pickdate'] ?></td>
                <td><?php echo $bookingdata['picktime'] ?></td>
                <td class="font-weight-bold" style="color: green;"><?php echo $bookingdata['status'] ?></td>
                <td><?php echo $bookingdata['texid'] ?></td>
            </tr>
            
            <?php
        }
        ?>
    </table>
</div>
</div>


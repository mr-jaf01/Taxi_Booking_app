<div class="row">
    <div class="col-md-12">
        <h6 class="font-weight-bold">All Customer Feedback</h6>
    </div>
</div>

<div class="row" style="height:500px; overflow:auto">
<div class="col-md-12">
<table class="table table-bordered">
        
            <tr>
                <td class="font-weight-bold">ID</td>
                <td class="font-weight-bold">Name</td>
                <td class="font-weight-bold">Comment</td>
               
            </tr>
        
        <?php 
        include('db/connect_db.php');
        $query = "SELECT * FROM feedback";
        $run_query = mysqli_query($conn, $query);
        while($bookingdata = mysqli_fetch_assoc($run_query)){
            ?>
            
            <tr>
            
                <td><?php echo $bookingdata['fid'] ?></td>
                <td><?php echo $bookingdata['fname'] ?></td>
                <td><?php echo $bookingdata['fcomment'] ?></td>
                
            </tr>
            
            <?php
        }
        ?>
    </table>
</div>
</div>
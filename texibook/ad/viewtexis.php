<div class="row">
    <div class="col-md-12">
    <h6 class="font-weight-bold">Driver & Texi Info</h6>
    <a href="admin.php?page=texis">
    <i class="fas fa-arrow-left"></i>
    </a>
    </div>
</div>
<hr class="my-1" />


<div class="row" style="height:500px; overflow:auto">
<div class="col-md-12">
<table class="table ">
        
            <tr>
                <td class="font-weight-bold">Texi ID</td>
                <td class="font-weight-bold">Driver Name</td>
                <td class="font-weight-bold">Driver Phone</td>
                <td class="font-weight-bold">Status</td>
            </tr>
        
        <?php 
        include('db/connect_db.php');
        $query = "SELECT * FROM texis ORDER BY texid DESC";
        $run_query = mysqli_query($conn, $query);
        while($texidata = mysqli_fetch_assoc($run_query)){
            ?>
            
            <tr>
            
                <td><?php echo $texidata['texid'] ?></td>
                <td><?php echo $texidata['drivername'] ?></td>
                <td><?php echo $texidata['phone'] ?></td>
                <td><?php echo $texidata['status'] ?></td>
                <td><a style="border-radius:19px" class="btn btn-sm btn-danger" href="admin.php?page=delete&texid=<?php echo $texidata['texid'] ?>">Delete Driver</a></td>
            </tr>
            
            <?php
        }
        ?>
    </table>
</div>
</div>


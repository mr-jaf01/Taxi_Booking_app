<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <?php $phone = $_GET['phone']; ?>
        
            <form action="send.php" method="POST">
            
            <div class="form-group">
                <input type="text" name="phone" value="<?php echo $phone ?>" class="form-control" />
            </div>

            <div class="form-group">
                <textarea name="msg" placeholder="Write your msg"></textarea>
            </div>
            
            <div class="form-group">
               <button name="sendmsg">Send Message</button>
            </div>
            </form>
        </div>
    </div>
   
                      
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            
        </div>
    </div>
</div>
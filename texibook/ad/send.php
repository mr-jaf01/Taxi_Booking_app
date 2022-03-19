<?php
if(isset($_POST['sendmsg'])){
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    header("location: https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=LEI5Na0RX4QyLxo36kQy8Yqn7RyVLh08efBVWSrflcf7gEnJAz7PuPqti3rQ&from=PLATEAU CAB&to=$phone&body=$msg");
}
?>
<?php
    if(isset($_POST['btn_thanhtoan'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
    }
    require "view/v_checkout.php";
?>
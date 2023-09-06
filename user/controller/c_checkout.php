<?php
if(isset($_SESSION['ss_user'])){
    $khachhang = $db->get('taikhoan', array('id'=>$_SESSION['ss_user']));
    
    if(isset($_POST['btn_thanhtoan'])){
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
    }
}
    require "view/v_checkout.php";
?>
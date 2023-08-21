<?php
    if(isset($_POST['ss_admin'])){
        $user = $db->get('admin', array('id'=>$_SESSION['ss_admin']));
        $data_khachhang = $db->get('khachhang', array());
    }else{
        header('location: ?controller=login');
    }
    require_once('View_web/v_khachhang.php');
?>
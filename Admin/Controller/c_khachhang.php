<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin', array('id'=>$_SESSION['ss_admin']));
        $vaitro='user';
        $data_khachhang = $db->get('taikhoan', array("vaitro"=>$vaitro));
    }else{
        header('location: ?controller=login');
    }
    require_once('View_web/v_khachhang.php');
?>
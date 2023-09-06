<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
        $data_nhanvien = $db->get('taikhoan', array());
    }else{
        header('location: ?controller=login');
    }
    require 'View_web/v_nhanvien.php';
?>
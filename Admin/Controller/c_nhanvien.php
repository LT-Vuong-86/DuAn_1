<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin', array('id'=>$_SESSION['ss_admin']));
        $vaitro='admin';
        $data_nhanvien = $db->get('taikhoan', array("vaitro" =>$vaitro ));
    }else{
        header('location: ?controller=login');
    }
    require 'View_web/v_nhanvien.php';
?>
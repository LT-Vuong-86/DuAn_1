<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('admin', array('id'=>$_SESSION['ss_admin']));
        $data_sanpham = $db->get('sanpham', array()); 
    }else{
        header('location: ?controller=login');
    }
    require 'View_web/v_sanpham.php';
?>
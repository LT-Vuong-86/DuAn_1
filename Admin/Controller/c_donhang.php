<?php
    //Kiểm tra xem người dùng đã đăng nhập chưua
	if (isset($_SESSION['ss_admin'])) {
        //Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
        $khachhang = $db->get('khachhang',array('id_kh'=>$_SESSION['ss_admin']));
        //Lấy dữ liệu đơn hàng chờ xác nhận 
        $dhcho = $db->get('tinhtrang_dh',array('id_tinhtrang'=>1));
        //Lấy dữ liệu đơn hàng đã duyệt
        $dhdaxong = $db->get('tinhtrang_dh',array('id_tinhtrang'=>2));
        //Lấy dữ liệu đơn hàng đã được giao thành công
        $dhdagiao = $db->get('tinhtrang_dh',array('id_tinhtrang'=>3));
        //Lấy dữ liệu đơn hàng đã bị hủy
        $dhbihuy = $db->get('tinhtrang_dh',array('id_tinhtrang'=>4));
   }else{
       //Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
       header('location: ?controller=login');
   } 

    require_once('View_web/v_donhang.php');
?>
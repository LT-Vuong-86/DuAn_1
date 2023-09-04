<?php
    //Lấy id trên thanh url
    $id = $_GET['id'];
    //Lấy dữ liệu theo id tương ứng đã lấy được
    $product = $db->get('sanpham',array('id_sanpham'=>$id));

    $anhphu = $db->get('anh_phu', array('id_sanpham'=>$product[0]['id_sanpham']));
    require_once ("view/v_product-detail.php");
?>
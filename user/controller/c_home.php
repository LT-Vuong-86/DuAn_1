<?php
    
	$sanpham = $db->get('sanpham', array());
	$sp_shirt_girl =$db->get('sanpham',array('id_danhmuc'=>1));
    $sp_trousers_girl =$db->get('sanpham',array('id_danhmuc'=>2));
    $sp_dress =$db->get('sanpham',array('id_danhmuc'=>3));
    $sp_shirt_boy =$db->get('sanpham',array('id_danhmuc'=>4));
    $sp_trousers_boy =$db->get('sanpham',array('id_danhmuc'=>5));
    $sp_vest =$db->get('sanpham',array('id_danhmuc'=>6));
    $sp_shirt_kids =$db->get('sanpham',array('id_danhmuc'=>7));
    $sp_trousers_kids =$db->get('sanpham',array('id_danhmuc'=>8));
    $sp_suit_kids =$db->get('sanpham',array('id_danhmuc'=>9));
    require "view/v_home.php";
?>
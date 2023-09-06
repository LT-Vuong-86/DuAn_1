<?php
    //Lấy id trên thanh url
    if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //Lấy dữ liệu theo id tương ứng đã lấy được
    $product = $db->get('sanpham',array('id_sanpham'=>$id));
    $anhphu1=$db->get('loai_sp', array('id_sanpham'=>$id));
    $size_name='';
    $loai_sp='';
    if (isset($_POST['themgiohang'])) {
    $ten=$product[0]['tensanpham'];
    if (isset($_POST['size_name'])) {
        $size_name=$_POST['size_name'];
    }
    if (isset($_POST['loai_sp'])) {
    $loai_sp=$_POST['loai_sp'];
    }
    $gia=$product[0]['gia'];
    $sl=$_POST['sl'];
    $tong=$gia*$sl;
    $loi = array();
   if($size_name == ''){
            $loi['size_name'] = 'vui lòng chọn size';
        }
    if($loai_sp == ''){
            $loi['loai_sp'] = 'vui lòng chọn loại sp';
   }
   if (!$loi) {
    if (isset($_SESSION['ss_user'])) {
       
        $db->insert('giohang',array(
            'id_taikhoan'=>$_SESSION['ss_user'],
            'id_sanpham'=>$id,
            'soluong'=>$sl,
            'tong'=>$tong
        ));
    }else{
        echo "<script>alert('Chức năng này cần đăng nhập')</script>";

    }
    if (isset($_POST['muangay'])) {
        echo $ten;
        echo $size_name;
        echo $loai_sp;
     }
       
    }

    
     }// $loai_sp=$_POST['jehvd'];
                          
        // $size_phu = $_POST['size_name'];  
   
    }
    require_once ("view/v_product-detail.php");
?>
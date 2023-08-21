<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('admin', array('id'=>$_SESSION['ss_admin']));

    if($user[0]['level']==0){
        if(isset($_POST['btn_addsanpham'])){
            $id_dm = $_POST['id_dm'];
            $tensanpham = $_POST['tensanpham'];
            $tonkho = $_POST['tonkho'];
            $gia = $_POST['gia'];
            $xuatxu = $_POST['xuatxu'];
            $trangthai = $_POST['trangthai'];
            $daban = $_POST['daban'];

            $loi = array();
            if($id_dm == ''){
                $loi['id_dm'] = 'Danh mục không được để trống';
            }

            if($tensanpham == ''){
                $loi['tensanpham'] = 'Tên sản phẩm không được để trống';
            }

            if($tonkho == ''){
                $loi['tonkho'] = 'Số lượng sản phẩm không được để trống';
            }

            if($gia == ''){
                $loi['gia'] = 'Giá không được để trống';
            }

            if($xuatxu == ''){
                $loi['xuatxu'] = 'Xuất xứ không được để trống';
            }
            
            if($trangthai == ''){
                $loi['trangthai'] = 'Đánh giá sản phẩm không được để trống';
            }

            if($daban == ''){
                $loi['daban'] = 'Đã bán không được để trống';
            }

            $link = './images/';
            $link_full = $link . basename($_FILES['anh']['name']);
            $uploadOk = 1;

            move_uploaded_file($_FILES['anh']['tmp_name'], $link_full);

            if(!$loi){
                $db->insert('taikhoan',array(
                    'id_dm'=>$id_dm,
                    'tensanpham'=>$tensanpham,
                    'tonkho'=>$tonkho,
                    'gia'=>$gia,
                    'xuatxu'=>$xuatxu,
                    'trangthai'=>$trangthai,
                    'daban'=>$daban
                ));
                header('location: ?controller=nhanvien');
            }
        }
    }else{
    header('location: ?controller=login');
}
}
    require 'View_web/v_addsanpham.php';
?>
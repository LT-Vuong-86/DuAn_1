<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('admin', array('id'=>$_SESSION['ss_admin']));

    if($user[0]['level']==0){
        if(isset($_POST['btn_addsanpham'])){
            $id_dm = $_POST['id_dm'];
            $tensanpham = $_POST['tensanpham'];
            $tonkho = $_POST['tonkho'];
            $gia = $_POST['gia'];
            $date_oder = date("y/m/d");
            $xuatxu = $_POST['xuatxu'];
            $uploadedFile_main = $_FILES['img_main'];
            $imglink = $db->uploadfile($uploadedFile_main);
            $daban=0;
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
            
           

            if($daban == ''){
                $loi['daban'] = 'Đã bán không được để trống';
            }

            

            if(!$loi){
                $db->insert('sanpham',array(
                    
                    'tensanpham'=>$tensanpham,
                    'tonkho'=>$tonkho,
                    'gia'=>$gia,
                    'anh_chinh'=>$imglink,
                    'xuatxu'=>$xuatxu, 
                    'id_danhmuc'=>$id_dm,
                    'daban'=>$daban,
                    'ngaytao'=>$date_oder,
                    'nguoitao'=>$user[0]['username']
                ));    
                header('location: ?controller=sanpham');
            }
        }
    }else{
    header('location: ?controller=login');
}
}
    require 'View_web/v_addsanpham.php';
?>
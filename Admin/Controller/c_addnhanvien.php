<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('admin', array('id'=>$_SESSION['ss_admin']));

    if($user[0]['level']==0){
        if(isset($_POST['btn_addnhanvien'])){
            $username = $_POST['username'];
            $full_name = $_POST['full_name'];
            $password = $_POST['pass'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $vaitro = $_POST['vaitro'];
            $diachi = $_POST['diachi'];

            $loi = array();
            if($username == ''){
                $loi['username'] = 'Tên đăng nhập không được để trống';
            }

            if($full_name == ''){
                $loi['full_name'] = 'Tên đầy đủ không được để trống';
            }

            if($password == ''){
                $loi['pass'] = 'Mật khẩu không được để trống';
            }

            if($email == ''){
                $loi['email'] = 'Email không được để trống';
            }

            if($sdt == ''){
                $loi['sdt'] = 'SĐT không được để trống';
            }

            if($vaitro == ''){
                $loi['vaitro'] = 'Vai trò không được để trống';
            }
            
            if($diachi == ''){
                $loi['diachi'] = 'Địa chỉ không được để trống';
            }
            if(!$loi){
                $db->insert('taikhoan',array(
                    'username'=>$username,
                    'full_name'=>$full_name,
                    'pass'=>$password,
                    'email'=>$email,
                    'sdt'=>$sdt,
                    'vaitro'=>$vaitro,
                    'diachi'=>$diachi
                ));
                header('location: ?controller=nhanvien');
            }
        }
    }else{
    header('location: ?controller=login');
}
}
    require 'View_web/v_addnhanvien.php'
?>

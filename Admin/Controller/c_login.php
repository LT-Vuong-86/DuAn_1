<?php
    if(isset($_SESSION['ss_admin'])){
        header('location: ?controller=trangchu');
    }
    if(isset($_POST['btn_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $loi = array();
        if($username == ''){
            $loi['username'] = 'Username không được để trống';
        }
        if($password == ''){
            $loi['password'] = 'Password không được để trống';
        }
        if(!$loi){
            $user = $db->get('admin', array('username'=>$username));
            if(empty($user)){
                $loi['username'] = 'Tên đăng nhập không tồn tại';
            }else{
                if($password!=$user[0]['password']){
                    $loi['password'] = 'Sai mật khẩu';
                }
            }
        }
        if(!$loi){
            
            $_SESSION['ss_admin'] = $user[0]['id'];
            header('location: ?controller=trangchu');
        }
    }
    require('View_web/v_login.php');
?>
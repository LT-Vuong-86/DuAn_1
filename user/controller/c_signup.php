<?php

    if(isset($_POST['btn_signup'])){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $vaitro = $_POST['vaitro'];
        $diachi = $_POST['diachi'];
        $gioitinh = $_POST['gioitinh'];
        $date = date('d/m/y');

        if(!empty($full_name) &&!empty($username) && !empty($password) && !empty($sdt) && !empty($email) && 
        !empty($diachi) && !empty($gioitinh)){
            $db->insert('taikhoan', array(
                'full_name'=>$full_name,
                'username'=>$username,
                'pass'=>$password,
                'email'=>$email,
                'sdt'=>$sdt,
                'vaitro'=>$vaitro,
                'diachi'=>$diachi,
                'gioitinh'=>$gioitinh,
                'ngaytao'=>$date
            ));
            header('location: ?controller=login');
        }else{
            echo 'Bạn cần nhập đầy đủ thông tin trước';
        }
    }
    require 'view/v_signup.php';
?>
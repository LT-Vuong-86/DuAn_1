<?php
if(isset($_SESSION['ss_admin'])){
    $user = $db->get('admin', array('id'=>$_SESSION['ss_admin']));
    if($user[0]['level']==0){
        
        $method = $_GET['method'];
        $id = $_GET['id'];
        switch ($method) {
            case 'xoa':
                $id = $_GET['id'];
                $db->delete('sanpham', array('id'=>$id));
                header('Location: ?controller=sanpham');
                break;

            case 'sua':
                $id = $_GET['id'];
                $data_nhanvien = $db->get('sanpham', array('id'=>$id));
                if(isset($_POST['btn_suasanpham'])){
                    $username = $_POST['username'];
                    $full_name = $_POST['full_name'];
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
                        $db->update('taikhoan',array(
                            'username'=>$username,
                            'full_name'=>$full_name,
                            'email'=>$email,
                            'sdt'=>$sdt,
                            'vaitro'=>$vaitro,
                            'diachi'=>$diachi
                        ),array('id'=>$id));
                        header('location: ?controller=nhanvien');
                    }
                }
                require 'View_web/v_suanhanvien.php';
                break;

            default:

            break;    
        }    
        
    }            
    else
    {
        echo '<script type="text/javascript">alert("Bạn không có quyền hạn");           
        </script>';
    }
}
?>


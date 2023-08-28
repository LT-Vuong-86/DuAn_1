<?php
    //Kiểm tra xem người dùng đã đăng nhập chưua
$donhang=array();
	if (isset($_SESSION['ss_admin'])) {
        //Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
       global $donhang;
        $donhang=$db->get('donhang',array());
        if (isset($_POST['search'])) {
           
            
                $codition_search=$_POST['codition_search'];
                $content=$_POST['content'];
                foreach ($donhang as $key => $value) {     
                if ($codition_search=='tinhtrang') {
                    $tinhtrang=$db->get_like('tinhtrang_dh',$codition_search,$content,array('id_tinhtrang'=>$value['id_tinhtrang']));
                    
                    
                   
                    
                   foreach($tinhtrang as $key => $valuess) {
                        $donhang=$db->get('donhang',array('id_tinhtrang'=>$valuess['id_tinhtrang']));
                        $donhang = array_merge($donhang);
                    }  
                }else{
                   
                    $khachhang=$db->get_like('khachhang',$codition_search,$content,array('id_kh'=>$value['id_kh']));    
                              
                     foreach ($khachhang as $key =>  $values) {
                      $donhang = $db->get('donhang',array('id_kh'=>$values['id_kh']));
                        
                     }   
                     $donhang = array_merge($donhang);  
                                                    
                } 
            }        
        }
      
              
    //     if (isset($_POST['search'])) {
    //         $codition_search=$_POST['codition_search'];
    //         $content=$_POST['content'];
    //         $khachhang=$db->get_like('khachhang',$codition_search,$content,array('id_kh'=>$value['id_kh']));
    //     }else{ $donhang=$db->get('donhang',array());

    //   }
    }
   else{
       //Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
       header('location: ?controller=login');
   } 

    require_once('View_web/v_donhang.php');
?>
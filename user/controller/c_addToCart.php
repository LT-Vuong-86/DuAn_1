<?php
    //lấy id từ url
    $id = $_GET['id'];
    //Lấy dữ liệu từ bảng sanpham trong database
    $product = $db->get('sanpham', array('id_sanpham'=>$id));
        //SỬ dụng Session để tạo giỏ hàng
    //Kiểm tra xem Session[cart] đã có chưa
    if (isset($_SESSION['cart'])){
        if (isset($_SESSION['cart'][$id])){
            
            //Nếu đã có sản phẩm đó rồi thì +1 sản phẩm
            $_SESSION['cart'][$id]['sl']+=1;
        }else{
            $_SESSION['cart'][$id]['id_sanpham'] = $product[0]['id_sanpham'];
            $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
            $_SESSION['cart'][$id]['gia'] = $product[0]['gia'];
            $_SESSION['cart'][$id]['sl'] = 1;
            $_SESSION['cart'][$id]['anh_chinh'] = $product[0]['anh_chinh'];
        }
    }else{
        //Chưa có giỏ hàng
        $_SESSION['cart'][$id]['id_sanpham'] = $product[0]['id_sanpham'];
        $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
        $_SESSION['cart'][$id]['gia'] = $product[0]['gia'];
        $_SESSION['cart'][$id]['sl'] = 1;
        $_SESSION['cart'][$id]['anh_chinh'] = $product[0]['anh_chinh'];
    }
    header('location: ?controller=product-detail&id='.$id);
?>
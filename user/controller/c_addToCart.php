<?php
    //lấy id từ url
    $id = $_GET['id'];
    //Lấy dữ liệu từ bảng product trong database
    $product = $db->get('sanpham', array('id'=>$id));
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
            $_SESSION['cart'][$id]['anh'] = $product[0]['anh'];
        }
    }else{
        //Chưa có giỏ hàng
        $_SESSION['cart'][$id]['id_sanpham'] = $product[0]['id_sanpham'];
        $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
        $_SESSION['cart'][$id]['gia'] = $product[0]['gia'];
        $_SESSION['cart'][$id]['sl'] = 1;
        $_SESSION['cart'][$id]['anh'] = $product[0]['anh'];
    }
    header('location: ?controller=shop');
?>
<?php
    $method = $_GET['method'];
    $id = $_GET['id'];
    switch ($method) {
        case 'giam':
            $_SESSION['cart'][$id]['sl']-=1;
            if($_SESSION['cart'][$id]['sl']==0){
                unset($_SESSION['cart'][$id]);
            }
            if(empty($_SESSION['cart'])){
                unset($_SESSION['cart']);
            }
            header('location: ?controller=cart');
            break;

        case 'tang':
            $_SESSION['cart'][$id]['sl']+=1;
            header('location: ?controller=cart');
            break;

        case 'xoa':
            unset($_SESSION['cart'][$id]);
            
            if(empty($_SESSION['cart'])){
                unset($_SESSION['cart']);
            }
            header('location: ?controller=cart');
            break;

        default:
            header('location: ?controller=home');
            break;
    }
?>
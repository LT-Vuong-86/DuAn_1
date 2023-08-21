<?php 
	//Kiểm tra xem người dùng đã đăng nhập chưua
	if (isset($_SESSION['ss_admin'])) {
	 	//Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
	 	$user = $db->get('admin',array('id'=>$_SESSION['ss_admin']));
	 	//Kiểm tra người dùng có phải admin không
	 	if ($user[0]['level']==0) {
	 		//Nếu là admin thì lấy id trên url
	 		$id = $_GET['id'];
	 		//Lấy dữ liệu chi tiết order_detail tương ứng
	 		$data_order_detail = $db->get('order_detail',array('id'=>$id));
	 		//Trừ sản phẩm tương ứng ở trong bảng product đi
	 		foreach ($data_order_detail as $key => $value) {
	 			//Bước 1: lấy dữ liệu sản phẩm 
	 			$product = $db->get('sanpham',array('id'=>$value['id_sanpham']));
	 			//Bước 2: sửa dữ liệu số lượng bảng product
	 			$db->update('sanpham',array(
	 				'tongtien'=>$product[0]['tongtien']-$value['soluong']
	 			),array(
	 				'id'=>$value['id_sanpham']
	 			));
	 		}
	 		//Chuyển trạng thái order là đã duyệt
	 		$db->update('order',array(
	 				'status'=>1
	 			),array(
	 				'id'=>$id
	 			));
	 		//Chuyển về trang order
	 		header('location: ?controller=order');
	 	}else{
	 		//Nếu không phải admin thì cho người dùng về trang order
	 		header('location: ?controller=order');
	 	}
	}else{
		//Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
		header('location: ?controller=login');
	} 
	require_once('View_web/v_chitietdh.php');
?>
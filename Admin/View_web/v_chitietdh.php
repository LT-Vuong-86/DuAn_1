<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Chi tiết đơn hàng</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

    *{
        font-family: 'Ubuntu', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root{
        --black: black;
        --white: #fff;
        --yellow: #F5A623;
        --grey: grey;
        --smoke: rgb(220, 220, 220);
    }

    body{
        min-height: 100vh;
        overflow-x: hidden;
    }

    .topbar{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
        }

        .search{
            position: relative;
            width: 400px;
            margin: 0 10px;
        }

        .search label{
            position: relative;
            width: 100%;
        }

        .search label input{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            padding: 5px 20px;
            padding-left: 35px;
            font-size: 18px;
            outline: none;
            border: 1px solid var(--black);
        }

        .search label i{
            position: absolute;
            top: 0;
            left: 10px;
            font-size: 1.2rem;
        }

        .toggle{
            position: relative;
            top: 0;
            height: 60px;
            width: 60px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            cursor: pointer;
        }

        .user{
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .user img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="topbar">
        <div class="toggle">
        </div>

        <div class="search">
            <label for="">
                <input type="text" placeholder="Tìm kiếm...">
                <i class='bx bx-search'></i>
            </label>
        </div>

        <div class="user">
            <img src="./img/iconE.png" alt="">
        </div>
    </div>

    <div class="chitiet">
        <?php
            if (isset($_SESSION['ss_admin'])) {

                $user = $db->get('admin',array('id'=>$_SESSION['ss_admin']));
                if($user[0]['level']==0) {?>
				<div class="row">
					<h3 class="text-center col-md-12">Xử lí đơn hàng</h3>
				</div>
				<div class="row">
					<b class="text col-md-12">Mã đơn: <?php echo $data_order[0]['id'] ?></b>
					<b class="text col-md-12">Họ tên: <?php echo $data_order[0]['full_name'] ?></b>
					<b class="text col-md-12">Địa chỉ: <?php echo $data_order[0]['address'] ?></b>
					<b class="text col-md-12">Số điện thoại: <?php echo $data_order[0]['phone'] ?></b>
					<b class="text col-md-12">Email: <?php echo $data_order[0]['email'] ?></b>
					<b class="text col-md-12">Tổng đơn: <?php echo number_format($data_order[0]['amount']) ?>đ</b>
				</div>
				<div class="row">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Ảnh</th>
					      <th scope="col">Tên sản phẩm</th>
					      <th scope="col">Số lượng</th>
					      <th scope="col">Đơn giá</th>
					      <th scope="col">Tổng tiền</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					    <?php foreach ($data_order_detail as $key => $value) {
					    	//Lấy dữ liệu sản phẩm tương ứng
					    	$data_product = $db->get('sanpham',array('id'=>$value['id_sanpham']))
					   	?>
					      <th scope="row"><img height="50" width="50" src="<?php echo $data_product[0]['anh'] ?>"></th>
					      <td><?php echo $data_product[0]['tensanpham'] ?></td>
					      <td><?php echo $value['soluong'] ?></td>
					      <td><?php echo $value['gia'] ?></td>
					      <td><?php echo $value['tongtien'] ?></td>	      
					    </tr>
					    <?php } ?>
					  </tbody>
					</table>
				</div>
				<div class="row mt-4">
					<div class="col-md-10"></div>
					<a href="?controller=xuli_order&id=<?php echo $id ?>" class="btn btn-success col-md-2">Duyệt đơn</a>
				</div>
			<?php }
            }else{?>
				<div class="row">
					<h3 class="text-center text-danger col-md-12">Bạn không có quyền </h3>
				</div>
            <?php } ?>
    </div>  
</body>
</html>
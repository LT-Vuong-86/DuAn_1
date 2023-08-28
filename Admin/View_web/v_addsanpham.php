<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhân viên</title></title>
    <style>
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --success-color: #2691d9;
            --error-color: #e74c3c;
        }

        html, body, .wrapper{
            height: 100%;  
        }

        body{
            display: grid;
            place-items: center;
            padding: 24px;
            font-family: "Ubuntu";
            color: #000;
            animation: rotate 0.5s infinite alternate linear;
            transition: all 0.5s;
        }

        .container{
            width: 800px;
            height: auto;
            border: 1px solid black;
            border-radius: 10px;
            background: white;
            padding: 40px;
        }

        .container h2{
            text-align: center;
        }
        .form-control{
            width: 100%;
            position: relative;
            border: 1px solid grey;
        }
        .form-control:hover{
            border: 1px solid var(--success-color);
            box-shadow: 2px 2px 2px blue;
        }
    /* form li h5:nth-child(1){
    margin-bottom: -33px;
   

    } */
    li{
        list-style-type: none;
    }
        .form-control input{
            width: 100%;
            height: 40px;
            border: none;
            outline: none;
            font-size: 16px;
        }
        .form-control span{
            position: absolute;
        }

        .form-control input:focus ~ span{
            width: 100%;
        }

        body .button{
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .button{
            color: black;
            text-decoration: none;
            position: relative;
            padding: 20px 30px;
            display: flex;
            align-items: center;
            transition: all 1s;
            margin-top: 50px;
        }

        .button:before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            border-radius: 30px;
            background: rgba(30, 233, 186, .3);
            width: 56px;
            height: 56px;
            transition: all 1s;
        }

        .button span{
            position: relative;
            line-height: 1;
            font-weight: 500;
            letter-spacing: 0;
            padding-left: 20px;
            text-transform: uppercase;   
        }

        .button svg{
            position: relative;
            top: 0;
            margin-left: 10px;
            fill: none;
            stroke-linecap: round;
            stroke: rgb(0, 0, 0);
            stroke-width: 2;
            transform: translateX(-5px);
            transition: all 0.5s;
        }

        .button:hover{
            color: black;
        }

        .button:hover:before{
            width: 100%;
            background: rgb(1, 233, 214);
        }

        .button:hover svg{
            stroke: black;
            transform: translateX(0);
        }

        #canhbao{
            position: absolute;
            margin-left: 5px;
        }

        #id_dm select{
    width: 100%;
    height: 100%;
}
#id_dm{
    height: 50px;
    margin-bottom: 35px;
}
        #tensanpham{
            margin-bottom: 35px;
        }

        #anh{
            margin-bottom: 35px;
        }

        #tonkho{
            margin-bottom: 35px;
        }

        #gia{
            margin-bottom: 35px;
        }
        
        #xuatxu{
            margin-bottom: 35px;
        }

        #trangthai{
            margin-bottom: 35px;
        }

        #daban{
            margin-bottom: 35px;
        }

        @keyframes rotate{
            100%{
                background-position: 15% 50%;
            }
        }
       

     

    </style>
</head>
<body>
<div class="container">
    <form action="?controller=addsanpham" method="post" enctype="multipart/form-data">
        <div>
            <h2 class="text-uppercase text-center">Thêm sản phẩm</h2>
        </div> 
        <li><h5>Danh mục</h5></li>
        <div id="id_dm" class="form-control "   >
        
            
            <select name="id_dm"  >
                <option value="1">Áo nữ</option>
                <option value="2">Quần nữ</option>
                <option value="3">Váy đầm nữ</option>
                <option value="4">Áo nam</option>
                <option value="5">Quần nam</option>
                <option value="6">Vest nam</option>
                <option value="7">Áo trẻ em</option>
                <option value="8">Quần trẻ em</option>
                <option value="9">Bộ quần áo trẻ em</option>
            </select>
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['id_dm'])){?>
                <p class="text-danger"><?php echo $loi['id_dm']?></p> 
            <?php }?>
        </div>
        <h5>Tên sản phẩm</h5>
        <div id="tensanpham" class="form-control row mx-1">
            <input name="tensanpham" type="tensanpham" placeholder="Tên sản phẩm" 
            value="<?php echo (isset($tensanpham))?$tensanpham:'' ?>" >
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['tensanpham'])){?>
                <p class="text-danger"><?php echo $loi['tensanpham']?></p> 
            <?php }?>
        </div>
        <h5>Ảnh chính sản phẩm</h5>
        <div id="anh" class="form-control row mx-1">
       
            <input name="img_main[]"  type="file" placeholder="Ảnh chính sản phẩm" 
            value="<?php echo (isset($anh))?$anh:'' ?>" >
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['anh'])){?>
                <p class="text-danger"><?php echo $loi['anh']?></p> 
            <?php }?>
        </div>
        <h5>Ảnh phụ sản phẩm</h5>
        <div id="anh" class="form-control row mx-1">
        
            <input name="anh_phu[]" multiple  type="file" placeholder="Ảnh phụ sản phẩm" 
            value="<?php echo (isset($anh))?$anh:'' ?>" >
        </div>
       
        <h5>Số lượng tồn kho</h5>
        <div id="tonkho" class="form-control row mx-1">
        
            <input name="tonkho" type="text" placeholder="Số lượng tồn kho" 
            value="<?php echo (isset($tonkho))?$tonkho:'' ?>" >
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['tonkho'])){?>
                <p class="text-danger"><?php echo $loi['tonkho']?></p> 
            <?php }?>
        </div>
        <h5>Giá </h5>
        <div id="gia" class="form-control row mx-1">
           
            <input name="gia" type="text" placeholder="Giá 1 sản phẩm" 
            value="<?php echo (isset($gia))?$gia:'' ?>" >
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['gia'])){?>
                <p class="text-danger"><?php echo $loi['gia']?></p> 
            <?php }?>
        </div>
        <h5>Xuất xứ</h5>
        <div id="xuatxu" class="form-control row mx-1">
            
            <input name="xuatxu" type="text" placeholder="Xuất xứ" 
            value="<?php echo (isset($xuatxu))?$xuatxu:'' ?>" >
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['xuatxu'])){?>
                <p class="text-danger"><?php echo $loi['xuatxu']?></p> 
            <?php }?>
        </div>

       
    
        <button style="border: none; border-radius:25px; background: white; width: 100%;" 
        class="button" name="btn_addsanpham" type="submit">
            <span>add</span>
            <svg width="13px" height="10" viewBox="0 0 13 10">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
        </button>
    </form>    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
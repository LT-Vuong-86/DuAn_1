<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Thêm nhân viên</title></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

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
            animation: rotate 6s infinite alternate linear;
            transition: all 1s;
        }

        .container{
            width: 400px;
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
            transition: all 1s;
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
            padding-top: -20px;
            position: absolute;
            margin-left: 5px;
        }

        #username{
            margin-top: 35px;        
        }

        #matkhau{
            margin-top: 35px;        
        }

        #full_name{
            margin-top: 35px;        
        }

        #email{
            margin-top: 35px;        
        }

        #sdt{
            margin-top: 35px;        
        }
    
        #vaitro{
            margin-top: 35px;       
        }

        #diachi{
            margin-top: 35px;       
        }

        @keyframes rotate{
            100%{
                background-position: 15% 50%;
            }
        }

        @media (width >= 500px){
            body{
                padding: 0;
            }
            .container{
                margin: 0;
                width: 400px;
            }
        }

    </style>
</head>
<body>
<div class="container">
    <form action="?controller=addnhanvien" method="post">
        <div><h2 class="text-uppercase text-center">Thêm nhân viên</h2></div>
        <div id="username" class="form-control row mx-1">
            <input name="username" type="text" placeholder="Tên đăng nhập" 
            value="<?php echo (isset($username))?$username:'' ?>" required>
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['username'])){?>
                <p class="text-danger"><?php echo $loi['username']?></p> 
            <?php }?>
        </div> 

        <div id="full_name" class="form-control row mx-1">
            <input name="full_name" type="text" placeholder="Tên đầy đủ" 
            value="<?php echo (isset($full_name))?$full_name:'' ?>" required>
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['full_name'])){?>
                <p class="text-danger"><?php echo $loi['full_name']?></p> 
            <?php }?>
        </div>

        <div id="matkhau" class="form-control row mx-1">
            <input name="pass" type="password" placeholder="Mật khẩu" 
            value="<?php echo (isset($password))?$password:'' ?>" required>
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['pass'])){?>
                <p class="text-danger"><?php echo $loi['pass']?></p> 
            <?php }?>
        </div>

        <div id="email" class="form-control row mx-1">
            <input name="email" type="text" placeholder="Email" 
            value="<?php echo (isset($email))?$email:'' ?>" required>
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['email'])){?>
                <p class="text-danger"><?php echo $loi['email']?></p> 
            <?php }?>
        </div>

        <div id="sdt" class="form-control row mx-1">
            <input name="sdt" type="text" placeholder="SĐT" 
            value="<?php echo (isset($sdt))?$sdt:'' ?>" required>
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['sdt'])){?>
                <p class="text-danger"><?php echo $loi['sdt']?></p> 
            <?php }?>
        </div>


        <div id="vaitro" class="form-control row mx-1">
            <input name="vaitro" type="text" placeholder="Vai trò" 
            value="<?php echo (isset($vaitro))?$vaitro:'' ?>" required>
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['vaitro'])){?>
                <p class="text-danger"><?php echo $loi['vaitro']?></p> 
            <?php }?>
        </div>

        <div id="diachi" class="form-control row mx-1">
            <input name="diachi" type="text" placeholder="Nơi ở hiện tại" 
            value="<?php echo (isset($diachi))?$diachi:'' ?>" required>
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['diachi'])){?>
                <p class="text-danger"><?php echo $loi['diachi']?></p> 
            <?php }?>
        </div>
    
        <button style="border: none; border-radius:25px; background: white; width: 100%;" 
        class="button" name="btn_addnhanvien" type="submit">
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
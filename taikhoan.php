<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
    <center>
        
    <div class=container>
        <div class=tittle><p>Đăng nhập</p></div>
        <div class="form">
        <form method="post" action ="">
            <label>
                <p>Tài khoản:</p>
                <input type="text" name="1" placeholder="nhập tài khoản" />
            </label>
            <br>
            <br>
            <label>
                <p>Passwork:</p> <input type="text" name="2" placeholder="nhập passwork" />
            </label>
            <br>
            <br>
            <br>
            <br>
            <button type="submit" name="btn" >Đăng nhập</button>
        </form>
    </div>
    </div>
    
    </center>
    <!-- <form method="post" action="" >
        Tài khoản: 
        <input type="text" name ="1" value="" placeholder="Nhập tài khoản"/>
        <br>
        <br>
        Mật khẩu: 
        <input type="text" name ="2"  value="" placeholder="Nhập mật khẩu"/> 
        <br>
        <br>
            <input type="submit" name="btn" value="Đăng Nhập"/>
        <br>
        <br>
    </form> -->

    <?php
    if (isset($_POST["btn"])){
        $tk = $_POST["1"];
        $mk = $_POST["2"];

        $a = "hovandi";
        $b = "hovandi123";

        if ($a == $tk && $b == $mk){
            echo "Đăng nhập thành công";
        }

        elseif ( $a != $tk) {
            echo "Tài khoản không tôn tại";
        }
        elseif ($b != $mk) {
            echo "đăng nhập sai password";
        }
        
            
    }
    ?>
    <style>
        .container{
            width:500px;
            height:auto;
            margin-top: 100px;
        }
        .tittle{
            width:500px;
            height:100px;
            background-color:coral;
            color:aqua;
        }
        .tittle p{
            padding: 35px;
            font-size: 25px;
        }
        .form{
            width:500px;
            height:auto;
            background-color:darksalmon ;
        }
        button:hover{
            cursor: pointer;
        }
        button{
            background-color:aqua ;
        }
    </style>
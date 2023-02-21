<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1> Nhập thông tin sản phẩm</h1>
        <form method="post" action="">
            Tên Sản phẩm
            <input type="text" name="name" value="" placeholder="Nhập tên sản phẩm" />
            <br>
            <br>
            Giá tiền
            <input type="number" name="gia" value="" placeholder="Nhập giá tiền" />
            <br>
            <br>
            Mô tả
            <input type="text" name="mota" value="" placeholder="Mô tả" />
            <br>
            <br>
            Hình ảnh
            <input type="text" name="hinhanh" value="" placeholder="Nhập chữ" />
            <br>
            <br>
            <input type="submit" name="btn" value="lưu" />
            <br>
            <br>
        </form>
        <?php
        if (isset($_POST["btn"])) {
            $n = 0;
            if (isset($_SESSION["traicay"])) 
                $n = count($_SESSION["traicay"]);
                $_SESSION["traicay"][$n]["name"] = $_POST["name"];
                $_SESSION["traicay"][$n]["gia"] = $_POST["gia"];
                $_SESSION["traicay"][$n]["mota"] = $_POST["mota"];
                $_SESSION["traicay"][$n]["hinhanh"] = $_POST["hinhanh"];
                header("location: arrsession1.php");
        }
 
        ?>
    </div>
<!doctype html>
<?php session_start()?>
<html lang="en">
<head>
    <title>Thông tin sinh viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Form Thêm thông tin sản phẩm</h1>
        <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text"  id ="hoten" class="form-control" name="name">   <!--  name="hoten" server sẽ nhận -->
        </div>

        <div class="form-group">
            <label for="">Giá</label>
            <input type="number" id="masv" class="form-control" name = "gia">
        </div>

        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" id="lop" name ="mota" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Hình ảnh</label> </br>
            <input type="file" name="hinhanh" value="upload" placeholder="Nhập chữ" />
        </div>

        <button type="submit" class="btn btn-success" name="btn" value="lưu"> Thêm sản phẩm</button>

        <!-- <input type="file" name="hinhanh" value="upload" placeholder="Nhập chữ" />
            <br>
            <br>
            <input type="submit" name="btn" value="lưu" />
            <br>
            <br> -->

        </form>

    </div>

    <?php
        if (isset($_POST["btn"])) {
            $n = 0;
            if (isset($_SESSION["traicay"])) 
                $n = count($_SESSION["traicay"]);
                $_SESSION["traicay"][$n]["name"] = $_POST["name"];
                $_SESSION["traicay"][$n]["gia"] = $_POST["gia"];
                $_SESSION["traicay"][$n]["mota"] = $_POST["mota"];
                
                if(isset($_FILES['hinhanh'])){
                    $file=$_FILES['hinhanh'];
                    $tenfile=$file['name'];
                    move_uploaded_file($file['tmp_name'],$tenfile);
                    $_SESSION["traicay"][$n]["hinhanh"] = $tenfile;
                   }
                  
                 header("Location: http://localhost/BT_PHP/kiemtra/show.php");
        }
        ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
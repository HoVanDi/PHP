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
<?php
    if (isset($_GET['id'])){
        $masp =$_GET['id'];
        If(isset($_SESSION['traicay'])){
            $name = $_SESSION["traicay"][$masp]['name'];
            $gia = $_SESSION["traicay"][$masp] ['gia'];
            $mota =  $_SESSION["traicay"][$masp]['mota'];
            $hinhanh =  $_SESSION["traicay"][$masp]['hinhanh'];
        }
    }
    ?>
    <form method="post" action="" enctype="multipart/form-data">
        Tên Sản phẩm
        <input type="text" name="name" value=" <?php echo $name ?>" placeholder="Nhập tên sản phẩm" />
        <br>
        <br>
        Giá tiền
        <input type="number" name="gia" value="<?php echo $gia ?>" placeholder="Nhập giá tiền" />
        <br>
        <br>
        Mô tả
        <input type="text" name="mota" value="<?php echo $mota ?>" placeholder="Mô tả" />
        <br>
        <br>
        Hình ảnh
        <input type="text" name="hinhanh" value="<?php echo $hinhanh ?>" placeholder="Nhập chữ" />
        <br>
        <br>
        tên file:
        <input type="file" name="tep" value="upload" />
        <br>
        <br>
        <input type="submit" name="btn" value="lưu" />
        <br>
        <br>
    </form>


    <?php
if (isset($_GET['id'])){
        $masp =$_GET['id'];
    If(isset($_POST['btn'])){
        $_SESSION["traicay"][$masp]['name'] = $_POST['name'];
        $_SESSION["traicay"][$masp] ['gia']= $_POST['gia'];
        $_SESSION["traicay"][$masp]['mota']= $_POST['mota'];
       if(isset($_FILES['hinhanh'])){
        $file =$_FILES['hinhanh'];
        $tefile = $file['name'];
        If($tefile!=""){
            move_uploaded_file($file['tmp_name'],$tefile);           
            $_SESSION['traicay'][$masp]['hinhanh']=$tefile;
        }
    }
       header("location: arrsession1.php");
    }
}
    ?>
</body>

</html>
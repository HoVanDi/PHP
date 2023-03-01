<!DOCTYPE html>
<?php session_start()?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1> Danh sách sản phẩm </h1>
        <form action="" method="$_POST">
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Tên sản phẩm</td>
                    <td>Giá tiền</td>
                    <td>Mô tả</td>
                    <td>Hình ảnh</td>
                    <td> Action </td>
                </tr>
        </form>

        
        <?php       
    if (isset($_SESSION["traicay"])){
    $dem=count($_SESSION["traicay"]);
    for($i=0;$i<$dem;$i++){
        //$i += 1;
    ?>
        <tr>
            <td><?php echo $i+1;?></td>
            <td><?php echo $_SESSION ["traicay"][$i]["name"];?></td>
            <td><?php echo $_SESSION ["traicay"][$i]["gia"];?></td>
            <td><?php echo $_SESSION ["traicay"][$i]["mota"];?></td>
            <td> <img src="<?php echo  $_SESSION ["traicay"][$i]["hinhanh"];?>" height=100 , width=200></td>
            <td> <a href="deletesession.php?id=<?php echo ($i) ?> "> xóa  ||  <a href="edit.php?id=<?php echo ($i) ?> "> cập nhật </a> </a>  
        </tr>
        <?php
}
    }
    //unset($_SESSION["traicay"]);
?>

        <a href="arrsession.php"> Nhập Tiếp </a>
    </div>
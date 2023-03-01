<!doctype html>
<?php session_start()?>
<html lang="en">

<head>
    <title>Show sản phẩm</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Hoạt động</th>
            </tr>
        </thead>
        <!-- <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>

        </tbody> -->
  


    <?php       
    if (isset($_SESSION["traicay"])){
    $dem=count($_SESSION["traicay"]);
    for($i=0;$i<$dem;$i++){
        //$i += 1;
    ?>
     <tbody>
        <tr>
            <th><?php echo $i+1;?></th>
            <td><?php echo $_SESSION ["traicay"][$i]["name"];?></td>
            <td><?php echo $_SESSION ["traicay"][$i]["gia"];?></td>
            <td><?php echo $_SESSION ["traicay"][$i]["mota"];?></td>
            <td> <img src="<?php echo  $_SESSION ["traicay"][$i]["hinhanh"] ?>" height=100 , width=200></td>
            <td> <a href="deletesession.php?id=<?php echo ($i) ?> "class="btn btn-danger"> xóa  ||  <a href="edit.php?id=<?php echo ($i) ?> "> cập nhật </a> </a>  
        </tr>
        </tbody>
        <?php
        }
    }
?>
  </table>
        <a href="arrsession.php"> Nhập Tiếp </a>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
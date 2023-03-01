cho mảng $user = array ('dung'=>'123','piter'=>'456','sam'=>'132','cam'=>'956','alex'=>'677')</br>
Tạo mảng sessecion</br>
Thêm và xóa user có tên là sam </br>
HIện thị lại danh sách sau khi xóa</br>
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
    <h1> Danh sach thông tin </h1>
    <form action="" method="$_POST">
        <table border="1">
            <tr>
               <td>Tên </td>
                <td>PassWork</td>
                <td>Action</td>
            </tr>
    </form>
    <?php
    $test = $_SESSION['user'];
    $n = count($test);
    for ($i = 0; $i < $n; $i++) {
        ?>
        <tr>
            <td>
                <?php echo $test[$i]["name"]; ?>
            </td>
            <td>
                <?php echo $test[$i]["passwork"]; ?>
            </td>
            <td> <a href ="test2.php?xoa=<?php echo ($i) ?> "> xóa  </a> </td>
        </tr>
    <?php } ?>

</body>

</html>

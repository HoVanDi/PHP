<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Danh sach san pham </h1>
    <form action="" method="$_POST">
    <table border="1">
    <tr>
        <td>San pham</td>
        <td>gia tien</td>
        <td>mo ta </td>
        <td>hinh anh</td>
    </tr>
    </form>
   
    <?php
    $traicay=array();
    $traicay[0] ["tenSP"]="tao";
    $traicay[0] ["Giatien"]="34";
    $traicay[0] ["mota"]="ngon";
    $traicay[0] ["hinhanh"]="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDusbfAVwCDstS1wKiLYZdIeDlTPnexmSB1b7ogfWgdX0viycO2jy2xiRMidxwVr1ogVU&usqp=CAU";

    $traicay[1] ["tenSP"]="chanh";
    $traicay[1] ["Giatien"]="34";
    $traicay[1] ["mota"]="ngon";
    $traicay[1] ["hinhanh"]="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDusbfAVwCDstS1wKiLYZdIeDlTPnexmSB1b7ogfWgdX0viycO2jy2xiRMidxwVr1ogVU&usqp=CAU";

    $traicay[2] ["tenSP"]="hong";
    $traicay[2] ["Giatien"]="34";
    $traicay[2] ["mota"]="ngon";
    $traicay[2] ["hinhanh"]="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDusbfAVwCDstS1wKiLYZdIeDlTPnexmSB1b7ogfWgdX0viycO2jy2xiRMidxwVr1ogVU&usqp=CAU";

    $traicay[3] ["tenSP"]="nho";
    $traicay[3] ["Giatien"]="34";
    $traicay[3] ["mota"]="ngon";
    $traicay[3] ["hinhanh"]="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDusbfAVwCDstS1wKiLYZdIeDlTPnexmSB1b7ogfWgdX0viycO2jy2xiRMidxwVr1ogVU&usqp=CAU"
    
    ?>
  
    <?php
    $n=count($traicay);
    for($i=0;$i<$n;$i++){
    ?>
    <tr>
        <td><?php echo $traicay[$i]["tenSP"];?></td>
        <td><?php echo $traicay[$i]["Giatien"];?></td>
        <td><?php echo $traicay[$i]["mota"];?></td>
        <td> <img src=<?php echo $traicay[$i]["hinhanh"];?> height =50 , width =40></td>
    </tr>
   <?php }?>
 <!-- </table> -->




    
</body>
</html>
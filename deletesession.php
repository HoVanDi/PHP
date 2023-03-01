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
    $id = $_GET['id'];
    $fileHA=$_SESSION['traicay'][$id]['hinhanh'];
    echo "<img src='$fileHA' >";
    if ($fileHA!="")
     unlink($fileHA);
    array_splice($_SESSION['traicay'], $id, 1);

    header('location: arrsession1.php');


    // $n = count($_SESSION['a']);
    // $n = $fileHA($_SESSION['a'][$id][3]);

    
    // unset($_SESSION['a'][$id]);
    // If($masp<($n-1)){
    //     for ($i =$id;$i< $n;$i++)
    //     $_SESSION['a'][$i]=$_SESSION['a'][$i+1];
    //     unset($_SESSION['a'][$n-1]);
    // }
        ?>
</body>
</html>
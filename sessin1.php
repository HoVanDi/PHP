<?php session_start()?>
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
    <form method="post" action="" >
        <input type="text" name ="1" value="" placeholder="Nhập chữ"/>
        <br>
        <br>
     <input type="submit" name="btn" value="chào"/>
        <br>
        <br>
    </form>
    <?php
    if (isset($_POST["btn"])){
        $_SESSION['bc'] =$_POST["1"];
        header ('location: session2.php');
    }
    ?>
</div>
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

        <input type="text" name ="2"  value="" placeholder="Nhập n " value="<?php if (isset($_POST["2"])){
        echo $_POST["2"];
        };
        ?>"/> 

        <input type="submit" name="btn" value="Kiểm tra"/>
        <br>
        <br>
    </form>
</div>

<?php

    if (isset($_POST["btn"])){
        $b =0;
        $a = (int) $_POST["2"];
        while ($a > 0) {
            $b += $a %10;
            $a =$a/10;
        }
        echo "kết quả $b";
           }


?>
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
        <input type="text" name ="1" value="" placeholder="Nhập cạnh a"/>
        <br>
        <br>
        <input type="text" name ="2"  value="" placeholder="Nhập cạnh b"/> 
        <br>
        <br>
        <input type="text" name ="3"  value="" placeholder="Nhập cạnh c"/> <input type="submit" name="btn" value="Kiểm tra"/>
        <br>
        <br>
    </form>
</div>

<?php
if (isset($_POST["1"], $_POST["2"], $_POST["3"])) {
    $a = (int) $_POST["1"];
    $b = (int) $_POST["2"];
    $c = (int) $_POST["3"];
    if (isset($_POST["btn"])) {
         if ($a == $b && $a == $c && $b == $c) {    
            echo "Đầy là Tam giác đều";            
        }  
        elseif ( $a == $b || $a == $c || $b == $c) {
            echo " Đây là Tam giác Cân";
        } 
        else  {
            echo "Đầy là Tam giác thường";
        }

    }
}
?>
</body>

</html>
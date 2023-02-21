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
         Tên: <input type="text" name ="1" value="" placeholder="Nhập tên"/> <input type="submit" name="btn" value="Chào"/>
        <br>
        <br>
    </form>
</div>

<?php
if (isset($_POST["btn"])) {
    $a =  $_POST["1"];
    echo "Xin chào bạn $a";
}
?>
</body>

</html>
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
        <input type="text" name ="1" value="" placeholder="Nhập số thứ nhất"/>
        <br>
        <br>
        <input type="text" name ="2"  value="" placeholder="Nhập số thứ hai"/> <input type="submit" name="btn" value="Tính tổng"/>
        <br>
        <br>
    </form>
</div>

<?php
if (isset($_POST["1"], $_POST["2"])) {
    $a = (int) $_POST["1"];
    $b = (int) $_POST["2"];
    echo "Tổng 2 số là:". ($a + $b);
}
?>
</body>

</html>
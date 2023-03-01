<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form action="" method="$_POST">
<button type="submit" name="click"> chọn</button>

</form>
<?php
if(isset($_POST['click'])){
    if(isset( $_SESSION ['user'])){
        header('http://localhost/BT_PHP/test/test1.php');
    }
}
    $test = array();
    $test[0]["name"] = "DI";
    $test[0]["passwork"] = "34";

    $test[1]["name"] = "Tu";
    $test[1]["passwork"] = "54";

    $test[2]["name"] = "Huu";
    $test[2]["passwork"] = "46";

    $test[3]["name"] = "Quang";
    $test[3]["passwork"] = "95";

    $_SESSION['user'] = $test;
        ?> 

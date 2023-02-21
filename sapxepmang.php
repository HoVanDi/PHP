N phân tử số nguyên in ra số lớn nhất và nhỏ nhất của mảng, in ra vị trí <br>


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
        <input type="text" name ="1" value="" placeholder="Nhập chuỗi"/>
        <br>
        <br> <input type="submit" name="btn" value="Thực hiện"/>
    </form>
</div>

<?php
if (isset($_POST["btn"])){   
    $arr = $_POST["1"]; 
    $array = explode(',',$arr);
    $max = $array[0];
    $min = $array[0];

    
for ($i = 0; $i < count($array); $i++) {
    if (is_numeric($array["$i"])){
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
    if ($array[$i] < $min) {
        $min = $array[$i];
    }
}
}
echo "<br> Phân tử nhỏ nhất là $min ở các vị trí ";
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $min) {
        echo  "<br>". $i + 1 ;
    } 
}
echo "<br> Phân tử lớn nhất là $max ở các vị trí ";
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $max) {
        echo  "<br>". $i + 1 ;
    }
}
}

// $array = [
//     456,
//     23,
//     32,
//     5,
//     43,500,
//     0,
//     312,
//     352,
//     2,
//     13,
//     500,
//     21,
//     32,
//     1
// ];
// if (isset($_POST["btn"])){    
// $max = $array[0];
// $min = $array[0];
// for ($i = 0; $i < count($array); $i++) {
//     if ($array[$i] > $max) {
//         $max = $array[$i];
//     }
//     if ($array[$i] < $min) {
//         $min = $array[$i];
//     }
// }
// echo "<br> Phân tử nhỏ nhất là $min ở các vị trí ";
// for ($i = 0; $i < count($array); $i++) {
//     if ($array[$i] == $min) {
//         echo  "<br>". $i + 1 ;
//     } 
// }
// echo "<br> Phân tử lớn nhất là $max ở các vị trí ";
// for ($i = 0; $i < count($array); $i++) {
//     if ($array[$i] == $max) {
//         echo  "<br>". $i + 1 ;
//     }
// }
// }
?>


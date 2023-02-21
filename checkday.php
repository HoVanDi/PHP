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
     
        <input type="number" name ="1" value="" placeholder="Nhập ngày"/>
        <br>
        <br>
       
        <input type="number" name ="2"  value="" placeholder="Nhập năm"/> 
        <br>
        <br>
       
        <input type="number" name ="3"  value="" placeholder="Nhập tháng"/> <input type="submit" name="btn" value="Kiểm tra"/>
        <br>
        <br>
    </form>


    <?php
    if (isset($_POST["1"], $_POST["2"], $_POST["3"])) {
        $ngay =  $_POST["1"];
        $thang =  $_POST["3"];
        $nam = $_POST["2"];
//        $tday = 0;
if (isset($_POST["btn"])) {
    switch ($thang) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $tday = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $tday = 30;
            break;
        case 2:
            switch ($nam) {
                case ($nam % 4 == 0):
                    $tday = 29;
                   
                    break;
                case ($nam % 4 != 0):
                    $tday = 28;
                   
                    break;
            };
            break;

    };

    if ($ngay <= $tday && $nam > 0 && $thang > 0 && $ngay > 0) {
        echo " Ngày Hợp Lệ";
    }
    else {
        echo " Ngày Không hợp lệ";
    }
}
    }
   
?>

    
</div>
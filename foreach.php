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
        <form method="post" action="">
            <input type="text" name="1" value="<?php if (isset($_POST['1']))
                echo $_POST['1'] ?>"
                    placeholder="Nhập tên" />
                <br>
                <br> <input type="submit" name="btn" value="Tra từ" />
                Kết quả:
                <?php
            if (isset($_POST["btn"])) {
                $array = array("cat" => "mèo", "dog" => "chó", "blu" => "xanh");
                $arr = strtolower($_POST["1"]);
                $result = "";
                foreach ($array as $u => $p) {
                    if ($u === $arr) {
                        $result = $p;
                    }
                }
                if ($result == "") {
                    echo "không tìm thấy kết quả cần tìm";
                } else {
                    echo $result;
                }
            }
            ?>
        </form>
    </div>
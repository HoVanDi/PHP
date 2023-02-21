in ra bảng của chương <br>

<?php
// cho số và in ra bẳng cửu chương 
$a = 6;

echo "Bảng cửu chương $a <br>";
for ($i = 1; $i<=10; $i++){
    $d = ($a * $i);
    echo " $a X $i = " . $d . "<br>";
};


// for($i =1; $i <=$a; $i++){
//     echo "Bảng của chương $i <br>";
//     for($j =1; $j<=10; $j++){
//         echo "$i X $j = " . ($i * $j). "<br>";
//     }
// }



// $j = 1;
// while ($j <= 10) {
//     $d = ($a * $j);
//     echo " $a X $j = " . $d . "<br>";
//     $j++;
// };



// bẳng cửu chương từ 1 tới 10
// for ($j = 1; $j <= 10; $j++) {
//     echo " Bẳng cửu chương $j <br>";
//     for ($i = 1; $i <= 10; $i++) {
//         $d = ($j * $i);
//         echo " $j X $i = " . $d . "<br>";
//     };
//     echo "<br>";
// };
?>
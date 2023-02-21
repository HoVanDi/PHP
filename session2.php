
<?php session_start()?>
<?php
if (isset($_SESSION['bc'])){
    $user2 = $_SESSION['bc'];
    echo " Chào $user2";
}
else
echo 'nobody'
?>
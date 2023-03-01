
<?php 
session_start();
//error_reporting(0); //

if(isset( $_GET['edit']) && $_GET['edit']>=0){
    for($i=0;$i< sizeof ($_SESSION["Trai_cay"]);$i++){
        $b=$_SESSION['Trai_cay'][$i][0];
        $c=$_SESSION['Trai_cay'][$i][1];
        $d=$_SESSION['Trai_cay'][$i][2];    
        $e=$_SESSION['Trai_cay'][$i][3];    
    }
}
if(isset($_POST['sbm'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $img=$_POST['tinh'];
    $imge=$_POST['img'];
    if($name!='' && $price!='' && $img!='' && $imge!=''){
        $mang=[$name,$price,$img,$imge];
        $_SESSION["Trai_cay"][$_GET['edit']]=$mang;
        header("location:t1.php");
        
    } 
}
?>
<form action="" method="post">
        <label for="">Tên</label>
        <input type="text" name="name" value="<?php echo $b?>"> <br>
        <label for="">Giá</label>
        <input type="text" name="price" value="<?php echo $c?>"><br>
        <label for="">Mô tả</label>
        <input type="text" name="tinh" value="<?php echo $d?>"><br>
        <label for="">Hình ảnh</label>
        <input type="text" name="tinh" value="<?php echo $e?>"><br>
        <input type="submit" name="sbm" value="cập nhật">
</form>
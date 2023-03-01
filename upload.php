<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body> 
    <form method="post" action="#" enctype="multipart/form-data" >
        <label for="file">tên file:</label>
        <input type="file" name="tep" value="upload"/>
        <br>
        <br>
     <input type="submit" name="btn" value="upload"/>
        <br>
        <br>
    </form>
    <?php
    if (isset($_POST["btn"])){
        if(isset($_FILES['tep'])){
            $file=$_FILES['tep'];
            $tenfile=$file['name'];
            move_uploaded_file($file['tmp_name'],$tenfile);
    ?>
    <img src="<?php echo $tenfile?> "style: height = 200px width = 300px"">
    <?php
        }    
    }
    ?>

    
</div>
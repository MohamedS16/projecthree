<?php 
include('./dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" enctype="multipart/form-data">
        <input type="text" name="uname" >
        <input type="text" name="pass" >
        <input type="file" name="sora[]" multiple >

        <input type="submit" name="submit" value="Upload">

        
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $un = $_POST['uname'];
            $pas = $_POST['pass'];
            $sora = $_FILES['sora'];

            // print_r($sora);

            // print_r(count($sora['name']));

            for($i=0;$i < count($sora['name']);$i++){
                $path = 'imgs/' . $sora['name'][$i];
                $tmp = $sora['tmp_name'][$i];

                $quer = "INSERT INTO `upload`(`sora`)VALUES ('$path')";
                $do = $con->query($quer);
                move_uploaded_file($tmp,$path);

            }

            // $quer = "INSERT INTO `upload`(`name`,`pass`,`sora`) VALUES ('$un','$pas',$sora)";
            // $do = mysqli_query($con,$quer);

            // move_uploaded_file($sora['tmp_name'],$path);
        

        }
    ?>




    
</body>
</html>


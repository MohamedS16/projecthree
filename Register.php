<?php 
// include('dbconnect.php');
session_start();
// echo rand(1,15);

$_SESSION['login'] = false;

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to my Website</title>
    <link rel="stylesheet" href="style/style.css">
    <script defer src="java/main.js"></script>
</head>
<body>
    
    <div class="parent">
        <form method="post" enctype="multipart/form-data" >
            <input type="text" name="username" placeholder="Username" value="<?php if(!empty($name)){echo($name);} ?>" />
            <input type="password" name="pass" placeholder="Password" value="<?php if(!empty($pass)){echo($pass);} ?>" />
            <input type="password" name="cpass" placeholder="Confirm Password" value="<?php if(!empty($cpass)){echo($cpass);} ?>" />
            <input type="text" name="phone" placeholder="Phone" value="<?php if(!empty($phone)){echo($phone);} ?>" />
            <input type="number" name="age" placeholder="Age" value="<?php if(!empty($age)){echo($age);} ?>" />
            <input type="text" name="address" placeholder="Address" value="<?php if(!empty($address)){echo($address);} ?>" />
            <input type="email" name="email" placeholder="E-mail" value="<?php if(!empty($email)){echo($email);} ?>" />
            <input type="file" name="sora[]" multiple  id="">
            <input type="submit" name="btn" placeholder="Enter your passowrd" class="btn">

        </form>

        <?php  
        
        if(isset($_POST['btn'])){

            $name = htmlspecialchars($_POST['username']);
            $pass = htmlspecialchars($_POST['pass']);
            $cpass = htmlspecialchars($_POST['cpass']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $address = htmlspecialchars($_POST['address']);   
            $age = htmlspecialchars($_POST['age']);

            $sora = $_FILES['sora'];
            
            $nom = [];
            $tmp = [];

            $nom = $sora['name'];
            $tmp = $sora['tmp_name'];

            for($i = 0; $i < count($nom); $i++){
                $ins = "INSERT INTO `swr`(`imgs`) VALUES('imgs/$nom[$i]')";
                mysqli_query($con,$ins);
                move_uploaded_file($tmp[$i],$nom[$i]);
            }






            // foreach($nom as $ok){
            //     $sq = "INSERT INTO `swr`(`img`)VALUES($ok)";

            // }

            // print_r($tmp);

            // foreach($tmp as $key => $val){
            //     move_uploaded_file($val,$nom[$key]);
            // }
        }
    
    ?>

    </div>

<?php 
    $ok = "SELECT * from `users`";
    // $do = mysqli_query($con,$ok);

    //foreach($do as $val){ ?>
        
        <h1><?php //echo($val['name']) ?></h1>
        <p><?php //echo($val['email']) ?></p>
    
    <?php //} ?>


</body>
</html>
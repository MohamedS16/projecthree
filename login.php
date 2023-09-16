<?php  
include('dbconnect.php');


?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
    </head>
    <body>

        <form method="post">
            <input type="text" name="name">
            <input type="password" name="pass">

            <input type="submit" value="Submit" name="submit" >
        </form>

        <?php 

            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $pass = $_POST['pass'];

                $sql = "SELECT `username`,`pass` FROM `register` WHERE `username` = '$name'";
                // $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);

                if(mysqli_num_rows($result) == 1){
                    if($row['pass'] == $pass){
                        $_SESSION['login'] = 'tmam';
                        $_SESSION['ok'] = $name;

                        header("location: ok.php");
                    }else{
                        echo "Wrong Password";
                    }
                }else{
                    echo "User not found";
                }
            }
        
        ?>


    </body>
</html>
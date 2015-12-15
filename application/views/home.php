<?php

    if($_SESSION['username']){
        echo $_SESSION['username'];
        echo $_SESSION['password'];
    }
    else{
        header("Location:../LoginController/index");
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>CI Login System</title>
    </head>
    <body>
        <h1>Welcome User, You have signed in ......</h1>
        <?php

            mysql_connect("10.151.34.159","root","") or die(mysql_error());
            mysql_select_db("fppweb") or die(mysql_error());

            $email = $_SESSION['username'];
            $image = mysql_query("SELECT * FROM user WHERE user_email='$email'");
            $image = mysql_fetch_assoc($image);
            $image = $image['user_pict'];
            
            if($image==NULL){
                echo "<img class='photo3' src='https://cdn0.iconfinder.com/data/icons/users-android-l-lollipop-icon-pack/24/user-128.png' />";
            }
            else{
                $email = $_SESSION['username'];
                //echo $email;
                echo "<img src='http://localhost/FPpweb/index.php/HomeController/foto' />";
            }
        ?>
        <a href ='../LoginController/logout'>Logout</a>
    
    </body>

</html>
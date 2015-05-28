<?php

    mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("fppweb") or die(mysql_error());

    //$email = addslashes($_REQUEST['email']);
    $email = $_SESSION['username'];
    $foto = mysql_query("SELECT * FROM user WHERE user_email='$email'");
    $foto = mysql_fetch_assoc($foto);
    $foto = $foto['user_pict'];

    //header("Content-type: image/jpeg");

    //echo $email;
    echo $foto;
?>
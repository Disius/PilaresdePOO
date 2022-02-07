<?php

require "out.php";

session_start();
if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
    $user = $_POST['usuario'];
    $pass = $_POST['contraseña'];
    if($user == "admon" && $pass == "123"){
        echo '<script language="javascript">alert("Bienvenido");</script>';
        header("out.php");
    }else{
        header("Location: index.php.php");
    }
}else{
    header("Location: index.php");
}



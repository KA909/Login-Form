<?php
 
if(isset($_POST["login-submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $pwd) !== false){
        header('Location: ../login.php?error=emptyFillerror');
        exit();
    }

    loginUser($conn, $username, $pwd);   
}
else{
    header("Location:../login.php");
    exit();
}





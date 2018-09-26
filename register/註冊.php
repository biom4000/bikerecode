<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="../jquery-3.3.1.min.js"></script>
    <script src="../bootstrap.min.js"></script>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Andywa
 * Date: 2018/7/12
 * Time: 下午 10:36
 */

define('_DB_HOST','localhost');
define('DB_ID','root');
define('_DB_PW','1sopqjr');
define('_DB_NAME','andywa0510');

$error_str ="";
$mysqli = new mysqli(_DB_HOST,DB_ID,_DB_PW,_DB_NAME);
if($mysqli->connect_error){
    die('無法連上資料庫('.$mysqli->connect_error.')'.$mysqli->connect_error);
}
else{
    $mysqli->set_charset("utf8");
    if(!empty($_POST["email"])){
        $id_email = "'".$_POST["email"]."'";
    }
    else{
        $error_str .= "日期";
    }
    if((!empty($_POST["password1"]))&&(!empty($_POST["password2"]))){
        $password = "'".$_POST["password1"]."'";
    }
    else{
        $error_str .= "日期";
    }

    if(empty($error_str)){
        $sql = "INSERT INTO register_data (id, password) 
              VALUES ($id_email,$password)";
        if($mysqli->query($sql) == TRUE){
            //header('location:index.html');
        }else{
            echo "error".$mysqli->error;
        }
    }else{
        echo "".$error_str;

        //header('location:index.html');
    }
}
$mysqli->close();

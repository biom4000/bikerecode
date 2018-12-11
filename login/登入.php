<?php
/**
 * Created by PhpStorm.
 * User: Andywa
 * Date: 2018/7/12
 * Time: 下午 08:15
 */

define('_DB_HOST','localhost');
define('DB_ID','root');
define('_DB_PW','1sopqjr');
define('_DB_NAME','andywa0510');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $value = "sdf";
    $id = $_POST["id"];
    $password = $_POST["password"];


    $mysqli = new mysqli(_DB_HOST,DB_ID,_DB_PW,_DB_NAME);
    if($mysqli->connect_error){
        die('無法連上資料庫('.$mysqli->connect_error.')'.$mysqli->connect_error);
    }
    else{
        $mysqli->set_charset("utf8");

        $sql = "SELECT id,password FROM register_data";
        $result = $mysqli->query($sql);

        if( !($result->num_rows > 0)){

        }
    }
    $mysqli->close();

}
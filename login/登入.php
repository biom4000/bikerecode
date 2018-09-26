<?php
/**
 * Created by PhpStorm.
 * User: Andywa
 * Date: 2018/7/12
 * Time: 下午 08:15
 */

$id = $password = "";

define('_DB_HOST','localhost');
define('DB_ID','root');
define('_DB_PW','1sopqjr');
define('_DB_NAME','andywa0510');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = check_input($_POST['input_id']);
    $password = check_input($_POST['input_password']);


    $mysqli = new mysqli(_DB_HOST,DB_ID,_DB_PW,_DB_NAME);
    if($mysqli->connect_error){
        die('無法連上資料庫('.$mysqli->connect_error.')'.$mysqli->connect_error);
    }
    else{
        $mysqli->set_charset("utf8");

        $sql = "SELECT id,password FROM register_data";
        $result = $mysqli->query($sql);

        if( $result->num_rows > 0){

        }else{
            echo "0 results";
        }
    }
    $mysqli->close();

    echo $id.$password;
}

function check_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
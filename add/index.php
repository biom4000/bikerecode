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
    if(!empty($_POST["bike_date"])){
        $bike_date = "'".$_POST["bike_date"]."'";
    }
    else{
        $error_str .= "日期";
    }

    if(!empty($_POST["bike_mileage"]) || ($_POST["bike_mileage"] == 0)){
        $bike_mileage = "'".$_POST["bike_mileage"]."'";
    }
    else{
        $error_str .= "里程";
    }

    if(!empty($_POST["bike_money"]) || ($_POST["bike_money"] == 0)){
        $bike_money = "'".$_POST["bike_money"]."'";
    }
    else{
        $error_str .= "價錢";
    }

    if(!empty($_POST["bike_class"])){
        $bike_class = "'".$_POST["bike_class"]."'";
    }
    else{
        $error_str .= "分類";
    }

    $bike_subclass = "'".$_POST["bike_subclass"]."'";

    if(empty($error_str)){
        $sql = "INSERT INTO bike (sn, date, mileage, cost, class, subclass, remark) 
              VALUES ('0',$bike_date, $bike_mileage, $bike_money,$bike_class,$bike_subclass,'')";
        if($mysqli->query($sql) == TRUE){
            header('location:index.html');
        }else{
            echo "error".$mysqli->error;
        }
    }else{
        echo "<script>
                    alert('$error_str');
                    
                </script>";
        
        //header('location:index.html');
    }

}
$mysqli->close();

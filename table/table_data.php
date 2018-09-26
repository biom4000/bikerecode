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

    $sql = "SELECT sn, date, mileage, cost, class, subclass, remark FROM bike";
    $result = $mysqli->query($sql);
    if( $result->num_rows > 0){
        echo "<table class='table'>
                <thead>
                    <tr>
                        <th scope=\"col\">SN</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Mileage</th>
                        <th scope=\"col\">Cost</th>
                        <th scope=\"col\">Class</th>
                        <th scope=\"col\">Subclass</th>
                        <th scope=\"col\">Remark</th>
                    </tr>
                </thead>
                <tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><th scope=\"row\">" . $row["sn"] . "</th><td>" . $row["date"] . "</td><td> " . $row["mileage"] . "</td><td> " . $row["cost"] .
                "</td><td> " . $row["class"] . "</td><td> " . $row["subclass"] . "</td><td> " . $row["remark"] . "</td></tr>";
        }
        echo "</tbody>
            </table>";
    }else{
        echo "0 results";
    }
}
$mysqli->close();

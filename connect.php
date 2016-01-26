 <?php
$host="localhost";
    $user="root"; // MySql Username
    $pass="root"; // MySql Password
    $dbname="GAS_HISTORY"; // Database Name
$conn = mysql_connect($host, $user, $pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
mysql_select_db($dbname, $conn); // เลือกฐานข้อมูล
mysql_query("SET NAMES utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย

$km = $_POST["km"];
$litre = $_POST["litre"];

$sql = "INSERT INTO HISTORY (DATE, KM , L) VALUES (NOW(), $km , $litre)";
mysql_query($sql);

?> 
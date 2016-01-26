<!DOCTYPE html>
<html>
<head>
	<title>Mikespp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="mikestylesheet.css">
</head>
<body>
	<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          	<div class="container">
            	<div class="navbar-header">
           <!--		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                		<span class="sr-only" >Toggle navigation</span>
                		<span class="icon-bar"></span>
                		<span class="icon-bar"></span>
                		<span class="icon-bar"></span>
              		</button>-->
              		<a class="btn navbar-toggle collapsed" href="history.php">
              			<span class="sr-only" >Toggle navigation</span>
                		<span class="icon-bar"></span>
                		<span class="icon-bar"></span>
                		<span class="icon-bar"></span></a>
              		<a class="navbar-brand white" href="home.php">Mikespp</a>
            	</div>
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
              <ul class="nav navbar-nav mynavbar-collapse">
                <li><a href="history.php">History</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <div class="container">
    	<div class="container spacetop"></div>
    	<div class="container spacetop"></div>
    	<div class="container spacetop"></div>
    	<div class="container spacetop"></div>
    	<form method="POST" action="home.php">
  			<div class="form-group">
    			<label for="exampleInputEmail1">Kilometers</label>
    			<input type="" class="form-control" name="km" >
  		</div>
  		<div class="form-group">
    		<label for="exampleInputPassword1">Liters</label>
    		<input type="" class="form-control" name="litre">
  		</div>
  		<div class="checkbox">
    		<label>
      			<input type="checkbox"> Full
    		</label>
  		</div>
  		<button type="submit" class="btn btn-success btn-lg btn-block" >Submit</button>
		</form>
    </div>
</body>
</html>

 <?php
$host="localhost";
    $user="root"; // MySql Username
    $pass="root"; // MySql Password
    $dbname="GAS_HISTORY"; // Database Name
$conn = mysql_connect($host, $user, $pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
mysql_select_db($dbname, $conn); // เลือกฐานข้อมูล
mysql_query("SET NAMES utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย

if (isset($_POST["km"])) {
  $value = mysql_query("SELECT KM FROM HISTORY ORDER BY id DESC LIMIT 1");
  $rows = array();
    while ($v = mysql_fetch_assoc($value)) { 
        $rows[] = $v;
    }


  $km = $_POST["km"];
  $litre = $_POST["litre"];
  $prev = $rows[0]["KM"];
  $kml = ($km-$prev)/$litre;

  $sql = "INSERT INTO HISTORY (DATE, KM , L , KML) VALUES (NOW(), $km , $litre , $kml)";
  mysql_query($sql);
}
?> 
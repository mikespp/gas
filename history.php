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

$sql = "SELECT * FROM HISTORY ";
$value = mysql_query($sql);



?> 

<!DOCTYPE html>
<html>
<head>
	<title>history</title>
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
              		<a class="navbar-brand" href="home.php">Mikespp</a>
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
		<div class="table-responsive">
  			<table class="table">
        		<thead>
          			<tr>
            			<th>Date</th>
            			<th>Kilometers</th>
            			<th>Litres</th>
            			<th>Km/L</th>
          			</tr>
        		</thead>
        		<tbody>
          			<?php 
                  while ($v = mysql_fetch_assoc($value)) {
                    echo "
                    <tr>
                      <td>
                        {$v['DATE']}
                      </td>
                      <td>
                        {$v['KM']}
                      </td>
                      <td>
                        {$v['L']}
                      </td>
                      <td>
                        {$v['KML']}
                      </td>
                    </tr> ";
                  }

                 ?>
          			
        		</tbody>
      		</table>
		</div>
	</div>
</body>
</html>
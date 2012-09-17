<?php
$email = $_POST["email"];
$pwd = $_POST["pwd"];
echo "Reached here!!!";
$rem=0;
$rem = $_POST["rem"];

$con=mysql_connect("loccalhost", "root", "") or die("Could not connect to database. Please check your internet connection");
$db = mysql_select_db("madapp",$con);
$query = "select email, password from user where email=$email ";
$res = mysql_query($query, $con);
$url="home.html";
if(strcmp($r1[1],$pwd)==0)
{
	fopen($url);
}
else
{
	echo "Invalid username or/and password. Try again.";
}
mysql_close($con);
?>
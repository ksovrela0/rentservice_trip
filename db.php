<?
error_reporting(0);
$db = mysql_connect("83.136.232.153","root","Gl-1114!");
mysql_select_db("trip",$db);
mysql_set_charset(utf8);
date_default_timezone_set("Asia/Tbilisi");

$getSystem = mysql_query("SELECT * FROM system WHERE id=1 LIMIT 1") or die(mysql_error());
$getSystemRow = mysql_fetch_array($getSystem);
?>
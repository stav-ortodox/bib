<?php
if ($id == ""){exit;}
require("./config/config.inc.php");
$link = mysql_connect($database_host, $database_username, $database_password)or die( "Could not connect to database.<br>");
$databasefound = mysql_select_db($database_name,$link) or die ("Couldn't find database.");
$sqlQuery="select news from ".$table_name. " where id='".$id."'";
$result=mysql_query($sqlQuery);
   while ($row = mysql_fetch_array($result)) {
       $pageoutput = $row[news];
   }
   
if ($pageoutput == ""){exit;}else{
   echo "<!--pagenews by ghriver www.inahole.net -->";
   echo $pageoutput;
   echo "<!--pagenews by ghriver www.inahole.net -->";
}
?>

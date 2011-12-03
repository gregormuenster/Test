<?
header(location='index.php');
session_start();
$_SESSION["COUNT"]+=1;
echo $_SESSION["COUNT"];
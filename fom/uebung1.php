<?
session_start();

$i=$_SESSION['y'];
$j=$_SESSION['x'];

$i==0 ? $i=1:"";


$_SESSION['z']=($i+$j);
echo $_SESSION['z'];

$_SESSION['x']=$_SESSION['y'];
$_SESSION['y']=$_SESSION['z'];

?>
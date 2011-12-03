

<?

function schaltjahr($jahr) {

if(($jahr%4==0 AND $jahr%100!=0) OR $jahr%400==0) {
echo "Schaltjahr";
}
else {
echo "Kein Schaltjahr";
}
}


if(empty($_POST["jahr"])==True){
echo '

<form action="index.php" method=post>

<select name="jahr" id="jahr">
';
for($jahr=1700;$jahr<=2011;$jahr++){
echo '<option value="'.$jahr.'">'.$jahr.'</option>';
}
echo '
<input name="senden" type="submit" id="senden" value="Absenden">';

}
else
{

$jahr = $_POST["jahr"];
schaltjahr($jahr);

}



?>
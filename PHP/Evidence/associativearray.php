<html>
<head></head>
<body>
<div style="background-color:green; font-family:verdana; ">
<?php
$Capitals["Bangladesh"]="Dhaka";
$Capitals["India"]="Delhi";
$Capitals["Pakistan"]="Islamabad";
$Capitals["Nepal"]="Katmando";
$Capitals["Srilanka"]="Colombo";
$Capitals["Vuthan"]="Thimpu";
$Capitals["Maldhip"]="Maley";
$Capitals["Afghnistan"]="Kabul";
asort($Capitals); //Value(Capital) sort
$sl=1;
echo"<table><tr><td>SL NO</td><td>Country</td><td>Capital</td></tr>";
foreach($Capitals as $k=>$v)
{
	echo"<tr><td>$sl</td><td>$k</td><td>$v</td></tr>";
	$sl++;
}
echo"</table>";
ksort($Capitals);//Key(Country) sort 
$sl=1;
echo"<table><tr><td>SL NO</td><td>Country</td><td>Capital</td></tr>";
foreach($Capitals as $k=>$v)
{
	echo"<tr><td>$sl</td><td>$k</td><td>$v</td></tr>";	
    $sl++;
}
echo"</table>";
?>
</div>
</body>
</html>
                                                 
<?
require("email.List.php");

$all=file_get_contents("email.txt");
$lines=explode("\n",$all);
foreach($lines as $v)
{
	list($a,$b)=explode("		",$v);
	$email=new Email\emailList($a,$b);
}
?>

<?
require("BookList.php");

$all=file_get_contents("book.txt");
$lines=explode("\n",$all);
foreach($lines as $v)
{
	list($a,$b,$c)=explode("       ",$v);
	$book=new Book\BookList($a,$b,$c);
}
?>

<?
namespace Book;
class BookList
{
	function __construct($isbn,$bookName,$authorName)                                         
	{
		$this->PrintData($isbn,$bookName,$authorName);
	}
	function PrintData($isbn,$bookName,$authorName)//display
	{
		echo "BookName:<b>$bookName</b>, 
        ISBN NO:<b>$isbn</b>, 
        Author Name:<b>$authorName</b><br/>";
	}
}
?>

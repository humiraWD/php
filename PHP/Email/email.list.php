<?
namespace Email;
class emailList
{
	function __construct($Name,$Email)                                         
	{
		$this->PrintData($Name,$Email);
	}
	function PrintData($Name,$Email)//display
	{
		echo "Name:<b>$Name</b>, 
         
        Email:<b>$Email</b><br/>";
	}
}
?>

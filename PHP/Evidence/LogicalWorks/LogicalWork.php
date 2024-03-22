<?
define("PI",3.1412);
class Evidence
{
	function Area_of_circle($radius)
	{
		return PI*pow($radius,2);
	}
	function Factorial($n)
	{
		$t=1;
		for($i=1;$i<=$n;$i++)
		{
			$t*=$i;			
		}
		return $t;
	}
	public function Check_Email($email)//Javascript: /^.......$/
	{
		if(preg_match("/^([a-zA-Z0-9_]+)\@([a-zA-Z0-9_]+)\.([a-zA-Z]{2,4})$/",$email))
			return "valid Email";
		else
		    return "Invalid Email";
	}
    public function Prime($n)
	{
		for($i=2;$i<=$n/2;$i++)
		{
			if($n%$i==0){
                return "Not Prime";
            }
		}
		return "Prime";
	}
}


?>

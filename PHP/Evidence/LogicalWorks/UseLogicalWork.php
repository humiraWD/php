<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
require("LogicalWork.php");
$a=new Evidence();		
?>
<form id="form1" name="form1" method="post">
  <fieldset>
    <legend>Area of a Circle</legend>
    <p>Radius
      <label for="t1"></label>
      <input type="text" name="t1" id="t1" />
    </p>
    <p>
      <input type="submit" name="button" value="Area" />
    </p>
    <?php
		if(isset($_POST['button']))	{
		echo $a->Area_of_circle($_POST['t1']);
	}
	?>
     </fieldset>
     <fieldset>
     
 <legend>Factorial of a Number</legend>
    <p>Number
      <input type="text" name="t2" id="t2" />
    </p>
    <p>
      <input type="submit" name="button2" id="button2" value="Factorial" />
    </p>
     <div style="background-color:Red">
    <?php
	if(isset($_POST['button2'])){
		echo $a->Factorial($_POST['t2']);
	}

  
	

  ?>
  </fieldset>
     

  <fieldset>
  <legend>Prime of a Number</legend>
     <p>Number
       <input type="text" name="t4" id="t4" />
     </p>
     <p>
       <input type="submit" name="button4" id="button4" value="Prime" />
     </p>
      <div style="background-color:Red">
      <?php
		if(isset($_POST['button4']))	{
		echo $a->Prime($_POST['t4']);
	}
	?>

	
    </div>
  </fieldset>


  <fieldset>
  <legend>Email</legend>
     <p>Number
       <input type="text" name="t5" id="t5" />
     </p>
     <p>
       <input type="submit" name="button5" id="button" value="Email" />
     </p>
     <?php
     if(isset($_POST['button5']))	{
	 	echo $a->Check_Email($_POST['t5']);
	}
    
	?>

	
    </div>
  </fieldset>

</form>
</body>
</html>

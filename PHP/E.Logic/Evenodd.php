<html>
<head>
</head>
<body>
   
<form method="post">
<div>
   
<label for="t1">Number</label>
<input type="text" name="t1"/>
</div>
<div>
<button type="submit" name="b1">OK</button>
</div>
<?php
if(isset($_POST["b1"])){
   echo $_POST["t1"]%2==0?"Even":"Odd";
}
 echo "<center>div</center>" 
?>
</form>
</body>
</html>
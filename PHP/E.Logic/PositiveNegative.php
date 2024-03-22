<html>
<head>
</head>
<body>
<form method="post">
<div>
<label for="t1">Number1</label>
<input type="text" name="t1"/>
</div>

<div>
<button type="submit" name="b1">OK</button>
</div>
<?php
if(isset($_POST["b1"])){
   $a=$_POST["t1"];
   if($a>0){
    echo "Positive";
   }
   elseif($a<0){
    echo "Negative";
   }
   else{
    echo "Zero";
   }
}
?>
</form>
</body>
</html>
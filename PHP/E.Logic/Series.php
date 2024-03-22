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
   for($i=1;$i<=$_POST['t1'];$i++){
    echo "$i<br/>";
   }
}

?>
</form>
</body>
</html>
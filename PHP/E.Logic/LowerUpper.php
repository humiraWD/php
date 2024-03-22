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
<button type="submit" name="b1">Upper Case</button>
<div>
<button type="submit" name="b2">Lower Case</button>
</div>
</div>
<?php
if(isset($_POST["b1"])){
   echo strtoupper($_POST['t1']);
}
if(isset($_POST["b2"])){
    echo strtolower($_POST['t1']);
 }
?>
</form>
</body>
</html>
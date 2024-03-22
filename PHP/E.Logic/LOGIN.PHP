<html>
<head>
</head>
<body>
<form method="post">
<div>
<label for="t1">UserName</label>
<input type="text" name="t1"/>
</div>
<div>
<label for="t2">Password</label>
<input type="text" name="t2"/>
</div>
<div>
<button type="submit" name="b1">Login</button>
</div>
<?php
if(isset($_POST["b1"])){
   $a=strlen($_POST['t2']);
   if ($a<5){
    echo "Password cannot be less than 5 characters";
   }
   else{
    echo "OK";
   }
}

?>
</form>
</body>
</html>
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
<label for="t2">Number2</label>
<input type="text" name="t2"/>
</div>
<div>
<label for="t3">Number1</label>
<input type="text" name="t3"/>
</div>
<div>
<button type="submit" name="b1">OK</button>
</div>
<?php
if(isset($_POST["b1"])){
   $a=$_POST["t1"];
   $b=$_POST["t2"];
   $c=$_POST["t3"];
//    //Method1
//    if($a>$b){
//     if($a>$c){
//         echo "$a is the maximum";
//     }
//     else{
//         echo "$c is the maximum";
//     }
//    }
//    else{
//     if($b>$c){
//         echo "$b is the maximum";
//     }
//     else{
//         echo "$c is the maximum";
//     }
//    }
//    //Method2
// echo max($a,$b,$c);
//Method3
$d=[$a,$b,$c];
echo max($d);
}

?>
</form>
</body>
</html>
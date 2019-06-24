
<html>
<head>
<meta charset="utf-8">
<title>php4</title>
</head>

//p32～33//
<body>
<?php
$a = array("a","b","c"); 
unset($a[1]); //2番目の要素を破棄する//

$a = array("a","b","c"); 
unset($a); //配列を破棄する//

$a = array(1,2,3); 
$b = array(1,3,4); 
$c = array_diff($a,$b); //配列$aにあって配列$bにない要素をの値2を取り出す//

$a = array(1,2,3); //配列に要素を追加するにはarray_push()を使います//
array_push($a,4,5); //配列$aの末尾に4と5を値とする要素を追加します//

$b = array('A' => 1,'B' => 2,'C' => 3); //添字が文字列のとき配列を追加すると添字は0から始まります//
array_push($b,4,5);

//$a = array(,,);//
?>

</body>
</html>







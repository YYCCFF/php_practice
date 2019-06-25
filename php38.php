<html>
<head>
<meta charset="utf-8">
<title>php38</title>
</head>


<body>
<?php
  function addnum($a,$b)
  {
    $c = $a + $b;
    return $c ;
  }
  
  $x = 2;
  $y = 3;
  $z = addnum($x,$y);  //add関数を実行し、戻り値を変数zに格納する//
  
  print "$x + $y = $z <BR>\n";
?>
</body>
</html>
//p87//


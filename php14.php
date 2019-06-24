<html>
<head>
<meta charset="utf-8">
<title>php14</title>
</head>

//p50～51//
<body>
<?php
  $a = array(1,2);
  $b = array(3,4,5);
  $c = $a + $b; //$aと$bを結合する//
  
  $d = array(0 => 0 , 1 => 1);
  $e = array(1 => 1 , 0 => 0);
  $f = array(0 => 0 , 1 => "1");
  
  var_dump($d == $e);
  var_dump($d === $e);
  var_dump($d != $e);
  var_dump($d <> $e);
  var_dump($d !== $e);
  print "<BR>\n";
  var_dump($d == $f);
  var_dump($d === $f);
  var_dump($d != $f);
  var_dump($d <> $f);
  var_dump($d !== $f);
  print "<BR>\n";
  var_dump($e == $f);
  var_dump($e === $f);
  var_dump($e != $f);
  var_dump($e <> $f);
  var_dump($e !== $f);
  print "<BR>\n";
?>
</body>
</html>



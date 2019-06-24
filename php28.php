<html>
<head>
<meta charset="utf-8">
<title>php28</title>
</head>

<body>
<?php  
  $s = $i = 0;
  
  do{
      ++$i;
      $s += $i;
  }while($i < 10);
  
  print "1から$i までの和は $s";
  print "<BR>\n";
?>  
</body>
</html>
//p73//


<html>
<head>
<meta charset="utf-8">
<title>php42</title>
</head>


<body>
<?php
$x = 2;  $y = 2;  //グローバル変数$yのスコープ//

  function funcscope(){
    $x = 0;
    global $y;  //ローカル変数$xのスコープ//
    static $z;  //静的変数$zのスコープ//
    $x++; $y++; $z++;
    print "\$x=$x, \$y=$y, \$z=$z";
    print "<BR>\n"; 
  }
  
funcscope();
funcscope();
  
print "\$x=$x, \$y=$y";
print "<BR>\n";
print "//p93//";
?>
</body>
</html>

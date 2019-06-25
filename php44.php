<html>
<head>
<meta charset="utf-8">
<title>php44</title>
</head>


<body>
<?php
  $a = 1;
  
  function ShowNum(){
    $a = 2;      //ローカル変数$aのスコープ//
    print $a ;
  }
  ShowNum();
  
print "<BR>\n";
print "//p92//";

?>
</body>
</html>

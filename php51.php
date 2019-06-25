<html>
<head>
<meta charset="utf-8">
<title>php51</title>
</head>


<body>
<?php
  $str1 = "final|cloudy|rainy" ;
  $array1 = explode("|", $str1); //文字列$str1を「|」で分割して文字列$array1に格納する//
  $str2 = implode(",", $array1); //文字列$array1を「,」で連結して文字列$str2に格納する//
  
  print $str1;
  print "<BR>\n";
  print $array1;
  print "<BR>\n";
  print $str2;
  
print "<BR>\n";
print "//p111//";

?>
</body>
</html>

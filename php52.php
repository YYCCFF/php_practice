<html>
<head>
<meta charset="utf-8">
<title>php52</title>
</head>


<body>
<?php
  $str1 = "I like yoga. " ;
  $str2 = str_replace("yoga","spa","$str1") ; //("yoga","spa",$str1)の"yoga"は置換前の文字列である。"spa"は置換後の文字列である。$str1は置換対象となる文字列//
print "<BR>\n";
print $str1 ;
print "<BR>\n";
print $str2 ;
print "<BR>\n";
print "//p111//";

?>
</body>
</html>


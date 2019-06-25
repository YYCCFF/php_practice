<html>
<head>
<meta charset="utf-8">
<title>php53</title>
</head>


<body>
<?php
  $str = "I like yoga and hiphop.";
  $sports = array("yoga","hiphop");
  
  $beauty = array("spa","sauna");
  $newstr = str_replace($sports,$beauty,$str); //str_replace()関数では配列で一括置換することもできる//
  
  print $str;
  print "<BR>\n";
  print $newstr;
  print "<BR>\n";
  
print "//p111//";
?>
</body>
</html>


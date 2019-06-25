<html>
<head>
<meta charset="utf-8">
<title>php55</title>
</head>


<body>
<?php
  $str = "PHP\nSQLite\n";
  $new_str = nl2br($str);  //nl2br()はnew line to breakの略である。lはLであるため注意//
  
  print $str;  //「PHP SQLite」と出力される//
  print "<BR>\n";
  print $new_str; //「PHP」と「SQLite」が改行されて出力される//
  
print "<BR>\n";
print "//p112//";

?>
</body>
</html>

